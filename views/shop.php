<?php
if (session_status() == 1) session_start();
require_once("models/articulos_models.php");
require_once("controllers/shop_controllers.php");
?>
<br><br><br>
<div class="image">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/Slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/Slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/Slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br>
    <center>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100" style="width: 20rem;">
                        <img src="img/top.png" class="card-img-top" width="100" height="300" alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title">Nosotros</h5>
                            <p class="card-text">
                                Tienda dedicada a la venta de accesorios para su automovil.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" style="width: 20rem;">
                        <img src="img/top.png" class="card-img-top" width="100" height="300" alt="Los Angeles Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title">Mision</h5>
                            <p class="card-text">
                                Ofrecer calidad y precio a todos nuestros clientes.
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="width: 20rem;">
                        <img src="img/top.png" class="card-img-top" width="100" height="300" alt="Palm Springs Road" />
                        <div class="card-body">
                            <h5 class="card-title">Vision</h5>
                            <p class="card-text">
                                Lograr posicionarnos entre las mejores empresas en ventas de accesorios para autos.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </center>


    <div class="container">
        <h1 class="text-center" id="catalogo">CATALOGO</h1>

        <div class="row">
            <?php
            if (isset($_GET["id"])) {
                $obj = new articulos_models($_GET["id"]);
                $resultado = $obj->Buscar();
                $h1 = 1;
                $n = 6;
            } else {
                $resultado = articulos_models::Mostrar();
                $h1 = 2;
            }
            ?>
            <?php foreach ($resultado as $articulos) {
                if ($h1 == 1) {
                    if (count($resultado) == $n) {
                        $n = 7; ?>
                        
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="../img/articulos<?php echo $resultado["id"] ?>.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3><?php echo $resultado["articulos"] ?></h3>
                                    <p class="card-text"><?php echo $resultado["descripcion"] ?>.</p>
                                    <p>
                                    <h3><?php echo $resultado["precio"] ?>$</h3>
                                    <h7>ITBMS: <?php echo $resultado["precioventa"] ?> $</h7>
                                    </p>
                                    <hr>
                                    <p>Cantidad disponible: <?php echo $resultado["cantidad"] ?></p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div class="col text-center">
                                            <form method="post">
                                                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                                <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar </button>
                                                <?php
                                                if ($_POST) {
                                                    $obj = new seg();
                                                    $h = $obj->compras();
                                                }
                                                ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                } else {
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="../img/articulos<?php echo $articulos["id"] ?>.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3><?php echo $articulos["articulos"] ?></h3>
                                <p class="card-text"><?php echo $articulos["descripcion"] ?>.</p>
                                <p>
                                <h3><?php echo $articulos["precio"] ?>$</h3>
                                <h7>ITBMS: <?php echo $articulos["precioventa"] ?> $</h7>
                                </p>
                                <hr>
                                <p>Cantidad disponible: <?php echo $articulos["cantidad"] ?></p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <div class="col text-center">
                                        <form method="post">
                                            <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                                            <button type="submit" name="b" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar </button>
                                            <?php
                                            if ($_POST) {
                                                $obj = new seg();
                                                $h = $obj->compras();
                                            }
                                            ?>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php
                } {
                ?>
            <?php }
            }
            ?>
        </div>

    </div>

    <br><br><br>
</div>