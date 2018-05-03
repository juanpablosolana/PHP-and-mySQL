<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de recuperación de material">
    <meta name="author" content="Juan Pablo Solana Ortiz">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>SICP | Módulo recuperación</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">SICP | Recuperación </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="alta.php"><i class="fas fa-plus"></i> Alta</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="inventario.php"><i class="fas fa-boxes"></i> Inventario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="salida.php"><i class="fas fa-shopping-cart"></i> Salida</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
	     <i class="fas fa-book"></i> Catálogos</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="catalogos.php?id=Marcas"><i class="fas fa-copyright"></i>   Marcas</a>
              <a class="dropdown-item" href="catalogos.php?id=Tipo"><i class="fas fa-diagnoses"></i> Tipos</a>
              <a class="dropdown-item" href="catalogos.php?id=Maquinas"><i class="fab fa-docker"></i>  Máquinas</a>
		<a class="dropdown-item" href="catalogos.php?id=Origen"><i class="fas fa-arrow-circle-left"></i>  Origen</a>
		<a class="dropdown-item" href="catalogos.php?id=Empresa"><i class="fas fa-industry"></i>  Empresa</a>
  		<a class="dropdown-item" href="catalogos.php?id=Usuarios"><i class="fas fa-user-plus"></i>  Usuarios</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          Power by Juan Pablo Solana Ortiz
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
     
<form method="post" action="insertar.php">
<fieldset>
<div class="form-group">
<div class="row"><legend> Datos del artículo :</legend>
<div class="col-md-2"><aside>Nombre</aside> <input id="Nombre" type="text" name="Nombre" required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required/></div>
<div class="col-md-2"><aside>Marcas</aside>
<select name="Marcas" id="Marcas">
<option value="Sin Marca">Sin marca</option>
<?php
include 'conecta.php';
$sel = mysqli_query($conexion,"select Nombre from Marcas where Nombre <>' ' order by 1");
//$data = array();

  while ($reg = mysqli_fetch_array($sel)) {
              echo "<option value='$reg[Nombre]'>" . $reg['Nombre'] . "</option>";
             // $descripciones .= "<textarea id='desc".$reg['idMarcas']."' style='display: none;'>".$reg['Nombre']."</textarea>";
          }
?>
</select></div>
<div class="col-md-2"><aside>Tipo</aside><select name="Tipo" id="Tipo">
<?php
$sel1 = mysqli_query($conexion,"select * from Tipo where Nombre <> ' ' order by 2");
  while ($reg1 = mysqli_fetch_array($sel1)) {
         echo "<option value='$reg1[Nombre]'>" . $reg1['Nombre'] . "</option>";
             // $descripciones .= "<textarea id='desc".$reg['idMarcas']."' style='display: none;'>".$reg['Nombre']."</textarea>";
          }
?>
</select></div>

<div class="col-md-2"><aside>Origen</aside><select name="Origen" id="Origen">
<?php
$sel1 = mysqli_query($conexion,"select * from Origen where Nombre <> ' ' order by 2");
  while ($reg1 = mysqli_fetch_array($sel1)) {
         echo "<option value='$reg1[Nombre]'>" . $reg1['Nombre'] . "</option>";
             // $descripciones .= "<textarea id='desc".$reg['idMarcas']."' style='display: none;'>".$reg['Nombre']."</textarea>";
          }
?>
</select></div>

<div class="col-md-2"><aside>Cantidad</aside><input type="text" name="Cantidad" placeholder="Cantidad" value ="1"   pattern="[0-9]{1,4}" title="Solo se permiten números enteros"></div>

<div class="col-md-2"><aside>Descripción</aside>
<textarea rows="4" cols="50"  name="Descripcion" required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required/>
</textarea></div></div>
<button class="btn btn-primary btn-lg btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardará el registro en el sistema" type="submit">Guardar</button></fieldset>
</form>
<?php
include 'ip.php';
?>
      </ div>
    </main>
    <footer class="container">
      <p>&copy; Novalan SICP | Recuperación </p>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <script src="css/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="css/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="css/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


  </body>
</html>
