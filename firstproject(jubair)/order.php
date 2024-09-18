<?php
	session_start();
	require 'connection.php';
    // $cart=$_SESSION['cart'];
    if(isset($_GET['heading'])){
    echo $_SESSION['heading'] = $_GET['heading'];
    echo $_SESSION['price'] = $_GET['price'];
    
      
    }
	
	if(empty($_SESSION['user_email'])){
	header('location:login.php');
	}

    $user_email = $_SESSION['user_email'];

    $sql_user_id = "SELECT * FROM user_info WHERE useremail='$user_email' ";
	
	$result_user_id = $conn->query($sql_user_id);
    $data_user_id = $result_user_id->fetch_assoc();

    $user_id = $data_user_id['id'];

    if(isset($_POST['submit'])){
        // $product_name = $_POST['product_name'];
        // $product_price = $_POST['product_price'];
        $quentity = $_POST['quentity'];
        $order_date = $_POST['order_date'];
        $payment_system = $_POST['payment_system'];
        $payment_number = $_POST['payment_number'];
        $address = $_POST['address'];
        $mobile_number = $_POST['mobile_number'];
        $total_price = $product_price*$quentity;
        //
        // foreach($cart as $key=>$value){
        //     $key.":".$value['quentity']."<br>";
        // $sql="SELECT*FROM card WHERE card_id='$key' ";
                          
        //                $result=$conn->query($sql);
        //                $data=$result->fetch_assoc();
        //                $heading=$data['heading'];
                          
        //                   $price=$data['price'];
        //
     
         $sql = "INSERT INTO product_order(product_name,product_price,quentity,total_price,order_date,payment_system,payment_number,address,mobile_number,customer_id,status) 
				VALUES('$heading','$product_price','$quentity',' $price','$order_date','$payment_system','$payment_number','$address',$mobile_number,$user_id,1)";
		// $sql = "INSERT INTO product_order(product_name,product_price,quentity,total_price,customer_id,status) 
		// VALUES('$product_name','$product_price','$quentity',' $total_price',$user_id,1)";
		if($conn->query($sql)){
			echo "Data Inserted";
			header('location:addto_cart.php');
		}else{
			echo "Not Insert.".$sql.''.$conn->error;
		}
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    
   
    Order date:<input type="date" name="order_date";><br><br>
    Payment system:                      <select name="payment_system" id="">
        <option value="bkash">bkash</option>
        <option value="Nagad">Nagad</option>
        <option value="Bank">Bank</option>
        <option value="Cash">Cash</option>
    </select><br><br>
    Payment number:<input type="text" name="payment_number";><br><br>
    Address:<input type="text" name="address";><br><br>
    Mobile Number:<input type="text" name="mobile_number";><br><br>
   
        <input type="submit" value="Order Now" name="submit">
    </form>
    
</body>
</html>