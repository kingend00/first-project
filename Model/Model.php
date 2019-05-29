<?php
	class Model {
		private $db = 'mysql:host=localhost;dbname=db_thuctap';
		private $conn='';
		private $username = 'root';
		private $password = '';
		private $error = '';
		private $result = '';

		public function Connect()
		{
			try {
				$this->conn = new PDO($this->db,$this->username, $this->password);
				$this->conn->query('set names "utf8"');

			} catch (PDOException $e) {
				$this->error = $e->getMessage();
				echo $this->error;
			}
			return $this->conn;
		}

		// trả về 1 mảng dữ liệu-----
		public function getData($sql)
		{
			$data = array();
			$query = $this->Connect()->prepare($sql);
			$query->setFetchMode(PDO::FETCH_ASSOC);
			$check = $query->execute();
			if($check)
			{
				$result = $query->fetchAll();
				foreach ($result as $row) 
				{
					$data[] = $row;
				}
			}
			return $data;
		}
		/*public function execute($sql,$option=array())		
		{
			$this->result = $this->conn->prepare($sql);
			if($option)
			{
				for($i = 0; $i <count($option); $i++)
					$this->result->bindValue($i+1,$option[$i]);
			}
			$this->result->execute();
			return $this->result;
		}*/
		/*public function DataProcessing($sql,$data = array(),$id=null)
		{
			
			$this->result = $this->Connect()->prepare($sql);
			if($data)
			{
				
				foreach ($data as $key => $object) {
					foreach ($object as $Subkey => $value) {
						$this->result->bindValue(":".$Subkey,$value);
						
					}
				}
			}
							
				
			if($id != null)
				$this->result->bindValue(":id",$id);
			 return $this->result->execute();		
		}*/

	}

 ?>