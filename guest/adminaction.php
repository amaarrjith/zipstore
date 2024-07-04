<?php
session_start();
$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_password'];
include('config.php');
$sql = "SELECT * FROM `tbl_admin` WHERE username = '$admin_user' AND password = '$admin_pass'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result)>0){
    $_SESSION['id']=$row['login_id'];
    echo '<script>alert("Admin Login Successful !!");window.location.href="../admin/index.php"</script>';

}else{
    echo '<script>alert("Admin Login Not Done !! Check Username - Password");window.location.href="admin_login.php"</script>';
}
