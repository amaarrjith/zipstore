<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category Register Form</h6>
                            <form action = "category_action.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="category_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                        <form action = "subcategory_action.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <?php
                                    include('config.php');
                                    $sql="select * from tbl_category";
                                    $res=mysqli_query($conn,$sql);
                                    ?>
                                    <select name ="category_id" class="form-select" aria-label="Default select example">
                                        <option selected value="0">Category Name</option>
                                        <?php
                                        while($display=mysqli_fetch_array($res)){
                                        ?>
                                        <option value="<?php echo $display[0] ?>"><?php echo $display[1] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sub Category Name</label>
                                    <input type="text" class="form-control" name="subcategory_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sub Category Description</label>
                                    <input type="text" class="form-control" name="subcategory_des" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                     
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Product Register Form</h6>
                            <form action = "category_action.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category ID</label>
                                    <input type="text" class="form-control" name="category_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sub Category ID</label>
                                    <input type="text" class="form-control" name="category_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" name="category_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" name="category_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Description</label>
                                    <input type="text" class="form-control" name="category_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Rate</label>
                                    <input type="text" class="form-control" name="category_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Stock</label>
                                    <input type="text" class="form-control" name="category_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Status</label>
                                    <input type="text" class="form-control" name="category_name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            

    <?php
    include("footer.php");
    ?>