<?php

    require "config.php";
?>
<?php 
 session_start();

 if (isset($_GET['id']) ) {
    $update=$_GET['id'];

echo $update;
$sql1="UPDATE ordcart 
SET quantity=quantity + 1,
totalprice=(totalprice/(quantity-1))*quantity
WHERE id='".$update."'";
$result=$conn->query($sql1);
if($conn->query($sql1)==true){
 header("Location: cart.php");
}
else{
    echo $conn;
}
echo $result;
 }
?>







