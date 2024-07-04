<?php
include('header.php')
?>
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
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
                    
                </div>
            </div>
<?php
include('footer.php')
?>