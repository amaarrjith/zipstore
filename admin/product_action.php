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
include('config.php');
$sql = "INSERT INTO `tbl_product`(`category_id`, `subcategory_id`, `product_name`, `product_image`, `product_description`, `stock`, `og_rate`, `rate`, `status`)
VALUES ('$category_id', '$subcategory_id', '$product_name', '$product_images', '$product_des', '$product_stock', '$product_og_rate', '$product_rate', '$product_status');";
$result = mysqli_query($conn,$sql);
if ($result>0){
    move_uploaded_file($_FILES['product_images']['tmp_name'],'./images/'.$product_images);
    echo '<script>alert("Product Registered");window.location.href="tbl_product.php"</script>';
}else{
    echo '<script>alert("Product Not Registered");window.location.href="tbl_product.php"</script>';
}