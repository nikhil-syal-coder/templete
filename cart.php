<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Cart Page</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
   
   <!-- wpf loader Two -->
    <?php 
    include 'mainheader.php';
    ?>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Cart</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Action Delete</th>
                        <th>Action Update</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 

require 'config.php';

?>
<?php 

$sql1="SELECT * from ordcart ";
$result=$conn->query($sql1);
if ($result->num_rows > 0) {
    while ($row= $result->fetch_assoc()) {

      $a='<tr>
      <td><a class="remove" href="delete.php?id='.$row['id'].'><fa class="fa fa-close"></fa>X</a></td>
      <td><a href=update.php?id='.$row['id'].'>+</a></td>
      <td><a href="#"><img src="img2/'.$row['image'].'" alt="img"></a></td>
      <td><a class="aa-cart-title" href="#">'.$row['product'].'</a></td>
      <td>$'.$row['price'].'</td>
      <td><input class="aa-cart-quantity" type="number" value="'.$row['quantity'].'"></td>
      <td>$'.$row['totalprice'].'</td>
    </tr>';
    echo $a;   
    }
  }
  

?>
    <?php 
    if (isset($_POST['submit'])) {
      echo "updateee";
    }
    
    ?>                 <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" placeholder="Coupon">
                            <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                          </div>
                          <form action=""><input class="aa-cart-view-btn" name="submit" type="submit" value="Update Cart"></form>
                        </td>
                      </tr>
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Subtotal</th>
                     <td>$<?php 
                    $total=0;
                     require "config.php";
                     $sql1="SELECT * from ordcart ";
                     $result=$conn->query($sql1);
                     if ($result->num_rows > 0) {
                      while ($row= $result->fetch_assoc()) {
                        $total=$total+$row['totalprice'];
                        
                      }
                      echo $total;
                    }
                   

                     
                     ?></td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td>$<?php 
                    $total=0;
                     require "config.php";
                     $sql1="SELECT * from ordcart ";
                     $result=$conn->query($sql1);
                     if ($result->num_rows > 0) {
                      while ($row= $result->fetch_assoc()) {
                        $total=$total+$row['totalprice'];
                        
                      }
                      echo $total;
                    }?></td>
                   </tr>
                 </tbody>
               </table>
               <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <?php 
  include 'mainfotter.php';
  ?>

  </body>
</html>