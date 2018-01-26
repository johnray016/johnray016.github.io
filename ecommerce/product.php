<?php 
$index = $_GET['index'];
require 'connection.php';
$sql = "SELECT * FROM products WHERE product_ID = $index";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_assoc($result);

function meta_description(){
	global $products;
	extract($products);
	echo $meta_description;
}
function meta_keywords(){
	global $products;
	extract($products);
	echo $meta_keyword;
}
function display_title(){
	global $products;
	extract($products);
	echo $product_name." - Manila Outdoors";
}
function display_content(){ 
	global $products;
	extract($products);

	echo "<div class='container'>
			<section id='product-page'>
				<div class='product-name-container'>
					<h4><strong>$product_name</strong></h4>
				</div>	
				<div class='product-image-container'>
					<img src='$image' class='img-responsive'>
				</div>
				<div class='product-details-container'>
					<h3>&#8369;".number_format($price)."</h3>
					<span class='product-sku'>SKU: $sku</span><br>";
					if ($quantity==0) {
						echo "AVAILABILITY: <span class='availability red'> OUT OF STOCK</span><br>
							<p>$short_description</p>
				</div>				
				<div class='addToCart-container'> 	
					
					<hr>
				</div>";
					} else {
						echo "Current Stock: <span class='orange'>$quantity</span><br>";
						echo "AVAILABILITY: <span class='availability green'> IN STOCK</span>
						<p>$short_description</p>
				</div>	
				<div class='addToCart-container'> 	
					<hr>
					<p><strong>FREE SHIPPING NATIONWIDE</strong></p>
					<input type='number' id='addToCart'> <button class='btn btn-warning'>ADD TO CART</button>
					<hr>
				</div>	";
					}					
					echo "
				<div class='product-description-container'>
					<ul class='nav nav-tabs'>
					    <li class='active'><a data-toggle='tab' href='#product-description-tab'>PRODUCT DESCRIPTION</a></li>
					    <li><a data-toggle='tab' href='#reviews-tab'>REVIEWS</a></li>
					</ul>
				 	<div class='tab-content'>
					    <div id='product-description-tab' class='tab-pane fade in active'>
							<br>$long_description
					    </div>
					    <div id='reviews-tab' class='tab-pane fade'>
					      <br>
					      <p>Currently no reviews yet.</p>
					    </div>
				    </div>
				</div>	
				</section>
			</div>";

}

require "template.php"
?>