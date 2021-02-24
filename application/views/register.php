<?php ?>

<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:46:45 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Lunoz - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('js/assets/images/favicon.ico')?>">
    
        <!-- App css -->
        <link href="<?= base_url('js/assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('js/assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('js/assets/css/theme.min.css')?>" rel="stylesheet" type="text/css" />
         <link rel="shortcut icon" href="<?= base_url('js/assets/images/FINUPIcon.png')?>">
    
    </head>

<body class="bg-primary">

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block my-5">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center mb-4 mt-3">
                                                <a href="#">
                                                <span><img src="<?= base_url('js/assets/images/logo-dark.png')?>" alt="" height="26"></span>
                                                </a>
                                            </div>
                                            <form method="post" action="<?php echo base_url(); ?>register/validation" class="p-2">
                                                <div class="text-center" >
                                                <?php
                                                if($this->session->flashdata('message'))
                                                {
                                                    echo '
                                                    <div class="alert alert-success" >
                                                    <button type="button" class="close" data-dismiss="alert">&times;<i class="fa fa-check"></i></button>
                                                        '.$this->session->flashdata("message").'
                                                    </div>
                                                    ';
                                                }
                                                if($this->session->flashdata('message2'))
                                                {
                                                    echo '
                                                    <div class="alert alert-danger" >
                                                    <button type="button" class="close" data-dismiss="alert">&times;<i class="fa fa-close"></i></button>
                                                        '.$this->session->flashdata("message").'
                                                    </div>
                                                    ';
                                                }
                                                ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Name</label>
                                                    <input class="form-control" type="text" name="user_name" id="user_name"  placeholder="patrona shabani sumaili">
                                                    <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailaddress">Email address</label>
                                                    <input class="form-control" type="email" name="user_email" id="emailaddress" placeholder="john@deo.com">
                                                    <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" name="user_password" id="password" placeholder="Enter your password">
                                                    <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                                                </div>
                                                <div class="form-group mb-4 pb-3">
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                                        <label class="custom-control-label" for="checkbox-signin">I accept <a href="#">Terms and Conditions</a></label>
                                                    </div>
                                                </div>
                                                <div class="mb-3 text-center">
                                                    <button class="btn btn-primary btn-block" type="submit" name="register"> Sign Up Free </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end card-body -->
                                    </div>
                                    <!-- end card -->
            
                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-white-50 mb-0">Already have an account? <a href="<?php echo(base_url()) ?>login" class="text-white-50 ml-1"><b>Sign In</b></a></p>
                                        </div>
                                    </div>
            
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="<?= base_url('js/assets/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('js/assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('js/assets/js/metismenu.min.js')?>"></script>
    <script src="<?= base_url('js/assets/js/waves.js')?>"></script>
    <script src="<?= base_url('js/assets/js/simplebar.min.js')?>"></script>

    <!-- App js -->
    <script src="<?= base_url('js/assets/js/theme.js')?>"></script>

</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:46:45 GMT -->
</html>