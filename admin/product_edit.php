<?php
include('header.php');
$editid = $_GET['editid'];
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Product Edit Form</h6>
                <form action="product_edit_action.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        
                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                            <?php
                            include('config.php');
                            $sql1 = "SELECT * FROM `tbl_product` WHERE `product_id`='$editid'";
                            $result1 = mysqli_query($conn, $sql1);
                            while ($display1 = mysqli_fetch_array($result1)) {
                            
                            include('config.php');
                            $sql = "select * from tbl_category";
                            $res = mysqli_query($conn, $sql);
                            ?>
                            <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                                <option selected value="0">Category Name</option>
                                <?php
                                while ($display = mysqli_fetch_array($res)) {
                                    ?>
                                    <option value="<?php echo $display[0] ?>" <?php if ($display[0] == $display1['category_id']) echo 'selected'; ?>><?php echo $display[1] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Sub Category Name</label>
                            <?php
                            include('config.php');
                            $sql = "select * from tbl_subcategory";
                            $res = mysqli_query($conn, $sql);
                            ?>
                            <select name="subcategory_id" id="subcategory_id" class="form-select" aria-label="Default select example">
                                <option selected value="0">Sub-Category Name</option>
                                <?php
                                while ($display = mysqli_fetch_array($res)) {
                                    ?>
                                    <option value="<?php echo $display[0] ?>" <?php if ($display[0] == $display1['subcategory_id']) echo 'selected'; ?>><?php echo $display[2] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $display1['product_name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Image</label>
                            <input type="file" class="form-control" name="product_images" id="exampleInputEmail1" aria-describedby="emailHelp" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Description</label>
                            <input type="text" class="form-control" name="product_des" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $display1['product_description'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Rate</label>
                            <input type="text" class="form-control" name="product_rate" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $display1['rate'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Original Rate</label>
                            <input type="text" class="form-control" name="product_og_rate" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $display1['og_rate'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Stock</label>
                            <input type="text" class="form-control" name="product_stock" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $display1['stock'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Status</label>
                            <input type="text" class="form-control" name="product_status" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $display1['status'] ?>">
                        </div>
                        <?php
                    }
                    ?>
                        <input type="hidden" name="editid" value="<?php echo $editid ?>">
                    
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>