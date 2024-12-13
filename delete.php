<?php
include_once("config.php");
$id = $_GET['id_movie'];
$result = mysqli_query($mysqli, 
"DELETE FROM movies WHERE id_movie=$id");
header("Location:index.php");
?>