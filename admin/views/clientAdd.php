<div class="page-header">
    <h4 class="page-title">Registro de Cliente</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Users Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">User Add</li>
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
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres" placeholder="Juan">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" placeholder="Perez García">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-5">
                        <div class="form-group">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" placeholder="6141234455">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">Fecha Nacimiento</label>
                            <input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" name="fechaNacimiento">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="form-group m-0">
                            <label class="form-label" style="margin-left:1px">Fecha de Nacimiento</label>
                            <div class="row gutters-xs">
                                <div class="col-md-4 col-sm-12">
                                    <select name="dateDia" class="form-control">
                                        <option value="">Día</option>
                                        <?php
                                        for ($x = 1; $x <= 31; $x++) {
                                            echo '<option value="' .  $x . '">' .  $x . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <select name="dateMes" class="form-control">
                                        <option value="">Mes</option>
                                        <?php
                                        for ($x = 1; $x <= 12; $x++) {
                                            echo '<option value="' .  $x . '">' .  $x . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <select name="dateAnio" class="form-control">
                                        <option value="">Año</option>
                                        <?php
                                        $a = date("Y");
                                        for ($x = 0; $x <= 100; $x++) {
                                            echo '<option value="' . $a - $x . '">' . $a - $x . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Tipo Cliente</label>
                                    <select class="form-control custom-select select2" name="tipoCliente">
                                        <option value="1">Socio</option>
                                        <option value="2">Estudiante</option>
                                        <option value="3">Referido</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="card-footer text-right">
                        <button type="submit" id="login" class="btn btn-primary">Registrar</button>
                    </div>
                    <?php
                    $registro = new clientes();
                    $registro->ctrRegistra();
                    ?>
        </form>
    </div>

</div>