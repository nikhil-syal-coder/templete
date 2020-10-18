<?php

    require "config.php";
?>
<?php 
 

 if (isset($_GET['id']) ) {
    $update=$_GET['id'];
}
echo $update;
$sql1="DELETE from ordcart WHERE id='".$update."'";
$result=$conn->query($sql1);
header("Location: cart.php");

?>
