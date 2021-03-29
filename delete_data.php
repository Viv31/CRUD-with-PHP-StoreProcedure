<?php
include('header.php'); 
$id = $_GET['id'];
//echo $id;
$delete_query = "call DeleteRecords($id);";

$res = mysqli_query($conn,$delete_query);
if($res){
	header("location:index.php");

}

?>