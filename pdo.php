<?php
   $dsn = "mysql:host=localhost; dbname=sample;";
   $db_user = "root";
   $db_pass = "";
   
   $con = new pdo($dsn,$db_user,$db_pass);


   // $con = mysqli_connect("localhost", "root", "", "demo");

   if (!$con) {
      echo "failed";
   }
   $sql = "SELECT * from webpage_details";
   $update = "";
    $result = $con->query($sql);
    // $result = $result->fetchAll();
    foreach($result as $row) {
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
      echo "link  =  ".$row['link'];
      echo "<br>";
      echo "title  =  ".$row['title'];
      echo "<br>";
      echo "description  =  ".$row['description'];
      echo "<br>";
      echo "internal_link  =  ".$row['internal_link'];
      echo "<br>";
      echo "<br>";
      echo "<br>";
      
    }
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";



   // $sql = "DELETE FROM studens WHERE id=?"; //prepared statement a id= ? likhte hoy
   // $result = mysqli_prepare($con,$sql);

   // if($result){
   //    mysqli_stmt_bind_param($result, 'i', $id);
   //    $id= 9;
   //    mysqli_stmt_execute($result);
   // }
   
   

   //Insert by prepare statement
   /*$sql = "INSERT INTO studens (name, branchs, marks, roll) VALUES(?,?,?,?)"; //prepared statement a id= ? likhte hoy
   $result = mysqli_prepare($con,$sql);

   if($result){
      mysqli_stmt_bind_param($result, 'ssii', $name, $branchs, $marks, $roll);
      $name = 'raihan';
      $branchs = 'math';
      $marks = 68;
      $roll = 8;

      mysqli_stmt_execute($result);

   }*/



   //select by name
   /*mysqli_stmt_bind_param($result, 's', $name); //here i for type integer
   $name= 'farhad';*/

   //select by id
   /*mysqli_stmt_bind_param($result, 'i', $id); //here i for type integer
   $id= 5;*/

   // mysqli_stmt_bind_result($result,$id,$name,$branchs,$marks,$roll);
   // mysqli_stmt_execute($result);
   
   // mysqli_stmt_fetch($result);
   // echo "ID: " . $id. " name: " . $name . " branchs: " . $branchs . " marks: " . $marks . " roll: " . $roll."<br><br>";

   //retrieve result by pdo
   /*$run = $con->query($sql);
   foreach ($run->fetchAll(PDO::FETCH_ASSOC) as $row) {
      echo "<pre>"; print_r($row);
   }*/



   
   //fetch all result
   /*while(mysqli_stmt_fetch($result)){
      echo "ID: " . $id. " name: " . $name . " branchs: " . $branchs . " marks: " . $marks . " roll: " . $roll."<br><br>";
   }
*/





   //total count
   /*mysqli_stmt_store_result($result);
   $total = mysqli_stmt_num_rows($result);
   echo $total;*/
?>