<?php
session_start();
include('config.php');
$user = $_POST['user'];
$password = $_POST['password'];
$sql = "SELECT * FROM `tbl_customer` WHERE email_id='$user' or contact_no='$user' and password='$password'";

$result = mysqli_query($conn,$sql);



if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    if ($row['status'] == "active") {
        $_SESSION['name'] = $row['customer_name'];
        $_SESSION['id'] = $row['customer_id'];
        $_SESSION['emailaddress'] = $row['email_id'];
        echo '<script>alert("LOG IN SUCCESSFUL !!");window.location.href="../customer/index.php"</script>';
    } else if($row['status'] == "de-active") {
        echo '<script>alert("ACCESS DENIED !! CONTACT ADMIN !!");window.location.href="login.html"</script>';
    }
} else {
    echo '<script>alert("LOG IN FAILED. CHECK YOUR USERNAME OR PASSWORD");window.location.href="login.php"</script>';
}
?>