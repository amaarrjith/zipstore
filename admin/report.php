<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
                    
    <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            
            <form action="" method="post">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">From Date : </label>
                <input type="date" class="form-group" name="from_date" Required > 
                
                <label for="exampleInputEmail1" class="form-label">To Date : </label>
                <input type="date" class="form-group" name="to_date" Required> 
                </div>
                <button class= "btn btn-success" name="submit"> Search </button>
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $fdate = $_POST['from_date'];
        $todate = $_POST['to_date'];
        ?>
        <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        
                                <div class="mb-3">
                                <h6 class="mb-4">Report</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Bill ID</th>
                                        <th scope="col">Bill Date</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Total Amount</th>
                                        
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('config.php');
                                    
                                    $sql = "SELECT * FROM `tbl_order(master)` o INNER JOIN `tbl_customer` c on o.customer_id = c.customer_id WHERE o.order_date >='$fdate' and o.order_date <='$todate' group by o.master_id";
                                    $res = mysqli_query($conn,$sql);
                                    $a = 1;
                                    while($display=mysqli_fetch_array($res)){
                                        
                                    ?>
                                    <tr>
                                            <th scope="row"><?php echo $a++ ?></th>
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
                                </div>
        <div class="col-sm-12 col-xl-12">
        <div class="bg-secondary rounded h-100 p-4">
            <?php 
            include('config.php');
            $sql1 = "SELECT SUM(total_amount) as sum_rate FROM `tbl_order(master)` o WHERE o.order_date >='$fdate' and o.order_date <='$todate'";
            $result = mysqli_query($conn,$sql1);
            $display = mysqli_fetch_array($result);
            $total = $display['sum_rate'];
            ?>
            <p>Grand Total : <?php echo $total ?>.00 /- </p>
            <a href="Excel/orderdetails.php?fdate=<?php echo $fdate?>&tdate=<?php echo $todate?>"><button class="btn btn-success">Export as Excel</button></a>
        </div>
    </div>
                                <?php
    }
    ?>

               
<?php
include ('footer.php')
?>
