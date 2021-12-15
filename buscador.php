<form action="index.php"><label>Buscar por el campo</label>
    <select name="busca_titulo" id="busca_titulo">
        <?php
        $servidorBD = "127.0.0.1";
        $nombreDB = "senderismo";
        $con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
        $sql = "SELECT * FROM rutas";

        $rutas = $con->query($sql);
        foreach ($rutas as $rut) {
            echo "<option value='" . $rut["id"] . "'>" . $rut["titulo"] . "</option>";
        }

        ?>
        <input type="submit" value="buscar">
    </select>

</form>