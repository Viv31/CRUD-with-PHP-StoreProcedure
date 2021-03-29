<?php include('header.php'); ?>
  <h2 class="text-white text-center">ALL USERS</h2>
  <a href="add_data.php" class="btn btn-primary mb-2">ADD</a>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
   <?php 

    	$getuserbyID = 'CALL GetAllRecords();';
    	$res = mysqli_query($conn,$getuserbyID);
		if(mysqli_num_rows($res) > 0){
			while($row = mysqli_fetch_assoc($res)){ ?>
				 <tr>
			        <td><?php echo $row['first_name']; ?></td>
			        <td><?php echo $row['last_name']; ?></td>
			        <td><?php echo $row['email']; ?></td>
			        <td><a class="btn btn-primary" href="update_data.php?id=<?php echo $row['id']; ?>">Edit</a></td>
			        <td><a class="btn btn-danger" onclick="return confirm('Do you want to delete this ?');" href="delete_data.php?id=<?php echo $row['id']; ?>">Delete</a></td>
      			</tr>

			<?php }}?>
  </tbody>
  </table>
  <?php include('footer.php'); ?>

