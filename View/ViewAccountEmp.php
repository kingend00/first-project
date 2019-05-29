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
                        <a href="?page=AccountEmp" class="active-menu"><i class="fa fa-sitemap"></i>Account Employees</a>
                    </li>
                    <li>
                        <a href="?page=EditFood"><i class="fa fa-sitemap"></i>Edit Food</a>
                    </li>
                    <li>
                        <a href="?page=EditDrink"><i class="fa fa-sitemap"></i>Edit Drink</a>
                    </li>

                    <li>
                        <a href="?page=Statistic"><i class="fa fa-table"></i>Statistic</a>
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
                        $username = '';
                        $password = '';
                        $name= '';
                        $phone = '';
                        $email = '';
                        $address = '';
                    if(isset($dataEdit) && $dataEdit != null)
                    {
                        
                        foreach ($dataEdit as $key) 
                        {
                            $username = $key['username'];
                            $password = $key['password'];
                            $name = $key['name'];
                            $phone = $key['phone'];
                            $email =$key['email'];
                            $address =$key['address'];
                        }
                    }
                 ?>
                <h3>Edit Account Employees</h3>
                <form method="POST" >
                    <table cellpadding="5" cellspacing="5" id="formEdit">
                      <div class="col-md-3">
                        <tr>
                            <td>Username :</td>
                            <td>
                                <input type="text" name="username" class="form-control" value='<?php echo (!empty($username)) ? $username : null;?>' >
                            </td>
                            <td>Password :</td>
                            <td>
                                <input type="password" name="password" class="form-control" value='<?php echo (!empty($password)) ? $password : null;?>'>
                            </td>
                        </tr>
                 </div>
                <div class="col-md-6">
                        <tr>
                        <td>Name :</td>
                        <td>
                            <input type="text" name="name" class="form-control" value='<?php echo (!empty($name)) ? $name : null;?>'>
                        </td>
                        <td>Permission :</td>
                        <td>
                            <input type="text" name="permission" class="form-control" value="1" disabled="disabled" >
                        </td>
                    </tr>                    
                </div>
                 <div class="col-md-3">
                    <tr>
                        <td>Phone :</td>
                        <td>
                            <input type="text" name="phone" class="form-control" value='<?php echo (!empty($phone)) ? $phone : null;?>'>
                        </td>
                        <td>Email :</td>
                        <td>
                            <input type="text" name="email" class="form-control" value='<?php echo (!empty($email)) ? $email : null;?>'>
                        </td>
                        
                     </tr>
                     <tr>
                        <td>Address :</td>
                         <td colspan="3">
                            <textarea cols="65" rows="5" class="form-control" name="address"><?php echo(!empty($address)) ? trim($address) : null;?></textarea>
                        </td>
                     </tr>
                     <tr>
                         <td colspan="4" align="center" >
                             <input type="submit" name="btnEditEmp" class="btn btn-success" value="Edit/Insert">
                             <a href='?page=<?php echo $_GET['page']; ?>'<button class="btn btn-default">Refresh</button></a>
                         </td>
                     </tr>
                     
                </div>
                      
                    </table>

                </form>
                <h3 class = 'h3Edit'>List Account</h3>
                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Permission</th>
                    <th>Durable</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th colspan="2">Handling</th>
                </tr>
              <?php 
                if(isset($data) && $data != null)
                {
                    foreach ($data as $key) {
                        echo "<tr>";
                        echo "<td>{$key['username']}</td>
                        <td>{$key['name']}</td>
                        <td>{$key['permission']}</td>
                        <td>{$key['durable']}</td><td>{$key['phone']}</td>
                        <td>{$key['email']}</td>
                        <td>{$key['address']}</td>
                        <td><a href='?page=AccountEmp&Emp=".$key['username']."'>
                                <i class='fa fa-user'></i>Edit</a></td>
                        <td><a href='?page=AccountEmp&Emp=".$key['username']."&delete=1' onclick='return confirm(\"Are you sure to delete it ?\");'>
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
        echo "<h2> Bạn không có quyền truy cập vào trang này</h2>";
 ?>