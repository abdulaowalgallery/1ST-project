<?php
include 'connection.php';
if(isset($_GET['can_id'])){
    $get_can_id=$_GET['can_id'];
}
$sql_product_order="UPDATE product_order SET status=2 WHERE product_name='$get_can_id'";

if($result_delete = $conn->query($sql_product_order)){
//     header('location:ordersummery.php');
// }
}
$sql="SELECT * FROM product_order WHERE status = 1 AND product_name= '$get_can_id'";

$result=$conn->query($sql);
while($data=$result->fetch_assoc()){
    echo $product_name=$data['product_name'];
    echo $status=$data['status'];
};
if($conn->query($sql)){
    header('location:ordersummery.php');
}



?>