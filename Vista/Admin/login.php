<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Tus scripts personalizados -->
    <script src="js/sha256.js"></script>
    <script src="js/funciones.js"></script>
    <title>Inicio de sesión</title>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Inicio de sesion</h1>
            <div class="input-box">
                <input type="email" class="form-control" name="correo" placeholder="Introduce tu email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" class="form-control" id="pass" name="contrasena"
                    placeholder="Introduce tu contraseña">
                <i class='bx bxs-lock'></i>
            </div>
            <input type="hidden" name="peticion" value="ingresar">
            <button type="submit"  class="btn">Ingresar</button>
            <p>
                <?php
                if (isset($correo)) {
                    echo 'No se puede iniciar sesión';
                }
                ?>
            </p>
            <div class="register-link">
                <p>No tengo una cuenta.
                    <a href="?peticion=registroUsuario" class="register-link">Regístrate</a>
                </p>
            </div>
            <div class="register-link">
                <p>
                    <a href="?peticion=inicio" class="register-link">Menu Principal</a>
                </p>
            </div>
        </form>
    </div>

    </div>
</body>

</html>