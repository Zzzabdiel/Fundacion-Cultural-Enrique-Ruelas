<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <!-- Bootstrap CSS -->
    <script src="js/sha256.js"></script>
    <script src="js/funciones.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vista/css/registro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="" method="post" onsubmit="return validarContrasenaYEncriptar()">
            <h1>Registrate</h1>
            <div class="input-box">
                <input type="text" class="form-control" name="nombre" placeholder="Introduce tu nombre" required>
                <i class='bx bxs-rename'></i>
            </div>
            <div class="input-box">
                <input type="email" class="form-control" name="correo" placeholder="Introduce tu email" required>
                <i class='bx bx-user-circle'></i>
            </div>
            <div class="input-box">
                <div class="input-box">
                    <input type="password" class="form-control" id="pass" name="contrasena"
                        placeholder="Introduce tu contraseña" required>
                    <i class='bx bx-show ojito' id="togglePassword"></i>
                </div>

            </div>
            <input type="hidden" name="peticion" value="guardarUsuario">
            <!-- Botón de submit -->
            <button type="submit" class="btn">Guardar</button>
        </form>
        <div class="register-link">
            <p>Ya tengo una cuenta.
                <a href="?peticion=iniciarSesion" class="register-link">Iniciar sesión.</a>
            </p>
        </div>
        <div class="register-link">
            <p>
                <a href="?peticion=inicio" class="register-link">Menu Principal</a>
            </p>
        </div>
        <p>
            <?php
            if (isset($mensaje)) {
                echo $mensaje;
            }
            ?>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-xxxxx"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-xxxxx"
        crossorigin="anonymous"></script>
    <script src="js/sha256.js"></script>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            var input = document.getElementById('pass');
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        });
    </script>

</body>

</html>