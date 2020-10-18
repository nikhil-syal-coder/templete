<?php 
include 'config.php';

?>
<?php
$offset=0;
$limit=10;
if (isset($_GET['id']) ) {
  $update=$_GET['id'];
if($update==1){
  $offset=0;
  $limit=10;

}
if($update==2){
  $offset=10;
  $limit=20;

}
if($update==3){
  $offset=20;
  $limit=30;

}
if($update==4){
  $offset=30;
  $limit=40;

}
if($update==4){
  $offset=40;
  $limit=50;

}
}

// session_start();
$sql1="SELECT * from products limit $offset, $limit";
$result=$conn->query($sql1);
if ($result->num_rows > 0) {
    while ($row= $result->fetch_assoc()) {
        // $a = '<div id=product-'.$row['id'] .' class=product>';

        // $a .= '<img src="' . $row['image'] . '">';
        // $a .= '<h3 class="title"><a href="#">' . $row['name'] . '</a></h3>';
        // $a .= '<span>Price:' . $row['price'] . '</span>';
        //  $a .= '<a class="add-to-cart"  " href="cart2.php?id='.$row['id'] .'" name=' .$row['id'] . ' >Add To Cart</a>';
        // $a .= '</div>';
   $a='<li>';
   $a.=' <figure>
   <a class="aa-product-img" href="product-detail.php?id='.$row['product_id'] .'"><img src="img2/' . $row['image'] . '" alt="polo shirt img"></a>
   <a class="aa-add-card-btn"href="addcart.php?id='.$row['product_id'] .'"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
   <figcaption>
     <h4 class="aa-product-title"><a href="#">' . $row['long_description'] . '</a></h4>';
   $a.='<span class="aa-product-price">$' . $row['price'] . '</span>
     <span class="aa-product-price"><del>$45.50</del>
     </span>';
$a.=' <p class="aa-product-descrip"></p>
</figcaption>
</figure>                         
<div class="aa-product-hvr-content">
<a href="wishlist.php?id='.$row['product_id'] .'" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
<a href="compare.php?id='.$row['product_id'] .'" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
<a href="product-detail.php?id='.$row['product_id'] .'" data-toggle2="tooltip" data-placement="top" title="Quick View" ><span class="fa fa-search"></span></a>                            
</div>
<!-- product badge -->
<span class="aa-badge aa-sale" href="sale.php?id='.$row['product_id'] .'">SALE!</span>
</li>';

echo $a;

    }
}
?>