<?php
$deleteid = $_GET['deleteid'];
include ('config.php');
$sql = "DELETE FROM `tbl_product` WHERE `product_id` = '$deleteid'";
$result = mysqli_query($conn,$sql);
if ($result>0){
    echo '<script>alert("Product Deleted");window.location.href="tbl_product.php"</script>';
}
else{
    '<script>alert("Product Not Deleted");window.location.href="tbl_product.php"</script>';
}