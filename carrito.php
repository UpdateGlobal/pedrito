
<?php include("modules/head.php"); ?>

<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '/demo/ma_fobe';
Mage.Cookies.domain   = '.www.plazathemes.com';
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
optionalZipCountries = ["HK","IE","MO","PA"];
//]]>
</script>
<script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script>

<style>
    
    h2 {font-size:36px;margin:0 0 10px 0}
    p {margin:0 0 10px 0}
    
    table.width200,table.rwd_auto {border:1px solid #ccc;width:100%;margin:0 0 50px 0}
        .width200 th,.rwd_auto th {background:#ccc;padding:5px;text-align:center;}
        .width200 td,.rwd_auto td {border-bottom:1px solid #ccc;padding:5px;text-align:center}
        .width200 tr:last-child td, .rwd_auto tr:last-child td{border:0}
        
    .rwd {width:100%;overflow:auto;}
        .rwd table.rwd_auto {width:auto;min-width:100%}
            .rwd_auto th,.rwd_auto td {white-space: nowrap;}
            
    @media only screen and (max-width: 760px), (min-width: 768px) and (max-width: 1024px)  
    {
    
        table.width200, .width200 thead, .width200 tbody, .width200 th, .width200 td, .width200 tr { display: block; }
        
        .width200 thead tr { position: absolute;top: -9999px;left: -9999px; }
        
        .width200 tr { border: 1px solid #ccc; }
        
        .width200 td { border: none;border-bottom: 1px solid #ccc; position: relative;padding-left: 50%;text-align:left }
        
        .width200 td:before {  position: absolute; top: 6px; left: 6px; width: 45%; padding-right: 10px; white-space: nowrap;}
        
        .width200 td:nth-of-type(1):before { content: "Nombre"; }
        .width200 td:nth-of-type(2):before { content: "Apellidos"; }
        .width200 td:nth-of-type(3):before { content: "Cargo"; }
        .width200 td:nth-of-type(4):before { content: "Twitter"; }
        .width200 td:nth-of-type(5):before { content: "ID"; }
        
        .descarto {display:none;}
        .fontsize {font-size:10px}
    }
    
    /* Smartphones (portrait and landscape) ----------- */
    @media only screen and (min-width : 320px) and (max-width : 480px) 
    {
        body { width: 320px; }
        .descarto {display:none;}
    }
    
    /* iPads (portrait and landscape) ----------- */
    @media only screen and (min-width: 768px) and (max-width: 1024px) 
    {
        body { width: 495px; }
        .descarto {display:none;}
        .fontsize {font-size:10px}
    }
</style>
</head>
<body class=" checkout-cart-index">
<div class="wrapper">
        <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br />
                    You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
            </div>
        </div>
    </noscript>
    <div class="page">
				
<div class="header-container">
    <?php include("modules/topbar.php"); ?>
   <?php include("modules/header.php"); ?>
</div>
<!--script type="text/javascript">
	$jq(document).ready(function(){
	$jq('#search_mini_form .label').click(function(){
		$jq('.form-search').addClass("show");
	});	
	$jq('.form-search button.button.none').click(function(){	
		$jq('.form-search').removeClass("show");
	});
});
</script-->
								<div class="main-container col1-layout">
					<div class="main">
						<div class="col-main">
							
												
						<!--	<div class="container">
								<div class="container-inner">
									<div class="page-title">
    <h1>Shopping Cart is Empty</h1>
</div>
<div class="cart-empty">
            <p>No tienes productos en tu carrito de compras.</p>
    <p>Clicka <a href="index.html">Aquí</a> y continua comprando.</p>
    </div>
 
								</div>
							</div> -->
						</div>
					</div>
				</div>
                     <div class="ma-brand-slider-contain">
                        <div class="container">
	                       <div class="brand-inner">
    	
		
		                      <div class="row">
          	                     <ul class="owl">
				                   <li class='item'>	
				                	<div class="item-inner">	    																		<a href="index.html#" title=""><img src="media/magentothem/brandslider/brand1.jpg" alt="" /></a>												
																																							             
                        					</div>
                                   
                </li>                   
				                <li class='item'>	
				                	<div class="item-inner">	    																		<a href="index.html#" title=""><img src="media/magentothem/brandslider/brand2.jpg" alt="" /></a>												
																																							             
                        					</div>
                                   
                </li>                   
				                <li class='item'>	
				                	<div class="item-inner">	    																		<a href="index.html#" title=""><img src="media/magentothem/brandslider/brand3.jpg" alt="" /></a>												
																																							             
                        					</div>
                                   
                </li>                   
				                <li class='item'>	
				                	<div class="item-inner">	    																		<a href="index.html#" title=""><img src="media/magentothem/brandslider/brand4.jpg" alt="" /></a>												
																																							             
                        					</div>
                                   
                </li>                   
				                <li class='item'>		
				                	<div class="item-inner">	    																	
				                		<a href="index.html#" title=""><img src="media/magentothem/brandslider/brand5.jpg" alt="" /></a>												
																																							             
                        					</div>
                                   
                </li>                   
				                <li class='item'>			
				                	<div class="item-inner">	    																
				                		<a href="index.html#" title=""><img src="media/magentothem/brandslider/brand3.jpg" alt="" /></a>												
																																							             
                        					</div>
                                   
                </li>                   
				            </ul>
			</div>
            <script type="text/javascript">
			       //<![CDATA[
					$jq(document).ready(function(){					  
					  $jq(".ma-brand-slider-contain .owl").owlCarousel({
							autoPlay : true,
							items : 5,
							itemsDesktop : [1199,5],
							itemsDesktopSmall : [980,4],
							itemsTablet: [700,3],
							itemsMobile : [400,2],
							slideSpeed : 4000,
							paginationSpeed : 4000,
							rewindSpeed : 4000,
							navigation : false,
							stopOnHover : true,
							pagination : false,
							scrollPerPage:true,
						});
					});
				//]]>
				</script>
	</div>
</div>				
</div> 

		

<!--- TABLA PARA CARRITO DE COMPRAS -->
<div class="main-container col1-layout">
<div class="main">
<div class="col-main">																	
<div class="container">
<table rules="all" class="rwd_auto fontsize">
        <thead>
        <tr>
            <th>item</th>
            <th>Productos</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <tr align="center">
            <td>1</td>
            <td><img src="imagenes/pet-1.jpg" width="50px" height="80px"  alt="nombre de item"></td>
            <td><p style="text-align: justify;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</td>
            <td>S/ 123</td>
            <td><input type="text" size="5" class="input2"></td>
            <td>Precio T.</td>
        </tr>
        <tr>
            <td>2</td>
            <td><img src="imagenes/pet-1.jpg" width="50px" height="80px"  alt="nombre de item"></td>
            <td><p style="text-align: justify;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</td>
            <td>S/ 123</td>
            <td><input type="text" size="5" class="input2"></td>
            <td>Precio T.</td>
        </tr>
        <tr>
            <td>3</td>
            <td><img src="imagenes/pet-1.jpg" width="50px" height="80px"  alt="nombre de item"></td>
            <td><p style="text-align: justify;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</td>
            <td>S/ 123</td>
            <td><input type="text" size="5" class="input2"></td>
            <td>Precio T.</td>
        </tr>
        <tr>
            
        </tr>
        </tbody>
    </table>
    <div class="row">
       
        <div class="col-md-9    ">
            <button></button>
    <button class="btn btn-primary"><a href="#"></a>Seguir Comprando</button>
    <button class="btn btn-warning"><a href="#"></a> Actualizar</button>
    <button class="btn btn-danger"><a href="#"></a> Borrar</button>
    <button class="btn btn-info"><a href="#"></a> Ordenar Pedido</button>
        </div>
        <div class="col-md-2">
            <p>Monto Bruto: </p>
            <p>+IGV(18%):   </p>
            <p>Neto a Pagar:</p>
        </div>
        <div class="col-md-1">
            <p>S/ 1000</p>
            <p>S/ 180</P>
            <p>S/ 1180</p>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!--- FINALIZACION DE TABLA CARRITO -->
				


<?php include("modules/marcas.php"); ?>
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
								

<div id ="ajaxconfig_info" style ="display:none">
<a href ="index.html"></a>
<div ><img src ="media/theme/default/loader.gif" alt ="Loading Image" /></div>
<button name ="black" value ="0.7" ></button>
<input type="hidden" value =""/>
<input type="hidden" id="enable_module" value ="1"/>
<input class="effect_to_cart" type="hidden" value =""/>
<input class="title_shopping_cart" type="hidden" value ="Go to shopping cart"/>
<input class="title_shopping_continue" type="hidden" value ="Continue Shopping"/>
<input class="title_shopping_wishlist" type="hidden" value ="Go to wishlist"/>
<input class="title_shopping_compare" type="hidden" value ="Go to list Compare"/>
<input class="confirm_delete_product" type="hidden" value ="Are you sure you would like to remove this item ?"/>
<input class="title_add_to_cart" type="hidden" value ="Item was successfully added to your cart"/>
<input class="title_add_to_wishlist" type="hidden" value ="Item was successfully added to your wishlist"/>
<input class="title_add_to_compare" type="hidden" value ="Item was successfully added to your compare"/>
<input class="using_ssl" type="hidden" value ="0"/>


</div>
<div id="ajaxcart-checkout-content" style="display:none;"></div>
<div id ="productHaveOption"  style="display:block;" ></div><script type="text/javascript">


</script>

<div id="ajax-logout-block">
</div>
<div class="ajax-load-img">
    <img alt="" src="media/magentothem/default/loader_1.gif" />
</div>
<div class="ajax-body-logout">
    <div class="account-login">
        <div class="page-title">
            <h1>&nbsp;</h1>
            <a href="javascript:void(0);" class="a-close-frm" onclick="closeLogoutForm()"><span>Close</span></a>
        </div>
        <div class="ajax-content">
            <h1>&nbsp;</h1>
            <p class="error-msg"></p>
        </div>
    </div>
</div>
<div class="url-content" style="display: none">
    <input type="hidden" id="use-redirect" value="1" />
    <input type="hidden" id="base-url" value="index.html" />
</div>
<div id="ajax-login-block">
</div>
<div class="ajax-load-img">
    <img alt="" src="media/magentothem/default/loader_1.gif" />
</div>
<div class="ajax-body-login">
    <div class="account-login">
        <div class="page-title">
            <h1>&nbsp;</h1>
            <a href="javascript:void(0);" class="a-close-frm" onclick="closeLoginForm()"><span>Close</span></a>
        </div>
        <div class="ajax-content">
        </div>
    </div>
</div>
    
            
    <div class="quickview-container">
		<a href='javascript:void(0);' class='a-qv-close' onclick='closeQVFrame()'>Close</a>
		<div id="quickview-content">
			<!-- Load quickview content into here -->
		</div>
	</div>

    <div id="quickview-bg-block">
        <!-- Quick View deep background -->
    </div>

    <div class="quickview-load-img">
        <img alt="" src="media/magentothem/default/loader.gif" />
    </div>

    <script type="text/javascript">
                if (typeof MA == 'undefined') MA = {};
        MA.QuickView = {
            CATEGORY_ENABLE : 'true',
            BASE_URL        : 'http://www.plazathemes.com/demo/ma_fobe/index.php/',
            PARENT_ELEMENT  : 'item-inner',
            CHILDREN_ELEMENT: 'products'
        };
                    initQuickButton('.ma-featuredproductslider-container');
                    initQuickButton('.ma-timer-container');
                    initQuickButton('.ma-newproductslider-container');
                    initQuickButton('.ma-upsellslider-container');
                    initQuickButton('.ma-relatedslider-container');
                    initQuickButton('.ma-onsaleproductslider-container');
            </script>
    </div>
</div>
</body>
</html>
