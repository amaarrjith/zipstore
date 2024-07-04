<?php
$deleteid = $_GET['deleteid'];
include ('config.php');
$sql = "DELETE FROM `tbl_cart` WHERE `cart_id` = '$deleteid'";
$result = mysqli_query($conn,$sql);
if ($result>0){
    echo '<script>alert("Product Removed");window.location.href="cart.php"</script>';
}else{
    echo '<script>alert("Product Not Removed");window.location.href="cart.php"</script>';
}