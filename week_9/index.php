<?php
require_once("classes/database.php");
$db = new Database();

$products = $db->getArray("SELECT * FROM `products` WHERE `qty` > 0");

?><html>
<head>
	<title>DB Connection</title>
</head>
<body>

<div class="products">
	<?php foreach($products as $product){ ?>
	<div>
		<span><?php echo $product->name; ?></span>
		<p>$<?php echo $product->price ?></p>
		<p><em>Qty:</em> <?php echo $product->qty; ?></p>
	</div>
	<?php } ?>
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