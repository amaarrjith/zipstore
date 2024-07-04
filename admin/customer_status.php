<?php
include('config.php');

$customer_id = $_GET['statusid'];
echo $customer_id;

if(isset($_POST['activate'])){
    $sql = "UPDATE `tbl_customer` SET `status`='active' WHERE customer_id = '$customer_id'";
    $result = mysqli_query($conn,$sql);
    if ($result>0){
        echo '<script>window.location.href="customer.php"</script>';

    }else{
        echo '<script>alert("Customer Status Not Activated");window.location.href=""</script>';
    }
} 
else if(isset($_POST['de-activate'])){
    $sql = "UPDATE `tbl_customer` SET `status`='de-active' WHERE customer_id = '$customer_id'";
    $result = mysqli_query($conn,$sql);
    if ($result>0){
        echo '<script>window.location.href="customer.php"</script>';

    }else{
        echo '<script>alert("Customer Status Not Activated");window.location.href=""</script>';
    }
}
?>
