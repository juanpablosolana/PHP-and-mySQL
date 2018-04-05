<form method="post" action="tratamiento.php">

 <select name="Marcas" id="Nombre">
            <option value="0">Sin marca</option>
<?php
include 'conecta.php';
$sel = mysqli_query($conexion,"select Nombre from Marcas where Nombre <>'Sin marca'order by 1;");
//$data = array();

  while ($reg = mysqli_fetch_array($sel)) {
              echo "<option value='$reg[idMarcas]'>" . $reg['Nombre'] . "</option>";
             // $descripciones .= "<textarea id='desc".$reg['idMarcas']."' style='display: none;'>".$reg['Nombre']."</textarea>";
          }
?>
</select>


   <p>
       Indica el grupo de edad al que perteneces:<br />
       <input type="radio" name="edad" value="menos15" id="menos15" /> <label for="menos15">Menos de 15 años</label><br />
       <input type="radio" name="edad" value="entre15-25" id="entre15-25" /> <label for="entre15-25">Entre 15 y 25 años</label><br />
       <input type="radio" name="edad" value="entre25-40" id="entre25-40" /> <label for="entre25-40">Entre 25 y 40 años</label><br />
       <input type="radio" name="edad" value="mas40" id="mas40" /> <label for="mas40">¿Incluso mayor?</label>
   </p>
   <p>
       ¿En qué continente vives?<br />
       <input type="radio" name="continente" value="europa" id="europa" /> <label for="europa">Europa</label><br />
       <input type="radio" name="continente" value="africa" id="africa" /> <label for="africa">África</label><br />
       <input type="radio" name="continente" value="asia" id="asia" /> <label for="asia">Asia</label><br />
       <input type="radio" name="continente" value="america" id="america" /> <label for="america">América</label><br />
       <input type="radio" name="continente" value="australia" id="australia" /> <label for="australia">Australia</label>
   </p>
</form>
