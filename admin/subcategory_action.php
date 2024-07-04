<?php
$category_id = $_POST['category_id'];
$subcategory_name = $_POST['subcategory_name'];
$subcategory_img = $_FILES['subcategory_img']['name'];
$subcategory_des = $_POST['subcategory_des'];
include('config.php');
echo $sql = "INSERT INTO `tbl_subcategory`(`category_id`, `subcategory_name`,`subcategory_img`,`subcategory_description`) 
VALUES ('$category_id','$subcategory_name','$subcategory_img','$subcategory_des')";
$result = mysqli_query($conn,$sql);
if ($result > 0){
    move_uploaded_file($_FILES['subcategory_img']['tmp_name'],'./images/'.$subcategory_img);
    echo '<script>alert("Sub Category Inserted");window.location.href="table.php"</script>';
}else{
    echo '<script>alert("Sub Category Not Inserted");window.location.href="subcategory_action.php"</script>';
}
?>