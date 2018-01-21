<?php
	function display_title(){
		echo "authenticate";
	}
	function display_content(){



	require "users.php";

	$username = $_POST['username'];
	$password = $_POST['password'];


// if (isset($users[$username])) {
// 	if ($users[$username] == $password)) {
// 		// code fo login
// 	} else {
// 		echo "correct username, wrong password"
// 	}
// } else {
// 	echo "wrong password";
// }
// exit();


		if (isset($users[$username]) && $users[$username] == $password) {
			$_SESSION['username'] = $username;
			header('location: home.php');
		} else {
			echo "Incorrect username or password.";
			echo "please login again <a href='my_form.php'>here</a>";
		}
	}
require "template.php"
?>