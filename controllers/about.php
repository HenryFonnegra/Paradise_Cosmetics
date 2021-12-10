<?php
    class about extends Controller{
        private static $viewName = 'about/index';
        private static $modelName = '';

        function __construct()
        {
            error_log("Contact-> __construct : Inicio del controlador About");
            parent::__construct(about::$viewName, about::$modelName); 
        }
    }


?>