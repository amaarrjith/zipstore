<?php
include('header.php')
?>


<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">ADMIN Login Page</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Admin Login</p>
        </div>
    </div>
</div>
<div class="container-fluid pt-5">

    <div class="card p-2">
        <div class="row px-xl-5 justify-content-center">

            <div class="col-lg-5 " style="margin-top: 4rem; margin-bottom:2rem;">
                <div class="contact-form p-4 mt">
                    <div id="success"></div>
                    <form action="adminaction.php" method="post">
                        <div class="control-group">
                            <label>Enter Admin Username</label>
                            <input type="text" class="form-control bg-secondary" id="name" placeholder=""
                                required="required" name="admin_user"
                                data-validation-required-message="Please enter your username" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <label>Enter Admin Password</label>
                            <input type="password" class="form-control bg-secondary" id="email" placeholder=""
                                required="required" name="admin_password"
                                data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group"><br>
                            <input type="checkbox" id="email" placeholder="" />
                            <label>Remember Me</label>


                            <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-large btn-block btn-primary py-2 px-4" type="submit"
                                id="sendMessageButton">LOGIN
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-5 justify-content-center">
                <img src="../admin/images/admin_login.jpg" style="width:100%;">

            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<?php
include ('footer.php')
?>