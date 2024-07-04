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
	<?php
	include('config.php');
	session_start();
	$customer_id = 1;
	$date = date('y/m/d');
	?>
    <!-- Topbar Start -->
	<div class="container-fluid my-5 d-sm-flex justify-content-center">
		<?php 
		$sql = "SELECT * FROM `tbl_order(details)` d INNER JOIN `tbl_product` p on d.product_id = p.product_id WHERE d.customer_id = '$customer_id'";
		$result = mysqli_query($conn,$sql);
		while($display=mysqli_fetch_array($result)){

		?>
		<div class="card px-2">
			<div class="card-header bg-white">
			  <div class="row justify-content-between">
				<div class="col">
					<p class="text-muted"> Order ID :  <span class="font-weight-bold text-dark"><?php echo $display["bill_id"] ?></span></p> 
					<p class="text-muted"> Placed On :  <span class="font-weight-bold text-dark"><?php echo $date ?></span> </p></div>
					<div class="flex-col my-auto">
						<h6 class="ml-auto mr-3">
							<a href="#">Zip-Store</a>
						</h6>
					</div>
			  </div>
			</div>
			<div class="card-body">
				<div class="media flex-column flex-sm-row">
					<div class="media-body mr-3">
						<h5 class="bold"><?php echo $display["product_name"] ?></h5>
						<p class="text-muted">Payment Method : Cash On Delivery </p>
						<h4 class="mt-3 mb-4 bold"> <span class="mt-5">&#x20B9;</span><?php echo $display["rate"] ?><span class="small text-muted">  </span></h4>
						
						    
					</div><img class="align-self-center img-fluid" src="../admin/images/<?php echo $display["product_image"] ?>" width="180 " height="180">
				</div>
			</div>
			<div class="row px-3">
				<div class="col">
					<p class="text-muted">Delivery Address : </p>
					<p class="text-muted">Delivery Address : </p>
				</div>
			</div>
			 <div class="card-footer  bg-primary px-sm-3 pt-sm-4 px-0 mb-2">
				<div class="row text-center justify-content-center mb-3">
					<span class="font-weight-bold text-dark">Your Order Has Been Confirmed</span></p>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		<br><br>
	</div>
	</body>
	</html>