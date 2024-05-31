<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Viajes Programados</title>
    <link href="css/adminlte.min.css" rel="stylesheet" type="text/css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&family=Lilita+One&display=swap');
        body {
            font-family: 'Lilita One', cursive;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #337ab7;
            margin-top: 30px;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 20px;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #333;
            color: #fff;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table a {
            color: #337ab7;
            text-decoration: none;
        }

        table a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    include_once './Viajes.php';
    $obj = new Viajes();
    $cod = $_REQUEST["cod"];
    $vec = $obj->lisVprog($cod);
    ?>
    <h2 class="text-blue">Lista de Viajes Programados</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Viaje</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Costo</th>
                <th>Pasajeros</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vec as $k => $d) { ?>
                <tr>
                    <td><?= $d[0] ?></td>
                    <td><?= $d[1] ?></td>
                    <td><?= $d[2] ?></td>
                    <td><?= $d[3] ?></td>
                    <td><a href="pagPasajeros.php?id=<?= $d[0] ?>">Ver</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>