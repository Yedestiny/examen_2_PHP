<h1>Rutas</h1> <br> <br>
<style>
    .tabla{
        border: 1px solid black;
    }
    .tabla td{
        border: 1px solid black;

    }
</style>
<?php

$servidorBD = "127.0.0.1";
$nombreDB = "senderismo";
$con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
$sql = "SELECT titulo,descripcion,desnivel,distancia,notas,dificultad,id FROM rutas";

$result = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($result, MYSQLI_NUM);

do {
    $datos[] = $fila;
} while ($fila = mysqli_fetch_array($result, MYSQLI_NUM));

echo '<table class="tabla">';
echo "<tr> <td>Titulo</td><td>Descripcion</td><td>Desnivel</td><td>Distancia</td><td>Notas</td><td>Dificultad</td><td>Opciones</td></tr>";
foreach($datos as $dato){
    echo "<tr> <td>".$dato[0]."</td><td>".$dato[1]."</td><td>".$dato[2]."</td><td>".$dato[3]."</td><td>".$dato[4]."</td><td>".$dato[5].
    '</td><td>
    <a href="comentar.php?id='.$dato[6].'"><button id="comentar" name="comentar" value="'.$dato[6].'">Comentar</button></a>
    <a href="editar.php?id='.$dato[6].'"><button id="editar" name="editar" value='.$dato[6].'">Editar</button></a> 
    <a href="borrar_ruta.php?id='.$dato[6].'"><button id="borrar" name="borrar" value='.$dato[6].'">Borrar</button></a></td></tr>
    ';
}
echo "</table>";


?>
