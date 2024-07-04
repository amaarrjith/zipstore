<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Admin Login Table</h6>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Login ID</th>
                                            <th scope="col">Admin Username</th>
                                            <th scope="col">Admin Password</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Customer Registration Table</h6>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Email ID</th>
                                            <th scope="col">Contact No</th>
                                            <th scope="col">Registration Date</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category Table</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('config.php');
                                    $sql = "SELECT * FROM `tbl_category`";
                                    $result = mysqli_query($conn,$sql);
                                    $s = 1;
                                    while($display = mysqli_fetch_array($result)){
                                    ?>


                                    <tr>
                                        <th scope="row"><?php echo $s++ ?></th>
                                        <td><?php echo $display[1]?></td>
                                        <td><a href="edit.php?editid=<?php echo $display[0]?>"><button>Edit</button></a></td>
                                        <td><a href="delete.php?deleteid=<?php echo $display[0]?>"><button>Delete</button></a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>

                                    
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Sub Category Table</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category ID</th>
                                        <th scope="col">Sub Category Name</th>
                                        <th scope="col">Sub Category Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    include('config.php');
                                    $s = 1;
                                    $sql=("SELECT * FROM `tbl_subcategory`");
                                    $result = mysqli_query($conn,$sql);
                                    while($display=mysqli_fetch_array($result)){

                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $s++ ?></th>
                                        <td><?php echo $display[1] ?></td>
                                        <td><?php echo $display[2] ?></td>
                                        <td><?php echo $display[3] ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>

                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Product Registration Table</h6>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Category ID</th>
                                            <th scope="col">Sub Category ID</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Product Image</th>
                                            <th scope="col">Product Description</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
include('footer.php')
?>
</body>
</html>