<?php 


	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];


	$sql = "DELETE FROM exch212_history WHERE recordID = $id";

	echo $sql;

	require('connect.php');

	$sql_exe = $conn -> query($sql);

	if ($sql_exe) {
		echo "Delete complete"; 
		echo "<br>";
		echo "Delete ID".$id;
		echo "<br>";
		echo "THB=".$thb;
		// header("location:index.php",4);
	}else{
		echo "Delete failed";
	}




 ?>