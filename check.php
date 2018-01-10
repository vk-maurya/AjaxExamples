<?php 
	require_once 'db.php';
	if (isset($_GET['name'])) {
		

		$name=$_GET['name'];

$query="SELECT name FROM form WHERE name='$name'";

$result=mysqli_query($connection,$query);

echo mysqli_num_rows($result);



 ?>
