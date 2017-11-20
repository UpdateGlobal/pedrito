<?php include("modules/head.php"); ?>
<body class=" contacts-index-index">
<div class="wrapper">
	<div class="page">				
<div class="header-container">
			<?php 
				include("modules/topbar.php");
                include("modules/header.php");
			 ?>
    <div class="top-link">
		<div class="container">
			
			
<div class="main-container col2-left-layout">
					<div class="main">
						<div class="col-main">
						<div class="container">
					<div class="container-inner">
						<div class="row">
	</div>

<div class="col-main col-lg-12 col-md-12 col-sm-112col-xs-12">
																
<div id="messages_product_view"></div>
<div class="page-title">
    <h1>Contáctanos</h1>
</div>
<form action="http://www.plazathemes.com/demo/ma_fobe/index.php/contacts/index/post/" id="contactForm" method="post">
    <div class="fieldset">
        <h2 class="legend">Bríndanos tus datos y te contactaremos</h2>
        <ul class="form-list">
            <li class="fields">
                <div class="field">
                    <label for="name" class="required"><em>*</em>Nombre</label>
                    <div class="input-box">
                        <input name="name" id="name" title="Name" value="" class="input-text required-entry" type="text" />
                    </div>
                </div>
                <div class="field">
                    <label for="email" class="required"><em>*</em>Email</label>
                    <div class="input-box">
                        <input name="email" id="email" title="Email" value="" class="input-text required-entry validate-email" type="text" />
                    </div>
                </div>
            </li>
            <li>
                <label for="telephone">Teléfono</label>
                <div class="input-box">
                    <input name="telephone" id="telephone" title="Telephone" value="" class="input-text" type="text" />
                </div>
            </li>
            <li class="wide">
                <label for="comment" class="required"><em>*</em>Tu comentario</label>
                <div class="input-box">
                    <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                </div>
            </li>
        </ul>
    </div>
    <div class="buttons-set">
        <p class="required">* Required Fields</p>
        <input type="text" name="hideit" id="hideit" value="" style="display:none !important;" />
        <button type="submit" title="Submit" class="button"><span><span>Submit</span></span></button>
    </div>
</form>
<div class="contact-us"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.316092039085!2d-77.07556484241219!3d-12.090499732584284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9a6d34ff541%3A0xb4c0e12b86c32ccf!2sJir%C3%B3n+Castilla+690%2C+Magdalena+del+Mar+15086!5e0!3m2!1ses!2spe!4v1511145638677" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<script type="text/javascript">
//<![CDATA[
    var contactForm = new VarienForm('contactForm', true);
//]]>
</script>
</div>
</div>
</div>
</div>
</div>
</div>
<?php 
    include("modules/marcas.php")
 ?>							
	
	<script type="text/javascript">
		$jq(document).ready(function(){
			$jq(".block-testimonial-sidebar .owl").owlCarousel({
				autoPlay : false,
				items : 1,
				itemsDesktop : [1199,1],
				itemsDesktopSmall : [980,1],
				itemsTablet: [768,1],
				itemsMobile : [479,1],
				slideSpeed : 3000,
				paginationSpeed : 3000,
				rewindSpeed : 3000,
				navigation : false,
				stopOnHover : true,
				pagination : true,
				scrollPerPage:true,
			});
		});
	</script>
				

		</div>
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
								

<div id ="ajaxconfig_info" style ="display:none">
<a href ="index.html"></a>
<div ><img src ="../media/theme/default/loader.gif" alt ="Loading Image" /></div>
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
    <img alt="" src="../media/magentothem/default/loader_1.gif" />
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
    <input type="hidden" id="base-url" value="http://www.plazathemes.com/demo/ma_fobe/index.php/" />
</div>
<div id="ajax-login-block">
</div>
<div class="ajax-load-img">
    <img alt="" src="../media/magentothem/default/loader_1.gif" />
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
        <img alt="" src="../media/magentothem/default/loader.gif" />
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
