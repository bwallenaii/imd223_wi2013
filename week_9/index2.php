<?php
require_once("classes/product.php");
require_once("classes/tag.php");
?><html>
<head>
	<title>DB Connection</title>
</head>
<body>

<div class="products">
	<?php foreach(Table::build("Product")->getAll() as $product) {?>
	<div>
		<?php 
		echo new Tag("span", $product->name, array("class" => "product-name"));
		?>
		<p>$<?php echo $product->price ?></p>
		<p><em>Qty:</em> <?php echo $product->qty; ?></p>
		<p><em>Colors: </em> <?php echo $product->implodeColors(" / "); ?></p>
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