<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pueblos Magicos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/pueblos-magicos.css">
</head>
<body>
<nav class="menu-navegacion">
    <ul class="menu-lista">
        <li class="menu-opcion">
            <a href="./registro.php">
                <picture class="logo">
                    <img alt="logo de pagina" width="175" height="50" src="recursos/imagenes/pueblos-magico-logo.png">
                </picture>
            </a>
        </li>
        <li class="menu-opcion menu-links-navegacion">
            <ul class="menu-lista">
                <li class="menu-opcion">
                    <ul class="menu-lista menu-en-columna">
                        <li class="opcion-reducida">
                            <a href="registro.php">
                                Registro
                            </a>
                        </li>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<section class="pueblo-magico-imagen-resultado">
    <h1 class="typografia pueblo-magico-texto">Bienvenido</h1>
</section>
<section class="typografia contentido">
    <br>
    <h2 class="margin-top-10">Resultado de registro</h2>
    <br>
    <?php
        $resultado = true;
        $reporte = [];

        // 1. Verificamos que no vengan campos vacios
        foreach ($_POST as $param_name => $param_val) {
            if (empty($param_val)) {
                $resultado = false;
                array_push($reporte, "{$param_name} esta vacio");
            }
        }

        // 2. Procedemos a verificar campo por campo segun reglas
        if ($resultado) {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];

            // Que solo tengan letras el nombre
            if (!ctype_alpha($nombre)) {
                $resultado = false;
                array_push($reporte, "Nombre: '{$nombre}' tiene caracteres invalidos, este campo solo debe contener letras.");
            } else {
                array_push($reporte, "Nombre: '{$nombre}' es valido, este campo solo debe contener letras.");

            }

            // Que tenga ".com" el correo
            if (!strrpos($correo, ".com")) {
                $resultado = false;
                array_push($reporte, "Correo: '{$correo}' no incluye '.com'");
            } else {
                array_push($reporte, "Correo: '{$correo}' es valido e incluye '.com'");
            }

            // Que solo tengan letras el usuario
            if (!ctype_alpha($usuario)) {
                $resultado = false;
                array_push($reporte, "Usuario: '{$usuario}' tiene caracteres invalidos, este campo solo debe contener letras.");
            } else {
                array_push($reporte, "Usuario: '{$usuario}' es valido, este campo solo debe contener letras.");
            }

            // Numero de telefono valido
            if (!is_numeric($telefono)) {
                $resultado = false;
                array_push($reporte, "Telefono: '{$telefono}' tiene caracteres invalidos, este campo solo debe contener numeros.");
            } else {
                array_push($reporte, "Telefono: '{$telefono}' es valido, este campo solo debe contener numeros.");
            }
        }

        $nombreDeClase = $resultado ? 'valido': 'invalido';
        echo "<ul class=\"reporte {$nombreDeClase}\">";
        foreach ($reporte as $valor) {
            echo "<li>{$valor} <li/>";
        }
        echo "</ul>";
    ?>
</section>
<footer>
    <p>¡Gracias por su vista!</p>
</footer>
</body>
</html>