<?php
session_start();
include 'connection.php';
$cart=$_SESSION['cart'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img{
            width:50px;
        }
    </style>
</head>  
<body>
<button><a href="index.php">home</a></button>
<button><a href="confirm_order.php">confirm order</a></button>
<?php
echo "<table border='1'>
						<tr>
							<th>Product Name</th>
							<th>Picture</th>
							<th>Quentity</th>
							<th>price</th>
                            <th>Total price</th>
							<th>Action</th>
						</tr>";
                        foreach($cart as $key=>$value){
                            $key.":".$value['quentity']."<br>";
                           $sql="SELECT*FROM card WHERE card_id='$key' ";
                          
                       $result=$conn->query($sql);
                       $data=$result->fetch_assoc();
                          $heading=$data['heading'];
                          $picture=$data['picture'];
                          $price=$data['price'];
                        $data=$value['quentity'];
                        $total_price=$data*$price;
                        
                       

                           ?>
		
			
			<tr>
				<td><?php echo$heading?></td>
				<td><img src="<?php echo $picture?>" alt=""></td>
				<td><?php echo$value['quentity']?></td>
                <td><?php echo$price?></td>
                <td><?php echo$total_price?></td>
				
				<td>
				<a href='deleteCart.php?id=<?php echo$key?> '>Delete</a></td>
			</tr>
           
<?php 
                        }
    echo "</table>";
?>

</body>

</html>



