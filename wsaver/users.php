<?php
	session_start();
	$con = mysqli_connect("localhost","root","","wsaver") or die("connection error".mysqli_error($con));
	$query = "select * from users";
	$res = mysqli_query($con,$query)or die(mysqli_error());
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Welcome Admin</h2><a href="logout.php">Logout</a>
  <p>All Users Are here</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Enrollment</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Date of Birth</th>
        <th>Mobile</th>
      </tr>
    </thead>
    <tbody>
      
		<?php
			while($data = mysqli_fetch_assoc($res))
			{
				echo "<tr>";
		?>
			<?php echo "<td>".$data['name']."</td>"?>
			<?php echo "<td>".$data['email']."</td>"?>
			<?php echo "<td>".$data['enroll']."</td>"?>
			<?php echo "<td>".$data['password']."</td>"?>
			<?php echo "<td>".$data['gender']."</td>"?>
			<?php echo "<td>".$data['address']."</td>"?>
			<?php echo "<td>".$data['dob']."</td>"?>
			<?php echo "<td>".$data['mobile']."</td>"?>
			
			
		<?php
			echo "</tr>";
			}
		?>
      
    </tbody>
  </table>
</div>

</body>
</html>
