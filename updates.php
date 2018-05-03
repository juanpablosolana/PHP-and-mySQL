<?php
include 'conecta.php';
$c = count($_POST["salida"]);

if ($c <> 0) {
for ($i=0; $i<$c; $i++) {
$codigo = $_POST["salida"][$i];
//echo $codigo;
//$query=mysql_query("UPDATE inventario SET Estatus = 'Baja' WHERE inventario.Codigo = '$codigo';",$conexion);
$sql = "UPDATE  inventario SET Estatus = 'Baja' where Codigo ='$codigo' ";
echo $sql;
mysqli_query($conexion, $sql);
}
}
 else {
echo "<script type=\"text/javascript\">alert(\"Selecciona un artículo\");</script>";
}

//$sql = "UPDATE  inventario SET Marca = '$Marcas', Codigo= '$Codigo', Nombre= '$Nombre', Tipo = '$Tipo', Cantidad ='$Cantidad',Descripcion='$Descripcion', Estatus='Activo' where Codigo ='$Codigo'  ";
//echo $sql;
//if (mysqli_query($conexion, $sql)) {
//	echo "<script type=\"text/javascript\">alert(\"Guardado correcto\");</script>"; 
//header ("Location: alta.php");

//} else {
//	echo "<script type=\"text/javascript\">alert(\"Error al guardar el artículo\");</script>";

   // echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
//}

mysqli_close($conexion);
?>


<html>
<body>
<script type="text/javascript">
window.location="salida.php";
</script>
</body>
</html>

