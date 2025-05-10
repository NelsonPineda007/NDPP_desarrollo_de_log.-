<!DOCTYPE html>
<html lang="es-SV">

<head>
    <title>INICIO DE SESIÓN: NELSON DANIEL PEÑA PINEDA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="fonts/fontawesome/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/sweetalert2.all.js"></script>
    <script type="text/javascript" src="fonts/fontawesome/js/all.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #img {
            width: 120px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <img src="media/logo/logo_corporativo.png" id="img" alt="Logo">

        <h5 class="mb-4">Diseñando estrategias para la recuperación y migración de base de datos</h5>

        <form action="login.php" method="POST">
            <div class="form-group text-left">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group text-left">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
        </form>

    </div>
</body>

</html>