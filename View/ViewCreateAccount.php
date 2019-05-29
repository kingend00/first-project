<!DOCTYPE html>
<html>
<head>
	<title>Tạo Tài Khoản</title>
	<meta charset="utf-8">
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
	
	
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<!--<script src="js/jquery.nicescroll.js"></script>-->
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
	
</head>
<body>
	<div class="container">
		<div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-3" style="margin-right: 50px"><a href="?page=Index"><img src="images/logo.png" alt="logo" ></a></div>
				<div class="col-md-5" style="border:1px solid #90c322;border-top-right-radius: 25px;border-bottom-left-radius: 25px;border-top-left-radius:25px;border-bottom-right-radius:25px;background-color:#90c322 ">
				 <form method="POST" id="formRegister">
				 	<h3> Tạo Tài Khoản</h3>
				 	 <div class="form-group">
				      <label for="usr">Tên tài khoản:</label>
				      <input type="text" class="form-control" id="username" name="username">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Mật khẩu:</label>
				      <input type="password" class="form-control" id="password" name="password">
				    </div>
				     <div class="form-group">
				      <label for="usr">Nhập lại mật khẩu:</label>
				      <input type="password" class="form-control" id="repass" name="repass">
				    </div>
				     <div class="form-group">
				      <label for="usr">Tên người sử dụng:</label>
				      <input type="text" class="form-control" id="name" name="name">
				    </div>
				     <div class="form-group">
				      <label for="usr">Số điện thoại:</label>
				      <input type="text" class="form-control" id="phone" name="phone">
				    </div>
				     <div class="form-group">
				      <label for="usr">Email:</label>
				      <input type="text" class="form-control" id="email" name="email">
				    </div>
				    <div class="form-group">
				      <label for="comment">Địa chỉ:</label>
 					 <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
				    </div>
				    <input type="submit" class="btn btn-primary" name="btnRegister" id="btnRegister">
				 </form>

				 </div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script  src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/Myvalidate.js" type="text/javascript"></script>
</body>
</html>