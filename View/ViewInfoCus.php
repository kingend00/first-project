<?php 
	if(isset($_SESSION['login']))
	{
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Thông Tin Tài Khoản</title>
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
				 	<h3> Tài Khoản : <?php echo $_SESSION['login']; ?> </h3>
				 	<?php 	if(isset($dataEdit) && $dataEdit != null) 
				 			{
				 				foreach ($dataEdit as $key) {
				 					
				 	?>
				 	 <div class="form-group">
				      <label for="usr">Tên tài khoản :</label>
				      <input type="text" class="form-control" id="username" name="username" value='<?php echo $key['username']; ?>' disabled = 'disabled'>
				    </div>
				    <div class="form-group">
				      <label for="usr">Mật khẩu :</label>
				      <input type="password" class="form-control" id="username" name="password" value='<?php echo $key['password']; ?>'>
				    </div>
				    <div class="form-group">
				      <label for="pwd">Tên người dùng :</label>
				      <input type="text" class="form-control" id="password" name="name" value='<?php echo $key['name']; ?>'>
				    </div>
				     <div class="form-group">
				      <label for="usr">Độ thân thiện :</label>
				      <input type="text" class="form-control" id="name" name="durable" value='<?php echo $key['durable'];?>' disabled = 'disabled'>
				    </div>
				     <div class="form-group">
				      <label for="usr">Số điện thoại :</label>
				      <input type="text" class="form-control" id="repass" name="phone" value='<?php echo $key['phone'];?>'>
				    </div>				    
				     <div class="form-group">
				      <label for="usr">Email :</label>
				      <input type="text" class="form-control" id="phone" name="email" value='<?php echo $key['email'];?>'>
				    </div>
				     <div class="form-group">
				      <label for="usr">Address:</label>
				      <textarea name="address" cols="8" rows="6"><?php echo trim($key['address']); ?> </textarea>
				    </div>
				    <input type="submit" class="btn btn-primary" name="btnEditInfo" id="btnRegister" value="Cập nhật">
				    <?php
							}
				 		}

				 	?>
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