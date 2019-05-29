<?php 
	if(isset($_SESSION['cart']) && $_SESSION['cart'] != null)
	{
 ?>
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
				 <form method="POST" id="formBuyProduct">
				 	<h3>Thông tin để mua hàng</h3>
				 	 <div class="form-group">
				      <label for="usr">Tên người mua :</label>
				      <input type="text" class="form-control" name="name">
				    </div>
				    <div class="form-group">
				      <label for="usr">Số điện thoại:</label>
				      <input type="text" class="form-control" name="phone">
				    </div>
				     <div class="form-group">
				      <label for="usr">Địa chỉ chi tiết :</label>
				      <input type="text" class="form-control" name="address">
				    </div>
				     <div class="form-group">
				      <label for="usr">Quận/Huyện:</label>
				      <select name = 'district' class="form-control">
				      		<optgroup label="Huyện :">
				      			<option>Huyện Thanh Trì</option>
				      			<option>Huyện Gia Lâm</option>
				      			<option>Huyện Đông Anh</option>
				      			<option>Huyện Mê Linh</option>
				      			<option>Huyện Thanh Oai</option>
				      			<option>Huyện Chương Mỹ</option>
				      		</optgroup>
				      		<optgroup label="Quận :">
				      			<option>Quận Ba Đình</option>
				      			<option>Quận Hoàn Kiếm</option>
				      			<option>Quận Tây Hồ</option>
				      			<option>Quận Long Biên</option>	
				      			<option>Quận Cầy Giấy</option>
				      			<option>Quận Hai Bà Trưng</option>
				      			<option>Quận Hoàng Mai</option>
				      			<option>Quận Đống Đa</option>
				      		</optgroup>
				      </select>
				    </div>
				     <div class="form-group">
				      <label for="usr">Tỉnh :</label>
				      <select name = 'provincial' class="form-control">
				      			<option>Tỉnh Vĩnh Phúc</option>
				      			<option>Tỉnh Bắc Ninh</option>
				      			<option>Tỉnh Hải Dương</option>
				      			<option>Tỉnh Hà Nam</option>
				      			<option>Tỉnh Hưng Yên</option>
				      			<option>Tỉnh Hòa Bình</option>	
				      </select>
				    </div>
				     <div class="form-group">
				      <label for="usr">Thành phố :</label>
				      <select name = 'city' class="form-control">				      		
				      			<option>Hà Nội</option>				      			
				      </select>
				    </div>
				    
				     <div class="form-group">
				      <label for="usr">Tài khoản : (nếu có)</label>
				      <input type="text" class="form-control" name="username">
				    </div>
				    <div class="form-group">
				      <label for="comment">Email : (nếu có)</label>
 					 <input type="text" class="form-control" name="email">
				    </div>
				    <input type="submit" class="btn btn-primary" name="btnBuyProduct" id="btnBuyProduct" value="Tiếp Tục">
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
 <?php } ?>