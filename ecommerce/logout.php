<?php 
function display_title(){
	echo "Logout";
}
function display_content(){
	session_destroy();
	
	header('location: my_form.php');
}

require "template.php"
?>