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
     
<form method="post" action="insertarc.php?id=<?php $Codigo= htmlspecialchars($_GET["id"]); echo $Codigo;?>">
<fieldset>
<div class="form-group">
<div class="row"><legend> Datos del artículo :</legend>
<div class="col-md-2"><aside>Nombre</aside> <input id="Nombre" type="text" name="Nombre" required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required/></div>
<div class="col-md-2"><aside>Catálogo</aside><input id="Catalogo" type = "text"  value="<?php echo $Codigo;?>"readonly> </div>
</div></div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
</html>
