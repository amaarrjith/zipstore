<?php
session_start()

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zip-Store | Online E-Commerce Webpage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5 ">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="index.php" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">ZIP</span>STORE</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control bg-secondary">
                        <div class="input-group-append">
                            <span class="input-group-text bg-white text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="#" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <?php
                include ('config.php');
                $customerid = $_SESSION['id'];
                $sql = "SELECT COUNT(*) as count FROM tbl_cart WHERE `customer_id` = '$customerid'";
                $result = mysqli_query($conn,$sql);

                if ($result->num_rows > 0) {
                    // Fetch the count
                    $row = $result->fetch_assoc();
                    $count = $row['count'];
                } else {
                    $count = 0;
                }

                // Close connection
                $conn->close();
                ?>
            
                <a href="cart.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge"><?php echo $count; ?></span>
                </a>
                
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="index.php" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">ZIP</span>STORE</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                        
                            <a href="index.php" class="nav-item nav-link ">Home</a>    
                            
                            
                            
                            
                        </div>
                        <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <span class="welcome-text">Welcome <?php echo $_SESSION['name']?></span>
    </a>
    <div class="dropdown-menu rounded-0 m-0 custom-dropdown">
        <a href="logout.php" class="dropdown-item p-2">Logout</a>
        <a href="my_order.php" class="dropdown-item p-2">My Orders</a>
    </div>
</div>
                    

                </nav>
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <?php
                            include('config.php');
                            $sql = "SELECT * FROM `tbl_category`";
                            $result = mysqli_query($conn, $sql);

                            while ($display = mysqli_fetch_array($result)) {
                                ?>
                                <div class="nav-item dropdown">

                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $display[1] ?></a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <?php
                                        // Inner SQL query modified to fetch subcategories for the current category
                                        $category_id = $display['category_id'];
                                        $sqldata = "SELECT * FROM `tbl_subcategory` WHERE category_id = $category_id";
                                        $res = mysqli_query($conn, $sqldata);

                                        while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                            <a href="viewproduct.php?clickid=<?php echo $row['subcategory_id']?>" class="dropdown-item"><?php echo $row['subcategory_name'] ?></a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>


                    </div>
                </nav>