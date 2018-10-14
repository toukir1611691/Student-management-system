

<?php
error_reporting(E_ALL);
class Database{
	private $conn;	
	public function __construct($host,$user,$pass,$db){
		$this->conn=mysqli_connect($host,$user,$pass,$db);
		mysqli_set_charset($this->conn, "utf8");

		if(mysqli_connect_errno()){
			die("Connection Fail! ".mysqli_connect_error());			
		}
		else{
			//echo "Connection Success";	
		}

	}
	
	public function getAll($table,$cols){
		$sql="SELECT $cols FROM $table ORDER BY id desc";
		$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_num_rows($result)>0){
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
			
		}
		else{
			return "No data availble in your table";	
		}
		
	}
	public function getAll_asc($table,$cols){
		$sql="SELECT $cols FROM $table";
		$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_num_rows($result)>0){
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
			
		}
		else{
			return "No data availble in your table";	
		}
		
	}
	public function selectWithLimit_asc($table,$cols,$limit){
		$sql="SELECT $cols FROM $table LIMIT $limit";
		$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_num_rows($result)>0){
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
			
		}
		else{
			return "No data availble in your table";	
		}
		
	}
	
	public function selectWithLimit($table,$cols,$limit){
		$sql="SELECT $cols FROM $table ORDER BY id desc LIMIT $limit";
		$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_num_rows($result)>0){
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
			
		}
		else{
			return "No data availble in your table";	
		}
		
	}
	public function getById($table,$cols,$where){
		$sql = "SELECT $cols FROM $table WHERE $where";

		$result = mysqli_query($this->conn,$sql);
		if(mysqli_num_rows($result) > 0){
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}else{
			echo "No Data found in your table";
		}
	}
	public function Update($table,$cols,$where){
		$sql="UPDATE $table SET $cols WHERE $where";
		$result=mysqli_query($this->conn,$sql);
		if(mysqli_affected_rows($this->conn)>0){
			return true;		
		}
		else{
			return false;
		}
	}
	public function Insert($table,$cols){
		$sql="INSERT INTO $table SET $cols";
		$result=mysqli_query($this->conn,$sql);
		if(mysqli_affected_rows($this->conn)>0){
			return true;		
		}
		else{
			return false;
		}
	}
	public function Delete($table,$where){
		$sql="DELETE FROM $table WHERE $where";
		$result=mysqli_query($this->conn,$sql);
		if(mysqli_affected_rows($this->conn)>0){
			return true;		
		}
		else{
			return false;
		}
	}
}

$obj=new Database("localhost","root","","stu");

//echo "<pre>";

//echo($obj->Insert("students","name='Jodu',email='anwar@nomail.com',mobile='123',address='Dhaka,Bangladesh'"))?"Insert Success":"Insert Fail";

//echo($obj->Update("students","name='anwar',email='anwar@nomail.com'","id=2"))?"Update Success":"Update Fail";

//echo ($obj->Delete("students","id=2"))?"Delete Success":"Delete Fail";
//echo "<pre>";
//print_r($obj->getAll("prinfo","*"));
//echo "</pre>";


//print_r($obj->getById("students","*","id=1"));

?>