<?php

$db = new mysqli("localhost", "example4", "pass123", "example4");

if($db->connect_errno)
{
	throw new exception("Oh, no! The database is falling!!! Everybody panic!! 
		Oh, and here's the problem: ".$db->connect_error);
}

//filter our data and set it as an object
$data = (Object) filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//insert into the database
$db->query("INSERT INTO `products` (`name`, `price`, `qty`) VALUES ('$data->name','$data->price','$data->qty')");

?>
<html>
<head>
	<title>Adding. . .</title>
</head>
<body>
. . . done. <a href="./">Check it!</a>
</body>
</html>