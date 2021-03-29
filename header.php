<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "crud-storeprocedure-php";
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if($conn){

}else{
	echo "Failed to connect";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD STOREPROCEDURE PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		background-image: url('image/bg1.jpg');
  		
  	}
  	#form_div{
  		color:#fff;
  		margin-top: 30px;
  		background-color: rgba(255,255,255,0.2);
  	}
  </style>
</head>
<body>

<div class="container">