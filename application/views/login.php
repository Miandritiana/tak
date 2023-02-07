<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Takalomimilo Login</title>

  <link href="<?php echo base_url();?>assets/css/login.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                    <form action="<?php echo base_url('TakaloAdmin/login');?>" method="post">
                            <h3 class="mb-5 text-center heading">We are Takalo Mimilo</h3>
                            <h6 class="msg-info">Please login to your account</h6>
                            <div class="form-group"> <label class="form-control-label text-muted">Email</label> <input type="email" id="email" name="mail" placeholder="admin@gmail.com" class="form-control"> </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="psw" name="pass" placeholder="admin" class="form-control"> </div>
                            <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Login</button> </div>
                    </form>
                        </div>
                </div>
                <div class="bottom text-center mb-5">
                    <form action="<?php echo base_url('TakaloAdmin/inscri');?>" method="post">
                        <p href="#" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2">Create new</button></p>
                    </form>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">We are more than just a company</h3> <small class="text-white">Lorem ipsum dolor sit amet, 
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script> -->

</html>

                     