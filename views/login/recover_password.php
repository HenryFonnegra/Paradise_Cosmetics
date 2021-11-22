<?php require_once 'core/view.php' ?>


<html>


<div>
    <form action="<?=constant('URL')?>recover_password/sendCode" method="POST">
        <label for="email">Escriba el correo electrónico con el que se registró: </label>
        <input type="email" name="email" id="email">
        <button type="submit">Enviar</button>

    </form>

    <form action="<?=constant('URL')?>recover_password/sendCode" method="POST">
        <label for="email">Ponga el código que le enviamos: </label>
        <input type="email" name="email" id="email">
        <button type="submit">Verificar</button>

    </form>

</div>

</html>