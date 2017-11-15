<div id="ajaxconfig_info" style="display:none">
                <a href="index.html"></a>
                <div><img src="../media/theme/default/loader.gif" alt="Loading Image" /></div>
                <button name="black" value="0.7"></button>
                <input type="hidden" value="" />
                <input type="hidden" id="enable_module" value="1" />
                <input class="effect_to_cart" type="hidden" value="" />
                <input class="title_shopping_cart" type="hidden" value="Go to shopping cart" />
                <input class="title_shopping_continue" type="hidden" value="Continue Shopping" />
                <input class="title_shopping_wishlist" type="hidden" value="Go to wishlist" />
                <input class="title_shopping_compare" type="hidden" value="Go to list Compare" />
                <input class="confirm_delete_product" type="hidden" value="Are you sure you would like to remove this item ?" />
                <input class="title_add_to_cart" type="hidden" value="Item was successfully added to your cart" />
                <input class="title_add_to_wishlist" type="hidden" value="Item was successfully added to your wishlist" />
                <input class="title_add_to_compare" type="hidden" value="Item was successfully added to your compare" />
                <input class="using_ssl" type="hidden" value="0" />
            </div>
            <div id="ajaxcart-checkout-content" style="display:none;"></div>
            <div id="productHaveOption" style="display:block;"></div>
            <script type="text/javascript">
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
                <input type="hidden" id="base-url" value="#" />
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
                CATEGORY_ENABLE: 'true',
                BASE_URL: '#',
                PARENT_ELEMENT: 'item-inner',
                CHILDREN_ELEMENT: 'products'
            };
            initQuickButton('.ma-featuredproductslider-container');
            initQuickButton('.ma-timer-container');
            initQuickButton('.ma-newproductslider-container');
            initQuickButton('.ma-upsellslider-container');
            initQuickButton('.ma-relatedslider-container');
            initQuickButton('.ma-onsaleproductslider-container');
            </script>