<?php
if (session_status() == 1) session_start();
?>
<section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-9e13">
    <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="img/image.png" alt="" data-image-width="302" data-image-height="260">
        <div class="u-container-style u-group u-shape-rectangle u-white u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <div class="u-form u-form-1">
                    <?php

                    if (isset($_GET["msg"])) {
                        $msg = 1;
                    } else {
                        $msg = 2;
                    }
                    if ($msg == 1) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">

                            <strong>Usuario o contraseña incorrecta.</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                    <?php } ?>

                    <form action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("validar") ?>" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                        <div class="u-form-group u-form-name">
                            <label for="name-7bf1" class="u-label">Usuario</label>
                            <input type="text" placeholder="Introduzca su usuario" id="name-7bf1" name="Usuario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                        </div>
                        <div class="u-form-email u-form-group">
                            <label for="email-7bf1" class="u-label">Contraseña</label>
                            <input type="password" placeholder="Introduzca una contraseña valida" id="email-7bf1" name="Contra" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                        </div>
                        <div class="u-form-checkbox u-form-group u-form-group-3">
                            <input type="checkbox" id="checkbox-fa15" name="checkbox" value="On" required="required">
                            <label for="checkbox-fa15" class="u-label">Recordar.</label>
                        </div>
                        <div class="u-align-center u-form-group u-form-submit">
                            <button type="subtmit" class="btn btn-dark btn-lg">Enviar</button>
                        </div>
                        <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                    </form>

                </div>
            </div>
        </div>
        <p class="u-text u-text-custom-color-1 u-text-default u-text-1">
            <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="#">¿Olvido su contraseña?</a>
        </p>
        <p class="u-text u-text-custom-color-1 u-text-default u-text-2">
            <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="#">Registrate</a>
        </p>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>