<?php 
	require_once('Model.php');
	class M_Customer extends Model {

		// Properties Object
		
		private $name;
		private $phone;
		private $address;	
		private $email;

		public function __construct($_name = null,$_phone = null,$_address = null,$_email = null)
		{
			$this->name = $_name;
			$this->phone = $_phone;
			$this->address = $_address;
			$this->email = $_email;

		}
		// Hàm sử dụng cho tất cả :Select, insert, update, delete
		 
		public function Customer_DataProcess($sql,$data = array(),$id=null)
		{	
			$i =1;
			$result = '';		
			$result = parent::Connect()->prepare($sql);
			if($result != '')
			{
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
			}
			return $result;	
		}
		public function Select($sql=null,$id=null)
		{
			return $this->Customer_DataProcess('select * from customer '.$sql,null,$id);
		}
		public function Insert($sql = null,$data =array(),$id=null)
		{
			return $this->Customer_DataProcess('insert into customer(name,phone,address,email) values(?,?,?,?)'.$sql,$data,$id);
		}
		public function Update($sql=null,$data=array(),$id=null)
		{
			return $this->Customer_DataProcess('update customer set name = ?, phone = ?, address = ?, email = ? where phone = ?'.$sql,$data,$id);
		}
	}

 ?>