<?php
include('header.php');
$customerid = $_SESSION['id'];
?>
<div class="container mt-5 d-flex justify-content-center">
       <div class="card p-4 mt-3">
          <div class="first d-flex justify-content-between align-items-center mb-3">
            <div class="info">
            
                <span class="d-block name">Thank you , <?php echo $_SESSION['name'] ?></span><br>
                <?php 
                include('config.php');
                $sql = "SELECT * FROM tbl_billing WHERE customer_id = '$customerid' ORDER BY billing_id DESC LIMIT 1";
                $result = mysqli_query($conn,$sql);
                while($display = mysqli_fetch_array($result)){

                ?>
                <span class="order">BILL NO : <?php echo $display["bill_id"]?></span>
                 
            </div>
           
             <img src="https://cdn.dribbble.com/users/2172102/screenshots/9778428/media/e1e322882f9dcb060991b5dc9f420c12.gif" width="250"/>
              

          </div>
              <div class="detail">
          <span class="d-block summery">Your order has been Confirmed  We are Delivering Your Order Soon.</span>
              </div>
          <hr>
          <div class="text">
          <span class="">Billing Address : </span><br><br>
        <span class="d-block new mb-1" ><?php echo $display["first_name"];?> <?php echo $display["last_name"]; ?></span>
         </div>
        <span class="d-block address mb-3"><?php echo $display["address_1"];?> , <?php echo $display["address_2"]; ?> , <?php echo $display["pincode"];?> , <?php echo $display["landmark"];?></span>
          <div class="  money d-flex flex-row mt-2 align-items-center">
          
        
            <hr> 

               </div><?php
            }
            ?>
               <?php
               include ('config.php');
               $sql1 = "SELECT * FROM tbl_shipping WHERE customer_id = '$customerid' ORDER BY shipping_id DESC LIMIT 1";
               $res = mysqli_query($conn,$sql1);
               while($dis = mysqli_fetch_array($res)){ ?>

               
               <div class="text">
               <span class="">Shipping Address : </span><br><br>
        <span class="d-block new mb-1" ><?php echo $dis["first_name"];?> <?php echo $dis["last_name"]; ?></span>
         </div>
        <span class="d-block address mb-3"><?php echo $dis["address_1"]; ?> , <?php echo $dis["address_2"];?> , <?php echo $dis["pincode"];?> , <?php echo $dis["landmark"];?></span>
          <div class="  money d-flex flex-row mt-2 align-items-center">
          <span class="">Payment Method : </span>
        
            <span class="ml-2"><?php echo $dis["payment"];?></span> 

               </div>
              
        </div><?php } ?>
    </div>
               </div>
               </div>
               </div>
    <?php
include('footer.php');
?>