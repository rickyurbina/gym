<div class="page-header">
	<h4 class="page-title">Product List</h4>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Product Admin</a></li>
		<li class="breadcrumb-item active" aria-current="page">Product List</li>
	</ol>
</div>

<div class="col-md-12 col-lg-12">
	<div class="card">
		<div class="card-header">
			<div class="card-title">Productos Registrados</div>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="example2" class="hover table-bordered border-top-0 border-bottom-0" style="text-align: center;">
					<thead>
						<th>Nombre</th>
						<th>Marca</th>
						<th>Contenido</th>
						<th>Precio Publico</th>
						<th>Stock</th>
						<th>Opciones</th>
					</thead>
					<tbody>
						<?php
							$lista = new productos();
							$lista -> ctrListaProductos();
							$lista -> ctrBorrarProducto();
						?>
						
					</tbody>
					<tfoot>
						<tr>
							<th>Nombre</th>
							<th>Marca</th>
							<th>Contenido</th>
							<th>Precio Público</th>
							<th>Stock</th>
							<th>Opciones</th>
						</tr>
					</tfoot>
				</table>

			</div>
		</div>
	</div>
</div>