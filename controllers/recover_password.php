<?php
class Recover_Password extends Controller
{

    private static $VIEW_NAME = 'login/recover_password';
    private static $MODEL_NAME = 'user';
    protected $model;
    private $session;


    function __construct()
    {
        parent::__construct(Recover_Password::$VIEW_NAME, Recover_Password::$MODEL_NAME);
        $this->model = new UserModel();
    }

    public function sendCode()
    {
        $server_mail = "juanperez221perez@gmail.com";
        $this->session = new Session('login');
        $codigo = rand(100000, 999999);
        $to = $_POST['email'];

        if ($this->model->getByEmail($to) == null) return false;
        else {

            $this->session->assignParamSession("codigo", $codigo);
            $this->session->assignParamSession("email", $to);


            $message = "El código para recuperar su contraseña es: <b>$codigo</b>";
            mail($to, "Recuperar Contraseña", $message, "From:" . $server_mail);

            print_r($_SESSION);
        }
    }


    public function verifyCode()
    {
        $user_code = $_SESSION['codigo'];
        $code_passed = $_POST['code'];

        if (isset($code_passed) && isset($user_code) && $code_passed != '' && $user_code != '') {
            if ($code_passed == $user_code) $this->redirect('change_password');
            else return false;
        } else return false;
    }

}
