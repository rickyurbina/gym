<?php

    $idGrupo = $_GET["idEditar"];
    $busca = mdlSocios::mdlBuscaGrupo($grupo);

?>

<div class="page-header">
    <h4 class="page-title">Registro de Socios</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Administración de Socios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
    </ol>
</div>
<div class="row ">
    <div class="col-lg-8">
        <form class="card" method="POST">
            <div class="card-header">
                <h3 class="card-title">Información Personal</h3>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-sm-5 col-md-5">
                        <div class="form-group">
                            <label class="form-label">Categoria</label>
                            <input type="text" class="form-control" name="nombreG"  value="<?php echo $busca['nombreG']; ?>" required></input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary" name="btnActualiza">Actualizar</button>
            </div>
            <?php
            $registro = new socios();
            $registro->ctrActualizaGrupo($idGrupo);
            ?>
        </form>
    </div>

</div>