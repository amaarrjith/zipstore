<?php
include('../config.php');

if(isset($_POST['category_id'])) {
    $category_id = $_POST['category_id'];
    $sql = "SELECT * FROM tbl_subcategory WHERE category_id = $category_id";
    $res = mysqli_query($conn, $sql);

    $options = '<option value="">-- Select Sub Category --</option>';
    while ($row = mysqli_fetch_array($res)) {
        $options .= '<option value="'.$row['category_id'].'">'.$row['category_NAME'].'</option>';
    }

    echo $options;
}
?>