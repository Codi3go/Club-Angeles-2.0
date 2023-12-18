<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Acceder</title>
        <link rel="stylesheet" href="./css/estilos.css">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.png">
    </head>
    <body>
        <header class="cabecera">
            <div class="cab_nav">
                 <img src="./img/balon.png" alt="Balon" class="logo_img">
                <h2 class="nomb_logo">Club Deportivo Ángeles</h2>
                <ul>
                  <li class=><a href="./index.php">Inicio</a></li>
                  <li class=><a href="./informacion.html">Información</a></li>
                  <li class="marca"><a href="./acceder.php"></a>Entrar</li>  
                </ul>
            </div>
        </header>

        <div class="imagen_fondo">
        <img src="./img/accederok.jpg" alt="Fondo">
        </div>
        <form action="" method="" class="formulario_ing">
            <h2 class="info_h2">Acceder</h2>
            <input type="text" class="formula" required placeholder="&#128113; Usuario" name="usuario">
            <input type="password" class="formula" required placeholder="&#128272; Contraseña" name="pass">
            <input type="submit" class="enviar">
        </form>

        <?php require_once './footer/footer.html'?>

    </body>

</html>