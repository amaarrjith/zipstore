        <?php
        session_start();
        include('header.php');
        ?>                                                                   
        <!-- Sale & Revenue Start -->
        
        <div class="container-fluid px-4 mt-4" >
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <?php 
                                include ('config.php');
                                $cdate = date('Y/m/d');
                                $sql = "SELECT SUM(total_amount) as total FROM `tbl_order(master)` WHERE order_date = '$cdate'";
                                $res= mysqli_query($conn,$sql);
                                $row = mysqli_fetch_array($res);
                                ?>
                                <?php
                                if($row['total'] == ""){
                                ?>
                                    <h6 class="mb-0"> &#8377; 0 </h6>
                                    <?php
                                }
                                else{
                                    ?>
                                    <h6 class="mb-0"> &#8377; <?php echo $row["total"] ?></h6>
                                    <?php
                                }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <?php 
                                include ('config.php');
                                $cdate = date('Y/m/d');
                                $sql1 = "SELECT SUM(total_amount) as total FROM `tbl_order(master)`";
                                $res1= mysqli_query($conn,$sql1);
                                $row1 = mysqli_fetch_array($res1);
                                ?>
                                <h6 class="mb-0">&#8377; <?php echo $row1["total"]?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Orders Today</p>
                                <?php 
                                include('config.php');
                                $cdate = date('Y/m/d');
                                $sql2 = "SELECT COUNT(*) as count FROM `tbl_order(details)` WHERE order_date = '$cdate'";
                                $res2= mysqli_query($conn,$sql2);
                                $row2 = mysqli_fetch_array($res2);
                                ?>
                                <h6 class="mb-0"><?php echo $row2["count"]?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Orders </p>
                                <?php 
                                include ('config.php');
                                $cdate = date('Y/m/d');
                                $sql3 = "SELECT COUNT(*) as count FROM `tbl_order(details)`";
                                $res3= mysqli_query($conn,$sql3);
                                $row3 = mysqli_fetch_array($res3);
                                ?>
                                <h6 class="mb-0"><?php echo $row3["count"]?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Bill No</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Payment Method</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('config.php');
                                $sql5 = "SELECT * FROM `tbl_order(master)` m inner join tbl_billing b on m.master_id = b.bill_id ORDER BY m.master_id DESC
                                LIMIT 5";
                                $res5 = mysqli_query($conn,$sql5);
                                while($display = mysqli_fetch_array($res5)){
                                    ?>
                                
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><?php echo $display ["order_date"]?></td>
                                    <td><?php echo $display ["bill_id"]?></td>
                                    <td><?php echo $display ["first_name"]?></td>
                                    <td><?php echo $display ["total_amount"]?></td>
                                    <td><?php echo $display ["payment"]?></td>
                                    
                                </tr>
                                <?php
                                }
                                ?>
                                
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            
<?php
include('footer.php')
?>
</body>
</html>
           