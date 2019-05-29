
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
		        	<li><a href="index.php">Trang Chủ</a></li>
					<li class="active"><a href="?page=Intro">Giới Thiệu</a></li>

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
					<li ><a href="?page=Contact">Liên Hệ</a></li>
					</li> <!-- End of /.dropdown -->

					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Đồ Ăn Nhanh</h1>
					<h3 style="color: orange">Fast Food</h3>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="?page=Index">Trang chủ</a></li>
					  	<li class="active"><a href="?page=Intro">Giới thiệu</a></li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->



	<!-- PRODUCTS Start
    ================================================== -->

	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>Đây là trang Giới thiệu</h2>
					</div>	
				</div>
				<div class="col-md-6" style="font-size: 25px">
					<strong>Food Code</strong> gồm 100 cửa hàng lớn nhỏ, là chuỗi cửa hàng tiện lợi cung ứng đồ ăn nhanh thuôc tập đoàn <strong>Rog Team</strong>, Food Code được thành lập vào năm 2017, dưới sự đồng ý của ban quản trị Rog Team, đến nay đã được 3 năm, với sự phát triển liên tục cùng với cái bóng của ông lớn Rog Team <i>(đứng đầu về trí tuệ nhân tạo (AI) Việt Nam)</i> , giờ đã trở thành chuỗi cung ứng đồ ăn nhanh đứng đầu Hà Nội , thương hiệu của Food Code ngày càng phát triển rộng hơn nữa, đã và đang mở rộng ở miền Trung và tiếp tới sẽ là Miền Nam. Nguồn cung ứng được liên kết với nhiều doanh nghiệp nổi tiếng ở Châu Âu, Châu Á, cung cấp nguồn thực phẩm chất lượng cao, đảm bảo an toàn .
					<h3>Hãy ủng hộ cho chúng tôi để có thể phát triển hơn , vươn tầm quốc tế !!!</h3> 
					
				</div>
				<div class="col-md-6">
					<p><img src="images/logo.png"></p>
					<p></p>
					<img src="images/rogteam.png" width="500" height="500" style="border-radius: 50%">
				</div>
			</div>
		</div>
	</section>

<!-- FOOTER Start
    ================================================== -->

	<?php require_once'footer.php'; ?>