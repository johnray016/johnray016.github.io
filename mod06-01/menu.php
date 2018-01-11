<?php
require_once "items.php";

function display_title(){
	echo "Menu Page";
}

function display_content(){
	global $items;
	$categories = array_unique(array_column($items,'category'));
	echo "<div class='row'><select><option>All</option>";
	foreach ($categories as $category) {
		echo "<option>$category</option>";
	}
	echo "</select><button>Sort By Category</button></div>";

	echo "<div class='row'>";
	foreach ($items as $item) {
		echo "<div class='col-xs-4 item_display'><img src='".$item['img']."'>";
		echo "<h5>".$item['name']."</h5>";
		echo "Price: Php".$item['price']."<br>";
		echo "</div>";
	}
	echo "</div>";	
}

require "template.php";

?>
