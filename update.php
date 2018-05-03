<?php
include 'conecta.php';
$Nombre = $_POST['Nombre'];
$Marcas = $_POST['Marcas'];
$Tipo = $_POST['Tipo'];
$Cantidad = $_POST['Cantidad'];
$Codigo = $_POST['Codigo']; //Genera un id unico para el codigo de barras
$Descripcion = $_POST['Descripcion'];
//echo $Codigo;
$sql = "UPDATE  inventario SET Marca = '$Marcas', Codigo= '$Codigo', Nombre= '$Nombre', Tipo = '$Tipo', Cantidad ='$Cantidad',Descripcion='$Descripcion', Estatus='Activo' where Codigo ='$Codigo'  ";
echo $sql;
if (mysqli_query($conexion, $sql)) {
	echo "<script type=\"text/javascript\">alert(\"Guardado correcto\");</script>"; 
//header ("Location: alta.php");

} else {
	echo "<script type=\"text/javascript\">alert(\"Error al guardar el artículo\");</script>";

   // echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
<html>
<body>
<script type="text/javascript">
window.location="inventario.php";
</script>
</body>
</html>

