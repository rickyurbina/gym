<br>

<div class="col">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Adeudos de Productos</h3>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="tablaVentas" class="hover table-bordered border-top-0 border-bottom-0" style="text-align: center;">
          <thead>
            <tr>
              <th>Abonar</th>
              <th>Cliente</th>
              <th>Productos</th>
              <th>Total</th>
              <th>Debe</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $controllerVentas = new VentasController();
              $controllerVentas -> ctrListaAdeudos();
            ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>
</div>


<!-- Message Modal -->
<div class="modal fade" id="abonar" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example-Modal3">Registrar Abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST"> 
                <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Cliente:</label>
                            <input type="text" class="form-control" id="user_name" value="">
                            <input type="text" class="form-control" id="user_id" name="idCliente" value="" hidden>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Cantidad:</label>
                            <input type="text" class="form-control" id="cantidad" name="cantidad" value="0">
                        </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-indigo">Abonar</button>
                </div>
            </form>
                
        </div>
    </div>
</div>

<?php
    if (isset($_POST['cantidad'])){
        $registro = new VentasController();
        $registro->ctrAgregaAbono();
    } 
?>
<script>
    $('#abonar').on('show.bs.modal', function(e) {
        var userid = $(e.relatedTarget).data('userid');
        var username = $(e.relatedTarget).data('username');
        document.querySelector('#user_id').value = userid;
        document.querySelector('#user_name').value = username;
    });
</script>