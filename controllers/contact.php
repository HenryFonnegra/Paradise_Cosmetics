<?php
    class Contact extends Controller{
        private static $viewName = 'contact/index';
        private static $modelName = '';

        function __construct()
        {
            error_log("Contact-> __construct : Inicio del controlador Contact");
            parent::__construct(Contact::$viewName, Contact::$modelName);
        }
    }


?>