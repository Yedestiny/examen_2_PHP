<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
            if(isset($_COOKIE['error'])){
                echo "Completa todos los campos bien";
            }
    ?>
    <form action="insertar_ruta.php" method="post">
        <p>Tiulo: <input type="text" id="titulo_nuevo" name="titulo_nuevo"></p>
        <p>Descripcion: <br> <textarea name="descripcion_nueva" id="descripcion_nueva" cols="30" rows="10"></textarea></p>
        <p>Desnivel: <input type="number" name="desnivel_nuevo" id="desnivel_nuevo" ></p>
        <p>distancia: <input type="number" id="distancia" name="distancia"></p>
        <p>Notas: <br> <textarea name="notas" id="notas" name="notas" cols="30" rows="10"></textarea></p>
        <p>Dificultad: <input type="text" name="dificultad_media" id="dificultad_media"></p>
        <p><input type="submit" name="enviar" id="enviar"> <input type="reset" name="reset" id="reset" value="Reset"></p>
        
    </form>

    <a href="index.php"><button>Pagina principal</button></a>
    
</body>
</html>