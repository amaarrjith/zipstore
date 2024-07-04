<?php
$category_id = $_POST['category_id'];
$subcategory_id = $_POST['subcategory_id'];
$product_name = $_POST['product_name'];
$product_images = $_FILES['product_images']['name'];
$product_des = $_POST['product_des'];
$product_rate = $_POST['product_rate'];
$product_og_rate = $_POST['product_og_rate'];
$product_stock = $_POST['product_stock'];
$product_status = $_POST['product_status'];
$editid = $_POST['editid'];
include('config.php');
$sql = "UPDATE `tbl_product` SET `category_id`='$category_id',`subcategory_id`='$subcategory_id',`product_name`='$product_name',`product_image`='$product_images',`product_description`='$product_des',`stock`='$product_stock',`og_rate`='$product_og_rate',`rate`='$product_rate',`status`='$product_status' WHERE `product_id`= '$editid'";
$result = mysqli_query($conn,$sql);
if ($result > 0) {
    echo '<script>alert("Product Edited");window.location.href="tbl_product.php"</script>';
} else {
    echo '<script>alert("Product Not Edited");window.location.href="tbl_product.php"</script>';
}

