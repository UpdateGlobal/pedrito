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
								<a href="../index.php" title="Go to Home Page">Inicio</a>
									<span><i class="fa fa-angle-right"></i> </span>
							</li>
							<li class="blog">
								<strong>Nuestro Blog</strong>
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
					        <strong><span>Nuestro blog</span></strong>
					    </div>
					    <div class="block-content">
					            <p class="empty">Disfruta del mejor contenido y Tips para mascotas.</p>
					    </div>
					</div>
					<div class="hidden-xs banner-left banner-static">
						<a href="index.html#"><img alt="" src="http://via.placeholder.com/300x500" /></a>
					</div>
					<div class="hidden-xs banner-left banner-static">
						<a href="index.html#"><img alt="" src="http://via.placeholder.com/300x500" /></a>
					</div>
                
            	</div>
			<div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div id="messages_product_view">
        </div>

			<div class="toolbar">
		        <div class="sorter">
		        	<div class="sort-by hidden-xs">
		            	<label>Categorías</label>
				            <select onchange="setLocation(this.value)">
				                 <option value="" selected="selected">
				                    Categoría 1
				                </option>
				                 <option value="">
				                    Categoría 2 
				                </option>
				            </select>
		             		<a href="index-dir=desc&order=created_time.html" title="Set Descending Direction"><img src="http://via.placeholder.com/370x270" class="v-middle" /><i class="fa fa-long-arrow-up"></i></a>
		            </div>
	   			</div>
		        <div class="pager">

			        <div class="limiter hidden-xs">
			            <label>Mostrar</label>
			            <select onchange="setLocation(this.value)">
			                <option value="">
			                    10 
			                </option>
			            </select> por página
			        </div>
				
			        <div id ="wrapper">
			    			<div id="loading" style ="position: fixed;top: 50%;left: 50%;margin-top: -50px;"></div>
					</div>
		 		</div>
		</div>

    <div class="postWrapper">
        <div class="item-blog">
			<div class="row">
				<div class="col-sm-5 col-sms-6 col-smb-12">
					<div class="images-container banner-static">
						<a href="../blog/nota-blog.php" ><img alt="" src="http://via.placeholder.com/370x270"/>	</a>								
					</div>
				</div>
				<div class="col-sm-7 col-sms-6 col-smb-12">		
					<div class="postTitle">
						<h2><a href="../blog/nota-blog.php" >Excepteur sint occaecat cupidatat non proident</a></h2>
						<h3>Domingo, Noviembre 21, 2017</h3>
					</div>
					<div class="postContent"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><a class="magentothem-blog-read-more" href="../blog/nota-blog.php">Seguir Leyendo</a>
					</div>
                       <div class="tags">
						</div>
					</div>
			</div>
		</div>
    </div>

    <div class="postWrapper">
        <div class="item-blog">
			<div class="row">
				<div class="col-sm-5 col-sms-6 col-smb-12">
					<div class="images-container banner-static">
						<a href="../blog/nota-blog.php" ><img alt="" src="http://via.placeholder.com/370x270"/>	</a>								
					</div>
				  </div>
				 <div class="col-sm-7 col-sms-6 col-smb-12">		
					<div class="postTitle">
						<h2><a href="../blog/nota-blog.php" >Excepteur sint occaecat cupidatat non proident</a></h2>
						<h3>Domingo, Noviembre 21, 2017</h3>
					</div>
					<div class="postContent"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><a class="magentothem-blog-read-more" href="../blog/nota-blog.php">Seguir Leyendo</a>
					</div>
                     <div class="tags">
					</div>
					</div>
			</div>
		</div>
    </div>

        <div class="postWrapper">
        <div class="item-blog">
			<div class="row">
				<div class="col-sm-5 col-sms-6 col-smb-12">
					<div class="images-container banner-static">
						<a href="../blog/nota-blog.php" ><img alt="" src="http://via.placeholder.com/370x270"/>	</a>								
					</div>
				</div>
				<div class="col-sm-7 col-sms-6 col-smb-12">		
					<div class="postTitle">
						<h2><a href="../blog/nota-blog.php" >Excepteur sint occaecat cupidatat non proident</a></h2>
						<h3>Domingo, Noviembre 21, 2017</h3>
					</div>
					<div class="postContent"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><a class="magentothem-blog-read-more" href="../blog/nota-blog.php">Seguir Leyendo</a>
					</div>

					<div class="tags">
						
					</div>
					
				</div>
			</div>
		</div>
    </div>


	<div class="toolbar">
		<div class="pager">
	      <div class="limiter hidden-xs">
	            <label>Mostrar</label>
	            <select onchange="setLocation(this.value)">
	                 <option value="">
	                    10
	                </option>
	            </select> por página
	       </div>
			
	        <div id ="wrapper">
	    		<div id="loading" style ="position: fixed;top: 50%;left: 50%;margin-top: -50px;"></div>
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
