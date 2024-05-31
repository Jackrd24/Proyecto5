<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Choferes</title>
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
    <div class="container">
        <?php
        include_once './Viajes.php';
        $obj = new Viajes();
        $vec = $obj->lisChof();
        ?>
        <h2 class="text-blue">Lista de Choferes</h2>
        <table class="table table-hover">
            <thead>
                <tr class="text-white bg-black">
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Fec.Ingreso</th>
                    <th>Categoria</th>
                    <th>Foto</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vec as $k => $d) {
                    echo "<tr>
                            <td>$d[0]</td>
                            <td>$d[1]</td>
                            <td>$d[2]</td>
                            <td>$d[3]</td>
                            <td>
                                <img src=\"turismo/$d[0].jpg\" height=\"150\" width=\"150\" class=\"rounded-image";
                    
                    if (!file_exists("turismo/$d[0].jpg")) {
                        echo " no-image";
                    }
                    
                    echo "\" alt=\"$d[1]\" onerror=\"this.onerror=null;this.src='fotos/sin_foto.jpg';\">
                            </td>
                            <td>
                                <a href=\"pagVreali.php?cod=$d[0]&amp;nom=$d[1]\">Viajes</a>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
