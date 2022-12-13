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
                            <input type="text" class="form-control" name="categoria" placeholder="Individual, Familia, Especial, etc " required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Costo Mensual</label>
                            <input type="text" class="form-control" name="costo" placeholder="no agregar signos $ , ." required>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            <?php
                $registro = new socios();
                $registro -> ctrRegistraPrecio();
            ?>
        </form>
    </div>

</div>