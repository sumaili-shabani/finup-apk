<?php 

class Ajax_pagination_model extends CI_Model
{
 function count_all()
 {
  $query = $this->db->get("v_user");
  return $query->num_rows();
 }

 function fetch_details($limit, $start)
 {
  $output = '';
  $this->db->select("*");
  $this->db->from("v_user");
  $this->db->order_by("nom", "ASC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  
  foreach($query->result_array() as $key)
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
  
  return $output;
 }

 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("v_user");
  if($query != '')
  {
   $this->db->like('nom', $query);
   $this->db->or_like('License', $query);
   $this->db->or_like('codeEntrep', $query);
   $this->db->or_like('EmailEntrep', $query);
   $this->db->or_like('Adresse', $query);
  }
  $this->db->order_by('code', 'DESC');
  return $this->db->get();
 }

 function fetch_details2($limit, $start)
 {
  $output = '';
  $this->db->select("*");
  $this->db->from("v_user");
  $this->db->order_by("nom", "ASC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  
  foreach($query->result_array() as $key)
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
  
  return $output;
 }



} 
?>