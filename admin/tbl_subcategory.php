<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<a href = "subcategory.php"><button style = padding:1ex;margin:2ex; class="btn btn-primary">Add New Sub Category</button></a>
                    
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Sub Category View Page</h6>
                            <form method="post">
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <?php
                                    include('config.php');
                                    $sql="select * from tbl_category";
                                    $res=mysqli_query($conn,$sql);
                                    ?>
                                    <select name="category_id" id="category_id" class="form-select" aria-label="Default select example" onchange="this.form.submit()">
                                        <option selected value="null">Category Name</option>
                                        <?php
                                        while($display=mysqli_fetch_array($res)){
                                        ?>
                                        <option value="<?php echo $display[0] ?>"><?php echo $display[1] ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <?php
                    if(isset($_POST["category_id"])) {
                        $categoryid = $_POST['category_id'];
                        // echo $categoryid;
                   
                    ?>
                    <script>document.getElementById('category_id').value='<?php echo $categoryid; ?>';</script>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        
                                <div class="mb-3">
                                <h6 class="mb-4">Sub Category Table</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category </th>
                                        <th scope="col">Sub Category Name</th>
                                        <th scope="col">Sub Category Image</th>
                                        <th scope="col">Sub Category Description</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    include('config.php');
                                    $s = 1;
                                    
                                    $sql=("select * from tbl_category c inner join tbl_subcategory s on c.category_id=s.category_id where s.category_id='$categoryid'");
                                    $result = mysqli_query($conn,$sql);
                                    while($display=mysqli_fetch_array($result)){

                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $s++ ?></th>
                                        <td><?php echo $display["category_name"] ?></td>
                                        <td><?php echo $display["subcategory_name"] ?></td>
                                        <td><img src="./images/<?php echo $display["subcategory_img"] ?>"style="width=10%;"></td>
                                        <td><?php echo $display["subcategory_description"] ?></td>
                                        <td><button>Edit</button></td>
                                        <td><button>Delete</button></td>
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
                    }
                     else{
                        
                    ?>
                     <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        
                                <div class="mb-3">
                                <h6 class="mb-4">Sub Category Table</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category </th>
                                        <th scope="col">Sub Category Name</th>
                                        <th scope="col">Sub Category Image</th>
                                        <th scope="col">Sub Category Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    include('config.php');
                                    $s = 1;
                                    $sql=("select * from tbl_category c inner join tbl_subcategory s on c.category_id=s.category_id");
                                    $result = mysqli_query($conn,$sql);
                                    while($display=mysqli_fetch_array($result)){

                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $s++ ?></th>
                                        <td><?php echo $display["category_name"] ?></td>
                                        <td><?php echo $display["subcategory_name"] ?></td>
                                        <td><img src="./images/<?php echo $display["subcategory_img"] ?>" style="width=10%;"></td>
                                        <td><?php echo $display["subcategory_description"] ?></td>
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
                    }
                    ?>
                    <?php
                    include('footer.php')
                    ?>