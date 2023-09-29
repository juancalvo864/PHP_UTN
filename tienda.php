    <?php include("header.php")?>
    <main>
       
        <aside class="nav_sidebar">
            <h2>Productos</h2>
            <div class="botones_sidebar">
                <a href="tienda.php?product=pcDesktop">Computadora de escritorio</a>
                <a href="tienda.php?product=pcLaptop">Computadora portatil</a>
                <a href="tienda.php?product=tablet">Tablet</a>
            </ul>
        </aside>
        <?php 
            $name = "Productos";
            $specifications = "";
            $price = null;
            $img = "https://www.pcboxescomputacion.com.ar/img/brands.png";

            if (isset($_GET['product'])){
                switch ($_GET['product']){
                    case 'pcDesktop':
                        $name = "Computadora de escritorio";
                        $specifications = "Procesador intel i7,video Geforce 3080,monitor ips 24 pulgadas curvo." ;
                        $price = 2000;
                        $img = "https://i.blogs.es/4dc651/huawei-mateview-gt-1-/1366_2000.jpeg";
                        break;
                    case 'pcLaptop':
                        $name = "Computadora portatil";
                        $specifications = "intel i5,SSD 500GB , Pantalla de 13 pulgas.";
                        $price = 1200;
                        $img = "https://consumer.huawei.com/content/dam/huawei-cbg-site/latam/mx/mkt/plp/laptops/d14-amd-2021.jpg";
                        break;
                    case 'tablet':
                        $name = "Tablet";
                        $specifications = "Tablet Samsung Pro, pantalla 10 pulgadas, 256gb , camara 15 megapixel.";
                        $price = 500;
                        $img = "https://cdn.mos.cms.futurecdn.net/bb65a58d396e629bd36bc1a5be972ce1.jpg";
                        break;
                }
            }

        ?>
        <section class="container_product">
            <div class="product_description">
                <h2><?php echo $name; ?></h2>
                <div class="img_container">
                    <img class="product_img" src="<?php echo $img; ?>" alt="">
                </div>
                
                <?php 
                    if($price) {   
                     echo '<p>Especificaciones:' . $specifications .'</p>';
                     echo '<p class="price">Precio: u$S' . $price  .'</p>';
                     echo '<button class="comprar">Comprar</button>';
                    }      
                ?>
            </div>
        </section>
       
    </main>
    <footer>
        <h3>Dejanos tus datos y nos contactaremos a la brevedad.</h2>
        <form action="formConsulta.php" method="post">
            <label>
                Nombre:
                <input type="text" name="nombre">
            </label>
            <label>
                Apellido:
                <input type="text" name="apellido">
            </label>
            <label>
                Email:
                <input type="email" name="email" id="">
            </label>
            <label>
                Recibir novedades:
                <input type="checkbox" name="novedades" id="" value="1">
            </label>
            <input type="submit" class="submit" value="Enviar">
        </form>
        <?php 
            if (isset($_GET['ok'])){
                echo "<h3>Su mensaje ha sido enviado con exito</h3>";
            }
        ?>
        <p>
            &copy;Derechos reservados - primer sitio php - Calvo juan
        </p>
    </footer>
</body>
</html>