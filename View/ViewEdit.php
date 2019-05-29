
 <!DOCTYPE html>
<html>
<head>
	<title>Thông Tin Tài Khoản</title>
	<meta charset="utf-8">
	    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
    <link href="assets/css/font-Sans.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/myCss.css">


    <!-- jS -->
	
</head>
<body>
	<div class="container">
		<div>
				<div class="col-md-5">
				 <form method="POST" id="formRegister">
				 	<h3> Tài Khoản  </h3>
				 	<?php 	if(isset($dataAccount) && $dataAccount != null) 
				 			{
				 				foreach ($dataAccount as $key) {
				 					
				 	?>
				 	 <div class="form-group">
				      <label for="usr">Tên tài khoản :</label>
				      <input type="text" class="form-control" id="username" name="username" value='<?php echo $key['username']; ?>' visited = 'visited'>
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
				      <label for="usr">Số điện thoại :</label>
				      <input type="text" class="form-control" id="repass" name="phone" value='<?php echo $key['phone'];?>'>
				    </div>				    
				     <div class="form-group">
				      <label for="usr">Email :</label>
				      <input type="text" class="form-control" id="phone" name="email" value='<?php echo $key['email'];?>'>
				    </div>
				     <div class="form-group">
				      <label for="usr">Email:</label>
				      <textarea name="address" cols="8" rows="6">
				      	<?php echo trim($key['address']); ?>
				      </textarea>
				    </div>
				    <input type="submit" class="btn btn-primary" name="btnEditEmp" id="btnRegister" value="Cập nhật">
				    <?php
							}
				 		}

				 	?>
				 </form>
				
				 </div>
			</div>
	</div>

<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
   <!--  <script src="assets/js/bootstrap.min.js"></script> -->
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>
