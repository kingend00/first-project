<?php include_once 'header.php'; ?>
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
					  	<li class="active"><a href="?page=Cart">Giỏ hàng</a></li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->

<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="products-heading">
						<h2>Giỏ hàng của bạn</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>

	<!-- PRODUCTS Start
    ================================================== -->
<?php 
	$tongtien =0;
	if(isset($_SESSION['cart']))
	{

		$des = (isset($value['description'])) ? $value['description'] : '';
		foreach($_SESSION['cart'] as $key => $value)
		{
					     					     	
			echo "<li><div class='products'><a href='#'>
				<img src=".$value['image']." title='".$des."' width = '250px' height = '250px' >
				</a>
				<a href='#'>
				<h4>".$value['name']."- Số lượng: ".$value['qty']."</h4>
				</a>
				<p class='price'>Tổng Tiền:".($value['price']*$value['qty'])." VNĐ</p>
				<div>
				<a class='view-link shutter' href=?page=Cart&id=".$value['id']."&Delete=deathClick >
				<i class='fa fa-plus-circle'></i>Xóa sản phẩm</a>
				</div>
				</div>	<!-- End of /.products -->
				</li>";
				$tongtien +=($value['price']*$value['qty']);
		}
		$_GET['id']=0;
		
	}
	else
		echo "<script> alert('Rất tiếc! Bạn chưa mua sản phẩm nào');</script>";
?>
       <!--  ... -->
					    </ul>
					</div>	<!-- End of /.products-grid -->
				</div>
				<div class="col-md-3">
					<div class="products-heading">
						<h2>Tổng tiền : <?php echo $tongtien; ?> VNĐ</h2>
					</div>
					<?php 
						$direct = '#';
						if(isset($_SESSION['login']))
							$direct = '?Buy=1';
						else
							$direct = '?page=GetInfoCus&Buy=1';
					 ?>
					<a class='view-link shutter' href=<?php echo $direct; ?>>
					<i class='fa fa-plus-circle'></i>Mua hàng</a>
				</div>
			</div>
		</div>
	</section>

<!-- FOOTER Start
    ================================================== -->
	<?php require_once'footer.php'; ?>
	<script type="text/javascript">
		history.pushState(null, null, location.href);
   		window.onpopstate = function () {
        history.go(1); };
	</script>