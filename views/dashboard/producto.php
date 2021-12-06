<?php require_once 'core/view.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->data['product']['name']; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= constant('URL') ?>plugins/bootstrap/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= constant('URL') ?>plugins/bootstrap/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= constant('URL') ?>plugins/bootstrap/css/style.css">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $this->data['product']['name']; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">E-commerce</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"><?php echo $this->data['product']['name']; ?></h3>
              <div class="col-12">
                <img src="<?php echo constant('URL').''.$this->data['product']['img']; ?>" class="product-image p-5 " alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="site-title"><?php echo $this->data['product']['name']; ?></h3>
              <p><?php echo $this->data['product']['description']; ?></p>

              <hr>

              <div class="py-2 px-3 mt-4" style="background-color: #00D6BF; -moz-border-radius: 7px; -webkit-border-radius: 7px; color: black;">
                <h2 class="mb-0">
                <?php echo $this->data['product']['price']; ?>
                </h2>
                <h4 class="mt-0">
                  <small>Ex Tax: <?php echo $this->data['product']['price']; ?> </small>
                </h4>
              </div>

              <div class="py-4">
                <h4 class="site-title">Descripcion/Caracteristicas</h3>
              <p class="site-title"><?php echo $this->data['product']['description']; ?></p>
              </div>

              <div class="site-title" align="center">
                <img src="img/logo 2p.png" alt="logo">   
              </div><!-- .site-title -->
              <div style="position: relative;" class="buy-tickets">
                <div class="mt-4 site-title">
                  <div style="float: left; margin: 10px; border-color: black;" class="btn dark-purple">
                    Añadir al carrito
                  </div>
                </div>
  
                <div class="mt-4 site-title">
                  <div class="btn dark-purple" style="background-color: rgb(10, 179, 60); color: black; border-color: black; float: left; position: absolute; margin-top: 10px;">
                    Informacion del producto
                  </div>
                </div>
              </div>
              
              
          

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= constant('URL') ?>plugins/bootstrap/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= constant('URL') ?>plugins/bootstrap/js/bootstrap2.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= constant('URL') ?>plugins/bootstrap/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= constant('URL') ?>plugins/bootstrap/js/demo.js"></script>
</body>
</html>
