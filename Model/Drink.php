<?php 
	require_once('Model.php');
	class M_Drink extends Model{

		// Properties Object
		
		private $name;
		private $price;
		private $image;

		
		public function __construct($_name = null,$_price = null,$_image = null)
		{
			$this->name = $_name;
			$this->price = $_price;
			$this->image = $_image;
		}
		public function getDataDrink()
		{
			return parent::getData("select * from drink");
		}
		
		// Hàm sử dụng cho tất cả :Select, insert, update, delete

		public function Drink_DataProcess($sql,$data = array(),$id=null)
		{		
			$i =1;	
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
				if($id != null)
					$result->bindValue($i,$id);
				$result->setFetchMode(PDO::FETCH_ASSOC);
				$result->execute();
			return $result;	
		}
		public function Select($sql=null,$id=null)
		{
			return $this->Drink_DataProcess('select * from drink '.$sql,null,$id);
		}
		public function Insert($sql=null,$data=array(),$id=null)
		{
			return $this->Drink_DataProcess('insert into drink(name,price,image) values (?,?,?)'.$sql,$data,$id);
		}
		public function Update($sql=null,$data=array(),$id=null)
		{
			return $this->Drink_DataProcess('update drink set name = ?, price = ?, image = ? where name = ?'.$sql,$data,$id);
		}
		public function Delete($sql=null,$id=null)
		{
			return $this->Drink_DataProcess('delete from drink where name =?'.$sql,null,$id);
		}



	}

 ?>