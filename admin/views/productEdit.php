<?php

    $producto = $_GET["idEditar"];
    $busca = mdlProductos::mdlBusca($producto, "productos");

?>

<div class="page-header">
    <h4 class="page-title">Actualizar Informacion de Producto</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=userList">Product Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product Edit</li>
    </ol>
</div>
<div class="row ">
    <div class="col-lg-8">
        <form class="card" method="POST">
            <div class="card-header">
                <h3 class="card-title">Información del Producto</h3>

            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-sm-5 col-md-5">
                    <div class="form-group">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre del Producto" value="<?php echo $busca['nombre']; ?>">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Marca</label>
                        <input type="text" class="form-control" name="marca" placeholder="Marca" value="<?php echo $busca['marca']; ?>">
                    </div>
                </div>

                <div class="col-sm-6 col-md-5">
                    <div class="form-group">
                        <label class="form-label">Contenido</label>
                        <input type="text" class="form-control" name="contenido" placeholder="Contenido" value="<?php echo $busca['contenido']; ?>">
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Costo</label>
                        <input type="number" class="form-control" name="costo" placeholder="Sin signos  $ , ' " value="<?php echo $busca['costo']; ?>">
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Precio al Púplico</label>
                        <input type="number" class="form-control" name="precioPublico" placeholder="Sin signos  $ , ' " value="<?php echo $busca['precioPublico']; ?>">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label class="form-label">stock</label>
                        <input class="form-control" type="number" name="stock" value="<?php echo $busca['stock']; ?>">
                    </div>
                </div>
                
                <div class="col-lg-6 col-sm-12"><p></p>
                    <label class="form-label">Imagen Actual</label>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label class="form-label">Nueva Imagen</label>
                    <input type="file" class="dropify" name="imagen" data-height="180" value="<?php echo $busca['imagen']; ?>" />
                </div>


                </div>
            </div>

            <div class="card-footer text-right">
                <input type="text" name="productId" class="form-control" value="<?php echo $producto; ?>" hidden />
                <a href="index.php?page=userList"><button name="btnCancel" class="btn btn-warning">Cancelar</button></a>
                <button type="submit" name="btnActualiza" id="login" class="btn btn-primary">Actualizar</button>
            </div>

            <?php
                $registro = new productos();
                $registro -> ctrActualiza();
            ?>
        </form>
    </div>

</div>