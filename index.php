<?php
session_start();
if(isset($_SESSION['name'])){
    
    echo "<script> window.location.href = 'customer/index.php' </script>";
    
} else{
include_once 'header.php';




    ?>

                    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 500px;">
                                <img class="img-fluid" src="guest/images/iphone.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 500px;">
                                <img class="img-fluid" src="guest/img/tv.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 500px;">
                                <img class="img-fluid" src="guest/images/laptop.jpg_large" alt="Image">
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
        <!-- Navbar End -->


        <!-- Featured Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                        <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured End -->
    

        <!-- Categories Start -->
        <div class="container-fluid pt-5">
        <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">"LATEST PRODUCTS"</span></h2>
            </div>
            
                
            <div class="row px-xl-5 pb-3">
            <?php
            include('config.php');
                $sql = "SELECT * FROM `tbl_product` ORDER BY product_id DESC LIMIT 4";
                $result = mysqli_query($conn,$sql);
                while($display = mysqli_fetch_array($result)){
                    ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100 p-4" src="admin/images/<?php echo $display ["product_image"]?>" style="height: 35ex;">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?php echo $display ["product_name"]?></h6>
                            <div class="d-flex justify-content-center">
                                <h6>&#8377 <?php echo $display ["rate"]?></h6><h6 class="text-muted ml-2"><del><?php echo $display ["og_rate"]?></del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="guest/detail.php?viewid=<?php echo $display ["product_id"]?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="guest/login.php" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
        </div>
        <!-- Categories End -->
        <!--  -->


       <!--Item slider text-->

<!-- Item slider end-->


        <!-- Offer Start -->
        <div class="container-fluid offer pt-5">
            <div class="row px-xl-5">
                <div class="col-md-6 pb-4">
                    <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                        <img src="admin/images/shoe.png" alt="" style="padding: 2ex;">
                        <div class="position-relative" style="z-index: 1;">
                            <h5 class="text-uppercase text-primary mb-3">20% off on all</h5>
                            <h1 class="text-uppercase mb-4 font-weight-semi-bold">MEN SHOES</h1>
                            <a href="guest/viewproduct.php?clickid=8" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pb-4">
                    <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                        <img src="admin/images/smartwatch.png" alt="" style="padding: 2ex;">
                        <div class="position-relative" style="z-index: 1;">
                            <h5 class="text-uppercase text-primary mb-3">5% off on all </h5>
                            <h1 class="text-uppercase mb-4 font-weight-semi-bold">Watches</h1>
                            <a href="guest/viewproduct.php?clickid=11" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->


        <!-- Products Start -->
        <div class="container-fluid pt-5">
            <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">"ZIP TRENDY PRODUCTS"</span></h2>
            </div>
            <div class="row px-xl-5 pb-3">
            <?php
            include('config.php');
                $sql = "SELECT * FROM `tbl_product` LIMIT 4";
                $result = mysqli_query($conn,$sql);
                while($display = mysqli_fetch_array($result)){
                    ?>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100 p-4" src="admin/images/<?php echo $display ["product_image"]?>" style="height: 35ex;">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?php echo $display ["product_name"]?></h6>
                            <div class="d-flex justify-content-center">
                                <h6>&#8377 <?php echo $display ["rate"]?></h6><h6 class="text-muted ml-2"><del><?php echo $display ["og_rate"]?></del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="guest/detail.php?viewid=<?php echo $display ["product_id"]?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="guest/login.php" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                
            </div>
        </div>
        <!-- Products End -->


        <!-- Subscribe Start -->
        <div class="container-fluid bg-secondary my-5">
            <div class="row justify-content-md-center py-5 px-xl-5">
                <div class="col-md-6 col-12 py-5">
                    <div class="text-center mb-2 pb-2">
                        <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                        <p>Enter Your Email ID And Subscribe Us For Updates And Messages</p>
                    </div>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
<?php
}
?>
        <?php
include_once 'footer.php';?>

        





        