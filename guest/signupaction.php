<?php  
include('config.php');
$name = $_POST['customer_name'];
$email = $_POST['customer_email'];
$phone = $_POST['customer_phone'];
$password = $_POST['customer_password'];
$cf_password = $_POST['customer_cfpassword'];
if ($password == $cf_password){


    $date = date('y/m/d');
    $status = "active";
    $sql = "INSERT INTO `tbl_customer`(`customer_name`, `email_id`, `contact_no`, `registration_date`, `password`, `status`) 
    VALUES ('$name','$email','$phone','$date','$password','$status')";
    $result = mysqli_query($conn,$sql);
    if ($result>0){
        echo '<script>alert("REGISTRATION DONE! LOGIN NOW");window.location.href="../index.php"</script>';
    }else{
        echo '<script>alert("REGISTRATION FAILED! TRY AGAIN");window.location.href="signup.php"</script>';
    }
    }
else{
    echo '<script>alert("PASSWORD MISMATCH");window.location.href="signup.php"</script>';

}
