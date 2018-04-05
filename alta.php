<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SICP | Módulo de recuperación de material </title>
  </head>
<body>

<div class="container">
<form method="post" action="insertar.php">
<fieldset>
<div class="row"><legend> Datos del artículo :</legend>
<div class="col-md-2"><aside>Nombre</aside> <input id="Nombre" type="text"  name="Nombre"> </div>
<div class="col-md-2"><aside>Marcas</aside>
<select name="Marcas" id="Marcas">
<option value="Sin Marca">Sin marca</option>
<?php
include 'conecta.php';
$sel = mysqli_query($conexion,"select Nombre from Marcas where Nombre <>'Sin marca'order by 1");
//$data = array();

  while ($reg = mysqli_fetch_array($sel)) {
              echo "<option value='$reg[Nombre]'>" . $reg['Nombre'] . "</option>";
             // $descripciones .= "<textarea id='desc".$reg['idMarcas']."' style='display: none;'>".$reg['Nombre']."</textarea>";
          }
?>
</select></div>
<div class="col-md-2"><aside>Tipo</aside><select name="Tipo" id="Tipo">
<?php
//include 'conecta.php';
$sel1 = mysqli_query($conexion,"select * from Tipo order by 1;");
//$data = array();

  while ($reg1 = mysqli_fetch_array($sel1)) {
         echo "<option value='$reg1[Nombre]'>" . $reg1['Nombre'] . "</option>";
             // $descripciones .= "<textarea id='desc".$reg['idMarcas']."' style='display: none;'>".$reg['Nombre']."</textarea>";
          }
?>
</select></div>
<div class="col-md-2"><aside>Cantidad</aside><input type="text" name="Cantidad" placeholder="Cantidad" value ="1"   pattern="[0-9]{1,4}" title="Solo se permiten números enteros" /></div>
<div class="col-md-2"><aside>Descripción</aside>
<textarea rows="4" cols="50"  name="Descripcion">

</textarea>
</div>
</div>
<input type="submit" value="Guardar" />
</fieldset>
</form>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
