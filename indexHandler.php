<?php
	include("connection.html");
	$seat= $_POST["seat"];
	$name= $_POST["username"];
	$gender= $_POST["gender"];
	$sign= $_POST["sign"];
	$mydate= $_POST["mydate"];
	if(isset($_POST["submit"])){
	$insert = mysqli_query($connect,"insert into seating values('$seat','$name','$gender','$sign','$mydate')");
		if($insert){
			echo "Data inserted successful...!!";
		}else{
			echo "Data inserted not successful...!!";
		}
	}
?>
