<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/adminlte.min.css" rel="stylesheet" type="text/css"/>
    </head>
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
    <body>
        <?php
        include_once './Viajes.php';
        $obj=new Viajes();
        $cod=$_REQUEST["cod"];
        $nom=$_REQUEST["nom"];
        $vec=$obj->lisVreali($cod);
        ?>
    <center>
        <h2 class="text-blue">Viajes realizados por: <?=$nom?></h2>
        <table class="table table-hover">
            <thead>
                <tr class="text-white bg-black">
                    <th>Viaje<th>Ruta<th>Fecha<th>Costo
              </thead>            
             <?php
                    foreach ($vec as $k=>$d){
                     echo "<tr><td>$d[0]<td>$d[3]<td>$d[1]<td>$d[2]</tr>";  
                    }
             ?>        
        </table>
        <div>
            <a href="pagChofer.php"><input type="button" value="Regresar"></a>
        </div>
    </center>

    </body>
</html>