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
      <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
  </head>

  <body>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>

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
          <li class="nav-item">
            <a class="nav-link" href="alta.php"><i class="fas fa-plus"></i> Alta</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="inventario.php"><i class="fas fa-boxes"></i> Inventario</a>
          </li>
          <li class="nav-item active">
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
<?php
include 'conecta.php';
	echo "<input type='text' id='search' placeholder='Escribe para buscar...' />";
	echo "<form action='updates.php' method='post'>";
        echo "<table class='table table-striped' id='table'>";
	echo "<thead class='thead-dark'>";
        echo "<tr>";
        echo "<th scope='col'>Nombre</th>";
        echo "<th scope='col'>Marca</th>";
        echo "<th scope='col'>Tipo</th>";
        echo "<th scope='col'>Cantidad</th>";
        echo "<th scope='col'>Descripción</th>";
        echo "<th scope='col'>Código</th>";
        echo "<th scope='col'>Agregar</th>";
        echo "</tr>";
	echo "</thead>"; 

        while ($columna = mysqli_fetch_array( $resultado ))
        {
                echo "<tr>";
                echo "<td>" . $columna['Nombre'] . "</td>
                        <td>" . $columna['Marca'] . "</td>
                        <td>" . $columna['Tipo'] . "</td>
                        <td>" . $columna['Cantidad'] . "</td>
                        <td>" . $columna['Descripcion'] . "</td>
                        <td>" . '<a href="barcode/sample-gd.php?id='.$columna["Codigo"].'"target=_blank"> '.$columna["Codigo"].' </a>' . "</td>
                        <td>" . '<input type="checkbox" name="salida[]" value="'.$columna["Codigo"].'"> <i class="fas fa-check-circle"></i>' ."</td>";
                echo "</tr>";
        }
 	echo "<td> <button class='btn btn-primary btn-lg btn-block' data-toggle='tooltip' data-placement='bottom' title='Guardará el registro en el sistema' type='submit'> Guardar </boton> </td>";
	//echo "<input type='hidden' name='oculto' value='$contador'>";
	echo "</form>";
        echo "</table>";
        mysqli_close( $conexion );
include 'ip.php';
//echo "<input type='hidden' name='oculto' value='$contador'>";

 ?>
   <script type="text/javascript">
        $(function () {

  $('#search').quicksearch('table tbody tr');
});
    </script>
</ div>
    </main>
    <footer class="container">
      <p>&copy; Novalan SICP | Recuperación </p>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="css/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="css/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
