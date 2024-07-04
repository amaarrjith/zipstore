<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Stock</h6>
                            <form action = "stock_action.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Choose Product To Add Stock</label>
                                    <?php
                                    include('config.php');
                                    $sql="select * from tbl_product";
                                    $res=mysqli_query($conn,$sql);
                                    ?>
                                    <select name="product" id="product_id" class="form-select" aria-label="Default select example">
                                        <option selected value="null">Product Name</option>
                                        <?php
                                        while($display=mysqli_fetch_array($res)){
                                        ?>
                                        <option value="<?php echo $display["product_id"] ?>"><?php echo $display["product_name"] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                        
                                    
                                </div>
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No of Stock To Add</label>
                                        <input value ="0" type="number" class="form-control" name="stock_number" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                
                                <button type="submit" class="btn btn-success">Add Stock </button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
<?php
include('footer.php')
?>