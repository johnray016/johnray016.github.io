<?php 

$username = $_POST['username'];
$password = $_POST['password'];

$string = file_get_contents("assets/users.json");
$users = json_decode($string, true);
$users[$username] = $password;


$file = fopen("users.json". "w");
?>