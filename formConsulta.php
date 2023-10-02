<?php 
    $nombre_form = $_POST['nombre'];
    $apellido_form = $_POST['apellido'];
    $email_form = $_POST['email'];
    $novedades_form = $_POST['novedades'] ;

    $data_mail = 
    "nombre:".$nombre_form . "\r\n" . 
    "apellido:".$apellido_form ."\r\n" . 
    "email:".$email_form . "\r\n" . 
    "novedades:".$novedades_form ;

    mail("juan.calvo.dev@gmail.com", "mensaje enviado desde nuestro sitio web",$data_mail);
    
    $conexion = mysqli_connect('localhost','root','','juan_calvo_php') or exit("no se pudo conectar a la base de datos");

    mysqli_query($conexion,"INSERT INTO form_consulta VALUES(DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$novedades_form')");

    mysqli_close($conexion);

    header("Location:tienda.php?ok");
    

?>