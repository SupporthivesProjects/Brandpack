
<?php include 'includes/header.php'; ?>

<section class="auth-section auth-login">
    <img src="./img/auth-bg.png" class="img-fluid d-none d-lg-block d-md-block bg-image">
    <div class="container">
        <div class="container-main">
            <div class="col">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <img src="./img/auto-login-m.png" class="img-fluid w-100 d-block d-lg-none d-md-none">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="welcome-back-main">
                            <div class="welcome-back">
                                <h3>Welcome Back</h3>
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class="form-control" placeholder="Email address">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="col-12">
                                            <div class="forget-pass">
                                                <a href="#"  data-bs-toggle="modal" data-bs-target="#forgetModal">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="divider-line"></div>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-green"> Login </button>
                                        </div>
                                        <div class="col-12">
                                            <p>Don’t have an account? <a href="#" >Register here</a></p>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Modal -->
<div class="modal fade" id="forgetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered forget-main-modal">
    <div class="modal-content">
       <h1 class="modal-title">Forgot your password?</h1>
        <div class="modal-body">
            <div class="forget-main-div">
                <form>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Password">
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                            <label class="form-check-label" for="radioDefault1">
                                By checking this box you agree with the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-green">Submit Request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>