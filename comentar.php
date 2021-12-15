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

$id = $_GET['id'];
$sql =  "SELECT * 
FROM rutas 
JOIN rutas_comentarios ON rutas.id = rutas_comentarios.id_ruta
WHERE producto.idProducto = '$id'";
$result = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($result, MYSQLI_NUM);



do {
    $datos[] = $fila;
} while ($fila = mysqli_fetch_array($result, MYSQLI_NUM));

echo '<table class"tabla"><tr><td>Nombre</td><td>Texto</td></tr>';
foreach($datos as $dato){
    echo "<tr> <td>".$dato[2]."</td><td>".$dato[3]."</td></tr>";

}
echo "</table>";