<?php
include 'conecta.php';
$Nombre = $_POST['Nombre'];
$Marcas = $_POST['Marcas'];
$Tipo = $_POST['Tipo'];
$Cantidad = $_POST['Cantidad'];
$Codigo = uniqid(); //Genera un id unico para el codigo de barras
$Descripcion = $_POST['Descripcion'];
//echo $Codigo;

$sql = "INSERT INTO inventario (Marca, Codigo, Nombre, Tipo, Cantidad,Descripcion,Estatus) VALUES ('$Marcas', '$Codigo', '$Nombre', '$Tipo', '$Cantidad', '$Descripcion', 'Activo')";
if (mysqli_query($conexion, $sql)) {
	echo "<script type=\"text/javascript\">alert(\"Guardado correcto\");</script>"; 
//header ("Location: alta.php");

} else {
	echo "<script type=\"text/javascript\">alert(\"Error al guardar el artículo\");</script>";

   // echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
<script type="text/javascript">
function redireccionar(){
  window.locationf="alta.php";
} 
setTimeout ("redireccionar()", 10); //tiempo expresado en milisegundos
</script>
