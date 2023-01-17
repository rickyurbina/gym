<?php

require_once "conexion.php";

class VentasModel {
  public static function mdlAgregarVenta($datosVenta) {
    $statement = Conexion::conectar() -> prepare("INSERT INTO ventas VALUES (null, :idCliente, :productos, :pago, :total, :debe, now());");

    $statement -> bindParam(":idCliente", $datosVenta['idCliente'], PDO::PARAM_INT);
    $statement -> bindParam(":productos", $datosVenta['productos'], PDO::PARAM_STR);
    $statement -> bindParam(":pago", $datosVenta['pago'], PDO::PARAM_INT);
    $statement -> bindParam(":total", $datosVenta['totalVenta'], PDO::PARAM_INT);
    $statement -> bindParam(":debe", $datosVenta['debe'], PDO::PARAM_INT);

    if ($statement -> execute()) {
      return "success";
    } else {
      return "error";
    }
  }

  public static function mdlListarVentas() {
    $statement = Conexion::conectar() -> prepare("SELECT * FROM ventas ORDER BY idVenta DESC;");

    $statement -> execute();

    return $statement -> fetchAll();
  }
}
