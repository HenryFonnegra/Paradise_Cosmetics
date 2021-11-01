<?php

    class Dashboard extends Controller{

        private static $VIEW_NAME = 'dashboard/index';
        private static $MODEL_NAME = 'product';
        private static $ITEMS_PER_PAGE = 4;
        private $session;

        function __construct()
        {
            parent::__construct(Dashboard::$VIEW_NAME, Dashboard::$MODEL_NAME);
            $this->session = new Session(Dashboard::$MODEL_NAME);
        }

        public function logOut(){

            $this->session->closeSession('');
            $this->redirect('', ['success' => 'UU789978YOB976SB']);

        }
        


        private function setPagination($current_page)
        {
            $this->loadModel();

            $pages_number = ceil(count($this->model->getAll())/Dashboard::$ITEMS_PER_PAGE);
            
            if($current_page>1 && $current_page<$pages_number)
            {
                $this->vista->data+=['before'=>$current_page-1];
                $this->vista->data+=['after'=>$current_page+1];
            }else if($current_page == 1 && $pages_number==1)
            {
                $this->vista->data+=['before'=>1];
                $this->vista->data+=['after'=>1];
                
            }else if($current_page == 1 && $pages_number>$current_page)
            {
                $this->vista->data+=['before'=>$current_page];
                $this->vista->data+=['after'=>$current_page+1];
                
            }else if($current_page==$pages_number && $current_page!=1)
            {
                $this->vista->data+=['before'=>$current_page-1];
                $this->vista->data+=['after'=>$current_page];
            }

            return $pages_number;


        }

        public function getProducts()
        {
            $this->loadModel();
            $formated_products = [];
            $str_replaces = ['%img', '%name', '%description', '%price'];
            $html = 
            '<!-- product -->
                <div class="product">
                    <div class="product-img d-flex justify-content-center">
                        <img class="img-fluid rounded p-2" src="'.constant("URL").'%img" alt="%name" style="height: 18rem; width: auto;">
                    </div>
                    <div class="product-body">
                        <h3 class="product-name"><a href="#">%name</a></h3>
                        <p class="product-category">%description</p>
                        <h4 class="product-price">$%price</h4>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>
                </div>
            <!-- /product -->';
            
            $current_page = $_GET['page'];
            
            $pages = $this->setPagination($current_page);
            $this->vista->data+=['pagination'=>$pages];
            
            


            

            if(!empty($current_page) || $current_page!=null)
            {
                $items = $this->model->getByRange($current_page, Dashboard::$ITEMS_PER_PAGE);


                foreach($items as $item)
                {
                    $aux = $html;
                    $img = $this->getProductImage(array_shift($item));

                    $values = $item;

                    array_unshift($values, $img);

                    $aux = str_replace($str_replaces, $values, $aux);
                    array_push($formated_products, $aux);

                }

                $this->vista->data+=['products'=>$formated_products];

            }


        }


        private function getProductImage($id)
        {
            $ext = ['jpg', 'png', 'jpeg'];
            $base_path = 'plugins/img/uploads';

            for ($i=0; $i < count($ext); $i++) { 
                if(file_exists("$base_path/$id.".$ext[$i]))return "$base_path/$id.".$ext[$i];
            }

            return "none";
        }






    }



?>