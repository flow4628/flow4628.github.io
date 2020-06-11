<?php
	$server= "flow4628";
	$user = "flow4628";
	$pass = "";
	$database = "座位表";
	$connect=mysqli_connect($server,$user,$pass,$database);
	if($connect){
		echo "Connection success...!!";
	}else{
		echo "Connection Not success...!!";
	}
?>
