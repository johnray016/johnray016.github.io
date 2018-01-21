


<!-- // use to filter category
<form action="my_form.php" method="GET">
	<input type="text" name="username"><br>
	<input type="submit" name="submit" value="submit">
</form>

<?php
// echo $_GET['username'];
?>
 -->
<?php
function display_title(){
	echo "result";
}
function display_content(){

?>

<form method="POST" action="authenticate.php">
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" name="submit" value="submit" >
</form>


<?php

}
require "template.php"
?>