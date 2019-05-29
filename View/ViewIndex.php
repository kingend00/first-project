
<?php 
	include_once'header.php';
 ?>
 <!-- MENU Start
    ================================================== -->
	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li class="active"><a href="index.php">Trang Chủ</a></li>
					<li><a href="?page=Intro">Giới Thiệu</a></li>

					<li>						
						<li class="dropdown">
							<a href="#">
								Thực Đơn
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							 	<li><a  href="?page=Food">Món Ăn</a></li>
						    <li><a  href="?page=Drink">Đồ Uống</a></li>
						    <li><a  href="?page=Combo">Combo</a></li>							    
							</ul>
						</li>
					
					</li>

					<li><a href="?page=Event">Sự Kiện</a></li>
					<li><a href="?page=Contact">Liên Hệ</a></li>
					</li> <!-- End of /.dropdown -->

					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->
	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">
				    	<img src="images/slider.jpg" alt="" />
				    	<img src="images/slider1.jpg" alt=""/>
				    	<img src="images/slider2.jpg" alt="" />
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->


	
	<!-- FEATURES Start
    ================================================== -->

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class="fa fa-ambulance"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Ship Miễn Phí</h4>
						    	<p>Ở bất cứ đâu trong nội thành Hà Nội.</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
								<i class=" fab fa-foursquare"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Phục Vụ</h4>
						    	<br>
						    	<p>Tận tình, chu đáo , mở cửa 15/24h.</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class=" fa fa-phone"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Gọi Chúng Tôi</h4>
						    	<br>
						    	<p>Lắng nghe ý kiến, phản hồi, tiếp thu .</p>
						  </div>	<!-- End of /.media-body -->
						</div>	<!-- End of /.media -->
					</div>	<!-- End of /.block -->
				</div> <!-- End of /.col-md-4 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->



	<!-- CATAGORIE Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Thực đơn cửa hàng</h2>
						</div>	
						<div class="row">
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="?page=Food">
										<img src="images/imgFood/Fish.png" alt="..." width="350px" height="220px">
										<h3>ĐỒ ĂN</h3>
									</a>
							      	<div class="caption">
							        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
							        	<p>
							        		<a href="?page=Food" class="btn btn-default btn-transparent" role="button">
							        			<span>XEM THÊM</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="?page=Drink">
										<img src="images/imgWater/tra_socola.png" alt="..." width="350px" height="220px">
										<h3>ĐỒ UỐNG</h3>
									</a>
							      	<div class="caption">
							        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
							        	<p>
							        		<a href="?page=Drink" class="btn btn-default btn-transparent" role="button">
							        			<span>XEM THÊM</span>
							        		</a>
							        	</p>
							      	</div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="?page=Combo">
										<img src="images/imgFood/CbfamilyB.png" alt="..." width="350px" height="220px">
										<h3>COMBO </h3>
									</a>
							      	<div class="caption">
								        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, aut, esse, laborum placeat id illo a expedita aperiam...</p>
								        <p>
								        	<a href="?page=Combo" class="btn btn-default btn-transparent" role="button">
								        		<span>XEM THÊM</span>
								        	</a>
								        </p>
								    </div>	<!-- End of /.caption -->
							    </div>	<!-- End of /.thumbnail -->
						  	</div>	<!-- End of /.col-sm-6 col-md-4 -->
						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block --> 
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->



	
		<!-- PRODUCTS Start
    ================================================== -->

	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>Sản phẩm mới</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="products">
						<a href="?page=Food">
							<img src="images/imgFood/Bigstar.png" alt="" width="250px" height="250px">
						</a>
						<a href="?page=Food">
							<h4>Bigstar</h4>
						</a>
						<p class="price">Giá: 45000 VNĐ</p>
						<a class="view-link shutter" href="?page=Food">
							<i class="fa fa-plus-circle"></i>Thêm vào giỏ</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="products">
						<a href="?page=Food">
							<img src="images/imgFood/Ca_mieng.png" alt="" width="250px" height="250px">
						</a>
						<a href="?page=Food">
							<h4>Cá miếng</h4>
						</a>
						<p class="price">Giá: 25000 VNĐ</p>
						<a class="view-link shutter" href="?page=Food">
							<i class="fa fa-plus-circle"></i>Thêm vào giỏ</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="products">
						<a href="?page=Food">
							<img src="images/imgFood/Com_bo.png" alt="" width="250px" height="250px">
						</a>
						<a href="?page=Food">
							<h4>Cơm bò</h4>
						</a>
						<p class="price">Giá: 32000 VNĐ</p>
						<a class="view-link shutter" href="?page=Food">
							<i class="fa fa-plus-circle"></i>Thêm vào giỏ</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="products">
						<a href="?page=Food">
							<img src="images/imgFood/Bo_teriyaki.png" alt="" width="250px" height="250px">
						</a>
						<a href="?page=Food">
							<h4>Bánh bò</h4>
						</a>
						<p class="price">Giá: 30000 VNĐ</p>
						<a class="view-link shutter" href="?page=Food">
							<i class="fa fa-plus-circle"></i>Thêm vào giỏ</a>
					</div>
				</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->
				
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->


	
	
		<!-- CALL TO ACTION Start
    ================================================== -->

	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Các nhà hợp tác</h2>
						</div>
					</div>	<!-- End of /.block -->
					<div id="owl-example" class="owl-carousel">
						<div> <img src="images/company-1.png" alt=""></div>
						<div> <img src="images/company-2.png" alt=""></div>
						<div> <img src="images/company-3.png" alt=""></div>
						<div> <img src="images/company-4.png" alt=""></div>
						<div> <img src="images/company-5.png" alt=""></div>
						<div> <img src="images/company-6.png" alt=""></div>
						<div> <img src="images/company-8.png" alt=""></div>
						<div> <img src="images/company-9.png" alt=""></div>
					</div>	<!-- End of /.Owl-Slider -->
				</div>	<!-- End of /.col-md-12 -->
			</div> <!-- End Of /.Row -->
		</div> <!-- End Of /.Container -->
	</section>	<!-- End of Section -->
	
	

	<!-- FOOTER Start
    ================================================== -->

	<?php require_once'footer.php'; ?>