<?php

    class Producto extends Controller{

        private static $VIEW_NAME = 'dashboard/producto';
        private static $MODEL_NAME = 'product';

        function __construct()
        {
            parent::__construct(Producto::$VIEW_NAME, Producto::$MODEL_NAME);
            //$this->session = new Session(Producto::$MODEL_NAME);
        }

        public function getProduct()
        {
            $this->loadModel();
            $id = $_GET['id'];
            if(isset($id))
            {
                $product = $this->model->get($id);
                if(isset($product))
                {
                    $img = $this->getProductImage($id);
                    $product['img'] = $img;
                    $this->vista->data+= ['product'=> $product];
                }
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