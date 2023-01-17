<?php
if (isset($_GET["grupo"]))
    $grupo = $_GET["grupo"];
else
    $grupo = "";
?>

<div class="page-header">
    <h4 class="page-title">Lista de Socios</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Administración de Socios</a></li>
        <li class="breadcrumb-item active" aria-current="page">List</li>
    </ol>
</div>
<br>
<div class="col-md-3">
    <select class="form-control custom-select select2" name="grupos" onchange=recarga(this.value)>
        <option value="">Selecciona...</option>
        <?php
        $controllerSocios = new socios();
        $controllerSocios->ctrSelectGrupos();
        ?>
    </select>
</div>
<br>


<?php


if (empty($grupo) || $grupo == "") {

    echo '<h3 align="center"> Seleccione un grupo</h3>';
}
else {

    ?>
<div class="col-md-12">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Pase de Lista</div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="hover table-bordered border-top-0 border-bottom-0" style="text-align: center;">
                        <thead>
                            <td>Opciones</td>
                            <td>Nombre</td>
                            <td>Membresía</td>
                            <td>Teléfono</td>
                            <td>Grupo</td>
                        </thead>
                        <tbody>
                            <?php

                                $lista = new socios();
                                 $lista->ctrListaAsistencia($grupo);
                            
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Opciones</td>
                                <td>Nombre</td>
                                <td>Membresía</td>
                                <td>Teléfono</td>
                                <td>Grupo</td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php 
}
?>


<script>
    function recarga(value) {
        console.log(value);
        window.location.href = "index.php?page=tomaAsistencia&grupo=" + value;
    }
</script>