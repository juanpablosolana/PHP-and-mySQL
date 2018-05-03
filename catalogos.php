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
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
	
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
  <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="alta.php"><i class="fas fa-plus"></i> Alta</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="inventario.php"><i class="fas fa-boxes"></i> Inventario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="salida.php"><i class="fas fa-shopping-cart"></i> Salida</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <i class="fas fa-book"></i> Catálogos</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="catalogos.php?id=Marcas"><i class="fas fa-copyright"></i>   Marcas</a>
              <a class="dropdown-item" href="catalogos.php?id=Tipo"><i class="fas fa-diagnoses"></i> Tipos</a>
              <a class="dropdown-item" href="catalogos.php?id=Maquinas"><i class="fab fa-docker"></i>  Máquinas</a>
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
$Codigo= htmlspecialchars($_GET["id"]);
$query = "select * from $Codigo order by 2";
$sql = mysqli_query($conexion,$query);
//echo $query;
$row=mysqli_fetch_array($sql,MYSQLI_BOTH);
//printf ("%s %s %s %s\n",$row[Nombre],$row[Marca],$row[Tipo],$row[Cantidad]);
	echo "<div class='alert alert-success' role='alert'>";
	echo "<h4 class='alert-heading'>Agregar registro</h4>";
	echo "<p>Si la información que necesitas no está en la tabla</p>";
	echo "<hr>";
	echo "<p class='mb-0'><a href=altacatalogos.php?id=$Codigo >Da click aquí para agregarla</a></p>";
	echo "</div>";
	// Inicia  el código para buscar
	echo "<input type='text' id='search' placeholder='Escribe para buscar...' />";
        //Inicia la tabla
	echo "<table class='table table-striped' id='table'>";
	echo "<thead class='thead-dark'>";
        echo "<tr>";
        echo "<th scope='col'>Nombre</th>";
        echo "<th scope='col'>Editar</th>";
        echo "</tr>";
	echo "</thead>";

        while ($columna = mysqli_fetch_array( $sql ))
        {
                echo "<tr>";
                echo "<td>" . $columna['Nombre'] . "</td>
                      <td>" . '<a href="editarMarcas.php?id='.$columna["id"].'"class="badge badge-danger">Editar</a>' ."</td>";
                echo "</tr>";
        }
        echo "</table>";
        mysqli_close( $conexion );
include 'ip.php';
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
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

  </body>
</html>
