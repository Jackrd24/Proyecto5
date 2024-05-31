<html>
<head>
    <title>Frame con 6 secciones</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&family=Marko+One&display=swap');
        body {
            margin: 0;
            font-family: 'Josefin Sans', sans-serif;            
            background-image: url('ruta_de_la_imagen.jpg'); /* Reemplaza 'ruta_de_la_imagen.jpg' con la ruta de tu imagen de fondo */
            background-size: cover;
            background-position: center;
        }

        .navbar {
            display: flex;
            height: 60px;
            background-color: #333;
            color: #fff;
        }

        .section {
            flex: 1;
            text-align: center;
            color: white;
            padding: 20px;
            border-right: 1px solid #555;
            overflow: hidden;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .section:last-child {
            border-right: none;
        }

        .section:hover {
            background-color: #555;
            cursor: pointer;
        }

        .section h2 {
            font-size: 25px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0;
            padding: 0;           
        }

        .section h2 a {
            color: white;
            text-decoration: none;

        }

        .body {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: calc(100vh - 50px);
            padding: 0 180px;
        }

        .body img {
            width: 350px;
            height: 350px;
            object-fit: cover;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .body img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="section">
            <h2><a href="http://localhost/Proyecto5/pagChofer.php" target="win">Página de Choferes</a></h2>
        </div>
        <div class="section">
            <h2><a href="http://localhost/Proyecto5/pagRutas.php" target="win">Página de Rutas</a></h2>
        </div>
    </div>
</body>
</html>
