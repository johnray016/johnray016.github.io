<?php 
function display_title(){
	echo "register";
}
function display_content(){
	echo "<form method='POST'>
	Full Name: <input type='text' name='name'><br>
	Username: <input type='text' name='username'><br>
	Password: <input type='password' name='pw' id='pw'><br>
	Confirm Password: <input type='password' name='cpw' id='cpw'><br>
	<span id='not-match'></span><br><br>
	<button type='submit' id='register' class='btn waves-effect waves-light disabled'>Register</button>
	</form>";
}

require "template.php"
?>