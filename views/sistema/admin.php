<?php require_once 'core/view.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="px-4 py-4">
    <div class="card px-4 py-4">
        <h1 style="text-align: center;">Actualizar Datos</h1>
    <form class="row g-3" action="<?=constant('URL')?>admin/updateInfo" method="POST" id="register">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nombres</label>
          <input type="text" class="form-control" id="fname" name="fname" placeholder="Nombres..." value="<?php echo $this->data['current_user'][':first_name'];?>">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Apeliidos</label>
          <input type="text" class="form-control" id="lname" name="lname" placeholder="Apeliidos..." value="<?php echo $this->data['current_user'][':last_name'];?>">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Correo Electronico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico..." value="<?php echo $this->data['current_user'][':email'];?>">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Numero de Telefono</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Numero de Telefono..." value="<?php echo $this->data['current_user'][':phone'];?>">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Usuario..." value="<?php echo $this->data['current_user'][':username'];?>">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña..." value="<?php echo $this->data['current_user'][':pass'];?>">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Repetir Contraseña</label>
          <input type="password" class="form-control" id="vpassword" name="vpassword" placeholder="Contraseña...">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-secondary">Actualizar Datos</button>
        </div>
      </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>