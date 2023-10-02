<?php include("header.php")?>
    <section class="body_activity4">
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
    </section>
</body>
</html>