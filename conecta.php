<?php
        $usuario = "link";
        $password = "bolas";
        $servidor = "localhost";
        $basededatos = "recuperacion";
        // creación de la conexión a la base de datos con mysql_connect()
        $conexion = mysqli_connect( $servidor, $usuario,$password ) or die ("No se ha podido conectar al servidor de Base de datos");
        // Selección del a base de datos a utilizar
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        // establecer y realizar consulta. guardamos en variable.
        $consulta = "SELECT * FROM inventario where Estatus='activo'";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        // Motrar el resultado de los registro de la base de datos

