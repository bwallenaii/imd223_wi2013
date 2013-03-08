<?php require_once("classes/product.php"); require_once("system/tag.php"); ?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />

	<title>Test Area</title>
</head>

<body>
<?php
/*$bob = new Product(11);
$bob->name = "Bob";
$bob->save();*/

$products = Table::build("Product")->getPage();
$br = new Tag("br");
foreach($products as $product)
{
    echo "$product->id: $product->name $br";
}

echo new Tag("p", "This is a sentence.", array("class" => "bob"));

$error = new Tag("div");
$error->attributes->class = "error";
$error->content = "Pickle me green.";

echo $error;

$input = new Tag("input");
$input->attributes->name = "first_name";
$input->attributes->class = "red";
if(!empty($_REQUEST['first_name']))
{
	$input->content = $_REQUEST['first_name'];
}

echo new Tag("label", "First Name: $input");
?>


</body>
</html>