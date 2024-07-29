<?php	
class CRUD
{
		private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $database   = "onlineshop";
		public  $con;
// Database Connection 
		public function __construct()
		{
		    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
					 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->con;
		    }
		}
//---------------------------------------------------------------- Insert category
		public function insertcategory($post)
		{
			$name = $this->con->real_escape_string($_POST['cname']);
			$query="INSERT INTO category (CatName) VALUES('$name')";
			$sql = $this->con->query($query);
			if ($sql) 
			{
						echo '<div class="alert alert-success"><h4 class="text-center">Successfully Added 😃</h4></div>';

			}else{
			echo '<div class="alert alert-danger"><h4 class="text-center"> Failed 😞</h4></div>';
			}
			
		}
//---------------------------------------------------------------- Show category

public function showcat($table_name)
{
	$array = array();
	$query = "select * from ".$table_name;
	$result = mysqli_query($this->con,$query);
	while($row = mysqli_fetch_array($result)) 
	{
		 $array[] = $row;	
		
	}
	return $array;
	
}
//--------------------------------------------product
public function p_insert($p_name,$p_type,$p_des,$p_stock,$p_price,$p_image,$catid_fk,$p_feature)
	{
	$sql = "insert into product(ProductName,ProductType,Description,Stock,Price,ImageSource,CatID_Fk,Featured)
	values('$p_name','$p_type','$p_des','$p_stock','$p_price','$p_image','$catid_fk','$p_feature')";
	$insert = $this->conn->query($sql);
	if($insert)
		{
			echo "<p>Data is Inserted</p>";	
		}
	}
public function total($table)
{
	$result="SELECT count(*) from ".$table;
	$res =$this->con->query($result);
	while($row = mysqli_fetch_row($res))
	{
		echo $row[0];
	}
	

}

}
?>