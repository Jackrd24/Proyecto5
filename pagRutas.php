<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Rutas</title>
    <link href="css/adminlte.min.css" rel="stylesheet" type="text/css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&family=Lilita+One&display=swap');
        
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            font-family: 'Lilita One', cursive;
        }

        h2 {
            color: #337ab7;
            margin-top: 30px;
            text-align: center;
            font-size: 45px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 10px;
            text-align: center;
            font-size: 20px;
        }

        table th {
            background-color: #333;
            color: #fff;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        table img:hover {
            transform: scale(1.1);
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
    $vec = $obj->lisRut();
    ?>
    <h2>Lista de Rutas</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>RutCod</th>
                <th>Ruta</th>
                <th>Imagen</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vec as $k => $d) { ?>
                <tr>
                    <td><?= $d[0] ?></td>
                    <td><?= $d[1] ?></td>
                    <td>
                        <img src="turismo/<?= $d[1] ?>.jpg" alt="<?= $d[1] ?>" 
                            onerror="this.src='fotos/sin_foto.jpg'" />
                    </td>
                    <td><a href="pagVprogram.php?cod=<?= $d[0] ?>">Viajes</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>