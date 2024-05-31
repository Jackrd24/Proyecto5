<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Pasajeros</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;

            }

            .container {
                width: 400px;
                margin: 50px auto;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }

            h2 {
                color: #337ab7;
                margin-top: 0;
                text-align: center;
                font-size: 40px;
                font-family: 'Anton', sans-serif;
            }

            form {
                margin-top: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            input[type="text"],
            input[type="number"],
            select {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            input[type="submit"] {
                background-color: #337ab7;
                color: #fff;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #286090;
            }

            .back-button {
                display: block;
                text-align: center;
                margin-top: 10px;
            }

            .back-button a {
                color: #337ab7;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Registro de Pasajeros</h2>
            <form method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="Nro_asi">Asiento:</label>

                <select name="asiento" required>

                    <?php
                    include_once './Viajes.php';
                    $obj = new Viajes();
                    $vianro = $cod;
                    $cod = $_REQUEST['vianro'];
                    $vec = $obj->lisPasaj($cod);
                    for ($index = 1; $index <= 40; $index++) {
                        $existe = false;
                        foreach ($vec as $key => $dato) {
                            if ($index == $dato[2]) {
                                $existe = true;
                            }
                        }
                        if ($existe == false) {
                            echo "<option>$index</option>";
                        }
                    }
                    ?>
                </select>

                <label for="cbtipo">Tipo de Pasajero:</label>
                <select id="cbtipo" name="cbtipo" required>
                    <option>Niño</option>
                    <option>Estudiante</option>
                    <option>Adulto</option>
                </select>

                <label for="pago">Pago del viaje:</label>
                <input type="number" id="pago" name="pago" required>

                <input type="submit" name="envia" value="Enviar">
            </form>

            <div class="back-button">
                <a href="pagRutas.php">Regresar</a>
            </div>
        </div>

        <?php
        if (isset($_REQUEST["envia"])) {
            include_once './Viajes.php';
            $obj = new Viajes();
            $cod = $_REQUEST['vianro']; // Asegúrate de que $_REQUEST['vianro'] esté definido correctamente
            $vianro = $cod;
            $obj->adicionpasajeros($vianro, $_REQUEST['nombre'], $_REQUEST['asiento'], $_REQUEST['cbtipo'], $_REQUEST['pago']);
            header("location: pagPasajeros.php?id=" . $vianro);
            exit;
        }
        ?>
    </body>
</html>

