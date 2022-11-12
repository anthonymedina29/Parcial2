<?php
if (session_status() == 1) session_start();
?>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../img/Logo.png" class="img-fluid" alt="..."></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo "index.php?c=" . seg::codificar("shop") . "&m=" . seg::codificar("shop1") ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#catalogo">Catalogo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">1. Rines</a></li>
                        <li><a class="dropdown-item" href="#">2. Luces</a></li>
                        <li><a class="dropdown-item" href="#">3. Accesorios</a></li>
                        <li>    
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" >Añadido al carrito: <?php if(isset($_COOKIE["compras"])) echo $_COOKIE["compras"]; ?></a>
                </li>
            </ul>
            
            <ul class="navbar-nav">
            <?php if (isset($_SESSION["usuario"])) { ?>
                

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION["usuario"] ?>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                            <li><a class="dropdown-item" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>">Cerrar Sesion</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>

                <?php } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>">Login</a>
                    </li>
                <?php }  ?>
                </ul>

            <form action="<?php echo "index.php?c=" . seg::codificar("shop") . "&m=" . seg::codificar("validar") ?>" class="d-flex" method="post">
                <input class="form-control me-2" type="text" name="id" placeholder="Ingrese del 1 al 5" aria-label="Search" >
                <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            
        </div>
    </div>
</nav>