<?php
    class Change_Password extends Controller{

        private static $VIEW_NAME = 'login/change_password';
        private static $MODEL_NAME = 'user';
        protected $model;
        private $session;


        function __construct()
        {
            parent::__construct(Change_Password::$VIEW_NAME, Change_Password::$MODEL_NAME);
            $this->model = new UserModel();
        }


        public function changePass()
        {
            $to = $_SESSION['email'];
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];

            $user = $this->model->getByEmail($to);


            if($pass1 == $pass2 && $user!=null)
            {
                unset($_SESSION);
                $user['pass'] = $pass1;
                if($this->model->update($user))$this->redirect('', ['success' => 'contraseña_actualizada']);
                else $this->redirect('', ['error'=> 'no_actualizada']);
            }else $this->redirect('change_password', ['error' => 'mismatched_password']);

            

        }


    }


?>