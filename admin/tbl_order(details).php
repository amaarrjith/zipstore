<?php
include('header.php');
$master_id = $_GET['clickid'];
?>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
                    
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            
                            <form method="post">
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Select Date : </label>
                                <input type="date" class="form-group" name="date" > 
                                </div>
                                <button class= "btn btn-success"> Search </button>
                            </form>
                        </div>
                    </div>
                
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        
                                <div class="mb-3">
                                <h6 class="mb-4">Order Details Table</h6>
                                <div class = "mb-4">
                                    <div class="card p-3">
                                        <?php 
                                        include('config.php');
                                        $sql2 = "SELECT * FROM `tbl_order(master)` WHERE master_id = '$master_id'";
                                        $res2 = mysqli_query($conn,$sql2);
                                        $row = mysqli_fetch_array($res2);
                                        $customerid = $row['customer_id'];
                                        $sql3 = "SELECT * FROM tbl_customer WHERE customer_id = '$customerid'";
                                        $res3 = mysqli_query($conn,$sql3);
                                        while($dis = mysqli_fetch_array($res3)){ ?>

                                        Name of Customer : <?php echo $dis ["customer_name"]?> <br><br>
                                        Email ID : <?php echo $dis ["email_id"]?> <br><br>
                                        Phone Number : <?php echo $dis ["contact_no"]?> <br>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Bill ID</th>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Product Rate</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include('config.php');
                                    $sql = "SELECT * FROM `tbl_order(details)` o INNER JOIN `tbl_product` p on o.product_id = p.product_id WHERE o.bill_id = $master_id";
                                    $res = mysqli_query($conn,$sql);
                                    while($display=mysqli_fetch_array($res)){
                                    ?>
                                    <tr>
                                            <th scope="row"><?php echo $display["bill_id"] ?></th>
                                            <td><?php echo $display["order_id"] ?></td>
                                            <td><?php echo $display["product_name"] ?></td>
                                            <td><img src = "./images/<?php echo $display["product_image"] ?>" width="10%"></td>
                                            <td><?php echo $display["rate"] ?></td>

                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <a href="tbl_order(master).php"><button class = "btn btn-primary">Back</button></a>
                                </div>
                                </div>
                                <?php include ('footer.php');
                                ?>