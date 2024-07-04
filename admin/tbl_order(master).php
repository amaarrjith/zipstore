<?php
include('header.php')
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
                                <button name = "search" class = "btn btn-success"> Search </button>
                            </form>
                        </div>
                    </div>
                    <?php
                    if(isset($_POST['search'])){
                        $date = $_POST['date'];
                    
                    ?>

                    
                
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        
                                <div class="mb-3">
                                <h6 class="mb-4">Bill Details Table</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Bill ID</th>
                                        <th scope="col">Bill Date</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('config.php');
                                    $sql = "SELECT * FROM `tbl_order(master)` o INNER JOIN `tbl_customer` c on o.customer_id = c.customer_id WHERE order_date = '$date'";
                                    $res = mysqli_query($conn,$sql);
                                    while($display=mysqli_fetch_array($res)){
                                    ?>
                                    <tr>
                                            <th scope="row"><?php echo $display["master_id"] ?></th>
                                            <td><?php echo $display["order_date"] ?></td>
                                            <td><?php echo $display["customer_name"] ?></td>
                                            <td><?php echo $display["total_amount"] ?></td>
                                            <td><?php echo $display["order_status"] ?></td>
                                            <?php 
                                            if ($display["order_status"] == "confirmed"){
                                            ?>
                                            <form action = "order_status_action.php?clickid=<?php echo $display["master_id"] ?>" method = "post">
                                            <td><button name = "shipped" class = "btn btn-success">Shipped</button></td>
                                            <td><a class = "btn btn-primary" href="tbl_order(details).php?clickid=<?php echo $display ["master_id"]?>">View Details</a></td>
                                            </form>
                                        
                                        <?php
                                            }
                                            elseif($display["order_status"] == "shipped"){
                                            ?> 
                                                <form action = "order_status_action.php?clickid=<?php echo $display["master_id"]?>" method = "post">
                                                <td><button name="delivered" class = "btn btn-success">Delivered</button></td>
                                                <td><a class = "btn btn-primary" href="tbl_order(details).php?clickid=<?php echo $display ["master_id"]?>">View Details</a></td>
                                                </form>
                                            <?php 
                                            }
                                            else{
                                            ?>
                                               <td><a class = "btn btn-primary" href="tbl_order(details).php?clickid=<?php echo $display ["master_id"]?>">View Details</a></td>
                                            <?php
                                            }
                                            ?>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </table>
                                </div>
                                </div>
                                <?php
                    }else{
                        ?>
                        <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        
                                <div class="mb-3">
                                <h6 class="mb-4">Bill Details Table</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Bill ID</th>
                                        <th scope="col">Bill Date</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('config.php');
                                    $sql = "SELECT * FROM `tbl_order(master)` o INNER JOIN `tbl_customer` c on o.customer_id = c.customer_id";
                                    $res = mysqli_query($conn,$sql);
                                    while($display=mysqli_fetch_array($res)){
                                    ?>
                                    <tr>
                                            <th scope="row"><?php echo $display["master_id"] ?></th>
                                            <td><?php echo $display["order_date"] ?></td>
                                            <td><?php echo $display["customer_name"] ?></td>
                                            <td><?php echo $display["total_amount"] ?></td>
                                            <td><?php echo $display["order_status"] ?></td>
                                            <?php 
                                            if ($display["order_status"] == "confirmed"){
                                            ?>
                                            <form action = "order_status_action.php?clickid=<?php echo $display["master_id"] ?>" method = "post">
                                            <td><button name = "shipped" class = "btn btn-success">Shipped</button></td>
                                            <td><a class = "btn btn-primary" href="tbl_order(details).php?clickid=<?php echo $display ["master_id"]?>">View Details</a></td>
                                            </form>
                                        
                                        <?php
                                            }
                                            elseif($display["order_status"] == "shipped"){
                                            ?> 
                                                <form action = "order_status_action.php?clickid=<?php echo $display["master_id"]?>" method = "post">
                                                <td><button name="delivered" class = "btn btn-success">Delivered</button></td>
                                                <td><a class = "btn btn-primary" href="tbl_order(details).php?clickid=<?php echo $display ["master_id"]?>">View Details</a></td>
                                                </form>
                                            <?php 
                                            }
                                            else{
                                            ?>
                                               <td><a class = "btn btn-primary" href="tbl_order(details).php?clickid=<?php echo $display ["master_id"]?>">View Details</a></td>
                                            <?php
                                            }
                                            ?>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </table>
                                </div>
                                </div>
                        <?php
                    }
                    ?>
                    <?php
                        
                            include ('footer.php')
                            ?>
