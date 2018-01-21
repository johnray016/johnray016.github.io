<?php 
function display_title(){
	echo "result";
}
function display_content(){
echo "hello ".$_SESSION['username'];
}
require "template.php"
?>