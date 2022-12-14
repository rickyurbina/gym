<?php

    $usuario = $_GET["idEditar"];
    $busca = mdlSocios::mdlBuscaPrecio($usuario, "precios");

?>

<div class="page-header">
    <h4 class="page-title">Actualizar Informacion de Costos</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=userList">Administración de Costos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</div>
<div class="row ">
    <div class="col-lg-8">
        <form class="card" method="POST">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-sm-5 col-md-5">
                        <div class="form-group">
                            <label class="form-label">Categoria</label>
                            <input type="text" class="form-control" name="categoria" placeholder="Juan" value="<?php echo $busca['categoria']; ?>" >
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Costo Mensual</label>
                            <input type="text" class="form-control" name="costo" placeholder="No use signos  $ , ." value="<?php echo $busca['costo']; ?>">
                            <input type="text" class="form-control" name="id" value="<?php echo $busca['id']; ?>" hidden>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" name="btnCancelar" id="login" class="btn btn-warning">Actualizar</button>
                <button type="submit" name="btnActualiza" id="login" class="btn btn-primary">Actualizar</button>
            </div>
            <?php
                $registro = new socios();
                $registro -> ctrActualizaPrecio();
            ?>
        </form>
    </div>

</div>