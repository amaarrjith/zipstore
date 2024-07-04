<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">
<div class="col-12">
<a href = "product.php"><button style = padding:1ex;margin:2ex; class="btn btn-primary">Add New Product</button></a>
<a href = "stock.php"><button style = padding:1ex;margin:2ex; class="btn btn-success">Add Stock</button></a>
                        <div class="bg-secondary rounded h-100 p-4">
                            
                            <h6 class="mb-4">Product Registration Table</h6>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Sub Category Name</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Product Image</th>
                                            <th scope="col">Product Description</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Orginal Rate</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include('config.php');
                                    $s = 1;
                                    $sql = "select * from tbl_product p inner join tbl_subcategory s on s.subcategory_id=p.subcategory_id inner join tbl_category c on c.category_id=p.category_id";
                                    $result = mysqli_query($conn,$sql);
                                    while($display = mysqli_fetch_array($result)){
                                        ?>
                                    
                                        <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $s++ ?></th>
                                            <td><?php echo $display["category_name"] ?></td>
                                            <td><?php echo $display["subcategory_name"] ?></th>
                                            <td><?php echo $display["product_name"] ?></td>
                                            <td><img src = "./images/<?php echo $display["product_image"] ?>"width = "40%"></td>
                                            <td><?php echo $display["product_description"]?></td>
                                            <td><?php echo $display["rate"] ?></td>
                                            <td><?php echo $display["og_rate"] ?></td>
                                            <td><?php echo $display["stock"] ?></td>
                                            <td><?php echo $display["status"] ?></td>
                                            <td><a href = "product_edit.php?editid=<?php echo $display["product_id"]?>"><button class="btn btn-info">Edit</button></a></td>
                                            <td><a href = "product_delete.php?deleteid=<?php echo $display["product_id"]?>"><button class= "btn btn-danger">Delete</button></a></td>
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