<div class="page-header">
    <h4 class="page-title">Venta de productos</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Administración de ventas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add</li>
    </ol>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
        <form class="card" method="POST">
            <div class="card-header">
                <h3 class="card-title">Ventas</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Productos:</label>
                            <select name="selectProductos" id="selectProductos" class="form-control" onchange="agregarProducto(event)">
                                <option value="">Seleccionar productos</option>
                                <?php
                                    $controllerProductos = new productos();
                                    $controllerProductos->ctrSelectProductos();
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <label for="form-label">Lista de productos:</label>
                            <div class="listaProductos" id="listaProductos">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Cliente:</label>
                            <select name="selectCliente" id="selectCliente" class="form-control">
                                <option value="">Seleccionar cliente</option>
                                <?php
                                    $controllerSocios = new socios();
                                    $controllerSocios -> ctrSelectSocios();
                                ?>
                            </select>
                            <br>
                            <!-- <button class="btn btn-secondary" type="button" id="toggleButton">Agregar cliente</button> -->
                            <br>
                            <br>
                            <!-- <div id="containerAgregar" class="row containerAgregar">
                                <div class="col">
                                    <h4>Agregar cliente</h4>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Nombres:</label>
                                                <input type="text" name="nombresCliente" id="nombresCliente" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Apellidos:</label>
                                                <input type="text" name="apellidosCliente" id="apellidosCliente" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Teléfono:</label>
                                                <input type="text" name="telefonoCliente" id="telefonoCliente" class="form-control" maxlength="10" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Contacto:</label>
                                                <input type="email" name="correoCliente" id="correoCliente" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Fecha de nacimiento:</label>
                                                <input type="date" name="fechaCliente" id="fechaCliente" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Tipo de socio:</label>

                                                <select name="tipoCliente" id="tipoCliente" class="form-control">
                                                    <?php
                                                        $controllerSocios = new socios();
                                                        $controllerSocios -> ctrSelectPrecios();
                                                    ?>                                
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3" style="display: flex; justify-content: end">
                            <input type="email" name="correoCliente" id="correoCliente" class="form-control" required>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3" style="display: flex; justify-content: end">
                        <p id="total" style="font-size: 1.5rem; font-weight: 900">Total: $0</p>
                    </div>
                </div>
            </div>

            <input type="text" id="lista" name="lista">
            <input type="number" id="totalInput" name="totalInput">
            <div class="card-footer text-right">
                <button type="submit" id="login" class="btn btn-primary">Registrar</button>
            </div>
            <?php
                $controllerVentas = new VentasController();
                $controllerVentas -> ctrAgregarVenta();
            ?>
        </form>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body ">
                    <form method="POST">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Cliente</label>
                                <select class="form-control mb-5" name="idCliente" id="idCliente">
                                    <?php //$clientes = new clientes(); //$clientes -> ctlListClientes();?>
                                </select>
                                <label class="form-label">Descuento General (%)</label>
                                <input type="text" class="form-control mb-5" name="descuento" id="descuento" value="0" onchange = "calculaDescuento(this.value)">
                                
                                <label class="form-label">Pago con :</label>
                                <select class="form-control" name="tipoPago" id="idCliente">
                                    <option value="E">Efectivo</option>
                                    <option value="T">Tarjeta Credito/Debito</option>
                                    <option value="O">Otro</option>
                                </select>

                                <input type="text" class="form-control" name="pedidoNum" id="pedidoNum" value="<?php echo $siguiente; ?>" hidden>
                                <input type="text" class="form-control" name="concepto" id="concepto" value="venta" hidden>
                                <input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" name="fechaMovimiento" id="fechaMovimiento" hidden>
                                <input type="text" class="form-control" name="pedidoBD" id="pedidoBD" hidden >
                                <input type="text" class="form-control" name="totalPedidoBD" id="totalPedidoBD" hidden>
                                <input type="text" class="form-control" name="valorDescuento" id="valorDescuento" hidden>
                                <input type="text" class="form-control" name="pedidoNeto" id="pedidoNeto" hidden>

                            </div>
                        </div>
                        <div class="card-options"><h3 id="totalPedido">$</h3> </div>
                            
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-blue col-12" id="btnCobrar" name="regPedido">Cobrar</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

</div>

<script>
    const listaProductos = [];

    function agregarProducto(event) {
        if (event.target.value) {
            const idProducto = event.target.value;
        
            let yaAgregado = false;

            for (let i = 0; i < listaProductos.length; i++) {
                if (idProducto === listaProductos[i].idProducto) {
                    yaAgregado = true;
                }
            }

            if (!yaAgregado) {
                const index = event.target.selectedIndex;
                const texto = event.target[index].innerText;


                const precio = Number.parseInt(event.target[index].getAttribute('precio'));

                listaProductos.push({
                    idProducto: idProducto,
                    nombreProducto: texto,
                    cantidad: 1,
                    precio: precio
                });

                document.getElementById('lista').value = JSON.stringify(listaProductos);
            }
            event.target.value = "";
            dibujarLista();
            calcularTotal();
        }
    }
    
    function dibujarLista() {
        const divLista = document.getElementById('listaProductos');
        divLista.innerHTML = '';
        let html = '';
        for (let i = 0; i < listaProductos.length; i++) {
            const producto = listaProductos[i];

            html += 
            `<div class="producto">
                ${producto.nombreProducto}
                <input class="form-control" placeholder="Cantidad" value="${producto.cantidad}" onkeyup="cambiarCantidad(event, ${i})" onchange="cambiarCantidad(event, ${i})" min="1" type="number">
                <button type="button" onclick="removerProducto(${i})"><i class="fa fa-trash"></i></button>
            </div>`;
        }

        divLista.innerHTML = html;
    }

    function cambiarCantidad(event, index) {
        if (event.target.value < 1) {
            event.target.value = 1;
        }
        listaProductos[index].cantidad = event.target.value;
        document.getElementById('listaProductos').value = JSON.stringify(listaProductos);
        calcularTotal();

    }

    function removerProducto(index) {
        listaProductos.splice(index, 1);
        dibujarLista();
        document.getElementById('listaProductos').value = JSON.stringify(listaProductos);
        calcularTotal();
    }

    document.getElementById('toggleButton').addEventListener('click', toggleAgregarCliente);

    let isVisible = false;

    function toggleAgregarCliente() {   
        clearForm();
        isVisible = !isVisible;

        const container = document.getElementById('containerAgregar');

        if (isVisible) {
            this.innerText = 'Cancelar';
            container.style.maxHeight = `${container.scrollHeight}px`;
        } else {
            this.innerText = 'Agregar cliente';
            container.style.maxHeight = null;
        }

        function clearForm() {
            document.getElementById('nombresCliente').value = '';
            document.getElementById('apellidosCliente').value = '';
            document.getElementById('telefonoCliente').value = '';
            document.getElementById('correoCliente').value = '';
            document.getElementById('fechaCliente').value = '';
            document.getElementById('tipoCliente').value = '1';
        }
    }

    let total = 0;

    function calcularTotal() {
        total = 0;
        for (let i = 0; i < listaProductos.length; i++) {
            total += listaProductos[i].precio * listaProductos[i].cantidad;
        }

        document.getElementById('total').innerText = `Total: $${total}`;
        document.getElementById('totalInput').value = total;
    }

</script>
