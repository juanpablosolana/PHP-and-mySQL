<?php
include 'conecta.php';
$c = count($_POST["salida"]);
//$Codigo = $_POST["salida"];
//echo $c;
//echo $Codigo[0];
//echo"UPDATE `inventario` SET `Estatus` = 'Baja' WHERE `inventario`.`Codigo` = '5ae239eabed05';"
if ($c > 0) {
for ($i=0; $i<$c; $i++) {
$codigo = $_POST["salida"][$i];
//echo $codigo;
$query=mysql_query("UPDATE inventario SET Estatus = 'Baja' WHERE inventario.Codigo = '$codigo';",$conexion);
}
}
