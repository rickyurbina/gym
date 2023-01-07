<?php
Class socios {

    public static function ctrRegistra(){
        if(isset($_POST["contacto"])){

            $original_date = $_POST["fechaNacimiento"];
            $timestamp = strtotime($original_date);
            $fechaNacimiento = date("Y-m-d", $timestamp);
            $fechaRegistro = date('Y-m-d');
        
            $datos = array("nombres" => $_POST["nombres"],
                           "apellidos" => $_POST["apellidos"],
                           "telefono" => $_POST["telefono"],
                           "contacto" => $_POST["contacto"],
                           "tipoSocio" => $_POST["tipoSocio"],
                           "fechaNacimiento" => $fechaNacimiento,
                           "fechaRegistro" => $fechaRegistro);

            $ingresa = mdlSocios::mdlRegistraSocio($datos);

            if ($ingresa == "ok"){

                    echo "<script>Swal.fire({
                        title: 'Registro Exitoso',
                        text: 'El nuevo socio ha sio registrado',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location='index.php?page=socioList'
                        }
                      })
                      </script>";
            }
            else{

                echo "<script>Swal.fire({
                    title: 'Error',
                    text: 'No se pudo guardar la información',
                    icon: 'danger',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?page=socioList'
                    }
                  })
                  </script>";
        }
            
            
        }
    }

    public static function ctrCumpleanios(){
        
        $cumples = mdlSocios::mdlCumples();
        echo'
        <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Cumpleaños del Mes</div>
                    </div>
                    <div class="card-body">
                        <div class="item3-medias">
                            
        ';

        foreach ($cumples as $cumple){
            $original_date = $cumple["fechaNacimiento"];
            $timestamp = strtotime($original_date);
            $fechaNacimiento = date("d-M", $timestamp);

        echo '
            <div class="media meida-md mt-0 pb-2">
                <div class="media-body">
                    <h6 class="media-heading font-weight-bold text-uppercase">'.$cumple["nombres"].' '.$cumple["apellidos"].'</h6>
                    <ul class="mb-0 item3-lists d-flex">
                        <li>
                            <i class="icon icon-calendar"></i>'.$fechaNacimiento.'
                        </li>
                    </ul>
                </div>
            </div><br>';

        }
        echo '
                </div>
            </div>
        </div>
        </div>
        ';
    }

    public static function ctrRepoMensualidades(){
        $mensualidades = mdlSocios::mdlRepoMensualidades();

        # ----------------------------------------------
        # Funcion para redondear el porcentaje de 5 en 5 
        # ----------------------------------------------

        $pagados = $mensualidades["socios"];
        $totalSocios = $mensualidades["totalSocios"];

        $porcentajeSocios = ($pagados / $totalSocios)*100;
        $compara = $porcentajeSocios%5;
        
        while ($compara != 0 ){  
            $pagados ++;        
            $porcentajeSocios = ($pagados / $totalSocios)*100;
            $compara = $porcentajeSocios%5;
        }
        echo '

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
            <div class="card overflow-hidden">
                <div class="card-header">
                    <h3 class="card-title">Mensualidad</h3>
                </div>
                <div class="card-body ">
                    <h5 class="">Cobrado</h5>
                    <h2 class="text-dark  mt-0 ">$ '.$mensualidades["mensualidad"].'</h2>
                    <div class="progress progress-sm mt-0 mb-2">
                        <div class="progress-bar bg-primary w-'.$porcentajeSocios.'" role="progressbar"></div>
                    </div>
                    <div class=""><i class="fa fa-caret-up text-green"></i>'.$porcentajeSocios.'% de socios</div>
                </div>
            </div>
        </div>';

        echo '
        <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card overflow-hidden">
                <div class="card-header">
                    <h3 class="card-title">Socios</h3>
                    <div class="card-options"> <a class="btn btn-sm btn-secondary" href="index.php?page=socioList">Ver</a> </div>
                </div>
                <div class="card-body ">
                    <h5 class="">Total registrados</h5>
                    <h2 class="text-dark  mt-0 ">'.$totalSocios.'</h2>
                </div>
            </div>
        </div>
        ';
    }

    public static function ctrRegistraPrecio(){
        if(isset($_POST["categoria"])){
        
            $datos = array("categoria" => $_POST["categoria"],
                           "costo" => $_POST["costo"]);

            $ingresa = mdlSocios::mdlRegistraPrecio($datos);

            if ($ingresa == "ok"){

                    echo "<script>Swal.fire({
                        title: 'Registro Exitoso',
                        text: 'El nuevo precio ha sio registrado',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location='index.php?page=precioList'
                        }
                      })
                      </script>";
            }
            else{

                echo "<script>Swal.fire({
                    title: 'Error',
                    text: 'No se pudo guardar la información',
                    icon: 'danger',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?page=precioList'
                    }
                  })
                  </script>";
        }
            
            
        }
    }


    public static function ctrActualiza(){
        if(isset($_POST["btnActualiza"])){

            $original_date = $_POST["fechaNacimiento"];
            $timestamp = strtotime($original_date);
            $fechaNacimiento = date("Y-m-d", $timestamp);
        
            $datos = array("socioId" => $_POST["socioId"],
                           "nombres" => $_POST["nombres"],
                           "apellidos" => $_POST["apellidos"],
                           "telefono" => $_POST["telefono"],
                           "contacto" => $_POST["contacto"],
                           "tipoSocio" => $_POST["tipoSocio"],
                           "fechaNacimiento" => $fechaNacimiento);

            $actualiza = mdlSocios::mdlActualizaSocio($datos);

            if ($actualiza == "ok"){

                echo "<script>Swal.fire({
                    title: 'Actualizado!',
                    text: 'La información se actualizó correctamente',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?page=socioList'
                    }
                    })
                    </script>";
            }else{
                echo "<script>Swal.fire({
                    title: 'Error!',
                    text: 'No se logró actualizar La información',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?page=socioList'
                    }
                  })
                  </script>";

            }
            
        }
    }

    public static function ctrActualizaPrecio(){
        if(isset($_POST["btnActualiza"])){

       
            $datos = array("id" => $_POST["id"],
                           "categoria" => $_POST["categoria"],
                           "costo" => $_POST["costo"]);

            $actualiza = mdlSocios::mdlActualizaPrecio($datos);

            if ($actualiza == "ok"){

                echo "<script>Swal.fire({
                    title: 'Actualizado!',
                    text: 'La información se actualizó correctamente',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?page=precioList'
                    }
                    })
                    </script>";
            }else{
                echo "<script>Swal.fire({
                    title: 'Error!',
                    text: 'No se logró actualizar La información',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?page=precioList'
                    }
                  })
                  </script>";

            }
            
        }
    }


    #  Lista todos los usuarios disponibles en la tabla que recibe como parametro
    #------------------------------------------------------------------------------------------------
    public static function ctrListaSocios(){

		$respuesta = mdlSocios::mdlLista("socios");

		foreach ($respuesta as $row => $item){
            if ($item["tipoSocio"] == 1) $tipoSocio = '<td>Socio</td>';
            if ($item["tipoSocio"] == 2) $tipoSocio = '<td>Estudiante</td>';
            if ($item["tipoSocio"] == 3) $tipoSocio = '<td>Referido</td>';
            $cumple = strftime("%d de %B de %Y", strtotime($item["fechaNacimiento"]));
            $registro = strftime("%d de %B de %Y", strtotime($item["fechaRegistro"]));

            echo '
            <tr>
                <td>'.$item["nombres"].' '.$item["apellidos"].'</td>
                <td>'.$item["tipoSocio"].'</td>
                <td>'.$item["telefono"].'</td>
                <td>'.$registro.'</td>
                <td>'.$cumple.'</td>
                <td>
                    <div class="item-action dropdown">
                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon" aria-expanded="false"><i class="fe fe-more-vertical fs-20 text-dark"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-172px, 22px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a href="index.php?page=socioEdit&idEditar='.$item["idSocio"].'" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Editar </a>
                            <a href="index.php?page=socioList&idBorrar='.$item["idSocio"].'" class="dropdown-item"><i class="dropdown-icon fe fe-user-x"></i> Borrar </a>
                        </div>
                    </div>
                </td>
            </tr>';
		}
	}

    public static function ctrListaPrecios(){

		$respuesta = mdlSocios::mdlLista("precios");

		foreach ($respuesta as $row => $item){
            // if ($item["tipoSocio"] == 1) $tipoSocio = '<td>Socio</td>';
            // if ($item["tipoSocio"] == 2) $tipoSocio = '<td>Estudiante</td>';
            // if ($item["tipoSocio"] == 3) $tipoSocio = '<td>Referido</td>';
            // $cumple = strftime("%d de %B de %Y", strtotime($item["fechaNacimiento"]));
            // $registro = strftime("%d de %B de %Y", strtotime($item["fechaRegistro"]));

            echo '
            <tr>
                <td>'.$item["categoria"].'</td>
                <td>'.$item["costo"].'</td>
                <td>
                    <div class="item-action dropdown">
                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon" aria-expanded="false"><i class="fe fe-more-vertical fs-20 text-dark"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-172px, 22px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a href="index.php?page=precioEdit&idEditar='.$item["id"].'" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Editar </a>
                            <a href="index.php?page=precioList&idBorrar='.$item["id"].'" class="dropdown-item"><i class="dropdown-icon fe fe-user-x"></i> Borrar </a>
                        </div>
                    </div>
                </td>
            </tr>';
		}
	}

    public static function ctrListaSociosInicio(){

		$respuesta = mdlSocios::mdlLista("socios");
        date_default_timezone_set('UTC');
        date_default_timezone_set("America/Chihuahua");
        $hoy = date("d");
        

		foreach ($respuesta as $row => $item){
            if ($item["tipoSocio"] == 1) $tipoSocio = '<td>Socio</td>';
            if ($item["tipoSocio"] == 2) $tipoSocio = '<td>Estudiante</td>';
            if ($item["tipoSocio"] == 3) $tipoSocio = '<td>Referido</td>';
            $cumple = strftime("%d de %B", strtotime($item["fechaNacimiento"]));
            $registro = strftime("%d de %B de %Y", strtotime($item["fechaRegistro"]));

            // calculo de diferencia de las fechas
            $fecha_inicial= $item["fechaUltimoPago"];
            $fecha_final = date('Y-m-d'); 
            
            $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
            $dias = abs($dias); $dias = floor($dias);
            
            if(is_null($fecha_inicial)) $dias_pasados = "sin pago";
            else $dias_pasados = $dias+1;

            if ($dias_pasados >= 31 ) $mens_dias = '<p class="text-primary">'.$dias_pasados.'</p>';
            else $mens_dias = '<p class="text-green">'.$dias_pasados.'</p>';
            //---------------------------------------------------------

            echo '
            <tr>
                <td>'.$item["nombres"].' '.$item["apellidos"].'</td>
                <td>'.$mens_dias.'</td>
                <td>'.$item["contacto"].'</td>
                <td> <a href="tel:'.$item["telefono"].'">'.$item["telefono"].'</a></td>
                <td>'.$registro.'</td>
                <td>
                    <div class="item-action dropdown">
                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon" aria-expanded="false"><i class="fe fe-more-vertical fs-20 text-dark"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-172px, 22px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a href="index.php?page=mensualidad&socio='.$item["idSocio"].'" class="dropdown-item"><i class="dropdown-icon fa fa-usd"></i> Mensualidad </a>
                        </div>
                    </div>
                </td>
            </tr>';
		}
	}


    	#BORRAR SOCIO
	#------------------------------------
	public static function ctrBorrarSocio(){
		if (isset($_GET['idBorrar'])){
            echo '<script>  
            Swal.fire({
                title: "¿Está seguro?",
                text: "¡Esto no se podrá recuperar!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Si, borrar!"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location="index.php?page=socioDel&idBorrar="+'.$_GET["idBorrar"].'
                }
              })
              </script>';
		}
	}

    public static function ctrBorrarPrecio(){
		if (isset($_GET['idBorrar'])){
            echo '<script>  
            Swal.fire({
                title: "¿Está seguro?",
                text: "¡Esto no se podrá recuperar!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Si, borrar!"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location="index.php?page=precioDel&idBorrar="+'.$_GET["idBorrar"].'
                }
              })
              </script>';
		}
	}

    public function ctrActualizarAsistencia() {
        if (isset($_GET['socio'])) {
            $idSocio = $_GET['socio'];
            
            $respuesta = mdlSocios::mdlActualizarAsistencia($idSocio);

            if ($respuesta === "success") {
                echo '<script>  
                Swal.fire({
                    title: "Actualizar asistencia",
                    text: "La asistencia fue borrada exitosamente",
                    icon: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Aceptar"
                  }).then((result) => {
                  
                        window.location.href = "index.php?page=socioList";
                    
                  })
                  </script>';
            } else {
                echo '<script>  
                Swal.fire({
                    title: "Actualizar asistencia",
                    text: "La asistencia no se pudo actualizar",
                    icon: "error",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Aceptar"
                  }).then((result) => {
                  
                        window.location.href = "index.php?page=socioList";
                    
                  })
                  </script>';
            }
        }
    }

    public function ctrRegistrarMensualidad() {
        if (isset($_GET['socio'])) {
            $idSocio = $_GET['socio'];

            $socio = mdlSocios::mdlBuscaPrecio($idSocio);

            $pago = $socio["costo"];

            $ultimo_pago = mdlSocios::mdlRegistraUltimoPago($idSocio);

            $mensaualidad = mdlSocios::mdlRegistrarMensualidad($idSocio, $pago);



            if ($ultimo_pago === "success" && $mensaualidad === "success") {
                echo '<script>  
                Swal.fire({
                    title: "Registrar mensualidad",
                    text: "La mensualidad fue registrada exitosamente",
                    icon: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Aceptar"
                  }).then((result) => {
                  
                        window.location.href = "index.php?page=inicio";
                    
                  })
                  </script>';
            } else {
                echo '<script>  
                Swal.fire({
                    title: "Registrar mensualidad",
                    text: "La mensualidad no se pudo registrar",
                    icon: "error",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Aceptar"
                  }).then((result) => {
                  
                        window.location.href = "index.php?page=inicio";
                    
                  })
                  </script>';
            }
        }
    }

    public function ctrSelectSocios() {
        $respuesta = mdlSocios::mdlLista("socios");

        foreach($respuesta as $socio) {
            echo '<option value="' . $socio['idSocio'] . '">' . $socio['nombres'] . ' ' . $socio['apellidos'] . '</option>';
        }
    }

    public function ctrSelectPrecios() {
        $respuesta = mdlSocios::mdlLista("precios");

        foreach($respuesta as $precio) {
            echo '<option value="' . $precio['categoria'] . '">' . $precio['categoria'] . '</option>';
        }
    }

    public function ctrSelectedPrecios($tipoSocio) {

        $respuesta = mdlSocios::mdlLista("precios");

        foreach($respuesta as $precio) {
            if ($precio["categoria"] == $tipoSocio)
                echo '<option value="' . $precio['categoria'] . '" selected>' . $precio['categoria'] . '</option>';
            else
                echo '<option value="' . $precio['categoria'] . '">' . $precio['categoria'] . '</option>';
        }
    }

}//Class

?>
