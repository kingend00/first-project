
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
					  	<li class="active"><a href="?page=Food">Món ăn</a></li>
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
				<div class="col-md-9">
					<div class="products-heading">
						<h2>Món Ăn</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
					     <?php 
					     	foreach ($data as $key) {
					     	
					     		echo "<li><div class='products'><a href='#'>
										<img src=".$key['image']." title='".$key['description']."' width = '250px' height = '250px' >
									</a>
									<a href='#'>
										<h4>".$key['name']."</h4>
									</a>
									<p class='price'>Giá: ".$key['price']." VNĐ</p>
									<div>
										<a class='view-link shutter' href='?page=Food&id=".$key['id']."'>
										<i class='fa fa-plus-circle'></i>Thêm vào giỏ</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>";
					     	}
					      ?>

		       
					        <!--  ... -->
					    </ul>
					</div>	<!-- End of /.products-grid -->

					<!-- Pagination -->

					<div class="pagination-bottom">
						<ul class="pagination">
						  	<li class="disabled"><a href="#">&laquo;</a></li>
						  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
						  	<li><a href="#">2</a></li>
						  	<li><a href="#">3</a></li>
						  	<li><a href="#">4</a></li>
						  	<li><a href="#">»</a></li>
						</ul>	<!-- End of /.pagination -->
					</div>
				</div>	<!-- End of /.col-md-9 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>Đang suy nghĩ...</h4>
							<div class="list-group">
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Italian Foods
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Traditional Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Indian Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Spanish Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Thai FoodN
								</a>
							</div>
						</div>
						<div class="block">
							<img src="images/food-ad.png" alt="">
						</div>
						<div class="block">
							<h4>Đang suy nghĩ...</h4>
							<ul class="media-list">
							 	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/post-img.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">Lamb leg roast
							      		<p>Lorem ipsum dolor sit amet.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/post-img-2.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading"> Lamingtons
							      		<p>Lorem ipsum dolor.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/post-img-3.png" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      		Anzac Salad
							      		<p>Lorem ipsum dolor sit.</p>

							      		</a>
							    	</div>
							  	</li>
							  </ul>
						</div>

						<div class="block">
							<h4>Food Tag</h4>
							<div class="tag-link">
								<a href="">BALLET</a>
								<a href="">CHRISTMAS</a>
								<a href="">ELEGANCE</a>
								<a href="">ELEGANT</a>
								<a href="">SHOPPING</a>
								<a href="">SHOP</a>
							</div>	
						</div>
				</div>	<!-- End of /.col-md-3 -->
			
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->


	


	





<!-- FOOTER Start
    ================================================== -->

	<?php require_once'footer.php'; ?>