<?php
//include 'conecta.php';
//$query = "select * from inventario  where Codigo = '$Codigo'";
//$sql = mysqli_query($conexion,$query);
//echo $query;
//$row=mysqli_fetch_array($sql,MYSQLI_BOTH);
//printf ("%s %s %s %s\n",$row[Nombre],$row[Marca],$row[Tipo],$row[Cantidad]);

require_once('barcode.inc.php');
$Codigo= htmlspecialchars($_GET["id"]);
$code_number = $Codigo;
#new barCodeGenrator($code_number,0,'hello.gif');
new barCodeGenrator($code_number,0,'hello.gif', 190, 130, true);
?>
