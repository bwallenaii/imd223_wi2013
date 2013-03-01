<?php

$db = new mysqli("localhost", "example4", "pass123", "example4");

if($db->connect_errno)
{
	throw new exception("Oh, no! The database is falling!!! Everybody panic!! 
		Oh, and here's the problem: ".$db->connect_error);
}

$pResult = $db->query("SELECT * FROM `products` WHERE `qty` > 0");

if($db->errno)
{
	die($db->error);
}

 ?><html>
<head>
	<title>DB Connection</title>
</head>
<body>

<div class="products">
	<?php
	while($product = $pResult->fetch_object())
	{
		?>
		<div>
			<span><?php echo $product->name; ?></span>
			<p>$<?php echo $product->price ?></p>
			<p><em>Qty:</em> <?php echo $product->qty; ?>
		</div>
		<?php
	}
	?>

</div>

<div>

<form action="addproduct.php" method="post" enctype="multipart/form-data">
	<label>Product Name:
		<input name="name" />
	</label>
	<label>Price:
		<input name="price" />
	</label>
	<label>Quantity:
		<input name="qty" />
	</label>
	<input  type="submit" />
</form>

</div>

</body>
</html>