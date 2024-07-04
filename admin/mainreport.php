<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
                    
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            
                            <form action = "report_action.php "method="post">
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">From Date : </label>
                                <input type="date" class="form-group" name="from_date" > 
                                
                                <label for="exampleInputEmail1" class="form-label">To Date : </label>
                                <input type="date" class="form-group" name="to_date" > 
                                </div>
                                <button class= "btn btn-success"> Search </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        
                                <div class="mb-3">
                                <h6 class="mb-4">Report</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Bill ID</th>
                                        <th scope="col">Bill Date</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Total Amount</th>
                                        
                                        

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
                                            
                                    <?php
                                    }
                                    ?>
                            </table>
                                </div>
                                </div>
                                <?php
                            include ('footer.php')
                            ?>
