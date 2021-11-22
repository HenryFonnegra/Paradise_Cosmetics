<?php
    class Recover_Password extends Controller{

        private static $VIEW_NAME = 'login/recover_password';
        private static $MODEL_NAME = '';
        private $session;


        function __construct()
        {
            parent::__construct(Recover_Password::$VIEW_NAME, Recover_Password::$MODEL_NAME);

        }

        public function sendCode()
        {
            $server_mail = "juanperez221perez@gmail.com";
            $this->session = new Session('login');
            $codigo = rand(100000, 999999);

            $this->session->assignParamSession("codigo", $codigo);

            $to = $_POST['email'];
            $message = "El código para recuperar su contraseña es: <b>$codigo</b>";
            mail($to, "Recuperar Contraseña", $message, "From:" .$server_mail);
            print_r($_SESSION);
        }


    }


?>