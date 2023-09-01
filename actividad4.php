<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/6/67/UTN_logo.jpg" type="image/x-icon">
</head>
<header>
    <nav>
        <a class="boton" href="./index.php">Actividad 3</a>
    </nav>
</header>
<body>
    <h1>ACTIVIDAD NRO 4</h1>
    <?php 
    define("MAIL","juan.calvo.dev@gmail.com"); 
    $name = "Calvo Juan";
    $edad = 36;
    function mayor($a){
        if ($a >= 18){
            echo "Es mayor de edad";
        }else{
            echo"Es menor de edad";
        }
    }
    ?>
    <h1><?php echo $name;?></h1>
    <p>Mail: <?php echo MAIL;?> </p>
    <p>Edad: <?php echo $edad;?></p>
    <p><?php echo $name ,": ", mayor($edad);?></p>
    
</body>
</html>