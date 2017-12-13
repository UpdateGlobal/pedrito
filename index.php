<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pedrito Petshop</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="logo/favicon.ico" />
   
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/cd2396986950e6d06ba09fba5754fd49.css" />
    <link rel="stylesheet" type="text/css" href="css/8986d8aa7b116cd1da7d16640731605b.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/4f1157b34c626f17931b3042dac06d5e.css" media="print" />
    <script type="text/javascript" src="js1/8abf94023d9a75d6a8d5680a47799432.js"></script>
    <link href="blog/rss/index/store_id/9/index.html" title="Our Blog" rel="alternate" type="application/rss+xml" />
    <script type="text/javascript">
    </script>
    <script type="text/javascript">
  </script>
  <link rel="stylesheet" type="text/css" href="css/cd2396986950e6d06ba09fba5754fd49.css" />
<link rel="stylesheet" type="text/css" href="css/432721ecca3ed2c88881a557e6917056.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/4f1157b34c626f17931b3042dac06d5e.css" media="print" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
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
    <div class="modal-wrapper" id="popup">
   <div class="popup-contenedor">
     <h2>Registro de Clientes</h2>
 <form method="POST" action="formulario.php">
 Nombre: <br />
 <input type="text" name="nombre" size="50" />
 <p>
  Email: <br />
 <input type="text" name="email" size="50" />
 <p>
  contraseña: <br />
 <input type="password" name="pass" size="50" />
 <p>
 Dirección: <br />
 <input type="text" name="direccion" size="50" />
 <p>
 Edad: <br />
 <input type="text" name="edad" size="3" />
 <p>
 Telefono: <br />
 <input type="text" name="telefono" size="18" />
  <p>
 <input type="submit" name="submit" style="width: 70px; background:#4bb093; color: black;" value="Enviar" />
 </form>
      <a class="popup-cerrar" href="#">X</a>
   </div>
</div>
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



