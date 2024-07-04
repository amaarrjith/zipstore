<?php
session_start();
include('config.php');
$customer_id = $_SESSION['id'];
$_SESSION['totalamount'] = $_POST['total'];
$total_amount = $_SESSION['totalamount'];


$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address1 = $_POST['add1'];
$address2 = $_POST['add2'];
$district = $_POST['district'];
$city = $_POST['city'];
$pincode = $_POST['zipcode'];
$landmark = $_POST['landmark'];
$payment = $_POST['payment'];

// shipping address field 
$net_amount = $_POST['net_amount'];
$s_first_name = $_POST['s_firstname'];
$s_last_name = $_POST['s_lastname'];
$s_email = $_POST['s_email'];
$s_mobile = $_POST['s_mobile'];
$s_address1 = $_POST['s_add1'];
$s_address2 = $_POST['s_add2'];
$s_district = $_POST['s_district'];
$s_city = $_POST['s_city'];
$s_pincode = $_POST['s_zipcode'];
$s_landmark = $_POST['s_landmark'];
$payment = $_POST['payment'];

if(isset($_POST['checkbox_button'])){
    $checkbox = $_POST['checkbox_button'];
    echo $checkbox;
}  else{
    $checkbox = 0;
    
}

if($checkbox == "checkbox_value" && $payment == "Online-Payment"){
    $sql = "INSERT INTO `tbl_billing`(`bill_id`,`customer_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`)
    VALUES ('0','$customer_id','$first_name','$last_name','$email','$mobile','$address1','$address2','$district','$city','$pincode','$landmark')";
    $result = mysqli_query($conn,$sql);
    $sql2 = "INSERT INTO `tbl_shipping`(`bill_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`)
    VALUES ('0','$customer_id','$s_first_name','$s_last_name','$s_email','$s_mobile','$s_address1','$s_address2','$s_district','$s_city','$s_pincode','$s_landmark')";
    $result1 = mysqli_query($conn,$sql2);

    
    if($result == 1 && $result1 == 1){

        echo '<script>window.location.href="payment.php?total=<php echo $total_amount?>"</script>';
    }
    else{
        echo '<script>alert("ERROR 1");window.location.href="checkout.php"</script>'; 
    }

}
elseif($checkbox == "checkbox_value" && $payment == "Cash-On-Delivery"){
    
    $sql = "INSERT INTO `tbl_billing`(`bill_id`,`customer_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`)
    VALUES ('0','$customer_id','$first_name','$last_name','$email','$mobile','$address1','$address2','$district','$city','$pincode','$landmark')";
    $result = mysqli_query($conn,$sql);
    $sql2 = "INSERT INTO `tbl_shipping`(`bill_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`)
    VALUES ('0','$customer_id','$s_first_name','$s_last_name','$s_email','$s_mobile','$s_address1','$s_address2','$s_district','$s_city','$s_pincode','$s_landmark')";
    $result1 = mysqli_query($conn,$sql2);

    
    if($result == 1 && $result1 == 1){

        echo '<script>window.location.href="cod_action.php"</script>';
    }else{
        echo '<script>alert("ERROR 2");window.location.href="checkout.php"</script>'; 
    }

}
elseif($checkbox == "checkbox_value" && $payment == "wallet" ){
    
    $sql = "INSERT INTO `tbl_billing`(`bill_id`,`customer_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`)
    VALUES ('0','$customer_id','$first_name','$last_name','$email','$mobile','$address1','$address2','$district','$city','$pincode','$landmark')";
    $result = mysqli_query($conn,$sql);
    $sql2 = "INSERT INTO `tbl_shipping`(`bill_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`)
    VALUES ('0','$customer_id','$s_first_name','$s_last_name','$s_email','$s_mobile','$s_address1','$s_address2','$s_district','$s_city','$s_pincode','$s_landmark')";
    $result1 = mysqli_query($conn,$sql2);

    
    if($result == 1 && $result1 == 1){

        echo '<script>window.location.href="wallet_action.php"</script>';
    }
    else{
        echo '<script>alert("ERROR 3");window.location.href="checkout.php"</script>'; 
    }
}

    
elseif($checkbox == 0 && $payment == "Online-Payment"){
    $sql = "INSERT INTO `tbl_billing`(`bill_id`,`customer_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`,`payment`)
    VALUES ('0','$customer_id','$first_name','$last_name','$email','$mobile','$address1','$address2','$district','$city','$pincode','$landmark','$payment')";
    $result = mysqli_query($conn,$sql);
    $sql1 = "INSERT INTO `tbl_shipping`(`bill_id`,`customer_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`,`payment`)
    VALUES ('0','$customer_id','$first_name','$last_name','$email','$mobile','$address1','$address2','$district','$city','$pincode','$landmark','$payment')";
    $res = mysqli_query($conn,$sql1);
    if($result == 1 && $res == 1){
        echo '<script>window.location.href="payment.php"</script>';
    }
    else{
        echo '<script>alert("ERROR 4");window.location.href="checkout.php"</script>';
    }

}
elseif($checkbox == 0 && $payment == "Cash-On-Delivery"){
    $sql = "INSERT INTO `tbl_billing`(`bill_id`,`customer_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`,`payment`)
    VALUES ('0','$customer_id','$first_name','$last_name','$email','$mobile','$address1','$address2','$district','$city','$pincode','$landmark','$payment')";
    $result = mysqli_query($conn,$sql);
    $sql1 = "INSERT INTO `tbl_shipping`(`bill_id`,`customer_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`,`payment`)
    VALUES ('0','$customer_id','$first_name','$last_name','$email','$mobile','$address1','$address2','$district','$city','$pincode','$landmark','$payment')";
    $res = mysqli_query($conn,$sql1);
    if($result == 1 && $res == 1){
        echo '<script>window.location.href="cod_action.php"</script>';
    }
    else{
        echo '<script>alert("ERROR 5");window.location.href="checkout.php"</script>';
    }
}
elseif($checkbox == 0 && $payment == "wallet"){
    $sql = "INSERT INTO `tbl_billing`(`bill_id`,`customer_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`,`payment`)
    VALUES ('0','$customer_id','$first_name','$last_name','$email','$mobile','$address1','$address2','$district','$city','$pincode','$landmark','$payment')";
    $result = mysqli_query($conn,$sql);
    $sql1 = "INSERT INTO `tbl_shipping`(`bill_id`,`customer_id`,`first_name`, `last_name`, `email`, `mobile`, `address_1`, `address_2`, `district`, `city`, `pincode`, `landmark`,`payment`)
    VALUES ('0','$customer_id','$first_name','$last_name','$email','$mobile','$address1','$address2','$district','$city','$pincode','$landmark','$payment')";
    $res = mysqli_query($conn,$sql1);
    if($result == 1 && $res == 1){
        echo '<script>window.location.href="wallet_action.php"</script>';
    }
    else{
        echo '<script>alert("ERROR 6");window.location.href="checkout.php"</script>';
    }
}
else{
    echo '<script>alert("ERROR 7");window.location.href="checkout.php"</script>';
}



?>