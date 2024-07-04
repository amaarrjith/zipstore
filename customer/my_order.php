<?php
include ('header.php');
$id = $_SESSION['id'];
?>
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">My Orders</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">My Orders</p>
            </div>
        </div>
    </div>
<div class="container-fluid my-5 d-sm-flex justify-content-center">
    <div class="row justify-content-center">
<?php
            include('config.php');
            $sql = "SELECT * FROM `tbl_order(master)` m INNER JOIN `tbl_order(details)` d on m.master_id = d.bill_id INNER JOIN `tbl_product` p on d.product_id = p.product_id WHERE m.customer_id = '$id'";
            $res = mysqli_query($conn,$sql);
            while($display = mysqli_fetch_array($res)){

            
            ?>
    <div class="col-md-6 m-2 card p-2">
        <div class="card-header bg-white">
          <div class="row justify-content-between">
            
            <div class="col">
                <p class="text-muted"> Order ID : <span class="font-weight-bold text-dark"><?php echo $display["order_id"]?></span></p> 
                <p class="text-muted"> Placed On : <span class="font-weight-bold text-dark"><?php echo $display["order_date"]?></span> </p></div>
                <div class="flex-col my-auto">
                    <h6 class="ml-auto mr-3">
                        <a href="#">Zip | Store</a>
                    </h6>
                </div>
          </div>
        </div>
        <div class="card-body">
            <div class="media flex-column flex-sm-row">
                <div class="media-body ">
                    <h5 class="bold"><?php echo $display["product_name"]?></h5>
                    <p class="text-muted"><?php echo $display["product_description"]?></p>
                    <h4 class="mt-3 mb-4 bold"> <span class="mt-5">&#x20B9;</span> <?php echo $display["rate"]?> <span class="small text-muted"></span></h4>
                    <p class="text-muted">Tracking Status : <span class="Today"></span></p>
                    <button type="button" class="btn  btn-outline-primary d-flex"><?php echo $display["order_status"]?></button>    
                </div><img class="align-self-center img-fluid" src="../admin/images/<?php echo $display["product_image"]?>" width="180 " height="180">
            </div>
        </div>
        <div class="row px-3">
            
        </div>
        
         
    </div>
    <?php
            }
        ?>
</div>
        </div>
        </div>
        </div>

<?php
include('footer.php')
?>