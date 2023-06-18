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
<section class="pueblo-magico-imagen">
    <h1 class="typografia pueblo-magico-texto">Bienvenido</h1>
</section>
<section class="typografia contentido">
    <br>
    <h2 class="margin-top-10">Formulario de registro</h2>
    <article class="columnas">
        <h3 class="margin-top-20">Crea tu cuenta:</h3>
        <form class="formulario-de-registro margin-top-20" action="registro-resultado.php" method="post">
            <h4 class="margin-top-20">Informacion Personal:</h4>
            <div class="campo-de-forma">
                <label for="nombre">Nombre Completo</label>
                <input id="nombre" name="nombre" type="text" placeholder="Ingresa tu nombre" required />
            </div>
            <div class="campo-de-forma">
                <label for="correo">Correo electronico</label>
                <input id="correo" name="correo" type="email" required placeholder="mi@correo.com" />
            </div>
            <div class="campo-de-forma">
                <label for="telefono">Numero de Telefono</label>
                <input id="telefono" name="telefono" type="tel" placeholder="telefono" required />
            </div>
            <h4 class="margin-top-20">Cuenta:</h4>
            <div class="campo-de-forma">
                <label for="usuario">Usuario</label>
                <input id="usuario" name="usuario" type="text" placeholder="Ingresa nombre de usuario" />
            </div>
            <div class="campo-de-forma">
                <label for="contrasenia">Contranseña</label>
                <input id="contrasenia" name="contrasenia" type="password" placeholder="Contraseña" required />
            </div>
            <div class="campo-de-forma">
                <button class="enviar" type="submit">Enviar</button>
            </div>
        </form>
    </article>
    <br>
</section>
<footer>
    <p>¡Gracias por su vista!</p>
</footer>
</body>
</html>