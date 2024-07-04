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
                <h2 class="section-title px-5"><span class="px-2">Trendy Products</span></h2>
            </div>
            <div class="row px-xl-5 pb-3">
                <?php
                include('config.php');
                $sql = "SELECT * FROM `tbl_product` WHERE subcategory_id = '3'";
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="../admin/images/Iphone15Pro.png" style="height: 35ex;">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">IPhone 15 Pro , 256 GB</h6>
                            <div class="d-flex justify-content-center">
                                <h6>&#8377 1,15,000</h6><h6 class="text-muted ml-2"><del>1,34,900</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

<?php
include('footer.php')
?>