<?php
require_once("classes/database.php");
$db = new Database();
$db->insert("products", $_POST);
?>
<html>
<head>
	<title>Adding. . .</title>
</head>
<body>
. . . done. <a href="./">Check it!</a>
</body>
</html>