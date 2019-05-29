<?php 
	require_once('Model.php');
	class M_Account extends Model{

		// Properties Object
		

		private $username;
		private $password;
		private $name;
		private $permission;
		private $durable;
		private $phone;
		private $email;
		private $address;


		public function __construct($_username = null,$_password = null,$_name = null,$_permission = null,$_durable = null,$_phone = null,$_email = null,$_address = null)
		{
			$this->username = $_username;
			$this->password = $_password;
			$this->name = $_name;
			$this->permission = $_permission;
			$this->durable = $_durable;
			$this->phone = $_phone;
			$this->email = $_email;
			$this->address = $_address;
			
			
		}
			// hàm chạy ->trả về 1 session -> lưu username đăng nhập
	
		public function LoginAndCheckPer($username,$passwd)
		{
			$dataResult=array();
			$sql1 = "Select * from account where username = :username and password = :password";
			$query = parent::Connect()->prepare($sql1);	
			$query->bindValue(':username',$username);
			$query->bindValue(':password',$passwd);
			$query->setFetchMode(PDO::FETCH_ASSOC);
			$check = $query->execute();
			if($check)
			{
				$result = $query->fetchAll();
				foreach ($result as $row) 
				{
					$dataResult = $row;
				}
			}
			return $dataResult;

		}
		// Hàm sử dụng cho tất cả :Select, insert, update, delete
		
		public function Account_DataProcess($sql=null,$data = array(),$id=null)
		{	

			$result = parent::Connect()->prepare($sql);
			$i =1;
				if($data)
				{
					foreach ($data as $key => $object) {
						foreach ($object as $Subkey => $value) {
							$result->bindValue($i,$value);
							$i++;				
						}
					}
				}							
				if($id != null)
					$result->bindValue($i,$id);
				
				$result->setFetchMode(PDO::FETCH_ASSOC);
				$result->execute();
			 return $result;
		}
		public function Select($sql=null,$id=null)
		{
			return $this->Account_DataProcess('select * from account '.$sql,null,$id);
		}
		public function Insert($sql = null,$data = array(),$id=null)
		{
			return $this->Account_DataProcess("insert into account values(?,?,?,?,?,?,?,?)".$sql,$data,$id);
		}
		public function Update($sql=null,$data=array(),$id=null)	
		{
			return $this->Account_DataProcess('update account set username = ?, password = ?, name = ?, permission = ?, durable = ?, phone = ?, email = ?, address = ? where username= ?'.$sql,$data,$id);
		}
		public function Delete($sql=null,$id=null)
		{
			return $this->Account_DataProcess('delete from account where username = ?'.$sql,null,$id);
		}

	}

 ?>