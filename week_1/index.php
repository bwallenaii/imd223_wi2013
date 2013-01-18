<html>
<head>
	<title>Exampl PHP</title>
</head>
<body>
	<?php
		echo "yada yada <br />";
		include("nav.php");
		//require("nothere.php");
		echo "<p>Here is the stuff after the nav.</p>";
		$names = array();
		$names[] = "bob";
		$names[] = "fred";
		$names[] = "george";
		//echo $names[3];
		$person = array("fname" => "Farmer", "lname" => "Chicken");
		$person = (Object) $person;
		echo $person->fname;
	?>
	<pre>
		<?php print_r($names);
			echo "\r\n";
			print_r($person);
		 ?>
	</pre>
</body>
</html>