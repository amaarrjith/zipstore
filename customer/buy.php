<?php
session_start();
include ('config.php');
$product_id = $_GET['viewid'];
$rate = $_GET['rate'];


if ($rate <= 1000){
    $shipping_charge = 100;
}else{
    $shipping_charge = 0;
}
$customer_id = $_SESSION['id'];
$cart_date = date('y/m/d');
$status = "carted";
$sql = "INSERT into `tbl_cart`( `product_id`, `rate`, `customer_id`, `cart_date`, `cart_status`)
VALUES ('$product_id','$rate','$customer_id','$cart_date','$status')";
echo $sql;
$result = mysqli_query($conn,$sql);


if ($result>0){
    echo '<script>alert("Continue To Payment");window.location.href = "checkout.php?clickid=' . $rate . '&shipcharge=' . $shipping_charge .'"</script>';
}else{
    echo '<script>alert("ERROR");window.location.href = "detail.php"</script>';
}
?>
