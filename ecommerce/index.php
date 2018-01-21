<?php 
function display_title(){
	echo "Home";
}
function display_content(){
	?>
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active banner" >
	      <img src="assets/img/banner1.jpg" alt="Osprey Backpack" class="img-responsive">   
	       <div class="banner-caption banner1">
	       		<div class="banner1-caption-container">
			       	<h2>FLASH SALE!</h2>
				    <p class="lead">Up to 20% OFF in Backpacks</p>
				    <button type="button" class="btn banner-button btn-lg">SHOP BACKPACKS</button> 
			    </div>
	       </div>  
	    </div>

	    <div class="item">
	      <img src="assets/img/banner2.jpg" alt="Vargo Cookware" class="img-responsive">
	      <div class="banner-caption banner2">
	       		<div class="banner2-caption-container">	
			       	<h2>HIKING EQUIPMENTS</h2>
				    <p class="lead">Innovative titanium outdoor products</p>
				    <button type="button" class="btn banner-button btn-lg">SHOP COOKWARES</button> 
			    </div>
	       </div>  
	    </div>

	    <div class="item">
	      <img src="assets/img/banner3.jpg" alt="Ticket to The Moon Hammock" class="img-responsive">
	      <div class="banner-caption banner3">
	       		<div class="banner3-caption-container">
			       	<h2>QUALITY HAMMOCKS</h2>
				    <p class="lead">Ticket to the Moon</p>
				    <button type="button" class="btn banner-button btn-lg">SHOP HAMMOCKS</button> 
			    </div>
	       </div>  
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
		
	<div class="container">

		<div class="mini-banner">
			<img src="assets/img/free-shipping.jpg" alt="" class="img-responsive">
			<img src="assets/img/tents-discount.jpg" alt="" class="img-responsive">
		</div>

		<div class="featured-products">
			<h3>FEATURES PRODUCTS</h3>
			<div class="featured-product-container">
				<div class="featured-product1 text-center">
					<img src="assets/img/products/Osprey_Daylite_Plus_20L_Travel_Pack_Beryl_Blue_1.jpg" alt="" class="img-responsive">
					<h4>Osprey Daylite Plus 20L Travel Pack Beryl Blue</h4>
					<span>&#8369; 5000.00</span><br>
					<button class='btn btn-success'>View Details</button>
				</div>
				<div class="featured-product2 text-center">
					<img src="assets/img/products/Vargo_Titanium_Spoon_Fork_Knife_Set_1.jpg" alt="" class="img-responsive">
					<h4>Vargo Titanium Spoon / Fork / Knife Set</h4>			
					<span>&#8369; 300.00</span><br>
					<button class='btn btn-success'>View Details</button>
				</div>
				<div class="featured-product3 text-center">
					<img src="assets/img/products/Ticket_to_the_moon_Double_Hammock_Turquoise_Green_1.jpg" alt="" class="img-responsive">	
					<h4>Ticket to the moon Double Hammock Turquoise / Green</h4>		
					<span>&#8369; 2100.00</span><br>
					<button class='btn btn-success'>View Details</button>		
				</div>
				<div class="featured-product4 text-center">
					<img src="assets/img/products/Craghoppers_Kimba_Lite_Mens_Jacket_Royal_Navy_1.jpg" alt="" class="img-responsive">	
					<h4>Craghoppers Kimba Lite Men's Jacket - Royal Navy</h4>	
					<span>&#8369; 1300.00</span><br>
					<button class='btn btn-success'>View Details</button>		
				</div>
			</div>
		</div>

		<div class="brand_logos">
			<h3>OUR BRANDS</h3>
   			<section class="brands slider">
				<div>
			      <img src="assets/img/brands/ferrino_logo.jpg" alt="Ferrino Logo">
			    </div>

			    <div>
			      <img src="assets/img/brands/craghoppers_logo.jpg" alt="Craghoppers Logo">
			    </div>

			    <div>
			      <img src="assets/img/brands/merrell.logo.jpg" alt="Merrell Logo">
			    </div>

			    <div>
			      <img src="assets/img/brands/osprey_logo.jpg" alt="Osprey Logo">
			    </div>

			    <div>
			      <img src="assets/img/brands/tttm_logo.jpg" alt="Ticket to the Moon Logo">
			    </div>

			    <div>
			      <img src="assets/img/brands/vargo_logo.jpg" alt="Vargo Logo">
			    </div>
			</section>
		</div>

		<div class="block-logo">
			<h2>A HERITAGE BORN OF THE MOUNTAINS</h2>
		</div>
	</div>
<?php }

require "template.php"
?>