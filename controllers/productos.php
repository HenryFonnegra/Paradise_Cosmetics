<?php

    class Productos extends Controller{


        private static $VIEW_NAME = 'sistema/productos';
        private static $MODEL_NAME = 'product';

        function __construct()
        {
            parent::__construct(Productos::$VIEW_NAME, Productos::$MODEL_NAME);

        }


        public function getProducts()
        {
            $this->loadModel();

            $array_replace = ['%code', '%name', '%description', '%price', '%amount'];
            $html_response = 
            '<div class="col-lg-4 col-md-12">
		    	<div class="card">
		    		<div class="card-body">
		    			<h4 class="card-title">%code</h4>
		    			<h6 class="card-subtitle text-muted"><b>%name</b></h6>
		    		</div>
		    		<img class="img-fluid rounded p-2" src="%img" alt="%name" style="height: 27rem; width: auto;">
		    		<div class="card-body">
		    			<p class="card-text text-center">%description</p>
                        <div class="row">
                            <div class="col col-md-6 text-center">
                                <p>Precio: $</p><b>%price</b>
                            </div>
                            <div class="col col-md-6 text-center">
                                <p>Cantidad: </p><b>%amount</b>
                            </div>
                        </div>
		    		</div>
		    		<div class="border-top-blue-grey border-top-lighten-5 text-muted d-flex justify-content-center pt-1">
                        <a class="btn btn-success btn-min-width mr-1 mb-1 text-white modify" data-toggle="modal" data-target="#editing-modal" onclick="Modify(this)">Actualizar</a>
                        <a class="btn btn-danger btn-min-width mr-1 mb-1 text-white delete" data-toggle="modal" data-target="#delete-modal" onclick="Delete(this)" >Eliminar</a>
		    		</div>
		    	</div>
		    </div>';

            $products = $this->model->getAll();
            $formated_products = [];

            if(!empty($products) || $products != null)
            {
                for ($i=0; $i < count($products) ; $i++) {
                    $img = $this->getImg($products[$i]['code']);
                    $aux = $html_response; 

                    $aux = str_replace('%img' ,$img, $aux);

                    $aux = str_replace($array_replace ,$products[$i], $aux);
                    array_push($formated_products,$aux);
                }

                error_log('Productos : getProducts-> Productos cargados correctamente');
                $this->vista->data+=['products'=>$formated_products];
            }else{
                error_log('Productos : getProducts-> No se pudieron cargar los productos');
            }


            //array_push($this->vista->data, ['products'=>$formated_products]);
            


        }


        public function getProduc($id)
        {
            $this->loadModel();
            $product = [];

            $id = $_GET['modify_id'];

            if(empty($id)){

                error_log('Productos : getProduct-> Parámetro ID de producto vacío.');

            }else{
                $product = $this->model->get($id);
            }

            if($product != null){
                $this->vista->data+=['product'=>$product];
                error_log('Productos : getProduct-> Producto cargado en el modal correctamente.');
            }

        }

        private function getImg($name)
        {

            $extensions = ['jpg', 'jpeg', 'png'];
            $path = "plugins/img/uploads/$name.";
            error_log("RUTA: $path");


            for ($i=0; $i < count($extensions) ; $i++) { 
                if(file_exists($path.$extensions[$i]))
                {
                    return constant('URL')."plugins/img/uploads/$name.".$extensions[$i];
                }
            }
            return null;

        }


    }
