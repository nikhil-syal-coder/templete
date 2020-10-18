<?php

echo "<h2>Thank You For Shoping With Us </h2>";
echo"<img src='thn.jpg'>";
echo'<div><p class="aa1"> <a href="products.php" >Continue shoping</a></p></div>';

?>
 <?php 

require 'config.php';

?>
<?php 

$sql1="SELECT * from ordcart ";
$result=$conn->query($sql1);
if ($result->num_rows > 0) {
    while ($row= $result->fetch_assoc()) {


     $b=$row['image'];
     $c=$row['product'];
     $d=$row['price'];
     $e=$row['quantity'];
     $f=$row['totalprice'];
    $sql2="INSERT INTO placedorder(image, product, price,quantity, totalprice)
     VALUES ( '$b', '$c', '$d', '$e', '$f')";
     $result=$conn->query($sql2);
     if($conn->query($sql2)==true){
echo "hiurrr";
     }
else{
    echo $conn;
}
    }
  }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
         .aa1 a,.aa2 a{
        text-decoration: none;
        border: 1px solid black;
        border-radius: 5px;
        padding: 10px;
        margin: 20px;
        
       
    }
   
    .aa1,.aa2{
        width: 40% ;
        font-size: 2em;
    
    }
    .aa1{
        float: left;
    }
    .aa2{
        float: right;
        text-align: right;
    }
    .aa1 a{
        background-color: blue;
        background-clip: border-box;
        color: wheat;
    }
    .aa2 a{
        background-color: green;
        background-clip: border-box;
        color: wheat;
    }
h2{
    text-align: center;
    font-style: italic;
}
img{
    margin-left: 550px;
}


    </style>
</body>
</html>