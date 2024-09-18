<?php
include 'connection.php';
session_start();
//  test array part









//  test array part

  

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

    /*if($query->num_rows > 0){
        while($rows = $query->fetch_assoc()){

            $image_name = $rows['std_picture'];

            //echo "<img src='".$image_name."'>";
        }
    }*/


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

     @media (max-width:767px) {
      #pic1static1part h3,p,span {
    margin-left:120px;
      
     
     
  } 
}

@media (max-width:767px) {
      #pic1static1part p {
        width:300px;
    margin-left:120px;
      
      background:yellow;
     
  } 
}
@media (max-width:767px) {
      .piccard h3{
        
    margin-left:200px;
      
      background:yellow;
     
  } 
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

    @media (max-width:767px) {
      .textslider{
        
        background:yellow;
      height:85px;
      border-radius:20px;
     
  } 
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
   @media (max-width:767px) {
    .featureHeading {
        
    margin-left:130px;
      
      
     
  } 
}
   .footerbg{
    background:black;
   }

   @media (max-width:767px) {
    .footerbg {
        
      background:#CBDFDE;
      width:470px;
      height:;
      
      
     
  } 
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
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="picture1.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  <form class="form-inline my-2 my-lg-0  searchwidth" >
      <input class="form-control mr-sm-2   " id="inputlg"  type="search" placeholder="Search" aria-label="Search";>
      <span class="sicon"><i class="fas fa-search"></i></span>
    </form>
    <ul class="navbar-nav mr-auto margin-space">
      <li class="nav-item active">
        <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Account</a>
      </li>
    <li>
    
    <button type="button" class="btn btn-primary btn-sm">PC builder</button>
    </li>
    
    </ul>
    
  </div>
</nav>

     <!-- navbar end -->
      <!-- nav secound part -->
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" >
  
  </button>
  
    <ul class="navbar">
      
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
      
    </ul>
  </div>
</nav>
        <!-- nav secound part -->
         <!-- body section-1  -->
         <div class="row">
         <div class="col-lg-9 ">
         <div id="carouselExampleAutoplaying" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $image_name_fist_slide_image; ?>" class="d-block w-100" alt="...">
            </div>
            <?php
                if($query->num_rows > 0){
                    while($rows = $query->fetch_assoc()){

                        $image_name = $rows['picture'];
            ?>
                        <div class="carousel-item">
                            <img src="<?php echo $image_name ?>" class="d-block w-100" alt="...">
                        </div>
            <?php
                    }
                }
            ?>
            
        </div>
            
     
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
<!-- <div> -->
  <div class="col-lg-3">

  <div id="pic1static1part" >
    <h3 >Compare product</h3>
    <p>Choose Two Products to Compare</p>
 
    
   
  
    
</form>
<span> <button>View Comparision</button></span>
 
  
  
  </div>
<div class="pic2static2 "><img src="picture2.jpg" class="img-fluid"></div>
</div>

  </div>
</div>
</div>





  

<!-- section for laptop finder start -->
<section class>
<div class="row m-2">
  <div class="col finderpartback m-2 ">
    
  <i class="fa-solid fa-laptop"></i>
     <h3 class="laptop">Laptop finder </h3>
     <p class="laptopp">find your laptop easily</p>
  </div>
  <div class="col finderpartback m-2">
  <i class="fa-solid fa-envelope-open-text"></i>
  <h5 class="laptop">Raise a Complain </h5>
     <p class="laptopp">share your experiment</p>
  </div>
  <div class="col finderpartback m-2">
  <i class="fa-solid fa-bell-concierge"></i>
  <h5 class="laptop">Online support </h5>
     <p class="laptopp">Get online support</p>
  </div>
  <div class="col finderpartback m-2">
  <i class="fa-solid fa-gear"></i>
  <h5 class="laptop">Servicing Center </h5>
     <p class="laptopp">Share your experiment</p>
  </div>
</div>

<div class="textslider ">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 imgtxt ml-lg-4" src="..." alt="My name is abdul aowal this is my first create website so i try all at the last My name is abdul aowal this is my first create website so i try all at the last My name is abdul  .............">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imgtxt  ml-lg-4" src="..." alt="My name is abdul aowal this is my first create website so i try all at the last My name is abdul aowal this is my first create website so i try all at the last My name is abdul  .............">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 imgtxt  ml-lg-4" src="..." alt="My name is abdul aowal this is my first create website so i try all at the last My name is abdul aowal this is my first create website so i try all at the las My name is abdul  .............">
    </div>
  </div>
</div>
</div>
</section>
<!-- section for laptop finder end -->
 <!-- feature catagory start -->
 <nav class="navbar navbar-expand-lg navbar-light navbar navbar-light bg-primary navbarSupportedContentWidth">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  <form class="form-inline my-2 my-lg-0  searchwidthFeatureProduct" >
      <input class="form-control mr-sm-2   " id="inputlg"  type="search" placeholder="Search" aria-label="Search";>
      <span class="sicon"><i class="fas fa-search"></i></span>
    </form>
    
    
  </div>
</nav>
<div class=" featureHeading">
<h2 >Featured Products</h2>
Check & Get Your Desired Product!
</div>
  
 <section>
 <div class="  catagory">

  <?php
  while($data_card=$result_card->fetch_assoc()){
    $card_id=$data_card['card_id'];
    $heading=$data_card['heading'];
    $picture=$data_card['picture'];
   $short_message=$data_card['short_message'];
   $details=$data_card['details'];
   $price=$data_card['price'];
     $user=$data_card['user'];
    ?>
    <div class="piccard" >
  <h3><?php echo $heading ?></h3>
  <div class="container">
  <img src="<?php echo $picture ?>" class="w-100 col sm mr-1">
  </div>
  
  <p><?php echo $short_message?></p>
  <!-- <button><a href="addto_cart.php?heading=<?php echo $heading?>&& price=<?php echo $price?>">Add to card</a></button> -->
<!-- test part -->
<button><a href="single.php?id=<?php echo $card_id?>">details</a></button>
<button><a href="chack_info.php?id=<?php echo $card_id?>">Add to card</a></button>


 <!-- test part -->
  price:<?php echo$price?> taka
</div>
<?php  } ?>
</div>
 </section>


  
  
  <!-- feature catagory end -->

<!-- paragraph part start -->
 <section>
  <div class="paragraph m-3 ">
    <h4>Leading Computer, Laptop & Gaming PC Retail & Online Shop in Bangladesh</h4>
    <p>
    Technology has become a part of our daily lives, and we depend on tech products daily for a vast portion of our lives. There is hardly a home in Bangladesh without a tech product. This is where we come in. Star Tech Ltd. started as a Tech Product Shop in March 2007. We focus on giving the best customer service in Bangladesh, following our motto of “Customer Comes First.” This is why Star Tech is the most trusted computer shop in Bangladesh today, capturing the loyalty of a large customer base. After a long 16-year journey, Star Tech Ltd. was certified with the renowned "ISO 9001:2015 certification" as a recognition for the best Quality Control Management System. As an ISO-certified organization, Star Tech Ltd. is now up to the international standards that specify a Quality Management System (QMS). This Certification denotes that the organization strictly maintains all sorts of regulatory requirements to provide customers with products and services of a global standard.
    </p>
    <h3>Best Laptop Shop in Bangladesh</h3>
    <p>Star Tech is the most popular Laptop Brand Shop in BD. Star Tech Laptop Shop has the perfect device, whether you are a freelancer, officegoer, or student. Gamers love our collection of Gaming Laptops because we always bring the latest laptops in Bangladesh. As the best laptop shop in BD, a customer’s budget is our first concern. We bring the latest Intel Laptop and AMD Laptop under budget for every customer - from starters to expert users. Star Tech is considered the most trusted laptop shop in BD, allowing you to buy the best laptops from top laptop brands in the world. Along with the best laptop brands, our experts provide you with the best buying decisions based on your needs and budget - making Star Tech the most trusted laptop shop in Bangladesh. Star Tech lets you buy an official Apple MacBook Air or MacBook Pro from Apple Store in Bangladesh. Star Tech sells the latest models of the most popular laptop brands, such as - Razer, HP, Dell, Apple MacBook, Asus, Acer, Lenovo, Microsoft Surface, MSI, Gigabyte, Infinix, Walton, Xiaomi MI, Huawei, Chuwi, etc.</p>
    <h3>Best Desktop PC Shop In Bangladesh</h3>
    <p>Star Tech has the most comprehensive array of Desktop PCs. We offer top-of-the-line Custom PC, Brand PC, All-in-One PC, and Portable Mini PC at Star Tech outlets, the best Desktop PC shop in Bangladesh, which are spread nationwide. Get your new iMac Desktop or Apple Mac Mini with an international warranty and servicing plan. You can always depend on the Star Tech PC shop experts to build the best desktop PC or computer with parts of your choice. Star Tech is Bangladesh's most reliable repair shop for PC, laptops, & other consumer electronics. Take your gaming or professional content creation to the next level with a large collection of high-end Gaming PC and Editing PC from Star Tech. You can build a complete personal computer with the best desktop PC parts picked by you with our PC Builder feature. The features let you pick PC parts to buy the best desktop PC anytime. Or, you can visit any Star Tech custom PC shop near you to build the best Desktop PC according to your taste, live, and in front of you.</p>
    <h3>Best Gaming PC Shop In Bangladesh</h3>
    <p>We at Star Tech love gaming. Therefore, we aim to provide a holistic gaming experience with our best gaming PC shop in Bangladesh, “Star Tech Rig House.” The Rig House is a specialized shop for PC builds with high-end PC components. Star Tech Rig House is highly decorated with the best gaming PC parts for customers to build online Gaming or editing PC. Our gaming PC shop in Bangladesh offers the broadest range of Gaming PC, Gaming Laptops, and Game Consoles from XBOX & PlayStation. Star Tech’s largest Gaming PC shop consists of Gaming Motherboards, Liquid Coolers, Custom Water Cooling for PC, Gaming Casings, high-performance RAM Kits, Graphics Cards, etc. Our exceptional Gaming accessories cover Gaming Chairs, Gaming Sofas, RGB Mousepads, Gaming Headphones, Headphone Stands, RGB Gaming PC Light-Strips and many more. We have strategic partnerships with many world-renowned computer Gaming brands like Razer, PNY, ASRock, Asus, Zadak, GALAX, Noctua, Antec, Lian Li, CRYORIG, EKWB, Gamdias, KWG, XFX, etc. Our gaming concern extends to leading gaming brands, including A4Tech Bloody, SteelSeries, Logitech, Corsair, Redragon, Cooler Master, Fantech, DeepCool, Cougar, Gigabyte & Elgato products at our exclusive Gaming PC Shop.</p>
    <h3>Best Office Equipment Shop In Bangladesh</h3>
    <p>Star Tech Ltd. is Bangladesh's most trusted Office Equipment Shop. For more than 16 years, we have been providing the best Office Solution. Take a quick drive to the nearest Star Tech retail center and furnish your home office, Start-up business desk, or corporate space with the best Office Equipment and office supplies. Find Laptops, Desktops, Antiviruses, CCTV & IP Cameras, Printers, Routers, Photocopiers, Attendance Machines, Scanners, Conference Systems, Server Equipment, etc for smooth office operation.</p>
    <h3>Largest Gadget Shop In Bangladesh</h3>
    <p>We bring in the most sought gadgets at Star Tech. Only genuine and leading brands of Smart Watch, Earbuds, TV, Power Bank, and Mobile Phone Accessories are available at our Gadget Shop. We are also concerned for creative professionals for whom we bring exciting gadgets like Drones, Studio Equipment, DSLR Camera, Gimbals & Stream Decks from internationally reputed brands like DJI, Blackmagic, Corsair, Zhiyun, Gudsen, and Loupedeck. Star Tech has established the largest gadget shop in BD with the help of an app & E-commerce website. Ease up your chores with Daily Lifestyle gadgets from our gadget shop. Xiaomi, Anker, Micropack, Vention, Fire-Boltt, UGREEN, OnePlus, Apple, Baseus, Orico, Havit, Samsung, and HOCO are a few of the brands we cover.</p>
    <h3>Top Mobile Shop in Bangladesh</h3>
    <p>Star Tech mobile phone shop offers the latest smartphones and feature phones from top mobile brands. Samsung, Motorola, Google Pixel, Vivo, Huawei, Xiaomi, OPPO, Mi, Realme, and OnePlus are among the Android smartphone brands at our mobile shop. Star Tech is a one-stop solution for buying iPhones in Bangladesh. Offering extensive warranty, EMI & home delivery service spanning the country, we are the top mobile shop in Bangladesh, presenting the best online shop for mobile phones. Our mobile phone shop has an extensive collection of mobile phone accessories, including chargers, USB Type C Cables, Power Banks, Wireless Chargers, and many more to go with your smartphone.</p>
    <h3>Best Home Appliance Shop in Bangladesh</h3>
    <p>Best Home Appliance Shop in Bangladesh</p>
    <h3>Trusted Online Shopping From Bangladesh at The Best E-Commerce Website</h3>
    <p>Star Tech believes the most in customer satisfaction. To meet the surging demand for online shopping from Bangladesh, we launched our E-Commerce website. our highly trusted online shop has been regarded as one of the best E-Commerce websites with most visits. Star Tech is revolutionizing online shopping in Bangladesh, featuring a brilliant search engine that helps our valued customers find their desired products easily. We have developed the most comprehensive PC Builder App, also integrated into our online retail store. With the PC Builder, you can build your Custom PC for gaming or productivity, save the build, and get an estimated budget, wattage, and detailed performance report. Our E-Commerce platform runs a variety of campaigns and exciting deals on multiple national & international occasions. a few of our most successful events are - Mistery Box, Flash sale, Special offer, Thursday Thunder, Anniversary Special Offer, New Year Offer, 11.11, 12.12 Campaign, and many more. We also arrange special eSports Online Gaming Events and tournaments for Bangladeshi gamers in partnership with renowned gaming brands like Razer and Asus ROG.</p>
    <h3>Best Price, Product, After-sales Customer Service, & Fastest Delivery</h3>
    <p>Star Tech Ltd. has taken care of its customers since the beginning. Whether a customer is purchasing or inquiring, our customers get the highest priority. We deliver the best product for the best price with extended after-sales support & the highest standard of customer service. We offer your desired product within the fastest delivery timeframe. Covering all 64 districts of Bangladesh, our distribution hubs are located in Dhaka, Chattogram, Khulna, Rangpur, Gazipur, and Rajshahi. The plan to expand our operations in other cities is already in motion.</p>


  </div>
 </section>
 <!-- paragraph part end -->

 <!-- footer section start -->
 <footer class="text-center text-lg-start bg-body-tertiary text-muted footerbg marbottom">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
  <!-- footer section end -->

  
            <!-- body section-1  -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>