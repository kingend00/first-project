<?php 
	include_once'header.php';
 ?>
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
					<li class="active"><a href="?page=Contact">Liên Hệ</a></li>
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
					  	<li class="active"><a href="?page=Contact">Liên hệ</a></li>
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
						<h2>Đây là trang Liên hệ</h2>
					</div>	
					</div>
				</div>
			</div>
	</section>

<!-- FOOTER Start
    ================================================== -->

<?php include_once'footer.php'; ?>