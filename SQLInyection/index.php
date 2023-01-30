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
                        <li><a href="#">Pizza</a></li>
                        <li><a href="#">Pasta tradizionale</a></li>
                        <li><a href="#">Insalate</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">    
        <div class="row">
            <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Pizza Tropicale</div>
                <div class="panel-body"><img src="images/pizza-tropical.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">Nuestra rica pizza de jamón york, queso y piña.</div>
            </div>
            </div>
            <div class="col-sm-4"> 
            <div class="panel panel-primary">
                <div class="panel-heading">Pizza 4 Formaggi</div>
                <div class="panel-body"><img src="images/pizza-4quesos.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">Para los amantes del queso, ¡traemos nuestra pizza de queso mozzarella, azul, parmesano y ricotta!</div>
            </div>
            </div>
            <div class="col-sm-4"> 
            <div class="panel panel-primary">
                <div class="panel-heading">Pizza Prosciutto</div>
                <div class="panel-body"><img src="images/pizza-prosciutto.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">¡La pizza más clásica! Una rica combinación de jamón y queso.</div>
            </div>
            </div>
        </div>
        </div><br>

        <div class="container">    
        <div class="row">
            <div class="col-sm-4">
            <div class="panel panel-warning">
                <div class="panel-heading">Ravioli</div>
                <div class="panel-body"><img src="images/ravioli.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">Raviolis rellenos de rico queso parmesano.</div>
            </div>
            </div>
            <div class="col-sm-4"> 
            <div class="panel panel-success">
                <div class="panel-heading">Insalate Cesar</div>
                <div class="panel-body"><img src="images/ensalada_cesar.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">Rica ensalada con pollo, queso, picatostes, lechuga y nuestra rica salsa Cesar.</div>
            </div>
            </div>
            <?php
                if(false) {
                    include("flag.php");
                }
            ?>
        </div>
        </div><br><br>
    </body>
</html>