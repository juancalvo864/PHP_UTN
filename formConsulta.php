<?php 
    $nombre_form = $_POST['nombre'];
    $apellido_form = $_POST['apellido'];
    $email_form = $_POST['email'];
    $novedades_form = $_POST['novedades'] ? 1 : 0;

    $conexion = mysqli_connect('localhost','root','','php_utn') or exit("no se pudo conectar a la base de datos");

    mysqli_query($conexion,"INSERT INTO form_consulta VALUES(DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$novedades_form')");

    mysqli_close($conexion);

    header("Location: tienda.php");
    
    exit;

?>