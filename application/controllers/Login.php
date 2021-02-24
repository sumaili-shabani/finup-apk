<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    if($this->session->userdata('id'))
    {
    redirect('private_area');
    }
    $this->load->library('form_validation');
    $this->load->library('encrypt');
    $this->load->model('Login_model');
    }

    function index()
    {
    $this->load->view('login');
    }

    function validation()
    {
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $result = $this->Login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
            if($result == '')
            {
                redirect('Private_area');
            }
            else
            {
                $this->session->set_flashdata('message2',$result);
                redirect('Login');
            }
        }
        else
        {
        $this->index();
        }
    }


    function recupere_secure()
    {
        $data['title'] = "recupération de mot de passe";
        $this->load->view('recupere', $data);
    }

    function change_secure($param1='', $param2='',$param3='')
    {
        $data['title'] = "recupération de mot de passe";
        $data['verification_key'] = $param1;
        $req = $this->db->where('verification_key', $param1);
        $req = $this->db->get('recupere');
        if ($req->num_rows() > 0) {
            foreach ($req->result_array() as $key) {
                $data['email'] = $key['email'];
            }
        }
        else{

        }

        $this->load->view('recupere_change', $data);
    }

    function recuperaion_password(){

        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        if($this->form_validation->run())
        {
            $result = $this->Login_model->can_recuperation($this->input->post('user_email'));
            if($result == '')
            {
                $code=str_shuffle(substr("1f-èh_çà234567890+6@-?[K89ZTY\J0-T9*h#+/@THSBJ98461700221VPEHI?S&8!}\|", 0,10));
                $verification_key = md5(rand());
                $mail    = $this->input->post('user_email');
                $website = "uptodateasdeveloper@gmail.com";

                $to =$this->input->post('user_email');
                $subject = "votre mot de passe de recupération au compte system finup";
                $message2 = "
                <p>Salut!!! voici votre code de recupération de votre mot de passe au système de finup ".$verification_key." cliquer sur ce lien pour changer votre nouveau mot de passe <a href='".base_url()."Login/change_secure/".$verification_key."'>changer mon mot de passe</a>.</p>
               
                ";

                $headers= "MIME Version 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: no-reply@uptodateasdeveloper.com" . "\r\n" ."Reply-to: sumailiroger681@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();

                mail($to,$subject,$message2,$headers);

                if(mail($to,$subject,$message2,$headers) > 0){

                    $data = array(
                        'email'             => $to,
                        'verification_key'  => $verification_key
                    );

                    $this->db->insert('recupere', $data);

                    $this->session->set_flashdata('message', "mail de vérification envoyé. prière de vérifier votre boite email ");
                    redirect(base_url().'Login/recupere_secure');

                } 
                else {
                    $this->session->set_flashdata('message2', "erreur lors de l'envoie de mail");
                    redirect(base_url().'Login/recupere_secure');
                }

                


            }
            else
            {
                $this->session->set_flashdata('message2',$result);
                redirect(base_url().'Login/recupere_secure');
            }
        }
        else
        {
        $this->recupere_secure();
        }

    }

    function recupere_passe_word(){

        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        $this->form_validation->set_rules('user_password2', 'Confirm Password', 'required');
        if($this->form_validation->run())
        {
            $user_password      = $this->input->post('user_password');
            $user_password2     = $this->input->post('user_password2');
            $verification_key   = $this->input->post('verification_key');
            $email              = $this->input->post('email');
            

            if ($user_password==$user_password2) {
                // echo($user_password.'='.$user_password2.' email:'.$email.' verification_key:'.$verification_key);
                $data = array(
                    'password'             => md5($user_password)
                );

                $this->db->where('email', $email);
                $this->db->update('administrator', $data);

                $this->session->set_flashdata('message', "félicitation votre mot de passe a été modifié avec succès");
                redirect('Login');


            }
            else{

                $this->session->set_flashdata('message2', "les deux mots de passe doivent être identiques");
                redirect(base_url().'Login/change_secure/'.$verification_key);

            }

            

            
            
        }
        else
        {
            $verification_key   = $this->input->post('verification_key');
            redirect(base_url().'Login/change_secure/'.$verification_key);
        }

    }




}

?>