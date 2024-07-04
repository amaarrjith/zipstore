<?php
include ('header.php');

?>
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
  <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
    <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
    <div class="d-inline-flex">
      <p class="m-0">
        <a href="">Home</a>
      </p>
      <p class="m-0 px-2">-</p>
      <p class="m-0">Checkout</p>
    </div>
  </div>
</div>
<!-- Page Header End -->
<!-- Checkout Start -->
<div class="container-fluid pt-5">
  <form action="checkout_action.php" method="post">
    <div class="row px-xl-5">
      <div class="col-lg-8">
        <div class="mb-4">
          <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
          <div class="row">
            <div class="col-md-6 form-group">
              <label>First Name</label>
              <input name="firstname" class="form-control" type="text" placeholder="" required>
            </div>
            <div class="col-md-6 form-group">
              <label>Last Name</label>
              <input name="lastname" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
              <label>E-mail</label>
              <input name="email" class="form-control" type="text" placeholder="" required>
            </div>
            <div class="col-md-6 form-group">
              <label>Mobile No</label>
              <input name="mobile" class="form-control" type="text" placeholder="" required>
            </div>
            <div class="col-md-6 form-group">
              <label>Address Line 1</label>
              <input name="add1" class="form-control" type="text" placeholder="" required>
            </div>
            <div class="col-md-6 form-group">
              <label>Address Line 2</label>
              <input name="add2" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
              <label>District</label>
              <select name="district" class="custom-select" required>
                <option value="0">Select District</option> <?php
                            include ('config.php');
                            $total = $_GET['clickid'];
                            $shipment = $_GET['shipcharge'];
                            $sql = "SELECT * FROM tbl_district";
                            $result = mysqli_query($conn,$sql);
                            while($display = mysqli_fetch_array($result)){

                            
                            ?> <option value="<?php echo $display [1] ?>"> <?php echo $display [1] ?> </option> <?php
                            }
                            ?>
              </select>
            </div>
            <div class="col-md-6 form-group">
              <label>City</label>
              <input name="city" class="form-control" type="text" placeholder="" required>
            </div>
            <div class="col-md-6 form-group">
              <label>ZIP Code</label>
              <input name="zipcode" class="form-control" type="text" placeholder="" required>
            </div>
            <div class="col-md-6 form-group">
              <label>Nearby LandMark</label>
              <input name="landmark" class="form-control" type="text" placeholder="" required>
            </div>
            <div class="col-md-12 form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="shipto" name="checkbox_button" value="checkbox_value">
                <label class="custom-control-label" for="shipto" data-toggle="collapse" data-target="#shipping-address">Ship to different address</label>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse mb-4" id="shipping-address">
          <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
          <div class="row">
            <div class="col-md-6 form-group">
              <label>First Name</label>
              <input name="s_firstname" class="form-control" type="text" placeholder="" >
            </div>
            <div class="col-md-6 form-group">
              <label>Last Name</label>
              <input name="s_lastname" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
              <label>E-mail</label>
              <input name="s_email" class="form-control" type="text" placeholder="" >
            </div>
            <div class="col-md-6 form-group">
              <label>Mobile No</label>
              <input name="s_mobile" class="form-control" type="text" placeholder="" >
            </div>
            <div class="col-md-6 form-group">
              <label>Address Line 1</label>
              <input name="s_add1" class="form-control" type="text" placeholder="" >
            </div>
            <div class="col-md-6 form-group">
              <label>Address Line 2</label>
              <input name="s_add2" class="form-control" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
              <label>District</label>
              <select name="s_district" class="custom-select" >
                <option value="0">Select District</option> <?php
                            include ('config.php');
                            $total = $_GET['clickid'];
                            $shipment = $_GET['shipcharge'];
                            $sql = "SELECT * FROM tbl_district";
                            $result = mysqli_query($conn,$sql);
                            while($display = mysqli_fetch_array($result)){
                            ?> <option value="<?php echo $display [1] ?>"> <?php echo $display [1] ?> </option> <?php
                            }
                            ?>
              </select>
            </div>
            <div class="col-md-6 form-group">
              <label>City</label>
              <input name="s_city" class="form-control" type="text" placeholder="" >
            </div>
            <div class="col-md-6 form-group">
              <label>Pin Code</label>
              <input name="s_zipcode" class="form-control" type="text" placeholder="" >
            </div>
            <div class="col-md-6 form-group">
              <label>Nearby Land Mark</label>
              <input name="s_landmark" class="form-control" type="text" placeholder="" >
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-secondary mb-5">
          <div class="card-header bg-secondary border-0">
            <h4 class="font-weight-semi-bold m-0">Order Total</h4>
          </div>
          <div class="card-body">
            <h5 class="font-weight-medium mb-3">Products</h5> <?php 
                        include ('config.php');
                        $customerid = $_SESSION['id'];
                        $sql = "SELECT * FROM tbl_cart c inner join tbl_product p on c.product_id = p.product_id WHERE c.customer_id = '$customerid'";
                        $result = mysqli_query($conn,$sql);
                        while($display = mysqli_fetch_array($result)){?> <input type="hidden" name="products" value="
																										<?php echo $display["product_name"];?>">
            <div class="d-flex justify-content-between">
              <p> <?php echo $display["product_name"] ?> : </p>
              <p>&#8377; <?php echo $display["rate"] ?> </p>
            </div> <?php
                        }
                        ?>
          </div>
          <hr class="mt-0">
          <div class="d-flex justify-content-between mb-3 p-2">
            <h6 class="font-weight-medium">Subtotal</h6>
            <h6 class="font-weight-medium">&#8377; <?php echo $total?> </h6>
          </div>
          <div class="d-flex justify-content-between p-2">
            <h6 class="font-weight-medium">Shipping</h6>
            <h6 class="font-weight-medium">&#8377; <?php echo $shipment?> </h6>
          </div>
        </div>
        <div class="card-footer border-secondary bg-transparent">
          <div class="d-flex justify-content-between mt-2">
            <h5 class="font-weight-bold">Total</h5>
            <h5 class="font-weight-bold">&#8377; <?php echo $total+$shipment?> </h5>
          </div>
        </div>
        <input name="net_amount" type="hidden" value="
																										<?php echo $net_amount = $total+$shipment?>">
        <div class="card border-secondary mt-5 mb-5">
          <div class="card-header bg-secondary border-0">
            <h4 class="font-weight-semi-bold m-0">Payment</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="custom-control custom-radio">
                <input required type="radio" value="Cash-On-Delivery" class="custom-control-input" name="payment" id="paypal">
                <label class="custom-control-label" for="paypal">Cash On Delivery</label>
              </div>
            </div>
            <div class="form-group">
              <div class="custom-control custom-radio">
                <input required type="radio" value="Online-Payment" class="custom-control-input" name="payment" id="directcheck">
                <label class="custom-control-label" for="directcheck">Online Payment</label>
              </div>
            </div>
            
          </div>
          <div class="card-footer border-secondary bg-transparent">
            <input type="hidden" type="text" name="total" value="<?php echo $total+$shipment?>">
            <input class="btn btn-success" type="submit" value="Place Order">
            
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- Checkout End -->
</div>
</div>
</div>
</div> <?php
    include ('footer.php');
    ?>