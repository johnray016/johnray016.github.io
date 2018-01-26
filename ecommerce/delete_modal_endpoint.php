<?php
	$index = $_POST['index'];
	require 'connection.php';

	$sql = "SELECT * FROM products WHERE product_ID = '$index'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	extract($row);
		echo "<div class='row delete-modal-container'>";
		echo "<img src='$image' class='delete-modal-image'>";
		echo "<h5><strong>$product_name</strong></h5>";
		echo "<span class='	orange'><strong>Price: 	&#8369;$price</strong></span><br>";
		echo "</div>";
?>