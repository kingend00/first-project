
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Food Code Cửa hàng bán đồ ăn nhanh</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="font/font.css">
	<link rel="stylesheet" type="text/css" href="font/font2.css">
	<link rel="stylesheet" type="text/css" href="css/myCss.css">

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<!--<script src="js/jquery.nicescroll.js"></script>-->
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<style type="text/css">
		img {
			color: red;

		}
	</style>


</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
	
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i><strong>NẾU CÓ BẤT KÌ VẤN ĐỀ NÀO, VUI LÒNG GỌI : +565 975 658</strong></p>
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<?php
						$hien = null;
						if(isset($_SESSION['permission'])  && $_SESSION['permission']== 2)
						{
							echo "<a href=\"?page=Admin\"><button class=\"btn btn-primary btn-sm\">Admin</button></a>";
						}
						
						if(isset($_SESSION['permission']) && $_SESSION['permission'] == 0 && isset($_SESSION['login']))
						{
								$hien = "<a href=\"?page=InfoCus&Emp=".$_SESSION['login']."\"><button class=\"btn btn-primary btn-sm\" style='margin-right:15px;'>Thông tin tài khoản</button></a>";
						}						
						if(empty($_SESSION['login']))
						{
								echo "<li><a data-toggle='modal' data-target='#myModal' href='#'>
								<i class='fa fa-user'></i>ĐĂNG NHẬP</a></li>";
						}	 				
						else
							{
								echo "<li>
							<div class=\"cart dropdown\">
						  		<a data-toggle=\"dropdown\" href=\"#\"><i class=\"fa fa-user\"></i>".$_SESSION['login']."</a>
					  			<div class=\"dropdown-menu dropup\">
					  				<span class=\"caret\"></span>
						  			<ul class=\"media-list\">
								  			$hien
								  		<a href=\"?logout=1\"><button class=\"btn btn-primary btn-sm\">Đăng xuất</button></a>
									</ul>	
							    </div>
							</div>
						</li>";
							}
						 ?>
						<li>
							<div class="cart dropdown">
						  		<a data-toggle="dropdown" href="#"><i class="fa fa-shopping-cart"></i>GIỎ HÀNG</a>
					  			<div class="dropdown-menu dropup">
					  				<span class="caret"></span>
						  			<ul class="media-list">
								  		<?php 
								  		$tong = 0;							  		
								  		if (isset($_SESSION['cart']))
								  		{
								  			foreach($_SESSION['cart'] as $key => $value)
								  			$tong += $value['qty'];
								  		}  	
								  		 ?>
								  		<li class="media">							
										    <div class="media-body">
										      	<h6>   Bạn đã mua
								    				<span><?php echo $tong."sản phẩm"; ?></span>
								    			</h6>
								    		</div>
								  		</li>
									</ul>
									<a href="?page=Cart"><button class="btn btn-primary btn-sm">Xem giỏ hàng</button></a>
							    </div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-2">
					<strong>Email: </strong><span>foodcode@gmail.com</span>
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->

	
	<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Đăng kí / Đăng nhập</h4>
		      		</div>
			      	<div class="modal-body clearfix">

						<form action="?page=CreateAccount" method="post" id="create-account_form" class="std">
							<fieldset>
								<h3>Tạo tài khoản mới</h3>
								<div class="form_content clearfix">
									<h4>Đăng kí để nhận những ưu đãi chỉ dành cho thành viên </h4>
									<p class="submit">
										<button class="btn btn-primary">Tạo Tài Khoản</button>
									</p>
								</div>
							</fieldset>
						</form>
			      		<form action="" method="POST" id="login_form" class="std">
							<fieldset>
								<h3>Bạn đã có tài khoản ?</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">tài khoản</label>
										<span><input placeholder="Tài khoản" type="text" id="email" name="username" value="" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">mật khẩu</label>
										<span><input placeholder="Mật khẩu" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
									</p>
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Quên mật khẩu ?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success" name="btn">Đăng Nhập</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
			      	</div>
		    	</div>
		  	</div>
		</div>	
	</section>  <!-- End of /Section -->
	


	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<img src="images/logo.png" alt="logo">
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->

	


	