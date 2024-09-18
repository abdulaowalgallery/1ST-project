<?php

	require 'connection.php';

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$useremail = $_POST['useremail'];
		$usernumber = $_POST['usernumber'];
		
		if(!empty($username) && !empty($useremail) && !empty($usernumber)){
			
			$sql = "INSERT INTO user_info(usernameform, useremail, usernumber)
					VALUES('$username', '$useremail', '$usernumber')";
	
			if($conn->query($sql)){
				// header('location:addto_cart.php');
				header('location:index.php');
			}else{
				echo "Not Created.".$conn->error;
			}
			
		}
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	
	
    <title>Sign Up</title>
  </head>
  <body>
    <form class="form" action="signup.php" method="POST">
		Username : <input type="text" name="username"><br><br>
		Email : <input type="email" name="useremail"><br><br>
	    Number: <input type="number" name="usernumber"><br><br>
		<button class="btn btn-success" name="submit">Sign Up</button>
	</form>
  </body>
</html>