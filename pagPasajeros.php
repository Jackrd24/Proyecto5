<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Pasajeros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            color: #337ab7;
            margin-top: 0;
            text-align: center;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th {
            background-color: #333;
            color: #fff;
            padding: 8px;
            text-align: left;
        }

        td {
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container .button {
            display: inline-block;
            margin-right: 10px;
        }

        .button-container .button a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 4px;
        }

        .button-container .back-button a {
            background-color: #337ab7;
        }

        .button-container .add-button a {
            background-color: #5cb85c;
        }

        .anula-link {
            color: #337ab7;
            text-decoration: none;
            padding: 4px 8px;
            border: 1px solid #337ab7;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include_once './Viajes.php';
        $obj = new Viajes();
        $cod = $_REQUEST["id"];
        $vec = $obj->lisPasaj($cod);
        ?>
        <h2>Lista de Pasajeros en el viaje Nro: <?=$cod?></h2>
        <div class="button-container">
            <div class="button back-button">
                <a href="pagRutas.php">Regresar</a>
            </div>
            <div class="button add-button">
                <a href="pagRegistro.php?vianro=<?=$cod?>">Adicionar Pasajeros</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Boleto</th>
                    <th>Nombre</th>
                    <th>Asiento</th>
                    <th>Pago</th>
                    <th>Descuento</th>
                    <th>Pago Total</th>
                    <th>Anular</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vec as $k => $d) {
                    $descuento = '';
                    $pagoTotal = $d[3];

                    switch ($d[4]) {
                        case 'A':
                            $descuento = '0%';
                            break;
                        case 'E':
                            $descuento = '30%';
                            $pagoTotal = $pagoTotal * 0.7;
                            break;
                        case 'N':
                            $descuento = '50%';
                            $pagoTotal = $pagoTotal * 0.5;
                            break;
                    }

                    echo "<tr>
                            <td>$d[0]</td>
                            <td>$d[1]</td>
                            <td>$d[2]</td>
                            <td>$d[3]</td>
                            <td>$descuento</td>
                            <td>$pagoTotal</td>
                            <td><a class=\"anula-link\" href=\"pagAnula.php?id=$cod&cod=$d[0]\">Anula</a></td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
