<?php require_once 'core/view.php' ?>
<?php include_once 'header.php' ?>


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Mis Clientes</h3>
            </div>

        </div>
        <div class="content-body">

            <section id="global-settings" class="card">
                <div class="card-content">
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Rol</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                        for ($i=0; $i < count($this->data['clientes']); $i++) { 
                                            echo $this->data['clientes'][$i];
                                        }
                                    
                                    ?>
                                </tbody>
                            </table>
                        </div>










                        <?php include_once 'footer.php' ?>