<?php
include('header.php');
$id = $_GET['id'];
//echo $id;
$singleRow = " call GetSingleRecord('".$id."'); ";
$row = mysqli_query($conn,$singleRow);
$data = mysqli_fetch_assoc($row);
//print_r($data);
?>
<div class="row">
	<div class="col-md-5 mx-auto" id="form_div">
		<form action="update_data_sub.php" method="POST">
			<div class="form-group">
				<label>First Name:</label>
				<input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" value="<?php echo $data['first_name']; ?>"><br>
				<label>Last Name:</label>
				<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" value="<?php echo $data['last_name']; ?>"><br>
				<label>Email:</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="<?php echo $data['email']; ?>"><br>
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
				<input type="submit" name="update" value="Update User" class="btn btn-primary">

			</div>
			
		</form>
	</div>
</div>
<?php include('footer.php'); ?>