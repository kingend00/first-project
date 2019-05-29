<?php 
	require_once('Model.php');
	class M_Food extends Model{

		// Properties Object
		
		private $name;
		private $price;
		private $description;
		private $image;

		public function __construct($_name = null,$_price = null,$_description = null,$_image = null)
		{
			$this->name = $_name;
			$this->price = $_price;
			$this->description = $_description;
			$this->image = $_image;
		}
		public function getDataFood($query = null)
		{
			return parent::getData("select * from food where name not like '%combo%'".$query."");
		}
		public function getDataCombo($query = null)
		{
			return parent::getData("select * from food where name like '%combo%' ".$query."");
		}
		// Hàm sử dụng cho tất cả :Select, insert, update, delete
		
		public function Food_Combo_DataProcess($sql,$data = array(),$id=null)
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
			return $this->Food_Combo_DataProcess('select * from food '.$sql,null,$id);
		}
		public function Insert($sql=null,$data=array(),$id=null)
		{
			return $this->Food_Combo_DataProcess('insert into food (name,price,description,image) values (?,?,?,?)'.$sql,$data,$id);
		}
		public function Update($sql=null,$data=array(),$id =null)
		{
			return $this->Food_Combo_DataProcess('update food set name = ?, price = ?, description = ?, image = ? where name = ?'.$sql,$data,$id);
		}
		public function Delete($sql=null,$id=null)
		{
			return $this->Food_Combo_DataProcess('delete from food where name = ?'.$sql,null,$id);
		}
	}

 ?>