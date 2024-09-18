<?php
session_start();
$id=$_SESSION['id'];

include 'connection.php';
$sql_customer="SELECT*FROM product_order WHERE status=1 AND customer_id=$id";


$result=$conn->query($sql_customer);

$sql_customerid="SELECT*FROM product_order";
$result_id=$conn->query($sql_customerid);
while($data=$result_id->fetch_assoc()){
    $product_name=$data['product_name'];
    $payment_system = $data['payment_system'];
    $payment_number = $data['payment_number'];
    $address = $data['address'];
    $mobile_number = $data['mobile_number'];
   
}






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1>Order summery <button><a href="addto_cart.php">addto_cart</a></button></h1>
   
    <?php
    echo "<table border=1>
    <tr>
    <th>Customer Name</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>quentity</th>
     <th>Total price</th>
     <th>Order date</th>
     <th>Payment system</th>
     <th>Payment number</th>
     <th>Address</th>
     <th>Mobile number</th>
     <th>update</th>
     <th>cancil</th>
    </tr>
    
    ";
    while($data=$result->fetch_assoc()){
        $product_name=$data['product_name'];
        $product_price=$data['product_price'];
        $quentity=$data['quentity'];
        $total_price=$data['total_price'];
        $order_date=$data['order_date'];
        $payment_system=$data['payment_system'];
        $payment_number=$data['payment_number'];
        $address=$data['address'];
        $mobile_number=$data['mobile_number'];
    
 ?>
    <tr>
   <td><?php echo $_SESSION['usernameform'];?></td> 
<td><?php echo$product_name?></td>
<td><?php echo$product_price?></td>
<td><?php echo$quentity?></td>
<td><?php echo$total_price?></td>
<td><?php echo$order_date?></td>
<td><?php echo$payment_system?></td>
<td><?php echo$payment_number?></td>
<td><?php echo$address?></td>
<td><?php echo$mobile_number?></td>
<td><a href="update_order.php?up_id=<?php echo $product_name?>">update</a></td>
<td><a href="cancil_order.php?can_id=<?php echo $product_name?>">cancil</a></td>

    </tr>
    <?php    }?>
</table>

</body>
</html>