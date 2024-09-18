<?php

	require 'connection.php';
	
	if(isset($_GET['user_id'])){
		$user_id= $_GET['user_id'];
		$usernameform = $_POST['usernameform'];
		$useremail = $_POST['useremail'];
		$usernumber = $_POST['usernumber'];
		
		}
		
		  $sql_card="SELECT*FROM card WHERE card_id=$user_id";
		  $result_card=$conn->query($sql_card);
		  $data_card=$result_card->fetch_assoc();
		 
		 
		  $heading=$data_card['heading'];
		  $picture=$data_card['picture'];
		  $price=$data_card['price'];
		
		
		$sql_customer="INSERT INTO customer(username, useremail, usernumber,heading,picture,price)VALUES('$usernameform', '$useremail', '$usernumber','$heading','$picture','$price')";
				
		
		if($conn->query($sql_customer)){
		//  header('location:cussignup.php');
		
		}
	// if(isset($_POST['submit'])){
	// 	$usernameform = $_POST['username'];
	// 	$useremail = $_POST['useremail'];
	// 	$usernumber = $_POST['usernumber'];
		
		
	// }
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
    <form class="form" action="" method="POST">
	Username : <input type="text" name="usernameform"><br><br>
	Email : <input type="email" name="useremail"><br><br>
	Number : <input type="number" name="usernumber"><br><br>
		<button class="btn btn-success" name="submit">Sign Up</button>
	</form>
  </body>
</html>