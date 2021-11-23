<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'plugins/PHPMailer/Exception.php';
require 'plugins/PHPMailer/PHPMailer.php';
require 'plugins/PHPMailer/SMTP.php';


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
        $mail = new PHPMailer(true);

        try {

            $this->session = new Session('login');
            $codigo = rand(100000, 999999);
            $to = $_POST['email'];
            $this->session->assignParamSession("codigo", $codigo);
            $this->session->assignParamSession("email", $to);

            //Server settings 
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                     //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'dominioprueba01@gmail.com';                     //SMTP username
            $mail->Password   = 'Dominio_01';                               //SMTP password
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->addAddress($to); 
            $mail->addAddress($to, 'Joe User');  

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Codigo de verificacion...';
            $mail->Body    = 'El código de verificación que usted solicitó es <b>' .$codigo. '</b>';
            $mail->AltBody = 'Si no puede visualizar bien este correo, comuníquese con el administrador';

            $mail->send();
            error_log("Recover_Password ->sendCode : 'Message has been sent'");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            error_log("Recover_Password ->sendCode : Error al enviar el correo");
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
