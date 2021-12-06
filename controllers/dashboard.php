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


        public function getProduct()
        {
            $id = $_GET['id'];
            if(isset($id))
            {
                $product = $this->model->get($id);
                if(isset($product))
                {
                    $this->vista->data+= ['product'=> $product];
                }
            }
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
            $str_replaces = ['%img', '%name', '%description', '%price', '%code'];
            $html = 
            '<!-- product -->
                <div class="product">
                    <div class="product-img d-flex justify-content-center">
                        <img class="img-fluid rounded p-1" src="'.constant("URL").'%img" alt="%name" style="height: 15rem; width: auto;">
                    </div>
                    <div class="product-body">
                        <h3 class="product-name"><a href="#">%name</a></h3>
                        <p class="product-category">%description</p>
                        <h4 class="product-price">$%price</h4>
                        <a class="btn add-to-cart-btn pt-2" href="' .constant('URL'). 'producto/getProduct?id=%code"></i>Ver producto</a>
                    </div>
                    <div class="add-to-cart m-1">
                        <a class="btn add-to-cart-btn pt-2" href="https://api.whatsapp.com/send/?phone=573145249244&text=Hola+quiero+informaci%C3%B3n+del+producto+&app_absent=0"><i class="fa fa-shopping-cart"></i>Más Info</a>
                    </div>
                </div>
            <!-- /product -->';
            
            $current_page = $_GET['page'];
            
            $pages = $this->setPagination($current_page);
            $this->vista->data+=['pagination'=>$pages];
            $this->vista->data+=['current_page' => $current_page];
            
            

            if(!empty($current_page) || $current_page!=null)
            {
                $order = ($_GET['order']!='')?$_GET['order']:'name';
                $this->vista->data+=['order' => $order];
                $items = $this->model->getByRange($current_page, Dashboard::$ITEMS_PER_PAGE, $order);



                foreach($items as $item)
                {
                    $aux = $html;
                    $code = array_shift($item);
                    $img = $this->getProductImage($code);

                    $values = $item;
            

                    array_unshift($values, $img);

                    $aux = str_replace('%code', $code, $aux);
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