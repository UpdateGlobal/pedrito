<?php include("modules/head.php"); ?>
<body class=" catalog-category-view categorypath-dog-s-food-html category-dog-s-food">
<div class="wrapper">
    <div class="page">
<div class="header-container">

<?php 
include("modules/topbar.php");
include("modules/header.php");
?> 
    
	<div class="main-container col2-left-layout">
	<div class="main">
	<div class="col-main">
	<div class="breadcrumbs">
	<div class="container">
		<div class="container-inner">
			<ul>
		<li class="home">
		<a href="index.html" title="Go to Home Page">Home</a>
		<span><i class="fa fa-angle-right"></i> </span>
		</li>
		<li class="category82">
		<strong>Dog’s Food</strong>
		</li>
		</ul>
		</div>
	</div>
</div>
		<div class="container">
			<div class="container-inner">
				<div class="row">
					<div class="col-left sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12"><div class="block block-layered-nav">
    <div class="block-title">
        <strong><span>Shop By</span></strong>
    </div>
    <div class="block-content">
        <p class="block-subtitle">Shopping Options</p>
            <dl id="narrow-by-list">
                <div class="layered-attribute">
						<div class="title-layered"><dt>Category</dt></div>
						<dd>
<ol>
    <li>
        <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?cat=88')" >dress</a> 
                <span> (2) </span>    </li>
    <li>
        <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?cat=89')" >bottoms</a> 
                <span> (15) </span>    </li>
    <li>
        <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?cat=90')" >weaters</a> 
                <span> (3) </span>    </li>
</ol>
</dd>
</div>
        <div class="layered-price">
			<div class="title-layered"><dt>Price</dt></div>
		<dd>		<label>Range:</label>
        <input type="text" disabled ="disabled" id="amount" style="" />
    
	<div id="slider-range"></div>
    <div id ="search" style ="margin:10px 10px 0px 10px;">
        <input type ="text" name ="first_price" class="first_price" style="width:40px"/>
        <input type ="text" name ="last_price" class="last_price" style="width:40px"/>
        <button class="button" type ="button" name ="search_price" id ="search_price"><span><span>Show</span></span></button>
    </div>
	
<script type ="text/javascript">
//<![CDATA[  
    $jq(function() {
        
        var currencies = "€";
        var toolbar_status = "1";
        var rate = "0.71";
        var min = "213"
            min = Number(min);
        var max = "355"
            max = Number(max);
        var currentMinPrice = "213"
            currentMinPrice = Number(currentMinPrice);
        var currentMaxPrice = "355"
        //alert('min: '+min+'--max: '+ max+ 'currentMin: '+currentMinPrice);
        currentMaxPrice = Number(currentMaxPrice);
        var params = "&p=2";
		var tax_min = "0";
		var tax_max = "0";
        params = $jq.trim(params);
        //slider
        $jq( "#slider-range" ).slider({
            range: true,
            min: min,
            max: max,
            values: [ currentMinPrice, currentMaxPrice ],
            slide: function( event, ui ) {
                $jq( "#amount" ).val( currencies + ui.values[ 0 ] + " - "+ currencies + ui.values[ 1 ] );
                $jq('input[name="first_price"]').val(ui.values[0]);
                $jq('input[name="last_price"]').val(ui.values[1]);
            },
            stop: function( event, ui ) {
                var first =   ui.values[0];
                var  last =  ui.values[1];
                     var baseUrl = 'http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html'+'?rate='+rate+'&first='+first+'&last='+last+params+'&tax_min='+tax_min+'&tax_max='+tax_max;
                     ajaxFilter(baseUrl);
                
            }
        });

        $jq( "#amount" ).val( currencies + $jq( "#slider-range" ).slider( "values", 0 ) +
            " - "+currencies + $jq( "#slider-range" ).slider( "values", 1 ) );
        $jq('input[name="first_price"]').val($jq( "#slider-range" ).slider( "values", 0 ));
        $jq('input[name="last_price"]').val($jq( "#slider-range" ).slider( "values", 1 ));   
         
         
        //search price from input box
        $jq('#search_price').each(function(){
            $jq(this).live('click',function(){
                var first_price = $jq('input[name="first_price"]').val();
                var last_price = $jq('input[name="last_price"]').val();
                var rate = "0.71";
                var urlFilter = 'http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html'+'?rate='+rate+'&first='+first_price+'&'+'last='+last_price+params;
                ajaxFilter(urlFilter);
                return false;
            })
        });
        
        
        $jq('#slider-range a:first').addClass('first_item');
        $jq('#slider-range a:last').addClass('last_item');
        
        //tooltip
        // $jq('.button.btn-cart').attr('data-original-title',$jq('button.btn-cart').attr('title'));
        // $jq('.link-wishlist').attr('data-original-title',$jq('.link-wishlist').attr('title'));
        // $jq('.link-compare').attr('data-original-title',$jq('.link-compare').attr('title'));
        // $jq('.email-friend-a').attr('data-original-title',$jq('.email-friend-a').attr('title'));
        // $jq('.brand_item').attr('data-original-title',$jq('.brand_item').attr('title'));
        // $jq('button.btn-cart, .link-wishlist, .link-compare,.email-friend-a,.brand_item').attr('rel', 'tooltip');
        // $jq("[rel=tooltip]").tooltip();
         
    });
 //]]>
</script>
</dd>
</div>
    <div class="layered-attribute">
	<div class="title-layered"><dt>Manufacturer</dt></div>
	<dd>
<ol>
    <li>
    <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?manufacturer=10')" >Adidas</a> 
        <span> (3) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?manufacturer=11')" >Chanel</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?manufacturer=12')" >DKNY</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?manufacturer=13')" >Dolce</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?manufacturer=14')" >Gabbana</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?manufacturer=15')" >Nike</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?manufacturer=16')" >Vogue</a> 
                <span> (2) </span>    </li>
</ol>
</dd>
					</div>
                                                					<div class="layered-attribute">
						<div class="title-layered"><dt>Color</dt></div>
						<dd>
<ol>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?color=4')" >Black</a> 
                <span> (3) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?color=5')" >Blue</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?color=6')" >Brown</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?color=7')" >Pink</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?color=8')" >Red</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?color=9')" >While</a> 
                <span> (2) </span>    </li>
    <li>
                <a class="ajaxLayer"  onclick = "ajaxFilter('http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?color=3')" >Yellow</a> 
                <span> (2) </span>    </li>
</ol>
</dd>
					</div>
                                            </dl>
            <script type="text/javascript">decorateDataList('narrow-by-list')</script>
            </div>
</div>

<div class="block block-list block-compare">
    <div class="block-title">
        <strong><span>Compare Products                            <small>(15)</small>
                    </span></strong>
    </div>
    <div class="block-content">
            <ol id="compare-items">
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="16" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="voluptas-nulla.html">voluptas nulla</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="18" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="vivamus-adipiscing.html">Vivamus adipiscing </a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="19" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="malesuada.html">Malesuada</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="20" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="http://www.plazathemes.com/demo/ma_fobe/index.php/vulputate-mollis.html">Vulputate mollis</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="21" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="conubia-nostra.html">Conubia Nostra</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="22" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="http://www.plazathemes.com/demo/ma_fobe/index.php/conubia-nostra-66.html">Mattis Lobortis</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="23" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="dignissim-semper.html">Dignissim Semper</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="24" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="http://www.plazathemes.com/demo/ma_fobe/index.php/suspendisse.html">Suspendisse</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="25" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="himenaeos.html">Himenaeos</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="26" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="class-aptent-taciti.html">Class aptent taciti</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="27" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="quisque-in-arcu-71.html">Quisque in arcu</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="28" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="gravida-et-mattis.html">Gravida et mattis</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="29" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="aliquet-urna.html">Aliquet urna</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="30" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="aenean-eleifend.html">Aenean eleifend</a></p>
            </li>
                    <li class="item">
                <input type="hidden" class="compare-item-id" value="31" />
                <a href="dog-s-food-p=2.html" title="Remove This Item" class="btn-remove" onclick="return confirm('Are you sure you would like to remove this item from the compare products?');">Remove This Item</a>
                <p class="product-name"><a href="taciti-sociosqu.html">Taciti sociosqu</a></p>
            </li>
                </ol>
        <script type="text/javascript">decorateList('compare-items')</script>
        <div class="actions">
            <a href="index.html" onclick="return confirm('Are you sure you would like to remove all products from your comparison?');">Clear All</a>
            <button type="button" title="Compare" class="button" onclick="popWin('http://www.plazathemes.com/demo/ma_fobe/index.php/catalog/product_compare/index/items/16,18,19,20,21,22,23,24,25,26,27,28,29,30,31/uenc/aHR0cDovL3d3dy5wbGF6YXRoZW1lcy5jb20vZGVtby9tYV9mb2JlL2luZGV4LnBocC9kb2ctcy1mb29kLmh0bWw_cD0y/','compare','top:0,left:0,width=820,height=600,resizable=yes,scrollbars=yes')"><span><span>Compare</span></span></button>
        </div>
        </div>
</div>

<div class="hidden-xs banner-left banner-static"><a href="dog-s-food-p=2.html#"><img alt="" src="http://www.plazathemes.com/demo/ma_fobe/media/wysiwyg/banner-left.jpg" /></a></div>
</div>
<div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="page-title category-title">
        <h1>Dog’s Food</h1>
</div>




    <div class="category-products">
    <div class="toolbar">
        <div class="sorter">
        
    
        <div class="sort-by hidden-xs">
            <label>Sort By</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?dir=asc&amp;order=position" selected="selected">
                    Position                </option>
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?dir=asc&amp;order=name">
                    Name                </option>
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?dir=asc&amp;order=price">
                    Price                </option>
                        </select>
                            <a href="dog-s-food-dir=asc&order=position.html" title="Set Ascending Direction"><img src="../skin/frontend/ma_fobe/ma_fobe_pet/images/i_desc_arrow.gif" alt="Set Ascending Direction" class="v-middle" /><i class="fa fa-long-arrow-down"></i></a>
                    </div>
    </div>
        <div class="pager">
        <!--<p class="amount">
                                                        <strong></strong>
                    </p>-->

        <div class="limiter hidden-xs">
            <label>Show</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?limit=9" selected="selected">
                    9                </option>
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?limit=12">
                    12                </option>
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?limit=24">
                    24                </option>
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?limit=36">
                    36                </option>
                        </select> per page        </div>
		
        <div id ="wrapper">
    <div id="loading" style ="position: fixed;top: 50%;left: 50%;margin-top: -50px;"></div>
</div>
<div class="pages">
        <strong>Page:</strong>
        <ol>
        <li>
        <a class="previous i-previous" href="dog-s-food-p=1.html" title="Previous">
        <i class="fa fa-arrow-left"></i>
        </a>
            </li>
        <li><a href="dog-s-food-p=1.html">1</a></li>
        <li class="current">2</li>
        </ol>

    </div>
    <div class="view-mode">
	<label>View as:</label>
	<strong title="Grid" class="grid">Grid</strong>&nbsp;
	<a href="dog-s-food-mode=list.html" title="List" class="list">List</a>&nbsp;
	</div>
		
    </div>
	
</div>
<div class="row">
		<ul class="products-grid module-product">
			 <li class="col-sm-4 col-md-4 col-sms-12 col-smb-12 item first">
				<div class="item-inner">
					<div class="ma-box-content">
						<div class="products">
							<span class='label-pro-sale'>-10%<small>Off</small></span>		
                             <div class="label-pro-new"><span>new</span></div>
							 	<a href="dog-s-food/conubia-nostra-22.html" title="Mattis Lobortis" class="product-image">
								<span class="product-image">
									<img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-6_5.jpg"  alt="Mattis Lobortis" />
								</span>
											
							</a>
							
						</div>
						<div class="des">
							<h2 class="product-name"><a href="dog-s-food/conubia-nostra-22.html" title="Mattis Lobortis">Mattis Lobortis</a></h2>
							
			 <div class="price-box">
                <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-22">
                    €353.35            
                </span>
            </p>

            <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-22">
                    €318.02                </span>
                </p>
            </div>
<div class="actions clearfix">
<button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('http://www.plazathemes.com/demo/ma_fobe/index.php/checkout/cart/add/uenc/aHR0cDovL3d3dy5wbGF6YXRoZW1lcy5jb20vZGVtby9tYV9mb2JlL2luZGV4LnBocC9kb2ctcy1mb29kLmh0bWw_cD0y/product/22/form_key/oilL6EyErfFE6QIP/')"><span><span>Add to Cart</span></span></button>
<ul class="add-to-links">
<li><a href="customer/account/login/index.html" title="Add to Wishlist" title="Add to Wishlist" class="link-wishlist">Add to Wishlist</a></li>
<li><span class="separator">|</span> <a href="dog-s-food-p=2.html" title="Add to Compare" title="Add to Compare" class="link-compare">Add to Compare</a></li>
																	</ul>
							</div>
						</div>
					</div>	
				</div>
			</li>
						     
			<li class="col-sm-4 col-md-4 col-sms-12 col-smb-12 item">
				<div class="item-inner">
					<div class="ma-box-content">
						<div class="products">
							<span class='label-pro-sale'>-10%<small>Off</small></span>	
                             <div class="label-pro-new"><span>new</span></div>
							 	<a href="dog-s-food/conubia-nostra.html" title="Conubia Nostra" class="product-image">
								<span class="product-image">
									<img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-5_4.jpg"  alt="Conubia Nostra" />
								</span>
											
							</a>
							
						</div>
						<div class="des">
							<h2 class="product-name"><a href="dog-s-food/conubia-nostra.html" title="Conubia Nostra">Conubia Nostra</a></h2>
					<div class="price-box">
                    <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-21">
                    €353.35                
                </span></p>
                 <p class="special-price">
                <span class="price-label">Special Price</span>
                <span class="price" id="product-price-21">
                    €318.02                </span>
                </p>
            </div>
    <div class="actions clearfix">
	<button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('http://www.plazathemes.com/demo/ma_fobe/index.php/checkout/cart/add/uenc/aHR0cDovL3d3dy5wbGF6YXRoZW1lcy5jb20vZGVtby9tYV9mb2JlL2luZGV4LnBocC9kb2ctcy1mb29kLmh0bWw_cD0y/product/21/form_key/oilL6EyErfFE6QIP/')"><span><span>Add to Cart</span></span></button>
		<ul class="add-to-links">
		<li><a href="customer/account/login/index.html" title="Add to Wishlist" title="Add to Wishlist" class="link-wishlist">Add to Wishlist</a></li>
		<li><span class="separator">|</span> <a href="dog-s-food-p=2.html" title="Add to Compare" title="Add to Compare" class="link-compare">Add to Compare</a></li>
		</ul>
							</div>
						</div>
					</div>	
				</div>
			</li>
						     
			<li class="col-sm-4 col-md-4 col-sms-12 col-smb-12 item last">
				<div class="item-inner">
					<div class="ma-box-content">
						<div class="products">
						<div class="label-pro-new"><span>new</span></div>
						<a href="dog-s-food/vulputate-mollis.html" title="Vulputate mollis" class="product-image">
								<span class="product-image">
									<img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-4_3.jpg"  alt="Vulputate mollis" />
								</span>
							</a>
							</div>
						<div class="des">
							<h2 class="product-name"><a href="dog-s-food/vulputate-mollis.html" title="Vulputate mollis">Vulputate mollis</a></h2>
						<div class="price-box">
                        <span class="regular-price" id="product-price-20">
                        <span class="price">€353.35</span>                              
                    </span>
                </div>
        <div class="actions clearfix">
		<button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('http://www.plazathemes.com/demo/ma_fobe/index.php/checkout/cart/add/uenc/aHR0cDovL3d3dy5wbGF6YXRoZW1lcy5jb20vZGVtby9tYV9mb2JlL2luZGV4LnBocC9kb2ctcy1mb29kLmh0bWw_cD0y/product/20/form_key/oilL6EyErfFE6QIP/')"><span><span>Add to Cart</span></span></button>
			<ul class="add-to-links">
			<li><a href="http://www.plazathemes.com/demo/ma_fobe/index.php/wishlist/index/add/product/20/form_key/oilL6EyErfFE6QIP/" title="Add to Wishlist" title="Add to Wishlist" class="link-wishlist">Add to Wishlist</a></li>
			<li><span class="separator">|</span> <a href="dog-s-food-p=2.html" title="Add to Compare" title="Add to Compare" class="link-compare">Add to Compare</a></li>
			</ul>
							</div>
						</div>
					</div>	
				</div>
			</li>
		</ul>
	</div>
	<div class="row">
		<ul class="products-grid module-product">
			 
			<li class="col-sm-4 col-md-4 col-sms-12 col-smb-12 item first">
				<div class="item-inner">
					<div class="ma-box-content">
						<div class="products">
						<div class="label-pro-new"><span>new</span></div>
						<a href="dog-s-food/malesuada.html" title="Malesuada" class="product-image">
								<span class="product-image">
									<img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-3_2.jpg"  alt="Malesuada" />
								</span>
											
							</a>
							</div>
		<div class="des">
		<h2 class="product-name"><a href="dog-s-food/malesuada.html" title="Malesuada">Malesuada</a></h2>
		<div class="price-box">
        <span class="regular-price" id="product-price-19">
        <span class="price">€353.35</span>                                    
         </span>
        </div>
          <div class="actions clearfix">
		<button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('http://www.plazathemes.com/demo/ma_fobe/index.php/checkout/cart/add/uenc/aHR0cDovL3d3dy5wbGF6YXRoZW1lcy5jb20vZGVtby9tYV9mb2JlL2luZGV4LnBocC9kb2ctcy1mb29kLmh0bWw_cD0y/product/19/form_key/oilL6EyErfFE6QIP/')"><span><span>Add to Cart</span></span></button>
			<ul class="add-to-links">
			<li><a href="customer/account/login/index.html" title="Add to Wishlist" title="Add to Wishlist" class="link-wishlist">Add to Wishlist</a></li>
			<li><span class="separator">|</span> <a href="dog-s-food-p=2.html" title="Add to Compare" title="Add to Compare" class="link-compare">Add to Compare</a></li>
			</ul>
							</div>
						</div>
					</div>	
				</div>
			</li>
						     
			<li class="col-sm-4 col-md-4 col-sms-12 col-smb-12 item">
				<div class="item-inner">
					<div class="ma-box-content">
						<div class="products">
							<span class='label-pro-sale'>-10%<small>Off</small></span>			
                             <div class="label-pro-new"><span>new</span></div>
							 <a href="dog-s-food/vivamus-adipiscing.html" title="Vivamus adipiscing " class="product-image">
								<span class="product-image">
									<img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-2_1.jpg"  alt="Vivamus adipiscing " />
								</span>
							</a>
							
						</div>
						<div class="des">
							<h2 class="product-name"><a href="dog-s-food/vivamus-adipiscing.html" title="Vivamus adipiscing ">Vivamus adipiscing </a></h2>
					<div class="price-box">
                    <p class="old-price">
                    <span class="price-label">Regular Price:</span>
                   <span class="price" id="old-price-18">
                    €353.35                </span>
            </p>
                  <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-18">
                    €318.02                </span>
                </p>
                </div>
                <div class="actions clearfix">
			<button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('http://www.plazathemes.com/demo/ma_fobe/index.php/checkout/cart/add/uenc/aHR0cDovL3d3dy5wbGF6YXRoZW1lcy5jb20vZGVtby9tYV9mb2JlL2luZGV4LnBocC9kb2ctcy1mb29kLmh0bWw_cD0y/product/18/form_key/oilL6EyErfFE6QIP/')"><span><span>Add to Cart</span></span></button>
				<ul class="add-to-links">
				<li><a href="http://www.plazathemes.com/demo/ma_fobe/index.php/wishlist/index/add/product/18/form_key/oilL6EyErfFE6QIP/" title="Add to Wishlist" title="Add to Wishlist" class="link-wishlist">Add to Wishlist</a></li>
				<li><span class="separator">|</span> <a href="dog-s-food-p=2.html" title="Add to Compare" title="Add to Compare" class="link-compare">Add to Compare</a></li>
				</ul>
				</div>
				</div>
				</div>	
				</div>
			</li>
						     
			<li class="col-sm-4 col-md-4 col-sms-12 col-smb-12 item last">
				<div class="item-inner">
					<div class="ma-box-content">
						<div class="products">
							<span class='label-pro-sale'>-10%<small>Off</small></span>								 <div class="label-pro-new"><span>new</span></div>
							 <a href="dog-s-food/taciti-sociosqu.html" title="Taciti sociosqu" class="product-image">
								<span class="product-image">
									<img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-9_9.jpg"  alt="Taciti sociosqu" />
								</span>
							</a>
							</div>
						<div class="des">
							<h2 class="product-name"><a href="dog-s-food/taciti-sociosqu.html" title="Taciti sociosqu">Taciti sociosqu</a></h2>
							<div class="price-box">
                                            
                    <p class="old-price">
                <span class="price-label">Regular Price:</span>
                <span class="price" id="old-price-31">
                    €353.35             
                 </span>
            </p>
                   <p class="special-price">
                    <span class="price-label">Special Price</span>
                <span class="price" id="product-price-31">
                    €318.02                </span>
                </p>
            </div>
           <div class="actions clearfix">
		<button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('http://www.plazathemes.com/demo/ma_fobe/index.php/checkout/cart/add/uenc/aHR0cDovL3d3dy5wbGF6YXRoZW1lcy5jb20vZGVtby9tYV9mb2JlL2luZGV4LnBocC9kb2ctcy1mb29kLmh0bWw_cD0y/product/31/form_key/oilL6EyErfFE6QIP/')"><span><span>Add to Cart</span></span></button>
		<ul class="add-to-links">
		<li><a href="customer/account/login/index.html" title="Add to Wishlist" title="Add to Wishlist" class="link-wishlist">Add to Wishlist</a></li>
		<li><span class="separator">|</span> <a href="dog-s-food-p=2.html" title="Add to Compare" title="Add to Compare" class="link-compare">Add to Compare</a></li>
		</ul>
		</div>
		</div>
		</div>	
		</div>
			</li>
			</ul>
	</div>
		<script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd','even','first','last'])</script>
    
    <div class="toolbar-bottom">
        <div class="toolbar">
        <div class="sorter">
        <div class="sort-by hidden-xs">
            <label>Sort By</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?dir=asc&amp;order=position" selected="selected">
                    Position                </option>
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?dir=asc&amp;order=name">
                    Name                </option>
                            <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?dir=asc&amp;order=price">
                    Price                </option>
                        </select>
                            <a href="dog-s-food-dir=asc&order=position.html" title="Set Ascending Direction"><img src="../skin/frontend/ma_fobe/ma_fobe_pet/images/i_desc_arrow.gif" alt="Set Ascending Direction" class="v-middle" /><i class="fa fa-long-arrow-down"></i></a>
                    </div>
    </div>
        <div class="pager">
        <!--<p class="amount">
                                                        <strong></strong>
                    </p>-->

        <div class="limiter hidden-xs">
            <label>Show</label>
            <select onchange="setLocation(this.value)">
                <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?limit=9" selected="selected">
                    9   
                </option>
                <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?limit=12">
                    12                
                </option>
                <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?limit=24">
                    24                
                </option>
                <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/dog-s-food.html?limit=36">
                    36                
                </option>
                </select> per page        
            </div>
		
        <div id ="wrapper">
          <div id="loading" style ="position: fixed;top: 50%;left: 50%;margin-top: -50px;"></div>
        </div>

      <div class="pages">
        <strong>Page:</strong>
        <ol>
        <li>
        <a class="previous i-previous" href="dog-s-food-p=1.html" title="Previous">
        <i class="fa fa-arrow-left"></i>
        </a>
        </li>
        <li><a href="dog-s-food-p=1.html">1</a></li>
        <li class="current">2</li>
        </ol>

    </div>
    <div class="view-mode">
	<label>View as:</label>
		<strong title="Grid" class="grid">Grid</strong>&nbsp;
			<a href="dog-s-food-mode=list.html" title="List" class="list">List</a>&nbsp;
		</div>
		
    </div>
	
</div>
    </div>
</div>
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
                <div class="item-inner">	    																			<a href="dog-s-food-p=2.html#" title=""><img src="../media/magentothem/brandslider/brand1.jpg" alt="" /></a></div>
                </li>                   
				<li class='item'>					
                <div class="item-inner">	    																			<a href="dog-s-food-p=2.html#" title=""><img src="../media/magentothem/brandslider/brand2.jpg" alt="" /></a></div>
                </li>                   
				<li class='item'>	
                    <div class="item-inner">	    																		<a href="dog-s-food-p=2.html#" title=""><img src="../media/magentothem/brandslider/brand3.jpg" alt="" /></a>												
					</div>
                                   
                </li>                   
				    <li class='item'>					
                        <div class="item-inner">	    																
                            <a href="dog-s-food-p=2.html#" title=""><img src="../media/magentothem/brandslider/brand4.jpg" alt="" /></a>												
						</div>
                                   
                </li>                   
				    <li class='item'>					
                        <div class="item-inner">	    																	<a href="dog-s-food-p=2.html#" title=""><img src="../media/magentothem/brandslider/brand5.jpg" alt="" /></a>												
						</div>
                                   
                </li>                   
				    <li class='item'>					
                        <div class="item-inner">	    																
                            <a href="dog-s-food-p=2.html#" title=""><img src="../media/magentothem/brandslider/brand3.jpg" alt="" /></a>												
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
										<img src="../media/magentothem/avatar/testtimor1_1.png" alt="test" height="78" width="78" />									</div>
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
										<img src="../media/magentothem/avatar/testtimor1.png" alt="test" height="78" width="78" />									</div>
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
				
<div class="ma-footer-static">
	<div class="footer-static">
		<div class="container">
			<div class="container-inner">
			<div class="about-us">
<div class="about-us-inner">
<div class="row">
<div class="col col-left col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
<div class="col col-right col-lg-9 col-md-9 col-sm-12 col-xs-12">
<div class="col-right-inner">
<h1>about us</h1>
<div class="des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adm.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</div>
<div class="footer-contact">
<p class="adress"><span class="ft-content">8901 Marmora Road, Glasgow D04 89 GR, New York</span></p>
<p class="phone"><span class="ft-content"><span class="mobile">Telephone:866-540-3229</span><span class="fax">Fax: (+1) 866-540-3229</span></span></p>
<p class="email"><span class="ft-content">Email: support@plazathemes.com</span></p>
</div>
</div>
</div>
</div>
</div>
</div>			<div class="footer-static-top">
<div class="row">
<div class="f-col f-col-24 col-sm-6 col-md-2 col-sms-6 col-smb-12">
<div class="footer-static-title">
<h3>My account</h3>
</div>
<div class="footer-static-content">
<ul>
<li class="first"><a href="dog-s-food-p=2.html#">My Account</a></li>
<li><a href="dog-s-food-p=2.html#">Login</a></li>
<li><a href="dog-s-food-p=2.html#">My Cart</a></li>
<li><a href="dog-s-food-p=2.html#">Wishlist</a></li>
<li class="last"><a href="contacts.html">Contact Us</a></li>
</ul>
</div>
</div>
<div class="f-col f-col-24 col-sm-6 col-md-2 col-sms-6 col-smb-12">
<div class="footer-static-title">
<h3>Information</h3>
</div>
<div class="footer-static-content">
<ul>
<li class="first"><a href="catalog/seo_sitemap/category.html">Sitemap</a></li>
<li><a href="privacy-policy-cookie-restriction-mode.html">Privacy Policy</a></li>
<li><a href="customer/account/login/index.html">Your Account</a></li>
<li><a href="catalogsearch/advanced.html">Advanced Search</a></li>
<li class="last"><a href="contacts.html">Contact Us</a></li>
</ul>
</div>
</div>
<div class="f-col f-col-24 col-sm-6 col-md-2 col-sms-6 col-smb-12">
<div class="footer-static-title">
<h3>Extras</h3>
</div>
<div class="footer-static-content">
<ul>
<li class="first"><a href="dog-s-food-p=2.html#">Product Recall</a></li>
<li><a href="dog-s-food-p=2.html#">Gift Vouchers</a></li>
<li><a href="dog-s-food-p=2.html#">Returns and Exchanges</a></li>
<li><a href="dog-s-food-p=2.html#">Shipping Options</a></li>
<li class="last"><a href="dog-s-food-p=2.html#">Help &amp; FAQs</a></li>
</ul>
</div>
</div>
<div class="f-col f-col-24 col-sm-6 col-md-3 col-sms-6 col-smb-12">				<div class="ma-randomproductslider-container product-style3">
							<div class="ma-randomproductslider-title footer-static-title"><h3>Random Products</h3></div>
										<div class="row">	
				<ul class="owl">
																<li class='randomproductslider-item'>							<div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="http://www.plazathemes.com/demo/ma_fobe/index.php/vulputate-mollis.html" title="Vulputate mollis" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-4_3.jpg" alt="Vulputate mollis" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="http://www.plazathemes.com/demo/ma_fobe/index.php/vulputate-mollis.html" title="Vulputate mollis">Vulputate mollis</a></h2>
									<div class="price-box">
											<div class="price-boxs">
											<span class="regular-price">
											<span class="price">$500.00</span>                                    
											</span>    
											</div>		
                                        </div>
										<div class="actions">
										</div>
										</div>
							</div>
							</div>
												                   
							<div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="aliquet-urna.html" title="Aliquet urna" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-3_4.jpg" alt="Aliquet urna" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="aliquet-urna.html" title="Aliquet urna">Aliquet urna</a></h2>
										<div class="price-box">
											<div class="price-boxs">
											<span class="regular-price">
											<span class="price">$500.00</span>                                    
											</span>    
											</div>				
                                        </div>
									<div class="actions">
									</div>
									</div>
							</div>
							</div>
							</li>                   
							<li class='randomproductslider-item'>							
                                <div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="http://www.plazathemes.com/demo/ma_fobe/index.php/suspendisse.html" title="Suspendisse" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-8_4.jpg" alt="Suspendisse" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="http://www.plazathemes.com/demo/ma_fobe/index.php/suspendisse.html" title="Suspendisse">Suspendisse</a></h2>
										<div class="price-box">
											<div class="price-boxs">
											<span class="regular-price">
											<span class="price">$440.00</span>                                    
											</span>    
											</div>		
                                        </div>
									<div class="actions">
									</div>
									</div>
							</div>
							</div>
							<div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="himenaeos.html" title="Himenaeos" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-9_5.jpg" alt="Himenaeos" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="himenaeos.html" title="Himenaeos">Himenaeos</a></h2>
										<div class="price-box">
											<div class="price-boxs">
											<span class="regular-price">
											<span class="price">$300.00</span>                                    
											</span>    
											</div>
                                        </div>
									<div class="actions">
									</div>
								</div>
							</div>
							</div>
							</li>                   
							<li class='randomproductslider-item'>				
                                <div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="gravida-et-mattis.html" title="Gravida et mattis" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-4_11.jpg" alt="Gravida et mattis" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="gravida-et-mattis.html" title="Gravida et mattis">Gravida et mattis</a></h2>
										<div class="price-box">
											<p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$400.00</span></p><p class="special-price">
											<span class="price-label">Special Price</span>
											<span class="price">$350.00</span>
											</p> 			
                                        </div>
										<div class="actions">
										</div>
										</div>
							</div>
							</div>
							<div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="taciti-sociosqu.html" title="Taciti sociosqu" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-9_9.jpg" alt="Taciti sociosqu" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="taciti-sociosqu.html" title="Taciti sociosqu">Taciti sociosqu</a></h2>
									<div class="price-box">
											<p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$500.00</span></p><p class="special-price">
											<span class="price-label">Special Price</span>
											<span class="price">$450.00</span>
											</p> 		
                                        </div>
									<div class="actions">
									</div>
								</div>
							</div>
							</div>
							</li>                   
								<li class='randomproductslider-item'>						
                                <div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="http://www.plazathemes.com/demo/ma_fobe/index.php/conubia-nostra-66.html" title="Mattis Lobortis" class="product-image">
                                        <img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-6_5.jpg" alt="Mattis Lobortis" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="http://www.plazathemes.com/demo/ma_fobe/index.php/conubia-nostra-66.html" title="Mattis Lobortis">Mattis Lobortis</a></h2>
										<div class="price-box">
											<p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$500.00</span></p><p class="special-price">
											<span class="price-label">Special Price</span>
											<span class="price">$450.00</span>
											</p> 		
                                        </div>
										<div class="actions">
										</div>
										</div>
							</div>
							</div>
												                   
						   <div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="voluptas-nulla.html" title="voluptas nulla" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-1.jpg" alt="voluptas nulla" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="voluptas-nulla.html" title="voluptas nulla">voluptas nulla</a></h2>
									<div class="price-box">
											<p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$500.00</span></p><p class="special-price">
											<span class="price-label">Special Price</span>
											<span class="price">$450.00</span>
											</p> 			
                                        </div>
									<div class="actions">
									</div>
									</div>
							</div>
							</div>
								</li>                   
									<li class='randomproductslider-item'>	
                                    <div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="quisque-in-arcu-71.html" title="Quisque in arcu" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-5_10.jpg" alt="Quisque in arcu" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="quisque-in-arcu-71.html" title="Quisque in arcu">Quisque in arcu</a></h2>
									<div class="price-box">
											<p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$500.00</span></p><p class="special-price">
											<span class="price-label">Special Price</span>
											<span class="price">$450.00</span>
											</p> 		
                                        </div>
								<div class="actions">
								</div>
								</div>
							</div>
							</div>
							<div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="aenean-eleifend.html" title="Aenean eleifend" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-6_13.jpg" alt="Aenean eleifend" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="aenean-eleifend.html" title="Aenean eleifend">Aenean eleifend</a></h2>
									<div class="price-box">
											<div class="price-boxs">
											<span class="regular-price">
											<span class="price">$330.00</span>                                    
											</span>    
											</div>				
                                        </div>
									<div class="actions">
										</div>
									</div>
							</div>
							</div>
												</li>                   
											<li class='randomproductslider-item'>	
                                                <div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="vivamus-adipiscing.html" title="Vivamus adipiscing " class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-2_1.jpg" alt="Vivamus adipiscing " /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="vivamus-adipiscing.html" title="Vivamus adipiscing ">Vivamus adipiscing </a></h2>
									<div class="price-box">
											<p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$500.00</span></p><p class="special-price">
											<span class="price-label">Special Price</span>
											<span class="price">$450.00</span>
											</p> 		
                                        </div>
									<div class="actions">
									</div>
									</div>
							</div>
							</div>
												                   
							<div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="class-aptent-taciti.html" title="Class aptent taciti" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-3_3.jpg" alt="Class aptent taciti" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="class-aptent-taciti.html" title="Class aptent taciti">Class aptent taciti</a></h2>
									<div class="price-box">
											<div class="price-boxs">
											<span class="regular-price">
											<span class="price">$500.00</span>                                    
											</span>    
											</div>				
                                        </div>
										<div class="actions">
										</div>
									</div>
							</div>
							</div>
							</li>                   
							<li class='randomproductslider-item'>							
                                <div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="malesuada.html" title="Malesuada" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-3_2.jpg" alt="Malesuada" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="malesuada.html" title="Malesuada">Malesuada</a></h2>
									<div class="price-box">
											<div class="price-boxs">
											<span class="regular-price">
											<span class="price">$500.00</span>                                    
											</span>    
											</div>		
                                        </div>
									<div class="actions">
									</div>
								</div>
							</div>
							</div>
							<div class="item-inner">
								<div class="ma-box-content">
								<div class="products">
									<a href="dignissim-semper.html" title="Dignissim Semper" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-7_4.jpg" alt="Dignissim Semper" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="dignissim-semper.html" title="Dignissim Semper">Dignissim Semper</a></h2>
									<div class="price-box">
											<p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$380.00</span></p><p class="special-price">
											<span class="price-label">Special Price</span>
											<span class="price">$320.00</span>
											</p> 		
                                        </div>
									<div class="actions">
									</div>
									</div>
							</div>
							</div>
									</li>                   
											<li class='randomproductslider-item'>			
                                                <div class="item-inner">
								                <div class="ma-box-content">
								                <div class="products">
									            <a href="conubia-nostra.html" title="Conubia Nostra" class="product-image"><img src="../media/catalog/product/cache/12/small_image/900x1167/9df78eab33525d08d6e5fb8d27136e95/p/e/pet-5_4.jpg" alt="Conubia Nostra" /></a>
								</div>
								<div class="des">
									<h2 class="product-name"><a href="conubia-nostra.html" title="Conubia Nostra">Conubia Nostra</a></h2>
																												<div class="price-box">
											<p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$500.00</span></p><p class="special-price">
											<span class="price-label">Special Price</span>
											<span class="price">$450.00</span>
											</p> 	
                                        </div>
									<div class="actions">
									</div>
							</div>
							</div>
							</div>
						</li>				
                    </ul>
			</div>
               <script type="text/javascript">
					$jq(document).ready(function(){
						$jq(".ma-randomproductslider-container .owl").owlCarousel({
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
							pagination : false,
							scrollPerPage:true,
						});
					});
				</script>
							
		 
	</div> 


</div>
<div class="f-col f-col-24 col-sm-6 col-md-3 col-sms-6 col-smb-12">
<div class="footer-static-title">
<h3>OPENING TIME</h3>
</div>
<div class="footer-static-content">
<div class="footer-time">
<p><span class="ft-content"><span class="day">Monday - Friday</span><span class="time">9:00 - 22:00</span></span></p>
<p><span class="ft-content"><span class="day">Saturday</span><span class="time">10:00 - 24:00</span></span></p>
<p><span class="ft-content"><span class="day">Sunday</span><span class="time">12:00 - 24:00</span></span></p>
</div>
<div class="payment"><label>payment methods</label><a href="dog-s-food-p=2.html#"><img alt="payment" src="../media/wysiwyg/payment.png" /></a></div>
</div>
</div>
</div>
</div>			</div>
		</div>
	</div>
</div>

<div class="footer-coppyright">
	<div class="container">
		<div class="container-inner">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<address>Copyright &copy; <a href="../../../index.html">Plazathemes</a>. All Rights Reserved</address>
					<div id="back-top" class="hidden-xs"></div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="store-switcher">
    <label for="select-store">Select Store:</label>
    <select id="select-store" title="Select Store" onchange="location.href=this.value">
                        <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/?___store=english7">Fobe Bread</option>
                    <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/?___store=english5">Fobe Food</option>
                    <option value="" selected="selected">Fobe Pet</option>
                    <option value="http://www.plazathemes.com/demo/ma_fobe/index.php/?___store=english1">Fobe Wine</option>
        </select>
</div>
				</div>
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
