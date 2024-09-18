




<?php
include 'connection.php';


if(isset($_GET['user_id'])){
$user_id= $_GET['user_id'];}

  $sql_card="SELECT*FROM card WHERE card_id=$user_id";
 
  $result_card=$conn->query($sql_card);
  $data_card=$result_card->fetch_assoc();
 
 
  $heading=$data_card['heading'];
  $picture=$data_card['picture'];
  $price=$data_card['price'];
 
 

$sql_customer="INSERT INTO customer(heading,picture,price)VALUES('$heading','$picture','$price')";
		

if($conn->query($sql_customer)){
//  header('location:index.php');

}

?>