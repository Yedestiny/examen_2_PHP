<?php 
function insertar_ruta($supuesto_titulo,$supuesta_descripcion,
$supuesto_desnivel,$supuesta_distancia,$supuesta_notas,$supuesta_dificultad){
    $servidorBD = "127.0.0.1";
    $nombreDB = "senderismo";
    $con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
    $insert = "INSERT INTO rutas (titulo,descripcion,desnivel,distancia,notas,dificultad) 
    VALUES ('$supuesto_titulo','$supuesta_descripcion',$supuesto_desnivel,
    $supuesta_distancia,'$supuesta_notas','$supuesta_dificultad')";
    $con->query($insert);

}

$supuesto_titulo =$_POST['titulo_nuevo'];
$supuesta_descripcion = $_POST['descripcion_nueva'];
$supuesto_desnivel = $_POST['desnivel_nuevo'];
$supuesta_distancia = $_POST['distancia'];
$supuesta_notas = $_POST['notas'];
$supuesta_dificultad = $_POST['dificultad_media'];


if (!empty($_POST['titulo_nuevo'])
    &&!empty($_POST['descripcion_nueva'])
    &&!empty($_POST['desnivel_nuevo'])
    &&!empty($_POST['distancia'])
    &&!empty($_POST['notas'])
    &&!empty($_POST['dificultad_media'])){
        insertar_ruta($supuesto_titulo,$supuesta_descripcion,
        $supuesto_desnivel,$supuesta_distancia,$supuesta_notas,$supuesta_dificultad);
        header('Location:index.php');
    }else{
        setcookie("error",1,time()+10);
        header('Location:crear_ruta.php');
    }


?>