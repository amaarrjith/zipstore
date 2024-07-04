<?php
session_start();
include ('config.php');
$product_id = $_GET['viewid'];
$rate = $_GET['rate'];
$customer_id = $_SESSION['id'];
$cart_date = date('y/m/d');
$status = "carted";
$sql = "INSERT into `tbl_cart`( `product_id`, `rate`, `customer_id`, `cart_date`, `cart_status`)
VALUES ('$product_id','$rate','$customer_id','$cart_date','$status')";
echo $sql;
$result = mysqli_query($conn,$sql);
if ($result>0){
    echo '<script>alert("Product Added To Cart");window.location.href = "cart.php"</script>';
}else{
    echo '<script>alert("Product Not Added To Cart");window.location.href = "cart.php"</script>';
}
?>
