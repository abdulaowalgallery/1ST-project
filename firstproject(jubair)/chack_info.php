<?php
include 'connection.php';
session_start();

if(isset($_GET['id'])){
if(isset($_GET['quentity'])){
   $quentity=$_GET['quentity'];
}else{
    $quentity=1;
}

    $id=$_GET['id'];
    $_SESSION['cart'][$id]=array('quentity'=>$quentity);
    echo'<pre>';
 header('location:cart.php');

}





?>



