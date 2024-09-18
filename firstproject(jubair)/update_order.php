<?php
	
	include 'connection.php';
	
	if(isset($_GET['up_id'])){
		$get_up_id = $_GET['up_id'];
	}else{
		// header('location:list_of_product.php');
	}
	
	
	
	//select product
	$sql = "SELECT * FROM product_order WHERE status=1 AND product_name = '$get_up_id'";
	// SELECT*FROM product_order WHERE status=1 AND customer_id=$id
	
	$result = $conn->query($sql);
	
	
	$data = $result->fetch_assoc();
	$id = $data['id'];
	$product_name = $data['product_name'];
	$product_price = $data['product_price'];
	$quentity = $data['quentity'];
	
	
	//update product
	if(isset($_POST['submit'])){
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$quentity = $_POST['quentity'];
		
		
		$sql = "UPDATE product_order SET 
				product_name='$product_name', 
				product_price='$product_price',
				quentity = '$quentity'
				WHERE id=$id ";
	
		if($conn->query($sql) === TRUE){
			$update_msg = 'Data Updated!';
			header('location:ordersummery.php');
		}else{
			echo 'Data Not update'.$sql;
		}
	}
	
	

?>


<form action="" method="POST" enctype="multipart/form-data">
	product_name : <input type='text' name="product_name" value="<?php echo $product_name; ?>"><br><br>
	product_price : <input type='number' name="product_price" value="<?php echo $product_price; ?>" ><br><br>
	quentity : <input type='number' name="quentity" value="<?php echo $quentity; ?>" ><br><br>
	
			
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="submit" value="submit" name="submit">
</form>