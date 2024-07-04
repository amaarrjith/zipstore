<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">
<a href = "category.php"><button style = padding:1ex;margin:2ex; class="btn btn-primary">Add New Category</button></a>
                <div class="row g-4">
                <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category Table</h6>
                            <div class="table-responsive">
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
                    </div>
                    <?php
                    include('footer.php')
                    ?>