<?php
include('config.php');
$product_id = $_POST['product'];
$stock_number = $_POST['stock_number'];
$sql = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$stock = $row['stock'];
$finalstock = $stock + $stock_number;
$sql1 = "UPDATE `tbl_product` SET `stock`='$finalstock' WHERE product_id = '$product_id' ";
$res = mysqli_query($conn,$sql1);
if ($res>0){
    echo '<script>alert("Stock Added");window.location.href="tbl_product.php"</script>';
}else{
    echo '<script>alert("Stock Not Added");window.location.href="stock.php"</script>';
}
?>