
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
    <div class="top-link">
		<div class="container">
			
			<div class="container-inner">
				<div class="row top-link-inner">
					<div class="col-md-7 col-sm-6 col-xs-12">
						<div class="block-top-link">		
							<!--p class="welcome-msg">Default welcome msg! </p-->
							<div class="header-language">
								<div class="form-language"> 
	<label class="hidden-sm hidden-xs">Language:</label>
    <ul class="drop-lang">
        <li class="drop-trigger">
                                    <a class="english3 selected" href="index-___store=english3&___from_store=english3.html">English3</a>
                                                        <ul class="sub-lang">
                    <li><a class="english3" href="index-___store=english3&___from_store=english3.html">English3</a></li>
                    <li><a class="english4" href="index-___store=english4&___from_store=english3.html">English4</a></li>
            </ul>
        </li>
    </ul>
</div>
							</div>
							<div class="header-curren">
								<div class="form-currency">   
	<label class="hidden-sm hidden-xs">Currency:</label>
	<ul class="drop-currency">
		<li class="currency-trigger">
											<a class="level-0 selected" href="index.html">GBP</a>
																								<ul class="sub-currency">
								<li>
				<a href="index.html" onclick="setLocation(this.value);">
						GBP			</a>
					</li>
				
								<li>
				<a href="index.html" onclick="setLocation(this.value);">
						EUR			</a>
					</li>
				
								<li>
				<a href="index.html" onclick="setLocation(this.value);">
						USD			</a>
					</li>
				
						</ul>
		</li>
	</ul>
</div>
							</div>
							
							<div class="header-phone">
<div class="header-phone-inner">
<p>Phone : <span>081 112 1145</span></p>
</div>
</div>						</div>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-12">
						<div class="right-link clearfix">
							
							<div class="header-link">
								<ul class="menu dropit">
    <li class="dropit-trigger">
                   <a class = 'login_click' href="customer/account/login/index.html">Account</a>
                        <ul class="dropit-submenu" id ="menu_link">
                                                            <li class="first" ><a href="customer/account/login/index.html" title="My Account" >My Account</a></li>
                                                                                <li ><a href="customer/account/login/index.html" title="My Wishlist" >My Wishlist</a></li>
                                                                                <li ><a href="index.html" title="My Cart" class="top-link-cart">My Cart</a></li>
                                                                                <li ><a href="index.html" title="Checkout" class="top-link-checkout">Checkout</a></li>
                                                                                <li ><a href="testimonial/index.html" title="Testimonial" >Testimonial</a></li>
                                                                                <li class=" last" ><a href="javascript:void(0);" title="Log In" class="a-login-link">Log In</a></li>
                                                </ul>
     </li>
</ul>

							</div>
							<form id="search_mini_form" action="http://www.plazathemes.com/demo/ma_fobe/index.php/catalogsearch/result/" method="get">
    <div class="label" >Search:<i class="fa fa-search ">&nbsp;</i></div>
	<div class="form-search">
        <input id="search" type="text" name="q" value="" class="input-text" maxlength="128" />
		<div class="loading_image_search"></div>
        <button type="submit" title="Search" class="button"><span><span><i class="fa fa-search ">&nbsp;</i>Search</span></span></button>
        <button class="button none"><span><span><i class="fa fa-times">&nbsp;</i></span></span></button>
		<div id="search_autocomplete" class="search-autocomplete"></div>
        <script type="text/javascript">
        //<![CDATA[
            var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search... ');
            searchForm.initAutocomplete('http://www.plazathemes.com/demo/ma_fobe/index.php/catalogsearch/ajax/suggest/', 'search_autocomplete');
        //]]>
        </script>
    </div>
</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
    </div>
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
							
												
							<div class="container">
								<div class="container-inner">
									<div class="page-title">
    <h1>Shopping Cart is Empty</h1>
</div>
<div class="cart-empty">
            <p>No tienes productos en tu carrito de compras.</p>
    <p>Clicka <a href="index.html">Aquí</a> y continua comprando.</p>
    </div>
								</div>
							</div>
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
							autoPlay : false,
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
		<div class="block block-testimonial-sidebar">			
							<div class="block-title">
				<strong><span>Latest Testimonials</span></strong>
			</div>
			<div class="block-content">
				<ul class="owl">			
											<li class='testimonial-list'>								
							<div class="testimonial-sidebar-content">						
								<div class="content">
									<div class="testimonial-content-avatar">
										<img src="media/magentothem/avatar/testtimor1_1.png" alt="test" height="78" width="78" />									</div>
									<div class="post-by">							
										<span class="testimonial-author">Ms.Maria Carey</span>							
										<span class="testimonial-date">February 22, 2016</span>						
									</div>
									<a href="testimonial/index.html">						    
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et...						   
									</a>					
								</div>						
												
							</div>
													</li>                    
											<li class='testimonial-list'>								
							<div class="testimonial-sidebar-content">						
								<div class="content">
									<div class="testimonial-content-avatar">
										<img src="media/magentothem/avatar/testtimor1.png" alt="test" height="78" width="78" />									</div>
									<div class="post-by">							
										<span class="testimonial-author">Ms.Maria Carey</span>							
										<span class="testimonial-date">February 22, 2016</span>						
									</div>
									<a href="testimonial/index.html">						    
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et...						   
									</a>					
								</div>						
												
							</div>
													</li>                    
													
				</ul>
			</div>	
			
	</div>
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
