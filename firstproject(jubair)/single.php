<?php
include 'connection.php';
session_start();
 

if(isset($_GET['heading'])){
$_SESSION['heading'] = $_GET['heading'];
$_SESSION['quentity'] = $_GET['quentity'];
 

 
}
// card dynamic picture start
$sql_card="SELECT*FROM card";
$result_card=$conn->query($sql_card);

// card dynamic picture end

    ##Single first image query
    ##Single first image query
    $sql_fist_slide_image = "SELECT picture FROM slider ORDER BY id ASC LIMIT 1";

    $query_fist_slide_image = $conn->query($sql_fist_slide_image);

    $rows_fist_slide_image = $query_fist_slide_image->fetch_assoc();
    
    $image_name_fist_slide_image = $rows_fist_slide_image['picture'];

    ### Another 4 image query for slide ####
    $sql = "SELECT picture FROM slider WHERE picture != '$image_name_fist_slide_image' ORDER BY id ASC LIMIT 2 ";

    $query = $conn->query($sql);

    


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .margin-space{
        margin-left:350px;
    }
    .form-control{
      
       margin-left:100px;
    }
    .largebtn{
        width:100px;
    }
    #inputlg{
        width:360px;
    }
    .btn-sm{
        height:40px;
    }
    .sicon{
margin-left:-25px;
    }

    .nav-item a .navlink{
        list-style:none;
    }
    .pic1static1{
      height:200px;
      width:240px;
      background:#FFE8A1;
      
    }
    #pic1static1part{
      height:200px;
      width:300px;
    }
    #pic1static1part h3{
      background:red;
      width:310px;
    }
    .pic2static2 img{
      height:200px;
      width:240px;
      
    }
    .pic2static2{
      margin-top:5px;
      
    }
    #pic1static1{
      display:flex;
    }
    .example{
      
      width:200px;
      margin-right:10px;
      background:red;
    }

    .finderpartback{
      height:;
      background:#E2E2E2;
      padding:10px;
     
    }
    .fa-solid{
      background:#EF4A23;
      padding:20px;
      border-radius:50%;
      
    }
    .laptop{
      margin-top:-50px;
      margin-left:70px;
     
    }

    .laptopp{
      margin-left:70px;
      margin-top:-10px;
    }


    .textslider{
      background:yellow;
      height:45px;
      border-radius:20px;
    }
    .imgtxt{
      margin-top:10px;
    }
   .catagory{
    display: flex;
  flex-wrap: wrap;
  margin-left:100px;
   }

   .catagory img{
    width:220px;
    height:220px;
    margin:5px;
   }
   .catagory div p{
    width:220px;
    
   }
   .catagory div h3{
    background:red;
    margin:5px;
    padding:4px;
    border-radius:20px;
    
   }
   .examplefeatureSearch{
    background:green;
    
    
    
   }
   .examplefeatureSearch input{
    background:yellow;
    width:700px;
    height:140px;
   }
   .logoin{
    
    background:black;
   }
   .searchwidthFeatureProduct{
   
    margin-left:800px;
   }
   .navbarSupportedContentWidth{
    height:160px;
    border-radius:10px;
    margin-top:20px;
   }
   .featureHeading{
    margin-left:570px;
    margin-top:50px;
    margin-bottom:20px;
   }
   .footerbg{
    background:black;
   }
   .navbar-brand img{
width:50px;
height:50px;
}
   .marbottom{
    height:700px;
    margin-top:200px;
  
}
</style>
   
  </head>
  <body>
   

 <!-- feature catagory start -->

<div class=" featureHeading">
<h2>Featured Products</h2><button><a href="index.php">Go Home</a></button>
<button><a href="ordersummery.php">Order summery</a></button>
Check & Get Your Desired Product!
</div>
  
 <section>
 <div class="  catagory">

  <?php
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }
   $sql_user_id = "SELECT * FROM card WHERE card_id=$id ";
	
   $result_card = $conn->query($sql_user_id);
  $data_card=$result_card->fetch_assoc();
    $card_id=$data_card['card_id'];
    $heading=$data_card['heading'];
    $picture=$data_card['picture'];
   $short_message=$data_card['short_message'];
   $details=$data_card['details'];
   $price=$data_card['price'];
     $user=$data_card['user'];
    ?>
    <div>
  <h3><?php echo $heading ?></h3>
  <img src="<?php echo $picture ?>">
  <p><?php echo $short_message?></p>
  
  price:<?php echo$price?> taka
</div>

</div>
<!-- <?php

if(isset($_POST['submit'])){
    $quentity=$_POST['quentity'];
   
}

?> -->
<form action="" method="POST"enctype="multipart/form-data">
Quentity:   <input type="number" name="quentity">
<input type="submit" name="submit" value="submit">
</form>


<button>
  <a href="chack_info.php?id=<?php echo$card_id?>&&quentity=<?php echo$quentity?>">Add to card</a></button> 
 
 </section>


  
  
  <!-- feature catagory end -->

<!-- paragraph part start -->
 

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>