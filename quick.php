<?php

require "config.php";
?>
<?php 


$sql1="SELECT * from products";
$result=$conn->query($sql1);
if ($result->num_rows > 0) {
    while ($row= $result->fetch_assoc()) {
   $abs=unserialize($row['checkbox']);
   echo $abs;
$a=' <div class="col-md-7 col-sm-7 col-xs-12">
<div class="aa-product-view-content">
  <h3>T-Shirt</h3>
  <div class="aa-price-block">
    <span class="aa-product-view-price">$' . $row['price'] . '</span>
    <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
  </div>
  <p>' . $row['long_description'] . '</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
  <h4>Size</h4>
  <div class="aa-prod-view-size">
    <a href="#">S</a>
    <a href="#">M</a>
    <a href="#">L</a>
    <a href="#">XL</a>
  </div>
  <h4>Color</h4>
  <div class="aa-color-tag">
    <a href="#" class="aa-color-green">' . $row['color'] . '</a>
    <a href="#" class="aa-color-yellow"></a>
    <a href="#" class="aa-color-pink"></a>                      
    <a href="#" class="aa-color-black"></a>
    <a href="#" class="aa-color-white"></a>                      
  </div>
  <div class="aa-prod-quantity">
    <form action="">
      <select id="" name="">
        <option selected="1" value="0">1</option>
        <option value="1">2</option>
        <option value="2">3</option>
        <option value="3">4</option>
        <option value="4">5</option>
        <option value="5">6</option>
      </select>
    </form>
    <p class="aa-prod-category">
      Category: <a href="#">' . $row['category_id'] . '</a>
    </p>
  </div>
  <div class="aa-prod-view-bottom">
    <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
    <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
    <a class="aa-add-to-cart-btn" href="#">Compare</a>
  </div>
</div>
</div>
</div>
</div>';
echo $a;

    }
}
?>

