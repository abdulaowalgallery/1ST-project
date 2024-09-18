<?php

	require 'connection.php';
	
	if(isset($_POST['submit'])){
		$username=$_POST['usernameform'];
		
		$useremail = $_POST['useremail'];
		$usernumber = $_POST['usernumber'];
		
		
		
		
            $sql_form="INSERT INTO users(username,useremail,usernumber)VALUES('$username','$useremail','$usernumber')";
            
           
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
    <form class="form" action="" method="POST" enctype="multipart/form-data">
	Username : <input type="text" name="usernameform"><br><br>
	Email : <input type="email" name="useremail"><br><br>
	Number : <input type="number" name="usernumber"><br><br>
		<button class="btn btn-success" name="submit">Sign Up</button>
	</form>
  </body>
</html>