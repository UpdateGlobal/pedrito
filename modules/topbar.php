<head>
    <style>
#popup {
   visibility: hidden;
   opacity: 0;
   margin-top: -300px;
   position: absolute;
}
#popup:target {
   visibility:visible;
   opacity: 1;
   background-color: rgba(0,0,0,0.8);
   position: fixed;
   top:0;
   left:0;
   right:0;
   bottom:0;
   margin:0;
   z-index: 999;
   transition:all 1s;
}
.popup-contenedor {
   position: relative;
   margin:7% auto;
   padding:30px 50px;
   background-color: #fafafa;
   color:#333;
   border-radius: 3px;
   width:50%;
}
a.popup-cerrar {
   position: absolute;
   top:3px;
   right:3px;
   background-color: #333;
   padding:7px 10px;
   font-size: 20px;
   text-decoration: none;
   line-height: 1;
   color:#fff;
}
.popup-contenedor1 {
   position: relative;
   margin:7% auto;
   padding:30px 50px;
   background-color: #499d85;
   color:#333;
   border-radius: 3px;
   width: 98%;
   margin-top: 15px;
}
@media screen and (min-width: 720px)  {
    .popup-contenedor1{
      width: 30%;
    }   
}
@media screen and (max-width: 720px)  {
    .popup-contenedor1{
      width: 99%;
    }   
}
#popup1 {
   visibility: hidden;
   opacity: 0;
   margin-top: -3000px;
   position: absolute;
}
#popup1:target {
   visibility:visible;
   opacity: 1;
   background-color: rgba(0,0,0,0.8);
   position: fixed;
   top:0;
   left:0;
   right:0;
   bottom:0;
   margin:0;
   z-index: 999;
   transition:all 1s;
}
</style>
</head>
<div class="top-link">
                    <div class="container">
                        <div class="container-inner">
                            <div class="row top-link-inner">
                                <div class="col-md-7 col-sm-6 col-xs-12">
                                    <div class="block-top-link">
                                        <div class="header-phone">
                                            <div class="header-phone-inner">
                                                <p>Teléfono : <span>982 332 122</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12">
                                    <div class="right-link clearfix">
                                        <div class="header-link">
                                            <ul class="menu dropit">
                                                <li class="dropit-trigger">
                                                    <a class='login_click'>Mi cuenta</a>
                                                    <ul class="dropit-submenu" id="menu_link">
                                                        <li class=" last"><a href="index.php#popup" title="Log In" class="popup-link">Regístrate</a>
                                                        </li>
                                                        <li class=" last"><a href="index.php#popup1" title="Log In" class="popup-link">Login</a>
                                                        </li>
                                                        <li><a href="carrito.php" title="My Cart" class="top-link-cart">Ver mi Carrito</a></li>
                                                        <li><a href="carrito.php" title="Checkout" class="top-link-checkout">Pagar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <form id="search_mini_form" action="#" method="get">
                                            <div class="label">search:<i class="fa fa-search ">&nbsp;</i></div>
                                            <div class="form-search">
                                                <input id="search" type="text" name="q" value="" class="input-text" maxlength="128" />
                                                <div class="loading_image_search"></div>
                                                <button type="submit" title="Search" class="button"><span><span><i class="fa fa-search ">&nbsp;</i>Search</span></span>
                                                </button>
                                                <button class="button none"><span><span><i class="fa fa-times">&nbsp;</i></span></span>
                                                </button>
                                                <div id="search_autocomplete" class="search-autocomplete"></div>
                                                <script type="text/javascript">
                                                //<![CDATA[
                                                var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Busca aquí... ');
                                                searchForm.initAutocomplete('#', 'search_autocomplete');
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
                