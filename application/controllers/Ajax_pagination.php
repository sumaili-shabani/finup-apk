<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_pagination extends CI_Controller {
 
 function index()
 {
  $data['title'] = "welcome to admin panel of updepenses";
  $this->load->view('backend/admin/admin_panel', $data);
 }

 function pagination()
 {
  $this->load->model("Ajax_pagination_model");
  $this->load->library("pagination");
  $config = array();
  $config["base_url"] = "#";
  $config["total_rows"] = $this->Ajax_pagination_model->count_all();
  $config["per_page"] = 6;
  $config["uri_segment"] = 3;
  $config["use_page_numbers"] = TRUE;
  $config["full_tag_open"] = '<ul class="pagination">';
  $config["full_tag_close"] = '</ul>';
  $config["first_tag_open"] = '<li class="page-item">';
  $config["first_tag_close"] = '</li>';
  $config["last_tag_open"] = '<li class="page-item">';
  $config["last_tag_close"] = '</li>';
  $config['next_link'] = '&gt;<i class="fas fa-arrow-circle-right"></i>';
  $config["next_tag_open"] = '<li class="page-item">';
  $config["next_tag_close"] = '</li>';
  $config["prev_link"] = "&lt;<i class='fas fa-arrow-circle-left'></i>";
  $config["prev_tag_open"] = "<li class='page-item'>";
  $config["prev_tag_close"] = "</li>";
  $config["cur_tag_open"] = "<li class='active'><a href='#'>";
  $config["cur_tag_close"] = "</a></li>";
  $config["num_tag_open"] = "<li class='page-item'>";
  $config["num_tag_close"] = "</li>";
  $config["num_links"] = 1;
  $this->pagination->initialize($config);
  $page = $this->uri->segment(3);
  $start = ($page - 1) * $config["per_page"];

  $output = array(
   'pagination_link'  => $this->pagination->create_links(),
   'country_table'   => $this->Ajax_pagination_model->fetch_details($config["per_page"], $start)
  );
  echo json_encode($output);
 }


 function pagination2()
 {
  $this->load->model("Ajax_pagination_model");
  $this->load->library("pagination");
  $config = array();
  $config["base_url"] = "#";
  $config["total_rows"] = $this->Ajax_pagination_model->count_all();
  $config["per_page"] = 6;
  $config["uri_segment"] = 3;
  $config["use_page_numbers"] = TRUE;
  $config["full_tag_open"] = '<ul class="pagination">';
  $config["full_tag_close"] = '</ul>';
  $config["first_tag_open"] = '<li class="page-item">';
  $config["first_tag_close"] = '</li>';
  $config["last_tag_open"] = '<li class="page-item">';
  $config["last_tag_close"] = '</li>';
  $config['next_link'] = '&gt;<i class="fas fa-arrow-circle-right"></i>';
  $config["next_tag_open"] = '<li class="page-item">';
  $config["next_tag_close"] = '</li>';
  $config["prev_link"] = "&lt;<i class='fas fa-arrow-circle-left'></i>";
  $config["prev_tag_open"] = "<li class='page-item'>";
  $config["prev_tag_close"] = "</li>";
  $config["cur_tag_open"] = "<li class='active'><a href='#'>";
  $config["cur_tag_close"] = "</a></li>";
  $config["num_tag_open"] = "<li class='page-item'>";
  $config["num_tag_close"] = "</li>";
  $config["num_links"] = 1;
  $this->pagination->initialize($config);
  $page = $this->uri->segment(3);
  $start = ($page - 1) * $config["per_page"];

  $output = array(
   'pagination_link'  => $this->pagination->create_links(),
   'country_table'   => $this->Ajax_pagination_model->fetch_details2($config["per_page"], $start)
  );
  echo json_encode($output);
 }




 function fetch()
 {
    $output = '';
    $query = '';
    $this->load->model('Ajax_pagination_model');
    if($this->input->post('query'))
    {
     $query = $this->input->post('query');
    }
    $data = $this->Ajax_pagination_model->fetch_data($query);
    
    if($data->num_rows() > 0)
    {
      
        foreach($data->result_array() as $key)
        {
         $output .= '
            
          <div class="col-md-4">
              <div class="card">


                  <!-- code start -->
                  <div class="twPc-div">
                      <a class="twPc-bg twPc-block"></a>

                      <div>
                  
                          <a title="'.$key["nom"].'" href="'.base_url().'admin/admin_entreprise_detail/'.$key["codeEntrep"].'" class="twPc-avatarLink">
                          <img alt="Mert S. Kaplan" src="'.base_url("js/assets/images/entreplogo.jpg").'" class="twPc-avatarImg">

                         
                          </a>



                          
                      </div>
                  </div>
                  <!-- code end -->


                  
                  <div class="card-body">
                      <h5 class="card-title" style="margin-top: 40px;">'.$key["nom"].'</h5>
                      <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                     <span><b><i class="fab fa-google-plus"></i>  email </b>'.$key["EmailEntrep"].'</span>
                                  </div>
                                  <div class="form-group">
                                     <span><b><i class="fa fa-phone"></i> téléphone  </b>'.$key["TelEntreprise"].'</span>
                                  </div>
                                  
                                  
                                  
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                     <span><b><i class="fas fa-map-marker-alt"></i>  adresse  </b>'.$key["Adresse"].'</span>
                                  </div>
                                  <div class="form-group">
                                     <span><b><i class="fa fa-key"></i>   rccm </b>'.$key["rccm"].'</span>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                     <div class="text-center card-footer">
                                         <a href="'.base_url().'admin/admin_entreprise_detail/'.$key["codeEntrep"].'" class="text-info"><i class="fa fa-plus"></i>  voir plus</a> 
                                     </div>
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>

         ';
        }

    }
    else
    {
      $this->pagination();
    }
    echo $output;
 }


  function fetch2()
 {
    $output = '';
    $query = '';
    $this->load->model('Ajax_pagination_model');
    if($this->input->post('query'))
    {
     $query = $this->input->post('query');
    }
    $data = $this->Ajax_pagination_model->fetch_data($query);
    
    if($data->num_rows() > 0)
    {
      
        foreach($data->result_array() as $key)
        {
         $output .= '
            
          <div class="col-md-4">
              <div class="card">


                  <!-- code start -->
                  <div class="twPc-div">
                      <a class="twPc-bg twPc-block"></a>

                      <div>
                  
                          <a title="'.$key["nom"].'" href="'.base_url().'Users/admin_entreprise_detail/'.$key["codeEntrep"].'" class="twPc-avatarLink">
                          <img alt="Mert S. Kaplan" src="'.base_url("js/assets/images/entreplogo.jpg").'" class="twPc-avatarImg">

                         
                          </a>



                          
                      </div>
                  </div>
                  <!-- code end -->


                  
                  <div class="card-body">
                      <h5 class="card-title" style="margin-top: 40px;">'.$key["nom"].'</h5>
                      <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                     <span><b><i class="fab fa-google-plus"></i>  email </b>'.$key["EmailEntrep"].'</span>
                                  </div>
                                  <div class="form-group">
                                     <span><b><i class="fa fa-phone"></i> téléphone  </b>'.$key["TelEntreprise"].'</span>
                                  </div>
                                  
                                  
                                  
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                     <span><b><i class="fas fa-map-marker-alt"></i>  adresse  </b>'.$key["Adresse"].'</span>
                                  </div>
                                  <div class="form-group">
                                     <span><b><i class="fa fa-key"></i>   rccm </b>'.$key["rccm"].'</span>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                     <div class="text-center card-footer">
                                         <a href="'.base_url().'Users/admin_entreprise_detail/'.$key["codeEntrep"].'" class="text-info"><i class="fa fa-plus"></i>  voir plus</a> 
                                     </div>
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>

         ';
        }

    }
    else
    {
      $this->pagination();
    }
    echo $output;
 }


 
}
