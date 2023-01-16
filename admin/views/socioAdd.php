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
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres" placeholder="Juan" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" placeholder="Perez García" required>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-5">
                        <div class="form-group">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" maxlength="10" placeholder="6141234455" required>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Contacto</label>
                            <input type="text" class="form-control" name="contacto" placeholder="Persona a quien contactar" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Grupo</label>
                            <select class="form-control custom-select select2" name="nombreG">
                                <?php
                                $controllerGrupo = new socios();
                                $controllerGrupo->ctrSelectGrupos();
                                ?>
                            </select>
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
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Tipo Socio</label>
                            <select class="form-control custom-select select2" name="tipoSocio">
                                <?php
                                $controllerSocios = new socios();
                                $controllerSocios->ctrSelectPrecios();
                                ?>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            <?php
            $registro = new socios();
            $registro->ctrRegistra();
            ?>
        </form>
    </div>

</div>