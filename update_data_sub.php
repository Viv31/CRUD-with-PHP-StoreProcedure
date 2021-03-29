<?php 
include('header.php'); 
if(isset($_POST['update'])){
	$uid = $_POST['id'];
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$uemail = $_POST['email'];
	//print_r($_POST);
	//echo $id;

	 $update_query = "call UpdateData('$fname','$lname','$uemail','$uid')";//Update data from store procedure.
	$res = mysqli_query($conn,$update_query);
		if($res){
			header("location:index.php");

		}

}

?>