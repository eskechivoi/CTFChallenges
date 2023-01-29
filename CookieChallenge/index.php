<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devide-width, initial-scale=1.0">
        <title>Cookie Corp</title>
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet"/>
        <!-- Stylesheet -->
        <link href="./css/index.css" rel="stylesheet"/>
        <script src="./node_modules/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="./js/login-validation.js"></script>
        <?php
            session_start();
            $_SESSION['sess_username'] = 'guest';
            require("./cookies.php");
            initCookie();
        ?>
    </head>
    <body>
        <!-- Section: Design Block -->
        <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
                background-image: url('./images/background-generic.jpg');
                height: 300px;
                "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
                margin-top: -100px;
                background: hsla(0, 0%, 100%, 0.8);
                backdrop-filter: blur(30px);
                ">
            <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                <h2 class="fw-bold mb-5">Iniciar sesión</h2>
                <form>
                    <!-- User input -->
                    <div class="form-outline mb-4">
                    <input type="username" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Usuario</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Contraseña</label>
                    </div>

                    <!-- Log in as guest -->
                    <a href="./user.php" class="link-info">Entrar como invitado</a></p>

                    <!-- Submit button -->
                    <button type="button" class="btn btn-primary btn-block mb-4" onclick="loginVal();">Entrar</button>
                </form>
                </div>
            </div>
            </div>
            <div class="alert alert-danger" role="alert" id="alert-login-div" style="display: none;">El usuario y/o la contraseña no son correctos.</div>
        </div>
        </section>
    <!-- Section: Design Block -->
    </body>
</html>