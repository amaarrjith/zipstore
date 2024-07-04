<?php
$category_name = $_POST['category_name'];
include('config.php');
$sql = "INSERT INTO `tbl_category`(`category_name`) VALUES ('$category_name')";

$result = mysqli_query($conn,$sql);
if ($result>0){
    echo '<script>alert("Category Inserted");window.location.href="index.php"</script>';
}
else{
    echo '<script>alert("Category Inserting Failed , Try Again !!");window.location.href="index.php"</script>';
}
?>