<?php

    class Clientes extends Controller{


        private static $VIEW_NAME = 'sistema/clientes';
        private static $MODEL_NAME = 'cliente';

        function __construct()
        {
            parent::__construct(Clientes::$VIEW_NAME, Clientes::$MODEL_NAME);

        }


        public function getClientes()
        {
            $this->loadModel();

            $array_replace = ['%code', '%nombres', '%apellidos', '%usuario', '%email','%telefono'];
            $html_response = 
            '<tr>
                <td>%code</td>
                <td>%nombres</td>
                <td>%apellidos</td>
                <td>%usuario</td>
                <td>%email</td>
                <td>%telefono</td>
                <td>%rol</td>
            </tr>';

                  // <td>
                //     <a class="btn btn-danger text-white modify" data-toggle="modal" data-target="#delete-modal" onclick="Delete(this)" >Eliminar</a>
                // </td>

            $clientes = $this->model->getAll();
            $formated_clientes = [];

            if(!empty($clientes) || $clientes != null)
            {
                for ($i=0; $i < count($clientes) ; $i++) {
                    $aux = $html_response;

                    $aux = str_replace($array_replace ,$clientes[$i], $aux);
                    $aux = str_replace('%rol' ,$clientes[$i]['rol'], $aux);
                    array_push($formated_clientes,$aux);
                }

                error_log('Clientess : getClientes-> Clientes cargados correctamente');
                $this->vista->data+=['clientes'=>$formated_clientes];
            }else{
                error_log('Clientess : getClientes-> No se pudieron cargar los Clientes');
            }


            //array_push($this->vista->data, ['products'=>$formated_products]);
            


        }


        public function getCliente($id)
        {
            $this->loadModel();
            $clientes = [];

            $id = $_GET['modify_id'];

            if(empty($id)){

                error_log('Clientess: getClientes-> Parámetro ID de cliente vacío.');

            }else{
                $cliente = $this->model->get($id);
            }

            if($cliente != null){
                $this->vista->data+=['cliente'=>$cliente];
                error_log('Clientess : getCliente-> Cliente cargado en el modal correctamente.');
            }

        }

        

    }
