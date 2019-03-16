<?php require_once("entities/product.class.php"); ?>
<?php
	include_once("header.php");
	$prods=Product::list_product();

	foreach ($prods as $item) {
        echo("<p>Ten san pham ".$item["ProductName"]."</p>");
        echo("<p>Gia san pham ".$item["Price"]."</p>");
        echo("<p>SL san pham ".$item["Quantity"]."</p>");
        echo("<p>Mo ta san pham ".$item["Description"]."</p>");
        echo("<p>Hinh san pham ".$item["Picture"]."</p>");
    }
    include_once("footer.php");
?>
