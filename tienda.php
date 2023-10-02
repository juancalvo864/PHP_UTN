    <?php include("header.php")?>
    <?php 
        function cuotas($precio,$cuotas){
            return $precio/$cuotas;
        }    
    ?>
    <main>
        <div class="side_and_product">
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
                $discount = 0;

                $productos = array(
                        array(
                        'name' => "Placa de video",
                        'specifications' => "Placa de video Nvidia, Rtx 4080",
                        'price' => 1500,
                        'img' => "https://mla-s1-p.mlstatic.com/620931-MLA52993222899_122022-F.jpg",
                        'discount' => 25
                    ),
                        array(
                        'name' => "Memoria Ram",
                        'specifications' => "Memoria Ram Fury, 16gb Ddr4 3200mhz ",
                        'price' => 150,
                        'img' => "https://consumer.huawei.com/content/dam/huawei-cbg-site/latam/mx/mkt/plp/laptops/d14-amd-2021.jpg",
                        'discount' => 5
                    ),
                        array(
                        'name' => "Teclado mecanico",
                        'specifications' => "Teclado mecanico Logistech Gaming Blanco",
                        'price' => 200,
                        'img' => "https://cdn.mos.cms.futurecdn.net/bb65a58d396e629bd36bc1a5be972ce1.jpg",
                        'discount' => 10
                    )
                );

                if (isset($_GET['product'])){
                    switch ($_GET['product']){
                        case 'pcDesktop':
                            $name = "Computadora de escritorio";
                            $specifications = "Procesador intel i7,video Geforce 3080,monitor ips 24 pulgadas curvo." ;
                            $price = 2000;
                            $img = "https://i.blogs.es/4dc651/huawei-mateview-gt-1-/1366_2000.jpeg";
                            $discount = 10;
                            break;
                        case 'pcLaptop':
                            $name = "Computadora portatil";
                            $specifications = "intel i5,SSD 500GB , Pantalla de 13 pulgas.";
                            $price = 1200;
                            $img = "https://consumer.huawei.com/content/dam/huawei-cbg-site/latam/mx/mkt/plp/laptops/d14-amd-2021.jpg";
                            $discount = 15;
                            break;
                        case 'tablet':
                            $referencia =
                            $name = "Tablet";
                            $specifications = "Tablet Samsung Pro, pantalla 10 pulgadas, 256gb , camara 15 megapixel.";
                            $price = 500;
                            $img = "https://cdn.mos.cms.futurecdn.net/bb65a58d396e629bd36bc1a5be972ce1.jpg";
                            $discount = 7;
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
                        function discount($valor,$porcentaje) {
                            $porcentajeDecimal = $porcentaje / 100;
                            $resultado = $valor - ($valor * $porcentajeDecimal);
                        
                            return $resultado;
                        }
                        if($price) {   
                        echo '<p>Especificaciones:' . $specifications .'</p>';
                        echo '<p class="price">Precio: u$S' . $price  .'</p>';
                        echo '<p class="disconunt">descuento:'.$discount.'%</p>';
                        echo '<p class="final_price">Precio final: u$s'.discount($price,$discount).'</p>';
                        echo '<button class="comprar">Comprar</button>';
                        }      
                    ?>
                </div>               
            </section>
        </div>
        <section>
            <h4 class="other_products">Otros productos...</h4>
            <div class="container_cards_other_products">
                <?php 
                foreach ($productos as $producto) {
                    echo '<div class="card">';
                    echo '<img src="' . $producto['img'] . '" alt="' . $producto['name'] . '">';
                    echo '<div class="card-info">';
                    echo '<h2>' . $producto['name'] . '</h2>';
                    echo '<p>Precio: u$s' . $producto['price'] . '</p>';
                    echo '<p>Descuento: ' . $producto['discount'] . '%</p>';
                    echo '<p class="final_price_card">Precio final: u$s'.discount($producto['price'],$producto['discount']).'</p>';
                    echo '<button class="comprar">Comprar</button>';
                    echo '</div>';
                    echo '</div>';
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
                echo "<h3>Su mensaje ha sido enviado con exito!!</h3>";
            }
        ?>
        <p>
            &copy;Derechos reservados - primer sitio php - Calvo juan
        </p>
    </footer>
</body>
</html>