<?php include('header.php');?>
<div class="row">
	<div class="col-md-5 mx-auto" id="form_div">
		<form action="add_data_sub.php" method="POST">
			<div class="form-group">
				<label>First Name:</label>
				<input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name"><br>
				<label>Last Name:</label>
				<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name"><br>
				<label>Email:</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Enter email"><br>
				<input type="submit" name="insert" value="Add User" class="btn btn-primary">

			</div>
			
		</form>
	</div>
</div>
<?php include('footer.php'); ?>
