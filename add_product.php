<?php

    require_once("entities/product.class.php");

    if(isset($_POST["btnsubmit"])){
        //Lay gia tri tu form collection
        $productName = $_POST["txtName"];
        $cateID = $_POST["txtCateID"];
        $price = $_POST["txtprice"];
        $quantity = $_POST["txtquantity"];
        $descrip = $_POST["txtdesc"];
        $picture = $_POST["txtpic"];
        //Khoi tao doi tuong product
        $newProduct = new Product($productName, $cateID, $price, $quantity, $descrip, $picture);
        //Luu xuong CSDL
        $result = $newProduct->save();
        if(!$result)
        {
            //truy van loi
            header("Location: add_product.php?failure");
        }
        else{
            header("Location: add_product.php?inserted");
        }
    }
?>
<?php include_once("header.php"); ?>

<?php
    if(isset($_GET["inserted"]))
    {
        echo "<h2>Thêm sản phảm thành công</h2>";
    }
?>
<!-- form sản phẩm-->
<form method="post">
	<div class="row">
		<div class="lbtitle">
			<label>Tên sản phẩm</label>
		</div>
		<div class="lbinput">
			<input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : "";  ?>" />
		</div>
	</div>
	<div class="row">
		<div class="lbtitle">
			<label>Mô tả sản phẩm</label>
		</div>
		<div class="lbinput">
			<textarea name="txtdesc" cols="21" rows="18" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : "";  ?>"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="lbtitle">
			<label>Số lượng sản phẩm</label>
		</div>
		<div class="lbinput">
			<input type="number" name="txtquantity" value="<?php echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : "";  ?>" />
		</div>
	</div>
	<div class="row">
		<div class="lbtitle">
			<label>Giá sản phẩm</label>
		</div>
		<div class="lbinput">
			<input type="text" name="txtprice" value="<?php echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : "";  ?>" />
		</div>
	</div>
	<div class="row">
		<div class="lbtitle">
			<label>Loại sản phẩm</label>
		</div>
		<select name="txtCateID">
            <option value="1">Mobile Phone</option>
            <option value="2">Tablet</option>
            <option value="3">Laptop</option>

        </select>
	</div>
	<div class="row">
		<div class="lbtitle">
			<label>Hình ảnh sản phẩm</label>
		</div>
		<div class="lbinput">
			<input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : "";  ?>" />
		</div>
	</div>
	<div class="row">
		<div class="submit">
			<input type="submit" name="btnsubmit" value="Thêm sản phẩm">
		</div>
	</div>
</form>


<?php include_once("footer.php"); ?>
