<?php
	session_start();
	require 'connection.php';
	
	if(!empty($_SESSION['user_email'])){
		header('location:shoping.php');
	}
	
	if(isset($_POST['submit'])){
		$useremail = $_POST['useremail'];
		$userpassword = $_POST['userpassword'];
		
		$sql = "SELECT * FROM users WHERE useremail = '$useremail' AND userpassword = '$userpassword'";
		
		$query = $conn->query($sql);
		
		if($query->num_rows > 0){
			
			$row = $query->fetch_assoc();
			
			$user_email = $row['useremail'];
			
			$_SESSION['user_email'] = $user_email;
			
			
			
		}
	}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	
	
    <title>Login</title>
  </head>
  <body>
    <form class="form" action="" method="POST">
		Email : <input type="email" name="useremail"><br><br>
		Password : <input type="password" name="userpassword"><br><br>
		<button class="btn btn-success" name="submit">LogIn</button>
	</form>
  </body>
</html>