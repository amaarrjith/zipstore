<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">

                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Customer View Table</h6>
                            <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Customer ID</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Customer Email</th>
                                        <th scope="col">Customer Phone</th>
                                        <th scope="col">Registration Date</th>
                                        <th scope="col">Customer Status</th>
                                        <th scope="col"></th>
                                        <th scope ="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('config.php');
                                    $sql = "SELECT * FROM `tbl_customer`";
                                    $result = mysqli_query($conn,$sql);
                                    $s = 1;
                                    while($display = mysqli_fetch_array($result)){
                                    ?>


                                    <tr>
                                        <th scope="row"><?php echo $s++ ?></th>
                                        <td><?php echo $display["customer_name"]?></td>
                                        <td><?php echo $display["email_id"]?></td>
                                        <td><?php echo $display["contact_no"]?></td>
                                        <td><?php echo $display["registration_date"]?></td>
                                        <td><?php echo $display["status"]?></td>
                                        <?php
                                        if($display["status"]=="de-active"){
                                        ?>
                                            <form action="customer_status.php?statusid=<?php echo $display[0]?>" method="post">
                                        <!-- <td><button type="submit" class="btn btn-success" name="activate">Activate</button></td/d> -->
                                        <td><input type="submit" class="btn btn-success" name="activate" value="Activate"></td>
                                        <!-- <td><button type="submit" class="btn btn-danger" name="de-activate">De-activate</button></td> -->
                                        </form>
                                        <?php
                                        }
                                        else if($display["status"]=="active"){
                                        ?>
                                        <form action="customer_status.php?statusid=<?php echo $display[0]?>" method="post">
                                        <td><button type="submit" class="btn btn-danger" name="de-activate">De-activate</button></td>
                                        </form>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                    }
                                    ?>

                                    
                                </tbody>

                            </table>
                            </div>
                        </div>
                    </div>
                    <?php
                    include('footer.php')
                    ?>