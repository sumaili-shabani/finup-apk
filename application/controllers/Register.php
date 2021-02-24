<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller 
{

    public function __construct()
    {
    parent::__construct();
    if($this->session->userdata('id'))
    {
    redirect('private_area');
    }
    $this->load->library('form_validation');
    $this->load->model('Register_model');
    }

    function index()
    {
    $this->load->view('register');
    }

    function validation()
    {
        $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[administrator.email]');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $verification_key = md5(rand());
            $data = array(
                'name'  => $this->input->post('user_name'),
                'email'  => $this->input->post('user_email'),
                'password' =>  md5($this->input->post('user_password')),
                'verification_key' => $verification_key
            );
            $id = $this->Register_model->insert($data);
            if($id > 0)
            {
                $subject = "Please verify email for login";
                $message = "
                <p>Hi ".$this->input->post('user_name')."</p>
                <p>This is email verification mail from UPDEPENSES Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."Register/verify_email/".$verification_key."'>link</a>.</p>
                <p>Once you click this link your email will be verified and you can login into system.</p>
                <p>Thanks,</p>
                ";
                $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'smtpout.secureserver.net',
                'smtp_port' => 80,
                'smtp_user'  => 'sumailiroger681@gmail.com', 
                'smtp_pass'  => '0817883541', 
                'mailtype'  => 'html',
                'charset'    => 'iso-8859-1',
                'wordwrap'   => TRUE
                );
                // $this->load->library('email', $config);
                // $this->email->set_newline("\r\n");
                // $this->email->from('uptodateasdeveloper@gmail.com');
                // $this->email->to($this->input->post('user_email'));
                // $this->email->subject($subject);
                // $this->email->message($message);
                // if($this->email->send())
                // {
                // $this->session->set_flashdata('message', 'Check in your email for email verification mail');
                // redirect(base_url().'login');
                // }
                // else
                // {
                //     $this->session->set_flashdata('message', 'connectez-vous!');
                //     redirect(base_url().'register');
                //}

                $name 	 = $this->input->post('user_name');
                $mail 	 = $this->input->post('user_email');
                $website = "uptodateasdeveloper@gmail.com";
                $comment = $message;

                $code=str_shuffle(substr("1f-èh_çà234567890+6@-?[K89ZTY\J0-T9*h#+/@THSBJ98461700221VPEHI?S&8!}\|", 0,5));

                $to =$this->input->post('user_email');
                $subject = "Envoie de message au formulaire de contact";
                $headers= "MIME Version 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: no-reply@uptodateasdeveloper.com" . "\r\n" ."Reply-to: sumailiroger681@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();

                $message2 = '
                    <html>
                    <head>
                    <title>Mail from '. $name .'</title>
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                    <!------ Include the above in your HEAD tag ---------->
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <!------ Include the above in your HEAD tag ---------->
                    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                    <style>


                    #banner {
                        background: url(https://bootstrapmade.com/demo/themes/Medilab/img/bg-banner.jpg) no-repeat fixed;
                        background-size: cover;
                        min-height: 650px;
                        position: relative;
                    }
                    .bg-color {
                        background-color: RGBA(13, 70, 83, 0.78);
                        min-height: 650px;
                    }
                    .navbar {
                        border-radius: 0px;
                    }
                    .navbar-default {
                        background-color: transparent;
                        border: 0px;
                    }
                    .navbar-default {
                        padding: 20px 0;
                        transition: all 0.3s;
                    }
                    .banner-info {
                        padding-top: 190px;
                    }

                    </style>
                    </head>
                    <body>
                    

                    <section id="banner" class="banner">
                        <div class="bg-color">
                        <nav class="navbar navbar-default navbar-fixed-top">
                            <div class="container">
                            <div class="col-md-12">
                                
                            </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="row">
                            <div class="banner-info">
                                <div class="banner-logo text-center">
                               
                                </div>
                                <div class="banner-text text-center">
                                
                                </div>
                                <div class="overlay-detail text-center" align="center">
                                <h1 class="white" align="center">UPDEPENSES '.$subject.'</h1>
                                <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
                                    <tr style="height: 32px;">
                                        <th align="right" style="width:150px; padding-right:5px;">Name:</th>
                                        <td align="left" style="padding-left:5px; line-height: 20px;">'. $name .'</td>
                                        </tr>
                                        <tr style="height: 32px;">
                                        <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
                                        <td align="left" style="padding-left:5px; line-height: 20px;">'. $mail .'</td>
                                        </tr>
                                        <tr style="height: 32px;">
                                        <th align="right" style="width:150px; padding-right:5px;">Website:</th>
                                        <td align="left" style="padding-left:5px; line-height: 20px;">'. $website .'</td>
                                        </tr>
                                        <tr style="height: 32px;">
                                        <th align="right" style="width:150px; padding-right:5px;">Comment:</th>
                                        <td align="left" style="padding-left:5px; line-height: 20px;">'. $comment .'</td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </section>
                    <section class="container">
                    
                    </section>
                    
                    
                    
                    </body>
                    </html>
                    ';

                    
                
                $txt ='votre code de validation au compte'.$website.' est:  '.$code;

                if(mail($to,$subject,$message2,$headers) > 0){

                    $this->session->set_flashdata('message', "mail d'activation envoyé. prière de vérifier votre boite email ");
                    redirect(base_url().'register');
                } 
                else {
                    $this->session->set_flashdata('message2', "impossible d'envoyer le mail veillez vérifier votre adresse email svp!");
                    redirect(base_url().'register');
                }






            }
        }
        else
        {
        $this->index();
        }
    }

    function verify_email()
    {
        if($this->uri->segment(3))
        {
            $verification_key = $this->uri->segment(3);
            if($this->Register_model->verify_email($verification_key))
            {
                $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'Login">here</a></h1>';
            }
            else
            {
                $data['message'] = '<h1 align="center">Invalid Link</h1>';
            }
        $this->load->view('login', $data);
        }
    }

    

    

}

?>