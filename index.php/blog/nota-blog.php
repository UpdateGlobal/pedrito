<?php include("../modules/head.php"); ?>
<body class=" blog-index-list">
<div class="wrapper">
<div class="page">
<div class="header-container">
    		 <?php 
                include("../modules/topbar.php");
                include("../modules/header.php");
             ?>
    <div class="main-container col2-left-layout">
		  <div class="main">
			 <div class="col-main">
				<div class="breadcrumbs">
                	<div class="container">
                		<div class="container-inner">
                			<ul>
                				<li class="home">
                					<a href="../../index.php" title="Go to Home Page">Inicio</a>
                					<span><i class="fa fa-angle-right"></i> </span>
                				</li>
                				<li class="blog">
                					<a href="../blog/portada-blog.php" title="Return to Our Blog">Portada de nuestro blog</a>
                					<span><i class="fa fa-angle-right"></i> </span>
                				</li>
                				<li class="blog_page">
                					<strong>Título de la nota.</strong>
                				</li>
                			</ul>
                		</div>
                	</div>
                </div>
				<div class="container">
					<div class="container-inner">
						<div class="row">
							<div class="col-left sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="block block-list block-compare">
                                    <div class="block-title">
                                        <strong><span>Categorías<small></small> </span></strong>
                                    </div>
                                    <div class="block-content">
                                         <ol id="compare-items">
                                             <li class="item">
                                                <input type="hidden" class="compare-item-id" value="16" />
                                               <p class="product-name"><a href="../../voluptas-nulla.html">Categoría 1</a></p>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" class="compare-item-id" value="16" />
                                               <p class="product-name"><a href="../../voluptas-nulla.html">Categoría 2</a></p>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" class="compare-item-id" value="16" />
                                               <p class="product-name"><a href="../../voluptas-nulla.html">Categoría 3</a></p>
                                            </li>
                                            <li class="item">
                                                <input type="hidden" class="compare-item-id" value="16" />
                                               <p class="product-name"><a href="../../voluptas-nulla.html">Categoría 4</a></p>
                                            </li>
                                        </ol>
                                     </div>
                                </div>

                            <div class="hidden-xs banner-left banner-static"><a href="index.php"></a></div>
                        </div>

                        <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div id="messages_product_view">
                                
                            </div>
                            <div class="postWrapper">
                                <div class="images-container banner-static">
                                <a><img src="http://via.placeholder.com/840x350" alt=""></a>	</div>
                                    <div class="des-container"> 
                                        <div class="postTitle">
                                        <h1><strong>Titulo de Nota aquí.</strong></h1>
                                        </div>
                                        <div class="post-by">
                                        <h3>Domingo, Noviembre 21, 2017</h3>
                                        </div>
                                        <div class="postContent">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div class="tags">
                                            
                                        </div>
                                    </div>
                            </div>
                        </div>
							</div>
							</div>
						</div>
					</div>
				</div>
                    
                    <div class="ma-footer-static">
                        <div class="footer-static">
                            <div class="container">
                                 <div class="container-inner">
                                 <?php include("../modules/acerca-de.php");
                                  include("../modules/footer.php");
                                  include("../modules/scripts.php");
                                  ?>
                                </div>
                            </div>
                         </div>
                    </div>
     </div>
</div>
</body>
</html>
