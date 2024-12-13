<?php
include_once("config.php");
if (isset($_POST['Submit'])) {
	$name=$_POST['name'];
	$priority=$_POST['priority'];
	$description=$_POST['description'];

	$result = mysqli_query($mysqli, "INSERT INTO users (name, priority, description) VALUES ('$name', '$priority', '$description')");
	echo "Successfully added to watchlist!";
}
?>
