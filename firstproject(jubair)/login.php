<?php
	session_start();
	require 'connection.php';
	
	
	
	if(isset($_POST['submit'])){
		$useremail = $_POST['useremail'];
		$usernumber = $_POST['usernumber'];
		
		$sql = "SELECT * FROM user_info WHERE useremail = '$useremail' AND usernumber = '$usernumber'";
		
		$query = $conn->query($sql);
		
		if($query->num_rows > 0){
			
			$row = $query->fetch_assoc();
			$id = $row['id'];
			$_SESSION['id'] = $id;
			$usernameform = $row['usernameform'];
			$user_email = $row['useremail'];
			$_SESSION['usernameform'] = $usernameform;
		    $_SESSION['user_email'] = $user_email;
			
			
			
		 }
	}

 if(!empty($_SESSION['user_email'])){
	// 	// header('location:index.php');
	 	header('location:confirm_order.php');
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
    <form class="form" action="login.php" method="POST">
	    Name: <input type="text" name="usernameform"><br><br>
		Email : <input type="email" name="useremail"><br><br>
		Number: <input type="number" name="usernumber"><br><br>
		<button class="btn btn-success" name="submit"><a href="login.php?id=<?php echo $_SESSION['usernameform'] = $usernameform?>"></a>LogIn</button>
	</form>
	Not an Account? <a href="signup.php">Signup</a>
  </body>
</html>