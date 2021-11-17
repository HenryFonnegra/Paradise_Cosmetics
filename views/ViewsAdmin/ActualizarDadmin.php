<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=constant('URL')?>plugins/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="px-4 py-4">
    <div class="card px-4 py-4">
        <h1 style="text-align: center;">Actualizar Datos</h1>
    <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Nombres</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Nombres...">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Apeliidos</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Apeliidos...">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Correo Electronico</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Correo Electronico...">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Numero de Telefono</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Numero de Telefono...">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="inputCity" placeholder="Usuario...">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Contraseña</label>
          <input type="text" class="form-control" id="inputCity" placeholder="Contraseña...">
        </div>
        <div class="col-12">
            <button type="button" class="btn btn-secondary">Actualizar Datos</button>
        </div>
      </form>
</div>
    <script src="<?=constant('URL')?>plugins/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>