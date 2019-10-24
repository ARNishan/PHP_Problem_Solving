<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'csv';
$con = mysqli_connect( $host , $user, $password ) or die ( 'Could not connect to server' . mysqli_error ($con) );
mysqli_select_db( $con , $db ) or die ( 'Could not connect to database' . mysqli_error ($con) );


if(isset($_POST['submit'])){
    
 
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file,"r" );
    $c = 0 ; // define row count flag
 
    while (($csvData = fgetcsv($handle,1000,",")) !== false ){
        $firstName = $csvData[0];
        $lastName = $csvData[1];
        $email = $csvData[2];
        $sql = "INSERT INTO csv(firstName,lastName,email) VALUES ('$firstName', '$lastName','$email')";
        $query = mysqli_query ($con, $sql);
        $c = $c + 1 ;
    }
    if ($query){
        echo "Csv data uploaded Sucessfully.";
    }else{
        echo "Error Occured";
    }
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Read CSV File</title>
</head>
<body>
	<form role="form" method="POST" action="index.php" enctype="multipart/form-data">
		<input type="file" name="file" id="file">
		<input type="submit" name="submit" value="Submit">
		
	</form>

</body>
</html>