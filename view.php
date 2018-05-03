<?php
include 'conecta.php';

	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Nombre</th>";
	echo "<th>Marca</th>";
	echo "<th>Tipo</th>";
	echo "<th>Cantidad</th>";
	echo "<th>Descripcion</th>";
	echo "<th>Codigo</th>";
	echo "<th>Editar</th>";
	echo "</tr>";


	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['Nombre'] . "</td>
			<td>" . $columna['Marca'] . "</td>
			<td>" . $columna['Tipo'] . "</td>
			<td>" . $columna['Cantidad'] . "</td>
			<td>" . $columna['Descripcion'] . "</td>
			<td>" . '<a href="barcode/sample-gd.php?id='.$columna["Codigo"].'"target=_blank">C de barras </a>' . "</td>
			<td>" . '<a href="editar.php?id='.$columna["Codigo"].'">Editar</a>' ."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close( $conexion );
include 'ip.php';
 ?>

