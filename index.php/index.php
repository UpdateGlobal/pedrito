<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<?php include("modules/head.php"); ?>

<body class=" cms-index-index cms-ma-fobe-pet-home">
    <div class="wrapper">
        <div class="page">
             <div class="header-container">
                    <?php 
                    include("modules/topbar.php");
                    include("modules/header.php");
                    include("modules/slider-intro.php");
                    include("modules/banners-especie.php");
                    include("modules/slider-productos.php");
                    include("modules/banner-middle.php");
                    include("modules/modulo-central.php");
                    include("modules/banner-down.php");
                    include("modules/marcas.php");
                    ?>

                <div class="ma-footer-static">
                    <div class="footer-static">
                        <div class="container">
                            <div class="container-inner">
                                <?php include("modules/acerca-de.php");
                                include("modules/footer.php");
                                 include("modules/scripts.php");
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>