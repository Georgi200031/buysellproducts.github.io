<?php

	$host = "localhost";
	$user = "postgres";
	$pass = "Georgi123";
	$db = "mydata";
	$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n");
	$query = "SELECT * FROM products";
	$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
	$br = 0;
	$index=0;
	$arr = array();
	echo "
	<link rel=stylesheet href=style.css>
	<center><h1>Buy Sell products</h1></center>
		<div class=navbar>
		<a href=index.html>Home</a>
		<a href=view_products.php>view products</a>
		</div>";
$id_br=0;
	while ($row = pg_fetch_row($rs)) {


		echo "<link rel=stylesheet href=style.css>";
		echo "<center><img src=$row[3] alt=products>";
		echo "<table><tr><th>Name</th><th>Price</th></tr>";
		echo "<tr><th>$row[1]</th><th>$row[2]</th></center> \n";
		echo "<th><a href=delete.php?id=$row[0]>Delete</a></th></tr></table>";
		$br=0;
	}
	pg_close($con);
?>
