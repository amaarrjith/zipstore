<?php
include('header.php');
?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
  
                
    <?php
    include ('config.php');
    $customerid = $_SESSION['id'];
    $sql = "SELECT COUNT(*) as count FROM tbl_cart WHERE `customer_id` = '$customerid'";
    $output = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($output);
    if($data['count']==0){
        ?>
        <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class = "col-8" style = "display: flex; justify-content: center;align-items: center; margin-left:17%;">
            <img src = "../admin/images/cartempty.jpg" width="40%"></img>
            
            
            
            </div>
        </div>
    <?php
    } 
    else {
        ?>
        <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                    <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th></th>
                            <th>Products</th>
                            <th>Price</th>
                            
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">

                            <?php
                
                            
                        


                                                $sqldata = "SELECT SUM(rate) as sum_rate FROM tbl_cart WHERE customer_id = '$customerid'";
                                                $res = mysqli_query($conn,$sqldata);
                                                $row = mysqli_fetch_array($res);
                                                $total = $row['sum_rate'];
                                                if ($total <= 1000){
                                                    $shipping_charge = 100;
                                                }else{
                                                    $shipping_charge = 0;
                                                }
                                                $sql = "SELECT * FROM tbl_cart c INNER JOIN tbl_product p ON c.product_id = p.product_id 
                                                INNER JOIN tbl_customer cu ON c.customer_id = cu.customer_id 
                                                WHERE c.customer_id = '$customerid'";
                                                $result = mysqli_query($conn,$sql);
                                                
                                                while($display = mysqli_fetch_array($result)){
                                                 

                                                ?>
                                                
                                                <tr>
                                                    <td><img src="../admin/images/<?php echo $display ["product_image"]?>" alt="" style="width: 50px;"></td>
                                                    <td class="align-middle">&nbsp;<?php echo $display ["product_name"]?></td>
                                                    <td class="align-middle"><?php echo $display ["rate"]?></td>
                                                    
                                                <td class="align-middle" id="totalRate"><?php echo $display["rate"]; ?></td>

                                                    <td class="align-middle"><a href="cart_delete.php?deleteid=<?php echo $display ["cart_id"]?>"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></a></td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-4">
                                        <form class="mb-5" action="">
                                            <div class="input-group">
                                                <input type="text" class="form-control p-4" placeholder="Coupon Code">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary">Apply Coupon</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="card border-secondary mb-5">
                                            <div class="card-header bg-secondary border-0">
                                                <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-3 pt-1">
                                                    <h6 class="font-weight-medium">Subtotal</h6>
                                                    <h6 class="font-weight-medium">&#8377; <?php echo $total ?></h6>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="font-weight-medium">Shipping</h6>
                                                    <h6 class="font-weight-medium">&#8377; <?php echo $shipping_charge?></h6>
                                                </div>
                                            </div>
                                            <div class="card-footer border-secondary bg-transparent">
                                                <div class="d-flex justify-content-between mt-2">
                                                    <h5 class="font-weight-bold">Total</h5>
                                                    <h5 class="font-weight-bold">&#8377; <?php echo $total+$shipping_charge ?></h5>
                                                </div>
                                                <a href ="checkout.php?clickid=<?php echo $total?>&shipcharge=<?php echo $shipping_charge?>"><button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cart End -->
                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cart End -->
                        
                        <?php
                        }
                        ?>
                        
    

                            <?php
                            include('footer.php');
                            ?>