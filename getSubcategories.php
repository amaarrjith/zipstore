<?php
$categoryId = $_POST['categoryId'];
var jsVariable = "<?php echo $phpVariable; ?>";
echo $categoryId;
echo '<script>
var jsVariable = "<?php echo $phpVariable; ?>";
alert($categoryId);
</script>';
include('config.php');
echo $sql = "SELECT * FROM tbl_subcategory WHERE category_id = $categoryId";
$result = mysqli_query($conn,$sql);

// Prepare dropdown options
$options = '<option value="">Select Subcategory</option>';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<script>alert("hai");</script>';
        $options .= '<option value="'.$row["subcategory_id"].'">'.$row["subcategory_name"].'</option>';
    }
}

?>