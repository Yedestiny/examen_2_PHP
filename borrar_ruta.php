<?php
$servidorBD = "127.0.0.1";
$nombreDB = "senderismo";
$con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
$id = $_GET['id'];
$con->query("DELETE FROM rutas where id = '$id';");
header('Location:index.php');



