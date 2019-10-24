<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<!-- Javasript for  validation -->
		
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
		<!-- <form action="" method="POST">
		<input type="number" name="number">
		<input type="submit" value="submit" >
		</form> -->
		<?php
		// Find total number of prime number between a given number and show all prime number
		// $number = 100;
		// $prime = 1;
		// $arr = array(1,2);
		// for ($i=3; $i < 100 ; $i++) {
		// for ($j=2; $j < $i; $j++) { 
		//  	if($i % $j == 0){
		//  		$prime = 0;
		//  	}
		//  } 
		//  if ($prime == 1) {
		//  	array_push($arr, "$i");
		//  }
		//  $prime = 1;
		 	
		// }
		// $len = sizeof($arr);
		// echo "The number of prime numer is ".$len;
		// echo "<br>";
		// print_r($arr);


		//Find the sum of divisor for a positive number
		// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// 	$Number = $_POST['number'];
		
		// $arr = array();
		// for ($i=1; $i <= $Number; $i++) {

		// 	if ($Number % $i == 0) {
		// 		array_push($arr, "$i");
		// 	}
		// }
		// // print_r($arr);
		// $len = sizeof($arr);
		// echo "The number of Divisor are".$len;
		// echo "<br>";
		// $sum = array_sum($arr);
		// echo "The sum of Divisor are".$sum;
		// }

		//Binary Search
		// function binarySearch($arr, $start, $end, $x)
		// {
		// if ($end >= $start)
		// {
		// $mid = ceil($start + ($end - $start) / 2);
		
		// // If the element is present
		// // at the middle itself
		// if ($arr[$mid] == $x)
		// return floor($mid);
		
		// // If element is smaller than
		// // mid, then it can only be
		// // present in left subarray
		// if ($arr[$mid] > $x)
		// return binarySearch($arr, $start, $mid - 1, $x);
		
		// // Else the element can only
		// // be present in right subarray
		// return binarySearch($arr, $mid + 1, $end, $x);
		// }
		
		// // We reach here when element
		// // is not present in array
		// return -1;
		// }
		
		// // Driver Code
		// $arr = array(2, 3, 4, 10, 40);
		// $n = count($arr);
		// $x = 50;
		// $result = binarySearch($arr, 0, $n - 1, $x);
		// if(($result == -1))
		// echo "Element is not present in array";
		// else
		// echo "Element is present at index ", $result;

		//Print * Shape
		// for($i=5; $i > 0; $i--){
			// 	for($j = 1; $j < $i; $j++){
				// 		echo "*";
			// 	}
			// 	echo "<br>";
		// }


		// Maximum Number from two dimension array
		// $arr = array(
			// 	array(64, 34, 25, 12, 22, 11, 90),
			// 	array(4, 34, 25, 152, 232, 121, 90),
			// 	array(94, 34, 245, 12, 422, 11, 90),
			// 	array(84, 4, 25, 92, 202, 101, 97)
		// );
		// $b = 0;
		// foreach ($arr as $val)
			// 	{
				// 		foreach($val as $key=>$val1)
				// 		{
					// 			if ($val1 > $b)
					// 			{
			// 	         $b = $val1;
				// 		}
					// 			}
			// 	}
			// 	echo $b;

		
		//Bouble Short
		// $arr1 = array(64, 34, 25, 12, 22, 11, 90);
		// function BoubleShort(&$arr){
				// 	$n = sizeof($arr);
				// 	for($i = 0; $i < $n; $i++)
		//        {
		//       // Last i elements are already in place
		//       for ($j = 0; $j < $n - $i - 1; $j++)
		//       {
		//           // traverse the array from 0 to n-i-1
		//           // Swap if the element found is greater
		//           // than the next element
		//           if ($arr[$j] > $arr[$j+1])
		//           {
		//               $t = $arr[$j];
		//               $arr[$j] = $arr[$j+1];
		//               $arr[$j+1] = $t;
		//           }
		//       }
		//   }
		// }
		// $len = sizeof($arr);
		//       BoubleShort($arr);
		//       for ($i = 0; $i < $len; $i++)
		//       echo $arr[$i]." ";
		
		?>
		
	</body>
</html>