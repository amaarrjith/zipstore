<?php
include('config.php');
$master_id = $_GET['clickid'];

if(isset($_POST['shipped'])){
    $sql = "UPDATE `tbl_order(master)` SET order_status = 'shipped' WHERE master_id = '$master_id'";
    $res = mysqli_query($conn,$sql);
    if($res>0){
        echo '<script>alert("DONE");window.location.href="tbl_order(master).php"</script>';
    }else{
        echo '<script>alert("ERROR");window.location.href="tbl_order(master).php"</script>';
    }
}elseif(isset($_POST['delivered'])){
    $sql1 = "UPDATE `tbl_order(master)` SET order_status = 'delivered' WHERE master_id = '$master_id'";
    $result = mysqli_query($conn,$sql1);
    if($result>0){
        echo '<script>alert("DONE");window.location.href="tbl_order(master).php"</script>';
    }else{
        echo '<script>alert("ERROR");window.location.href="tbl_order(master).php"</script>';
    }

}else{
    echo '<script>alert("ERROR");window.location.href="tbl_order(master).php"</script>';
}
?>