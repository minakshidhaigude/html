<!DOCTYPE html>
<html lang="en">
<head>
  <title>crud php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add User Details</h2>
  
  <form action="" method="post">
  
  
    <div class="form-group">
      <label for="username">UserName:</label>
      <input type="text" class="form-control" id="txt1" placeholder="Enter user name" name="uname">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
	
	<div class="form-group">
      <label for="uimg">UserImg:</label>
      <input type="file" name="img" >
    </div>
	
	<div class="form-group">
      <label for="addr">Address:</label>
      <input type="textarea" class="form-control" id="add1" placeholder="Enter address" name="add">
    </div>
    
    <input type="button"  name="btn1" class="btn btn-primary" value="submit">
  </form>

<?php
 $conn = mysqli_connect('localhost','root','','team');
	/*if($conn )
	{
		echo "connection ok";
	}
	else
	{
		echo "connection failed because".mysqli_connect_error();
	}*/
	echo "<pre>";
	 print_r($_POST);
	echo "</pre>";
	
	echo $_POST['uname'];
	
	/*if(isset($_POST['btn1'])){
		
		echo $username = $_POST['uname'];
		echo $email = $_POST['email'];
		$password = $_POST['pswd'];
		$image = $_POST['img'];
		$address = $_POST['add'];

		
	}*/
	
	
	
?>

</body>
</html>
