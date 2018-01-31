<?php 
	
	require 'connection.php';
	session_start();
	$username = $_SESSION['username'];
	$productsOrdered = array();
	foreach ($_SESSION['cart'] as $index) {
		$products [] = $index;
	}
	$payment_id = $_POST['payment_id'];
	$orderQuantity = $_POST['orderQuantity'];
	$date = date("Y-m-d H:i:s");
	
	

	$sql = "INSERT INTO order_details (product_id, date_ordered, quantity_ordered, payment_id, customers_id) VALUES ('$productsOrdered','$date', '$orderQuantity', '$payment_id',(SELECT * FROM customers WHERE customers.id = $username))";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));

	header('location: index');
?>