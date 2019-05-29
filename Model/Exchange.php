<?php 
	require_once('Model.php');
	class M_Exchange extends Model {

		//Properties Object
		
		private $name;
		private $phone;	
		private $account_employees;
		private $detail;
		private $money;
		private $account_customer;
		private $date;

		
		public function __construct($_name = null,$_phone = null,$_account_employees = null,$_detail = null,$_money = null,$_account_customer = null,$_date = null)
		{
			$this->name = $_name;
			$this->phone = $_phone;		
			$this->account_employees = $_account_employees;
			$this->detail = $_detail;
			$this->money = $_money;
			$this->account_customer = $_account_customer;
			$this->date = $_date;	
		}
		// Hàm sử dụng cho tất cả :Select, insert, update, delete
		
		public function Exchange_DataProcess($sql,$data = array(),$id=null)
		{			
			$i =1;
			$result = '';
			$result = parent::Connect()->prepare($sql);
			if($data)
			{		
				foreach ($data as $key => $object) {
					foreach ($object as $Subkey => $value) {
						$result->bindValue($i,$value);
						$i++;				
					}
				}
			}
			//print_r($result);
			if($id != null)
				$result->bindValue($i,$id);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$result->execute();
			return $result;	
		}
		public function Select($sql=null,$id=null)
		{
			return $this->Exchange_DataProcess('select * from exchange '.$sql,null,$id);
		}
		public function Insert($sql=null,$data=array(),$id=null)
		{
			return $this->Exchange_DataProcess('insert into exchange(name,phone,account_employees,detail,money,account_customer,date) values (?,?,?,?,?,?,?)'.$sql,$data,$id);		
		}
		public function Update($sql=null,$data=array(),$id=null)
		{
			return $this->Exchange_DataProcess('update exchange set name = ?, phone = ?, account_employees = ?, detail = ?, money = ?, account_customer = ?, date = ? where id = ?'.$sql,$data,$id);
		}
		public function Delete($sql=null,$id=null)
		{
			return $this->Exchange_DataProcess('delete from exchange where id = ?'.$sql,null,$id);
		}

	}

 ?>