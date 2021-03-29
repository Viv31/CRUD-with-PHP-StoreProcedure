<?php 
include('header.php'); 
if(isset($_POST['insert'])){
	print_r($_POST);
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];

	$insert_query="call InsertData('".$first_name."','".$last_name."','".$email."');";
	$res = mysqli_query($conn,$insert_query);
		if($res){
			header("location:index.php");

		}

}

?>