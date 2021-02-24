
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion et autentification au système</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login/css/iofrm-theme16.css">
    <link href="<?= base_url('js/assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="<?= base_url('js/assets/images/FINUPIcon.png')?>">


</head>
<body>
    <div class="form-body without-side">
        <div class="row">
            <div class="form-holder">
                <div class="form-content" style="background-image: url(<?= base_url('js/assets/images/bglogin.jpg')?>); background-size:cover;">
                    <div class="form-items">
                        <center><img class="logo-size" src="<?= base_url('js/assets/images/FINUPIcon.png')?>" alt="" style="width:100px;"></center>
                       
                        <form method="post" action="<?php echo base_url(); ?>Login/recuperaion_password" class="p-2">

                            <?php
                            if($this->session->flashdata('message'))
                            {
                                echo '
                                <div class="alert alert-success" >
                                <button type="button" class="close" data-dismiss="alert">&times;</i></button>
                                    '.$this->session->flashdata("message").'
                                </div>
                                ';
                            }
                            if($this->session->flashdata('message2'))
                            {
                                echo '
                                <div class="alert alert-danger" >
                                <button type="button" class="close" data-dismiss="alert">&times;</i></button>
                                    '.$this->session->flashdata("message2").'
                                </div>
                                ';
                            }
                            ?>


                            <div class="form-group">
                                <label for="emailaddress">Entrer votre adresse email</label>
                                <input class="form-control"  type="email" name="user_email" id="emailaddress" value="<?php echo set_value('user_email'); ?>" >
                                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                            </div>
                           

                            <div class="form-group mb-4 pb-3">
                                
                                <br>
                                <button class="form-control btn btn-primary btn-block" type="submit">Connexion </button>
                                
                            </div>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>style/login/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>style/login/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>style/login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/login/js/main.js"></script>
</body>
</html>