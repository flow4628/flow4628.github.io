<?php
	$server= "";
	$user = "root";
	$pass = "";
	$database = "座位表";
	$connect=mysqli_connect($server,$user,$pass,$database);
	if($connect){
		echo "Connection success...!!";
	}else{
		echo "Connection Not success...!!";
	}
?>
