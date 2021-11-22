<html>

    <form action="<?=constant('URL')?>change_password/changePass" method="POST">

        <label for="pass1">Escriba su nueva contraseña: </label>
        <input type="password" name="pass1" id="pass1" placeholder="***********">

        <label for="pass2">Confirme su nueva contraseña: </label>
        <input type="password" name="pass2" id="pass2" placeholder="***********">

        <button type="submit">Confirmar</button>

    </form>

</html>