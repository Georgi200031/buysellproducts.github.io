<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "Georgi123";
	$db = "mydata";
	$con = pg_connect("host=$host dbname=$db user=$user password=$pass") ;
	if(!$con){
		echo "Error : Unable to open database\n";
	}
	else{

		$name = $_POST['name_'];
		$price = $_POST['price_'];
		$image = $_POST['image_'];
		echo "$name";
		$query = "INSERT INTO products (name,price,image) VALUES ('$name','$price','$image')";
		$result = pg_query($con, $query);
		header("Location: index.html");
	}
	pg_close($con);
?>
