<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ristorante SUGUS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    </head>
    <body>
        <div class="jumbotron" style="background-image: url(images/pizza-banner-low.jpg) !important; background-size: cover;">
            <div class="container text-center">
                <h1><b>Ristorante SUGUS</b></h1>      
                <p><b>Autentica cocina italiana, desde 1996</b></p>
            </div>
        </div>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Nuestra carta: </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php?category=Pizza">Pizza</a></li>
                        <li><a href="index.php?category=Pasta">Pasta tradizionale</a></li>
                        <li><a href="index.php?category=Insalate">Insalate</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
        <?php
            $creds = fopen("sqlusr.creds", "r");
            $host = "localhost";
            $usr = fread($creds, 6);
            fread($creds, 1); //Leer el ':'
            $pwd = fread($creds, 10);
            $db = "ctf";

            $dbconnect = mysqli_connect($host, $usr, $pwd, $db);
            if ($dbconnect->connect_error) {
                die("Database connection failed: " . $dbconnect->connect_error);
            }

            $category = $_GET['category']; //Obtenemos la categoría de los parámetros de la URL.
            $query = mysqli_query($dbconnect, "SELECT prod.nombre, prod.imagen, prod.descripcion, prod.panel
            FROM pertenecer pe join producto prod 
            on pe.precio = prod.precio and pe.nombre_prod = prod.nombre
            where pe.nombre_cat='$category'") or die (mysqli_error($dbconnect));

            $counter = 0;

            echo "<div class=\"container\">";
            echo "<div class=\"row\">";
            while($row = mysqli_fetch_array($query)) {
                echo "<div class=\"col-sm-4\">";
                echo "<div class=\"panel panel-" . $row['panel'] . "\">";
                echo "<div class=\"panel-heading\">" . $row['nombre'] . "</div>";
                echo "<div class=\"panel-body\"><img src=\"" . $row['imagen'] . "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\"></div>";
                echo "<div class=\"panel-footer\">" . $row['descripcion'] . "</div>";
                echo "</div>";
                echo "</div>";
                $counter = $counter + 1;
                if($counter == 3) {
                    $counter = 0;
                    echo "</div>";
                    echo "</div><br>";
                    echo "<div class=\"container\">";
                    echo "<div class=\"row\">";
                }
            }
            echo "</div>";
            echo "</div><br>";
        ?>    
    </body>
</html>