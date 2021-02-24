<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // if(!$this->session->userdata('id'))
        // {
        // redirect('Login');
        // }
    }

    function index()
    {
        if ($this->session->userdata('id')) 
        {
            // echo '<br /><br /><br /><h1 align="center">Welcome User</h1>';
            // echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a></p>';
            redirect(base_url().'Users');
        }
        elseif ($this->session->userdata('admin_login')) 
        {
            redirect(base_url().'Admin');
        }
        elseif ($this->session->userdata('instuctor_login')) 
        {
            echo '<br /><br /><br /><h1 align="center">Welcome Instuctor</h1>';
            echo '<p align="center"><a href="'.base_url().'Private_area/logout">Logout</a></p>';
        }
        else 
        {
            
            redirect(base_url().'Login');
        }
    
    }

    function panel_private()
    {
        $data['title'] = "bienvenue dans votre espace du travail";
        $this->load->view('backend/users/users_panel', $data);
    }

    function logout()
    {
        $data = $this->session->all_userdata();
        foreach($data as $row => $rows_value)
        {
        $this->session->unset_userdata($row);
        }
        redirect('Login');
    }


}

?>