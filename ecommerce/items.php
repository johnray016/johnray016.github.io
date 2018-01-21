<?php

	$item1 = [
		'name' => 'Fallkniven Knife',
		'description' => 'Collectible Knife',
		'price' => 150.23,
		'img' => 'assets/img/fallkniven.jpg',
		'category' => 'Fixed Blade Knives'
	];
	$item2 = [
		'name' => 'Ticket to the Moon',
		'description' => 'Mosquito Net',
		'price' => 89.00,
		'img' => 'assets/img/ticket.jpg',
		'category' => 'Sleeping Gears'
	];
	$item3 = [
		'name' => 'Black Diamond Headlamp',
		'description' => 'Hiking Torches',
		'price' => 30.00,
		'img' => 'assets/img/black.jpg',
		'category' => 'Hiking Gears > Torches'
	];
	$item4 = [
		'name' => 'Vargo Cookware',
		'description' => 'Outdoor Stove',
		'price' => 79.00,
		'img' => 'assets/img/vargo.jpg',
		'category' => 'Hiking Gears > Cookware'
	];
	$item5 = [
		'name' => 'Ferrino Backpack',
		'description' => 'Hiking and Mountaineering Backpack',
		'price' => 249.55,
		'img' => 'assets/img/ferrino.jpg',
		'category' => 'Bags & Packs'
	];
	$item6 = [
		'name' => 'Hennesy Hammock',
		'description' => 'Hammock Sleeping Gear',
		'price' => 120.00,
		'img' => 'assets/img/hennesy.jpg',
		'category' => 'Hammocks'
	];


	$items = [
		$item1,$item2,$item3,$item4,$item5,$item6
	];

function display_title(){
	echo "Items";
}
function display_content(){
	global $items;
	$categories = array_unique(array_column($items, 'category'));
	echo "<select><option>All</option>";
	foreach ($categories as $category) {
		echo "<option>".$category."</option>";
	}
	echo "</select><button>Sort By category</button><br>";
	echo "<div class='row'>";
	foreach ($items as $item) {	
		echo "<div class='col s12 l4 m6 xl4 center card'>";
		echo "<img src='". $item['img']."' class='responsive-img'>";
		echo "<h4>" . $item['name']."</h4><br>";
		echo "<strong>Price: </strong>" . "$".number_format($item['price'], 2)."<br>";
		echo "<strong>Category: </strong>" . $item['category']."<br>";
		echo "<strong>Description: </strong>" . $item['description']."<br><br>";
		echo "</div>";
	}
	echo "</div>";
}	
require "template.php"
?>