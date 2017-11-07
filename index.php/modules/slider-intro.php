<!-- start enable -->
            <div class="ma-banner7-container">
                <!--<div class="container">-->
                <div class="flexslider ma-nivoslider">
                    <div class="ma-loading"></div>
                    <div id="ma-inivoslider-banner7" class="slides">
                        <a href="index.html#" title="Read more">
										<img style="display: none;"  src="../media/magentothem/banner7/slider1-pet.jpg" alt="" title="#banner7-caption1"  />
											</a>
                        <a href="index.html#" title="Read more">
										<img style="display: none;"  src="../media/magentothem/banner7/slider2-pet.jpg" alt="" title="#banner7-caption2"  />
											</a>
                    </div>
                    <div id="banner7-caption1" class="banner7-caption nivo-html-caption nivo-caption">
                        <div class="timethai" style=" 
									position:absolute;
									top:0;
									left:0;
									background-color:rgba(152, 122, 116, 0.82);
									height:5px;
									-webkit-animation: myfirst 5000ms ease-in-out;
									-moz-animation: myfirst 5000ms ease-in-out;
									-ms-animation: myfirst 5000ms ease-in-out;
									animation: myfirst 5000ms ease-in-out;
								   
								   ">
                        </div>
                        <div class="container" style="height:100%;">
                            <div class="banner7-content slider-1 ">
                                <div class="bannerslideshow">
                                    <h1 class="title1"><span>Cat’s Food</span></h1>
                                    <h2 class="title2"><span>Cat Dry Superfood Blend Egg Sweet Potato Front.</span></h2>
                                    <h3 class="title3"><span>$8.00 $10.00</span></h3>
                                    <div class="banner7-readmore">
                                        <a href="index.html#" title="Shop Now">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
                        <div class="timethai" style=" 
									position:absolute;
									top:0;
									left:0;
									background-color:rgba(152, 122, 116, 0.82);
									height:5px;
									-webkit-animation: myfirst 5000ms ease-in-out;
									-moz-animation: myfirst 5000ms ease-in-out;
									-ms-animation: myfirst 5000ms ease-in-out;
									animation: myfirst 5000ms ease-in-out;
								   
								   ">
                        </div>
                        <div class="container" style="height:100%;">
                            <div class="banner7-content slider-2 ">
                                <div class="bannerslideshow">
                                    <h1 class="title1"><span>Dog’s Food</span></h1>
                                    <h2 class="title2"><span>Cat Dry Superfood Blend Egg Sweet Potato Front.</span></h2>
                                    <h3 class="title3"><span>$8.00 $10.00</span></h3>
                                    <div class="banner7-readmore">
                                        <a href="index.html#" title="Shop Now">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                    $jq(window).load(function() {
                        $jq(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e) {
                            $jq('.ma-banner7-container .timethai').addClass('pos_hover');
                        });

                        $jq(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e) {
                            $jq('.ma-banner7-container .timethai').removeClass('pos_hover');
                        });
                    });
                    $jq(window).load(function() {
                        $jq('#ma-inivoslider-banner7').nivoSlider({
                            effect: 'random',
                            slices: 15,
                            boxCols: 8,
                            boxRows: 4,
                            animSpeed: 600,
                            pauseTime: 5000,
                            startSlide: 0,
                            directionNav: false,
                            controlNavThumbs: false,
                            pauseOnHover: true,
                            manualAdvance: false,
                            prevText: 'Prev',
                            nextText: 'Next',
                            afterLoad: function() {
                                $jq('.ma-loading').css("display", "none");
                                //$jq('.banner7-title, .banner7-des, .banner7-readmore').css("left","100px") ;
                            },
                            beforeChange: function() {
                                //$jq('.banner7-title, .banner7-des').css("left","-2000px" );
                                //$jq('.banner7-readmore').css("left","-2000px"); 
                            },
                            afterChange: function() {
                                //$jq('.banner7-title, .banner7-des, .banner7-readmore').css("left","40px") 
                            }
                        });
                    });
                    </script>
                </div>
                <!--</div>-->
            </div>
            <!-- end enable -->