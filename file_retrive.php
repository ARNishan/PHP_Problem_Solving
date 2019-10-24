<?php
/**
 * 
 */
class Database{
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $db_name = "example";
	public $link;
	public $error;


	public function __construct()
	{
	   	$this->connectDB();
	}
	public function connectDB()
	{
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
		if (!$this->link) {
			$this->error = "Connection fail".$this->link->connect_error;
			return false;
		}
	}
	public function insert($query){
		$insert = $this->link->query($query) or die($this->error.__LINE__);
		if($insert){
			return $insert;
		}else{
			return false;
		}

	}
}


if(isset($_POST['submit'])){
	$dbconnect = new Database();
	$file = $_FILES['CsvFile']['tmp_name'];
	$handle = fopen($file, "r");
	while (($fileOpen = fgetcsv($handle,1000,",")) !== false) {
		$firstName =     $fileOpen['0'];
		$lastName  =     $fileOpen['1'];
		$email     =     $fileOpen['2'];
	$query = "INSERT into test (first_name,last_name,email) VALUES('$firstName','$lastName','$email')";
	$success = $dbconnect->insert($query);
	 
	}
	if($success){
		echo "Data Inserted Succesfully";

	 }else{
        echo "Something Wrong!!";
	 }

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Read CSV File</title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="CsvFile">
		<input type="submit" name="submit" value="Submit">
		
	</form>

</body>
</html>