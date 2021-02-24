<?php 

/**
 * 
 */
class Crud_model extends CI_Model
{
	
	// opertion formations
	  var $table2 = "v_operation";  
    var $select_column2 = array("code","codeEntrep", "nom","Motif", "psedo", "TypeOp", "Montant","devise","dateAdd");  
    var $order_column2 = array(null, "nom","Motif", null, null);
    // fin de la formation

// opertion users
    var $table3 = "users";  
    var $select_column3 = array("code","psedo", "emailUser","tel", "pswd", "dateAdd","exp","codeFonction","level","sexe");  
    var $order_column3 = array(null, "psedo","emailUser", null, null);

    //opertion users_system
    var $table4 = "administrator";  
    var $select_column4 = array("id","name", "email", "password","verification_key", "is_email_verified", "idrole","telephone");  
    var $order_column4 = array(null, "name","email", null, null);

    // fin

    //opertion Compte
    var $table5 = "compte";  
    var $select_column5 = array("code","designation", "montant", "devise","dateAdd");  
    var $order_column5 = array(null, "designation","montant", null, null);

    //opertion licence
    var $table6 = "profile_license";  
    var $select_column6 = array("code","nom","designation", "devise","debut","fin","dateAdd","montant","durree","addresse","email","tel","codeEntrep","codeType" );  
    var $order_column6 = array(null, "nom","designation", null, null);

    //opertion type de licence
    var $table7 = "typelincence";  
    var $select_column7 = array("code","designation","montant", "durree","dateAdd");  
    var $order_column7 = array(null, "designation","montant", null, null);

     //opertion type de licence
    var $table8 = "infos";  
    var $select_column8 = array("code","infos","typeInfos", "dateAdd","image");  
    var $order_column8 = array(null, "infos","typeInfos", null, null);




     function make_query_operation()  
      {  
            
           $this->db->select($this->select_column2);  
           $this->db->from($this->table2);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("Motif", $_POST["search"]["value"]);  
                $this->db->or_like("Montant", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('code', 'DESC');  
           }  
      }

     function make_datatables_operation(){  
           $this->make_query_operation();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_operation(){  
           $this->make_query_operation();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_operation()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table2);  
           return $this->db->count_all_results();  
      }

      function fetch_single_operation($code)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->get('v_operation');  
           return $query->result();  
      }




      // les utilisateurs
       function make_query_users()  
       {  
              
             $this->db->select($this->select_column3);  
             $this->db->from($this->table3);  
             if(isset($_POST["search"]["value"]))  
             {  
                  $this->db->like("emailUser", $_POST["search"]["value"]);  
                  $this->db->or_like("psedo", $_POST["search"]["value"]);  
             }  
             if(isset($_POST["order"]))  
             {  
                  $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
             }  
             else  
             {  
                  $this->db->order_by('code', 'DESC');  
             }  
        }

     function make_datatables_users(){  
           $this->make_query_users();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_users(){  
           $this->make_query_users();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_users()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table3);  
           return $this->db->count_all_results();  
      }

      function fetch_single_users($code)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->get('users');  
           return $query->result();  
      }


      // les utilisateurs au système
       function make_query_users_system()  
       {  
              
             $this->db->select($this->select_column4);  
             $this->db->from($this->table4);  
             if(isset($_POST["search"]["value"]))  
             {  
                  $this->db->like("name", $_POST["search"]["value"]);  
                  $this->db->or_like("email", $_POST["search"]["value"]);  
             }  
             if(isset($_POST["order"]))  
             {  
                  $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
             }  
             else  
             {  
                  $this->db->order_by('id', 'DESC');  
             }  
        }

     function make_datatables_users_system(){  
           $this->make_query_users_system();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_users_system(){  
           $this->make_query_users_system();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_users_system()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table4);  
           return $this->db->count_all_results();  
      }

      function fetch_single_users_system($code)  
      {  
           $this->db->where("id", $code);  
           $query=$this->db->get('administrator');  
           return $query->result();  
      }


      function Delete_fonction($idmenurole)
      {
        $this->db->where('idmenurole', $idmenurole);
        $this->db->delete('menurole');
      }

      function security_one($id, $data)  
      {  
           $this->db->where("id", $id);  
           $query=$this->db->update('administrator', $data);  
      }



      // opération compte
       function make_query_compte()  
      {  
            
           $this->db->select($this->select_column5);  
           $this->db->from($this->table5);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("designation", $_POST["search"]["value"]);  
                $this->db->or_like("montant", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('code', 'DESC');  
           }  
      }

     function make_datatables_compte(){  
           $this->make_query_compte();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_compte(){  
           $this->make_query_compte();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_compte()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table5);  
           return $this->db->count_all_results();  
      }

      function fetch_single_compte($code)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->get('compte');  
           return $query->result();  
      }


      function update_operation_compte($code, $data)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->update('compte', $data);  
      }



       // opération type de licences
       function make_query_type_licence()  
      {  
            
           $this->db->select($this->select_column7);  
           $this->db->from($this->table7);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("designation", $_POST["search"]["value"]);  
                $this->db->or_like("durree", $_POST["search"]["value"]); 
                $this->db->or_like("montant", $_POST["search"]["value"]); 
                 
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('code', 'DESC');  
           }  
      }

     function make_datatables_type_licence(){  
           $this->make_query_type_licence();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_type_licence(){  
           $this->make_query_licence();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_type_licence()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table7);  
           return $this->db->count_all_results();  
      }

      function fetch_single_type_licence($code)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->get('typelincence');  
           return $query->result();  
      }

      function insert_operation_type_licence($data)  
      {    
           $query=$this->db->insert('typelincence', $data);  
      }


      function update_operation_type_licence($code, $data)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->update('typelincence', $data);  
      }



      // opération licence
       function make_query_licence()  
      {  
            
           $this->db->select($this->select_column6);  
           $this->db->from($this->table6);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("designation", $_POST["search"]["value"]);  
                $this->db->or_like("nom", $_POST["search"]["value"]); 
                $this->db->or_like("montant", $_POST["search"]["value"]); 
                $this->db->or_like("devise", $_POST["search"]["value"]);  
                $this->db->or_like("addresse", $_POST["search"]["value"]); 
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('code', 'DESC');  
           }  
      }

     function make_datatables_licence(){  
           $this->make_query_licence();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_licence(){  
           $this->make_query_licence();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_licence()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table6);  
           return $this->db->count_all_results();  
      }

      function fetch_single_licence($code)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->get('profile_license');  
           return $query->result();  
      }


      function update_operation_licence($code, $data)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->update('lincence', $data);  
      }


       // opération information
       function make_query_infos()  
      {  
            
           $this->db->select($this->select_column8);  
           $this->db->from($this->table8);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("infos", $_POST["search"]["value"]);  
                $this->db->or_like("typeInfos", $_POST["search"]["value"]); 
               
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('code', 'DESC');  
           }  
      }

     function make_datatables_infos(){  
           $this->make_query_infos();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_infos(){  
           $this->make_query_infos();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_infos()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table8);  
           return $this->db->count_all_results();  
      }

      function fetch_single_infos($code)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->get('infos');  
           return $query->result();  
      }

      function insert_operation_info($data){
        $query = $this->db->insert("infos", $data);
      }


      function update_operation_infos($code, $data)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->update('infos', $data);  
      }

      // opération de la licence
      function insert_lecence_system($data){
        $this->db->insert('lincence', $data);
      }

      function update_licence_system($code, $data)  
      {  
           $this->db->where("code", $code);  
           $query=$this->db->update('lincence', $data);  
      }

      // detail de devise
      function fetch_single_devise_operation($designation)  
      {  

          $query=$this->db->query("SELECT COUNT(nom) as nombre FROM v_operation 
            WHERE devise ='".$designation."' ");

          return $query->result();  
      }

      function fetch_single_devise_entreprise($designation)  
      {  

          $query=$this->db->query("SELECT COUNT(nom) as nombre FROM v_user 
           WHERE devise ='".$designation."' ");

          return $query->result();  
      }

      function fetch_single_devise_entreprise_type($designation)  
      {  

          $query=$this->db->query("SELECT COUNT(nom) as nombre,TypeOp FROM v_operation WHERE devise ='".$designation."' GROUP BY TypeOp ");

          return $query->result();  
      }






      











      






}



 ?>