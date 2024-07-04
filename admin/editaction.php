<?php
$category_name = $_POST['category_name'];
$editid = $_POST['editid'];
include('config.php');
$sql = "UPDATE `tbl_category` SET `category_name`='$category_name'WHERE category_id = $editid";
$result = mysqli_query($conn,$sql);
if ($result>0){
    echo '<script>alert("Category Edited");window.location.href = "table.php"</script>';
    
}
else{
    echo '<script>alert("Category Not Edited");window.location.href = "table.php"</script>';
}