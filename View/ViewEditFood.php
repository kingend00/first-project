<?php 
    if(isset($_SESSION['permission']) == 2)
    {
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Handing</title>
    <!-- Bootstrap Styles-->
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
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <!--<script src="js/jquery.nicescroll.js"></script>-->
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?page=Index" style="background-color: green"><strong>Food Code</strong></a>
                <div id="sideNav" href="">
        <i class="fa fa-bars icon"></i> 
        </div>
            </div>        
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="?page=AccountCus"><i class="fa fa-sitemap"></i>Customer haven't account</a>
                    </li>
                    <li>
                        <a href="?page=AccountEmp" ><i class="fa fa-sitemap"></i>Account Employees</a>
                    </li>
                    <li>
                        <a href="?page=EditFood" class="active-menu"><i class="fa fa-sitemap"></i>Edit Food</a>
                    </li>
                    <li>
                        <a href="?page=EditDrink"><i class="fa fa-sitemap"></i>Edit Drink</a>
                    </li>

                    <li>
                        <a href="?page=Statistic" ><i class="fa fa-table"></i>Statistic</a>
                    </li>
                    <li>
                        <a href="?page=Logout"><i class="fa fa-edit"></i>Logout</a>
                    </li>   
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                           Welcome back <strong> Admin !!!</strong>
                        </h1>                              
        </div>
            <div id="page-inner">
                <?php 
                        $name= '';
                        $price = '';
                        $description = '';
                        $image = '';
                    if(isset($dataEdit) && $dataEdit != null)
                    {
                        
                        foreach ($dataEdit as $key) 
                        {
                           $name = $key['name'];
                           $price = $key['price'];
                           $description = $key['description'];
                           $image = $key['image'];
                        }
                    }
                 ?>
                <h3>Food Edit</h3>
                <form method="POST" >
                    <table cellpadding="5" cellspacing="5" id="formEdit">
                      <div class="col-md-3">
                        <tr>
                            <td>Name :</td>
                            <td>
                                <input type="text" name="name" class="form-control" value='<?php echo (!empty($name)) ? $name : null;?>' >
                            </td>
                            <td>Price :</td>
                            <td>
                                <input type="text" name="price" class="form-control" value='<?php echo (!empty($price)) ? $price : null;?>'>
                            </td>
                        </tr>
                 </div>
                <div class="col-md-6">
                        <tr>
                        <td>Description :</td>
                        <td>
                            <input type="text" name="description" class="form-control" value='<?php echo (!empty($description)) ? $description : null;?>'>
                        </td>
                        <td>Image :</td>
                        <td>
                            <input type="text" name="image" class="form-control" value='<?php echo (!empty($image)) ? $image : null;?>' >
                        </td>
                    </tr>                    
                </div>
                 <div class="col-md-3">
                     <tr>
                         <td colspan="4" align="center" >
                             <input type="submit" name="btnEditFood" class="btn btn-success" value="Edit/Insert">
                             <a href='?page=<?php echo $_GET['page']; ?>'<button class="btn btn-default">Refresh</button></a>
                         </td>
                     </tr>
                     
                </div>
                      
                    </table>

                </form>
                <h3 class = 'h3Edit'>List Food</h3>
                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th colspan="2">Handling</th>
                </tr>
              <?php 
                if(isset($data) && $data != null)
                {
                    foreach ($data as $key) {
                        echo "<tr>";
                        echo "<td>{$key['name']}</td>
                        <td>{$key['price']}</td>
                        <td>{$key['description']}</td>
                        <td>{$key['image']}</td>
                        <td><a href='?page=EditFood&Food=".$key['name']."'>
                                <i class='fa fa-user'></i>Edit</a></td>
                        <td><a href='?page=EditFood&Food=".$key['name']."&delete=1' onclick='return confirm(\"Bạn chắc chắn muốn xóa ?\");'>
                                <i class='fa fa-user'></i>Delete</a></td>";
                        echo "</tr>";
                    }
                   
                }
               ?>

                </table> 
                </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
   <!--  <script src="assets/js/bootstrap.min.js"></script> -->
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>

<?php
    }
    else
        echo "<h2>Bạn không có quyền truy cập vào trang này</h2>";

 ?>