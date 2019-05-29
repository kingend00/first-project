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
                        <a href="?page=EditFood"><i class="fa fa-sitemap"></i>Edit Food</a>
                    </li>
                    <li>
                        <a href="?page=EditDrink"><i class="fa fa-sitemap"></i>Edit Drink</a>
                    </li>

                    <li>
                        <a href="?page=Statistic" class="active-menu"><i class="fa fa-table"></i>Statistic</a>
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
                <h3 class = 'h3Edit'>List Statistic</h3><br>
                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Account_employees</th>
                    <th>Details</th>
                    <th>Money</th>
                    <th>Account_Customer</th>
                    <th>Date</th>
                    <th>Handing</th>
                </tr>
                <?php 
                    if(isset($dataStatistic) != null && isset($_GET['page']) == 'Statistic')
                    {
                        $total = 0;
                        $count = 0;
                        foreach ($dataStatistic as $key) {
                             echo "<tr>";
                             echo "<td>{$key['id']}</td>
                                    <td>{$key['name']}</td>
                                    <td>{$key['phone']}</td>
                                  <td>{$key['account_employees']}</td>
                                 <td>{$key['detail']}</td>
                                <td>{$key['money']}</td>
                                <td>{$key['account_customer']}</td>
                                <td>{$key['date']}</td>
                                <td><a href='?page=Statistic&id=".$key['id']."&delete=1' onclick='return confirm(\"Are you sure to delete it ?\");'>
                                <i class='fa fa-user'></i>Delete</a></td>";

                             echo "</tr>";
                             $count++;
                             $total += $key['money'];
                        }
                    }


                 ?>
                </table>
                <strong style="font-size: 30px">Tổng doanh thu trong ngày : <?php echo $total; ?> VNĐ</strong><br> 
                <strong style="font-size: 30px">Số lượng đặt hàng trong ngày : <?php echo $count; ?> đơn hàng</strong>

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
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>

<?php
    }
    else
        echo "<h2>Bạn không có quyền truy cập vào trang này </h2>";
 ?>