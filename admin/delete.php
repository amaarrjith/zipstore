<?php

$deleteid = $_GET['deleteid'];
echo $deleteid;
include('config.php');
$sql = "DELETE FROM `tbl_category` WHERE category_id = $deleteid ";
$result = mysqli_query($conn,$sql);
if ($result>0){
    echo '<script>alert("Category Deleted");window.location.href = "table.php"</script>';
}else{
    echo '<script>alert("Category Nots Deleted");window.location.href = "table.php"</script>';
}