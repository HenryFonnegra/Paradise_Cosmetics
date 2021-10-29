<?php require_once 'core/view.php' ?>
<?php include_once 'header.php' ?>


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Agregar Nuevo Producto</h3>
            </div>

        </div>
        <div class="content-body">

            <section id="global-settings" class="card">
                <div class="card-content">
                    <div class="card-body">

                        <div class="d-flex justify-content-start col-md-8 col-12">
                            <a href="<?= constant('URL') ?>productos/getProducts" class="btn btn-primary btn-min-width mr-1 mb-1">Regresar</a>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <form action="<?= constant('URL') ?>agregar_producto/saveProduct" name="myForm" method="POST" enctype="multipart/form-data">

                                <fieldset class="form-group">
                                    <label for="codigo">Código del producto: </label>
                                    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Por ejemplo P0076">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="producto">Nombre del producto: </label>
                                    <input type="text" class="form-control" name="producto" id="producto" placeholder="Crema para uñas nivea" />
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea name="comentarios" class="form-control" rows="10%" cols="47%" placeholder="Escribe algo con respecto al producto"></textarea>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="precio">Precio</label>
                                    <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio del Producto" />
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="cantidad">Cantidad</label>
                                    <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad del producto" />
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="foto">Imagen: </label>
                                    <input type="file" class="form-control-file" name="foto" id="foto" />
                                </fieldset>

                                <input type="submit" class="form-control btn-primary text-white" value="Crear Producto" class="btn_save">

                            </form>
                        </div>

                    </div>
                </div>
            </section>






            <?php include_once 'footer.php' ?>