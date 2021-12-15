<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="crear_ruta.php"><button>Crear ruta nueva</button></a>
    <?php require_once('buscador.php') ?>
    </div>
    <div>
        <?php require_once("vista_rutas.php") ?>
    </div>
</body>
</html>