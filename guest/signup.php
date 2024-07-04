<?php
include('header.php')
?>
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Registration Page</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Register</p>
        </div>
    </div>
</div>
<div class="container-fluid pt-5">

    <div class="card p-2">
        <div class="row px-xl-5 justify-content-center">

            <div class="col-lg-5 " style="margin-top: 4rem; margin-bottom:2rem;">
                <div class="contact-form p-4 mt">
                    <div id="success"></div>
                    <form action="signupaction.php" method="post">
                        <div class="control-group">
                            <label>Enter Your Name</label>
                            <input type="text" name="customer_name" class="form-control bg-secondary" id="name"
                                placeholder="" required="required"
                                data-validation-required-message="Please enter your username" />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <label>Enter Your Email Address</label>
                            <input type="text" name="customer_email" class="form-control bg-secondary" id="email"
                                placeholder="" required="required"
                                data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">



                            <label>Enter Your Phone Number</label>
                            <div class="row">
                                <div class="col-3">
                                    <input type="text" class="form-control" value=" IND +91 " readonly>
                                </div>
                                <div class="col-9">
                                    <input type="text " name="customer_phone" class="form-control bg-secondary"
                                        id="email" placeholder="" required="required"
                                        data-validation-required-message="Please enter your password" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Create Your Password</label>
                            <input type="password" name="customer_password" class="form-control bg-secondary" id="email"
                                placeholder="" required="required"
                                data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <label>Re-Enter Your Password</label>
                            <input type="password" class="form-control bg-secondary" id="email"
                                name="customer_cfpassword" placeholder="" required="required"
                                data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group"><br>
                            <input type="checkbox" id="email" placeholder="" />
                            <label for="">Agree Terms & Services</label>


                            <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-large btn-block btn-primary py-2 px-4" type="submit"
                                id="sendMessageButton">REGISTER NOW
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-5 justify-content-center" style="margin-top: 8rem;">
                <img src="../admin/images/register.jpg" style="width:100%;">

            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
    <?php
include('footer.php')
?>