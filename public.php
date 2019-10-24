<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<!-- <form name="myForm" action="" onsubmit="return validateForm()" method="">
			Name: <input id="name" type="text" name="name">
			Fname: <input id="fname" type="text" name="fname">
			Mname: <input id="mname" type="text" name="mname">
			
			<input type="submit" value="Submit">
			<h3 id="empty"></h3>
		</form> -->
		<!-- <script type="text/javascript">
			function validateForm() {
			var x = document.getElementById('name').value;
			var y = document.getElementById('fname').value;
			var z = document.getElementById('mname').value;
			if (x == "" || y == "" || z == "") {
		      document.getElementById('empty').innerHTML = "<h3> YOU MUST INPUT ALL THE FIELD </h3>";
			// alert("Name must be filled out");
			}
			}
			
		</script> -->
		<?php
		$arr = array(64, 34, 25, 12, 22, 11, 90);
		function BoubleShort(){
			$n = sizeof($arr); 
			for ($j = 0; $j < $n - 1; $j++)  
           { 

            if ($arr[$j] > $arr[$j+1]) 
            { 
                $t = $arr[$j]; 
                $arr[$j] = $arr[$j+1]; 
                $arr[$j+1] = $t; 
            } 
          } 

		}
		$len = sizeof($arr); 
        BoubleShort($arr);
        for ($i = 0; $i < $len; $i++) 
        echo $arr[$i]." ";  
  
		?>
		
	</body>
</html>