<?php
session_start();
class Ingreso{

	public static function ingresoController(){

		if(isset($_POST["usuarioIngreso"])){
			
				$datosController = array("email"=>$_POST["usuarioIngreso"],
					                     "password"=>$_POST["passwordIngreso"]);

				$respuesta = IngresoModels::ingresoModel($datosController, "usuarios");


				if($respuesta['email'] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){

					$_SESSION["validar"] = true;
					$_SESSION["id"] = $respuesta["id"];
					$_SESSION["permisos"] = $respuesta["permisos"];
					$_SESSION["email"] = $respuesta["email"];
					$_SESSION["nombre"] = $respuesta["nombres"];
					$_SESSION["foto"] = $respuesta["foto"];
					$_SESSION["perfil"] = $respuesta["perfil"];

					echo '<script>window.location="admin/index.php?page=inicio";</script>';
				}
				else{
					echo '<div class="alert alert-danger">Verifique Usuario/Password</div>';
				}

		}// si se capturo usuarioIngreso

	} // function Ingreso

} //Class