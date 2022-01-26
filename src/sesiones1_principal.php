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
    <link rel="stylesheet" href="../scss/starter.scss">
    <link rel="stylesheet" href="../assets/css/starter.css">

</head>
<body>
   <?php echo "Bienvenido/a ".$_SESSION['usuario'];?>
   <br><a href="sesiones1_logout.php">Salir</a>
</body>
</html>
<?php

$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$contra = 'ukJbhaVJ';

try {
  $bd = new PDO($cadena_conexion, $usuario, $contra);
  echo "<br><strong>Conexión realizada con éxito</strong><br>";

  $sql = "SELECT nombre, clave, rol FROM usuarios";
  $usuarios = $bd->query($sql);
  echo "Número de filas: ". $usuarios->rowCount() . "<br>";

  foreach ($usuarios as $row) {
    print $row['nombre'] . "\t";
    print $row['clave'] . "\t";
    print $row['rol'] . "\t<br>";
  }
} catch (PDOException $e) {
  echo "Error en la base de datos: " . $e->getMessage();
}
