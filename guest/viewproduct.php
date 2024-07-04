<?php
include('header.php');


?>

<div id="header-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 500px;">
                                <img class="img-fluid" src="images/iphone.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 500px;">
                                <img class="img-fluid" src="img/tv.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 500px;">
                                <img class="img-fluid" src="images/laptop.jpg_large" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-prev-icon mb-n2"></span>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-next-icon mb-n2"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5">
            <div class="text-center mb-4">
                <?php
                
                $clickid = $_GET['clickid'];
                include('config.php');
                $sql = "SELECT * 
                FROM tbl_product p 
                INNER JOIN tbl_subcategory s ON p.subcategory_id = s.subcategory_id 
                WHERE s.subcategory_id = '$clickid'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                $subcatname = $row['subcategory_name'];
                
                    ?> 
               
                
                <h2 class="section-title px-5 text-uppercase"><span class="px-2"><?php echo $subcatname; ?></span></h2>
            </div>
            
            <div class="row px-xl-5 pb-3">
                <?php
                $result = mysqli_query($conn,$sql);
                while($display = mysqli_fetch_array($result)){
                    ?>                
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <a href="detail.php?viewid=<?php echo $display ["product_id"]?>"><img class="img-fluid w-100" src="../admin/images/<?php echo $display ["product_image"]?>" style="height: 35ex;"></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?php echo $display ["product_name"]?></h6>
                            <div class="d-flex justify-content-center">
                                <h6>&#8377 <?php echo $display ["rate"]?></h6><h6 class="text-muted ml-2"><del><?php echo $display ["og_rate"]?></del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="detail.php?viewid=<?php echo $display ["product_id"]?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            
</div>
</div>
</div>
</div>
<?php
include('footer.php')
?>  