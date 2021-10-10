<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "Georgi123";
	$db = "mydata";
	$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n");
	$id = $_REQUEST['id'];
    $query ="DELETE FROM products WHERE id = '$id'";
	$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
	header('Location: view_products.php');
	pg_close($con);
?>
