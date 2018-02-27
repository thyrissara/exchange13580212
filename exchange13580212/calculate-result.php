<?php
	//1.รับค่าจากหน้าที่แล้วมา
	//ส่งค่ามาเป็น post
	//$thb = $_post['attribute name'];
	$thb = $_POST['thb'];
	$type = $_POST['type']; 

	// echo"ค่าที่กรอกคือ".$thb;
	
	// echo "<br>";
	// echo "สกุลเงินที่ใช้คำนวณ".$type;
	// echo "<br>";

	if ($type=="usd") {
		$result = $thb/31.2273;
	}elseif ($type=="jyp") {
		$result = $thb/28.9814;
	}elseif ($type=="krw") {
		$result = $thb/0.0290;
	}elseif ($type=="gbp") {
		$result = $thb/43.3292;
	}elseif ($type=="eur") {
		$result = $thb/38.2737;
	}

	// echo "Result=".$result;
	
	// echo "<br>";
	// echo "Style 2";
	// echo "<br>";


	//แบบ 2

	if ($type=="usd") {
		$rate = 31.2273;
	}elseif ($type=="jyp") {
		$rate = 28.9814;
	}elseif ($type=="krw") {
		$rate = 0.0290;
	}elseif ($type=="gbp") {
		$rate = 43.3292;
	}elseif ($type=="eur") {
		$rate = 38.2737;
	}

	// echo "Result=".$thb/$rate;
	
	// echo "<br>";
	// echo "Style 3";
	// echo "<br>";



	//แบบ 3

	switch ($type) {
		case 'usd':
			$rate = 31.2273;
			break;
		
		case 'jyp':
			$rate = 28.9814;
			break;

		case 'krw':
			$rate = 0.0290;
			break;

		case 'gbp':
			$rate = 43.3292;
			break;

		case 'eur':
			$rate = 38.2737;
			break;		

		default:
			$rate = 0;
			break;
	}

	// echo "Result=".$thb/$rate;
	
	

	require 'connect.php';

	$sql = "INSERT INTO exch212_history(thb, calculate,currency) VALUES($thb,$result,'$type')";

	$sql_exe=$conn -> query($sql);

	print($sql_exe);

?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Result</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="container">
			<table class="table table-striped">
				
					<thead>

						<tr>
							<th>You Money</th>
							<th>Exchange to</th>
							<th>You Money</th>
							<th>Time/Date</th>
							<th>Edit</th>
						</tr>
					</thead>

		<?php

		$sql = "SELECT * FROM exch212_history ORDER BY dateRecord DESC";
		$sql_exe =$conn->query($sql);

		

		while ($row = mysqli_fetch_assoc($sql_exe)) {

			echo "<tr>

			<td>".$row['thb']." </td>
			<td>"."".$row['currency']."</td> 
			<td>".$row['calculate']."</td>
			<td>".$row['dateRecord']."</td>";



			?>	           
			<td>	   

			<a href="delete.php?id=<?php echo $row['recordID'].'&thb='.$row['thb'] ?>">Delete</a>
			</td>
		</tr>

			<?php

			
			
				// $array['key/feild name']	
		}

		$conn -> close();

		  ?>



    
    
  </table>



	</body>
</html>