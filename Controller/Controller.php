<?php 
	session_start();
	include'Model/Account.php';
	include'Model/Food.php';
	include'Model/Drink.php';
	include'Model/Exchange.php';
	include 'Model/Customer.php';
	class Controller 
	{
		private $account;
		private $food;
		private $drink;
		private $exchange;
		private $customer;
		private $model;

		public function __construct()
		{
			$this->account = new M_Account();
			$this->food = new M_Food();
			$this->drink = new M_Drink();
			$this->exchange = new M_Exchange();
			$this->customer = new M_Customer();
			$this->model = new Model();
		}
		public function Direction()
		{
			// code đc dùng để Đăng nhập cho tất cả các Page -----
			if(isset($_POST['btn']))
			{
				$check = $this->account->LoginAndCheckPer($_POST['username'] , $_POST['passwd']);
				//print_r($check);
				if ( $check != null)
				{					
						$_SESSION['login'] = $check['username'];
						$_SESSION['permission'] = $check['permission'];
						//echo $_SESSION['permission'];

				}
				else
				{
					echo "<script>alert('Tài khoản hoặc mật khẩu chưa đúng ! ');</script>";
				}
				
			}
			//--------------------
			// Button Logout
			if(isset($_GET['logout']))
			{
				session_unset();
				session_destroy();
				header("Location:index.php");
			}
			
			if(!isset($_GET['page']))
			{				
				// không page nào đc active -> trỏ tới Index
				require_once('View/ViewIndex.php');
			}
			else
			{				 
				$PAGE = $_GET['page'];
				if($PAGE != '')
				{
					$data = array();
					$dataEdit = array();
					$dataStatistic = array();
					if($this->DataForEdit() != null)
							$dataEdit = $this->DataForEdit();
					if($this->Statistical() != null)
						$dataStatistic = $this->Statistical();
					if($PAGE == 'Food' || $PAGE=='EditFood')
					{
						$data = $this->food->getDataFood();
					}
					elseif ($PAGE == 'Drink' || $PAGE == 'EditDrink')
					{
						$data = $this->drink->getDataDrink(); 
					}
					elseif ($PAGE == 'Combo' || $PAGE=='EditFood') 
					{
						$data = $this->food->getDataCombo();
					}
			
					elseif($_GET['page'] == 'AccountEmp')
					{
						$query = $this->account->Select();
						$data = $query->fetchAll();						
					}
					elseif($_GET['page'] == 'AccountCus')
					{
						$query = $this->customer->Select();
						$data = $query->fetchAll();					
					}	

					require_once('View/View'.$PAGE.'.php');	
								
				}		
			}
		}
		public function InsertCart()
		{
			if(isset($_GET['id']))
			{
				$id = $_GET['id'];
				$data = array();
				$newData = array();
				// Đổ dữ liệu theo từng trang
				if($_GET['page'] == 'Food')
					$data = $this->food->getDataFood();
				elseif ($_GET['page'] == 'Drink') {
					$data = $this->drink->getDataDrink();
				}
				elseif ($_GET['page'] == 'Combo') {
					$data = $this->food->getDataCombo();
				}
				// đổ dữ liệu vào mảng mới có key là id của từng sản phẩm tương ứng
				foreach($data as $value)
					$newData[$value['id']] = $value;
				
				// Chưa tồn tại $_SESSION['cart'] -> tạo ->tăng số lượng lên 1 
				// trong trường hợp đã tồn tại id
				
				if (!isset($_SESSION['cart'])) 
				{
					$newData[$id]['qty'] = 1;	
					$_SESSION['cart'][$id] = $newData[$id];						
				}
				else
				{
					// tồn tại sản phẩm -> tăng số lượng sản phẩm lên
					if(array_key_exists($id,$_SESSION['cart']))
						$_SESSION['cart'][$id]['qty'] += 1;	
					// chưa tồn tại thì thêm 	
					else
					{
						$newData[$id]['qty'] = 1;
						$_SESSION['cart'][$id] = $newData[$id];			
					}	
				}				
			}

		}
		// Xóa sản phẩm theo id của nó ,id là key của mảng $_SESSION['cart']
		public function DeleteProduct()
		{
			if(isset($_GET['Delete']))
			{				
				unset($_SESSION['cart'][$_GET['id']]);	
			}

			// người mua xóa hết sản phẩm trong giỏ hàng
			if(isset($_SESSION['cart']) && $_SESSION['cart'] == null)
				unset($_SESSION['cart']);
		}
		public function BuyProduct()
		{
			if(isset($_GET['Buy']) && isset($_SESSION['cart']))
			{
				$this->model->Connect();

				// Mua hàng có Login----------------------------------
				if(isset($_SESSION['login']))
				{
					$user = $_SESSION['login'];
					$query = $this->account->Select('where username = ?',$user);
					$result = $query->fetchAll();
					$name = '';
					$phone = '';
					foreach ($result as $key) 
					{
						$name = $key['name'];
						$phone = $key['phone'];
					}				
					$detail = '';
					$money = 0;
					$DATE = getdate();
					$date = $DATE['mday'].'-'.$DATE['mon'].'-'.$DATE['year'];
					foreach ($_SESSION['cart'] as $key => $value) {
						$detail .= $value['name']."-".$value['qty']."\n";
						$money += ($value['price']*$value['qty']);
					}

					$exchange1 = new M_Exchange($name,$phone,null,$detail,$money,$user,$date);
					$data = array($exchange1);
					$check = $this->exchange->Insert(null,$data,null);
					if($check)
					{
						echo "<script>alert('Mua hàng thành công !');</script>";
						unset($_SESSION['cart']);
						header("Refresh:1;url=?page=Index");
					}
					

				}
				else
				{
					// Mua hàng không Login--------------------
					if(isset($_POST['btnBuyProduct']))
					{
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						$address = $_POST['address'];
						$district = $_POST['district'];
						$provincial = $_POST['provincial'];
						$city = $_POST['city'];
						$username = $_POST['username'];
						$email = $_POST['email'];
						$address .= "-".$district."-".$provincial."-".$city;

						$DATE = getdate();
						$date = $DATE['mday'].'-'.$DATE['mon'].'-'.$DATE['year'];
						$detail = '';
						$money = 0;
						$DATE = getdate();
						$date = $DATE['mday'].'-'.$DATE['mon'].'-'.$DATE['year'];
						foreach ($_SESSION['cart'] as $key => $value) 
						{
						$detail .= $value['name']."-".$value['qty']."\n";
						$money += ($value['price']*$value['qty']);
						}
						if($this->customer->Select("where phone = ?",$phone) != '')
						{
							$Exchange= new M_Exchange($name,$phone,null,$detail,$money,$username,$date);
							$ex = array($Exchange);
							$this->exchange->Insert(null,$ex,null);
						}
						else
						{
							$Customer = new M_Customer($name,$phone,$address,$email);
							$Exchange= new M_Exchange($name,$phone,null,$detail,$money,$username,$date);
							$cus = array($Customer);
							$ex = array($Exchange);
							$this->customer->Insert(null,$cus,null);
							$this->exchange->Insert(null,$ex,null);
						}
						unset($_SESSION['cart']);
						echo "<script>alert('Mua hàng thành công !');</script>";
						header("Refresh:1;url=?page=Index");

					}				
				}
				
			}
			
		}
		public function EditAccountCus()
		{
			//Thêm tài khoản cho khách hàng
			if(isset($_GET['page']) && $_GET['page'] == 'CreateAccount')
			{
				if(isset($_POST['btnRegister']))
				{
					$username = trim($_POST['username']," ");
					$password = $_POST['password'];
					$name = $_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$address = $_POST['address'];
					$this->model->Connect();
					$query = $this->account->Select("where username = ?",$username);
					$result = $query->fetchAll();				
					if($result != null)
					{
						echo "<script>alert('Tài khoản đã tồn tại !!! ');</script>";
					}
					else
					{
						$Account = new M_Account($username,$password,$name,0,1,$phone,$email,$address);
						$data = array($Account);
						$query = $this->account->Insert(null,$data,null);
						if($query)
							echo "<script>alert('Tạo tài khoản thành công. ');</script>";
					}

				}
			}
			// Cập nhật tài khoản cho khách hàng
			if ( isset($_GET['page']) && $_GET['page'] == 'InfoCus' && isset($_SESSION['login'])) 
			{
				if(isset($_POST['btnEditInfo']))
				{
					$Account = new M_Account($_SESSION['login'],$_POST['password'],$_POST['name'],0,1,$_POST['phone'],$_POST['email'],$_POST['address']);
					$data = array($Account);
					$this->account->Update(null,$data,$_SESSION['login']);
					echo "<script>alert('Cập nhật thành công !');</script>";

				}
			}
		}
		public function DataForEdit()
		{
			$result = array();
			// Lấy dữ liệu của 1 đối tượng
			if(isset($_GET['Emp']))
			{
				$query = $this->account->Select("where username = ?",$_GET['Emp']);
				$result = $query->fetchAll();
			}
			if(isset($_GET['Food']))
			{
				$query = $this->food->Select("where name = ?",$_GET['Food']);
				$result = $query->fetchAll();
			}	
			if(isset($_GET['Drink']))
			{
				$query = $this->drink->Select("where name = ?",$_GET['Drink']);
				$result = $query->fetchAll();
			}
			return $result;
		}
		public function EditAccountEmp()
		{
			$this->model->Connect();

			// Cập nhật tài khoản cho nhân viên
			if(isset($_GET['page']) && $_GET['page'] == 'AccountEmp' && isset($_GET['Emp']))
			{
				if(isset($_POST['btnEditEmp']))
				{
					$Account = new M_Account(trim($_GET['Emp']),$_POST['password'],$_POST['name'],1,1,$_POST['phone'],$_POST['email'],$_POST['address']);
					$data = array($Account);
					$check = $this->account->Update(null,$data,trim($_GET['Emp']));
					$this->Alert($check);
				}
			}
			// Xóa tài khoản nhân viên
			if(isset($_GET['Emp']) && isset($_GET['delete']))
			{
				$check = $this->account->Delete(null,$_GET['Emp']);
				$this->Alert($check);
			}
			// Thêm mới tài khoản Nhân viên
			if(!isset($_GET['Emp']))
			{
				if(isset($_POST['btnEditEmp']))
				{
					$check2 = $this->account->Select("where username = ?",$_POST['username']);
					$check2 = $check2->fetchAll();
					if($check2 != null)
					{
						echo "<script>alert('Account exists');</script>";
					}
					else
					{
						$Account = new M_Account(trim($_POST['username']),$_POST['password'],$_POST['name'],1,1,$_POST['phone'],$_POST['email'],$_POST['address']);
						$data = array($Account);
						$check = $this->account->Insert(null,$data,null);
						$this->Alert($check);
					}
					
				}
			}
		}
		public function EditFood()
		{
			if(isset($_GET['page']) && $_GET['page'] == 'EditFood')
			{
				if (isset($_GET['Food']))
				{
					$_SESSION['Food'] = $_GET['Food'];
					if(isset($_POST['btnEditFood']))
					{
						$Food = new M_Food($_POST['name'],$_POST['price'],$_POST['description'],$_POST['image']);
						$data = array($Food);
						$check = $this->food->Update(null,$data,$_SESSION['Food']);
						$this->Alert($check);
					}
				}
				if(!isset($_GET['Food']))
				{
					if(isset($_POST['btnEditFood']))
					{
						$check2 = $this->food->Select("where name = ? ",$_POST['name']);
						$check2 = $check2->fetchAll();
						if($check2 != null)
						{
							echo "<script>alert('Products exists');</script>";
						}
						else
						{
							$Food = new M_Food($_POST['name'],$_POST['price'],$_POST['description'],$_POST['image']);
							$data = array($Food);
							$check = $this->food->Insert(null,$data,null);
							$this->Alert($check);
						}
					}
				}
				if(isset($_GET['delete']) && isset($_GET['Food']))
				{
					$delete = $_GET['Food'];
					$check = $this->food->Delete(null,$delete);
					$this->Alert($check);
				}
			}
		}
		public function EditDrink()
		{
			if(isset($_GET['page'])  && $_GET['page'] == 'EditDrink')
			{
				// Update
				if (isset($_GET['Drink']))
				{
					$Edit = $_GET['Drink'];
					if(isset($_POST['btnEditDrink']))
					{
						$Drink = new M_Drink($_POST['name'],$_POST['price'],$_POST['image']);
						$data = array($Drink);
						$check = $this->drink->Update(null,$data,$Edit);
						$this->Alert($check);
					}
				}
				// Insert
				if(!isset($_GET['Drink']))
				{
					if(isset($_POST['btnEditDrink']))
					{
						$check2 = $this->drink->Select("where name = ?" , $_POST['name']);
						$check2 = $check2->fetchAll();
						if($check2 != null)
						{
							echo "<script>alert('Products exists');</script>";
						}
						else
						{
							$Drink = new M_Drink($_POST['name'],$_POST['price'],$_POST['image']);
							$data = array($Drink);
							$check = $this->drink->Insert(null,$data,null);
							$this->Alert($check);
						}
						
					}
				}
				//Delete
				if(isset($_GET['delete']) && isset($_GET['Drink']))
				{
					$delete = $_GET['Drink'];
					$check = $this->drink->Delete(null,$delete);
					$this->Alert($check);
				}
			}
		}
		public function Alert($value)
		{
			if($value)
			{
				echo "<script>alert('Update Successfully');</script>";
				header("Refresh:0;url=?page=".$_GET['page']);
			}
			else
			{
				echo "<script>alert('Update Failed !!!! @@');</script>";
				header("Refresh:0;url=?page=".$_GET['page']);
			}
		}
		// thống kê
		public function Statistical()
		{
			$data = array();
			if(isset($_GET['page']) == 'Statistic')
			{
				$DATE = getdate();
				$date = $DATE['mday'].'-'.$DATE['mon'].'-'.$DATE['year'];
				$check = $this->exchange->Select("where date = ?",$date);
				if ($check) {
					$data = $check;
				}

			}
			return $data;
		}

		public function Discount($value)
		{
			$discount = 0;
			if (isset($_SESSION['login']))
				$discount = $value;

			return $discount;
		}
		public function DeleteExchange()
		{
			if(isset($_GET['page'])  && $_GET['page'] == 'Statistic' && isset($_GET['id']))
			{
				$check = $this->exchange->Delete(null,$_GET['id']);
				$this->Alert($check);
			}
		}
		public function Admin()
		{
			if(isset($_SESSION['permission']) == 2)
				header("Location:?page=Admin");
		}
	}


 ?>