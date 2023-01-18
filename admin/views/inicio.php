<div class="page-header">
    <h4 class="page-title">Inicio</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Inicio</li>
    </ol>
</div>
<div class="row">
	<?php 
		$mensualidades = new socios();
		$mensualidades -> ctrRepoMensualidades();
		$ventas = new VentasController();
		$ventas->ctrRepoVentasProductos();
	?>
</div>

<div class="row">
	<div class="col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Reporte de Pagos</div>
				<div class="card-options"> <a class="btn btn-vk" href="index.php?page=tomaAsistencia">Asistencia</a></div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example2" class="hover table-bordered border-top-0 border-bottom-0" style="text-align: center;">
						<thead>
							<td>Pagar</td>	
							<td>Nombre</td>
							<td>Dias</td>
							<td>Contacto</td>
							<td>Grupo</td>
							<td>Teléfono</td>
						</thead>
						<tbody>
							<?php
								$lista = new socios();
								$lista -> ctrListaSociosInicio();
								$lista -> ctrBorrarSocio();
							?>
							
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-xl-8 col-lg-12 col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Reporte Anual</h3>
			</div>
			<div class="card-body">
				<div class="chart-wrapper">
					<canvas id="sales-status" class="chart-dropshadow h-280"></canvas>
				</div>
			</div>
		</div>
	</div>

	<?php 
		$mensualidades = new socios();
		$mensualidades -> ctrCumpleanios();
	?>
	

</div>


