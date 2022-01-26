<?php
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header("Location:sesiones1_login.php?redirigido=true");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página principal</title>
    <link rel="stylesheet" href="./scss/starter.scss">
    <link rel="stylesheet" href="/assets/css/starter.css">

</head>
<body>
   <?php echo "Bienvenido/a ".$_SESSION['usuario'];?>
   <br><a href="sesiones1_logout.php">Salir</a>
</body>
</html>
