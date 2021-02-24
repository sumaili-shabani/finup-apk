<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      if(!$this->session->userdata('id'))
      {
      redirect(base_url().'Login');
      }

      $this->load->library('form_validation');
      $this->load->model('Register_model');
      $this->load->model('Crud_model');
    }

    function index(){
        $data['title'] = "bienvenue dans votre espace du travail";
        $this->load->view('backend/users/users_panel', $data);
    }

     function admin_panel(){
        $data['title'] = "welcome to admin panel of updepenses";
        $this->load->view('backend/admin/admin_panel', $data);

    }


    function admin_entreprise($param1 ='', $param2=''){
        if ($param1 =='page') {
            $data['page'] = $param2;
            $data['title'] = "profile des nos entreprises";
            $this->load->view('backend/users/users_entreprise', $data);
        }
        $data['title'] = "profile des nos entreprises";
        $this->load->view('backend/users/users_entreprise', $data);

    }
    function admin_entreprise_detail($param1 ='', $param2 ='', $param3 =''){
        $data['title'] = "détail de l'entreprise";
        $data['codeEntrep'] = $param1;
        $this->load->view('backend/users/users_detail_entreprise', $data);

    }

    function admin_select_detail(){
        $data['title'] = "détail des entreprises";
        $this->load->view('backend/users/users_select_users', $data);

    }

    function admin_select_operation($param1 ='', $param2 ='', $param3 =''){
        $data['title'] = "détail des opérations";
        if ($param1 == "show") {

          $data['dateAdd1'] = $this->input->post('dateAdd');
          $data['dateAdd2'] = $this->input->post('dateAdd2');
          $this->load->view('backend/users/users_show_detail', $data);
        }
        elseif ($param1=="voir_plus") {
          $this->load->view('backend/users/users_select_operation', $data);
        }
        else{
          
        }

        

    }

    function profile_admin(){
        $data['title'] = "mon profile";
        $this->load->view('backend/users/user_profile', $data);
    }

    function modifier_fonction($param1='', $param2='', $param3=''){
      if ($param1=='view_detail') {
        $data['title'] = "les fonctions de cet utilisateur";
        $data['id'] = $param2;
        $this->load->view('backend/users/user_modifier_fonction', $data);
      }
      else{

      }

    }


    function seting(){
        $data['title'] = "reglage de  paramètrage";
        $this->load->view('backend/users/user_seting', $data);
    }

    function seting_compte(){
        $data['title'] = "reglage de  paramètrage de compte";
        $this->load->view('backend/users/user_compte', $data);
    }

    function seting_devise(){
        $data['title'] = "reglage de  paramètrage de devise";
        $this->load->view('backend/users/user_devise', $data);
    }

    function seting_fonction(){
        $data['title'] = "reglage de  paramètrage des fonctions";
        $this->load->view('backend/users/user_fonction_seting', $data);
    }
    
    function seting_license(){
        $data['title'] = "reglage de  paramètrage des licenses";
        $this->load->view('backend/users/user_license_seting', $data);
    }

    function seting_type_license(){
        $data['title'] = "reglage de  paramètrage des licenses";
        $this->load->view('backend/users/user_type_license_seting', $data);
    }

    function seting_type_infos(){
        $data['title'] = "reglage de  paramètrage des informations";
        $this->load->view('backend/users/user_infos_seting', $data);
    }

    function injection_seting_type_license(){
        $data['title'] = "reglage de  paramètrage des informations";
        $this->load->view('backend/users/user_injection_seting', $data);
    }


    function injection_admin_select_entreprise($param1 ='', $param2 ='', $param3 =''){
        $data['title'] = "détail des opérations";
        if ($param1 == "show") {

          $data['designation'] = $this->input->post('category_licence');
          $data['durree'] = $this->input->post('category_durre');
          $this->load->view('backend/users/user_select_entreprise_injection', $data);
        }
        elseif ($param1=="voir_plus") {
          $this->load->view('backend/admin/user_select_operation', $data);
        }
        else{
          
        }

    }





    function requete($param1='', $param2='', $param3=''){

        $data['title'] = "détail et visualisation des opérations";
        if ($param1 == "show") {

          $data['dateAdd']           =   $this->input->post('dateAdd');
          $data['codeEntrep']        =   $param2;
          $data['dateAdd2']          =   $this->input->post('dateAdd2'); 

          $this->load->view('backend/users/user_detail_requete', $data);
        }
        elseif ($param1=="voir_plus") {
          $this->load->view('backend/users/admin_detail_requete', $data);
        }
        else{
          
        }

    }


    // script de depense
    function fetch_operation(){  

           $fetch_data = $this->Crud_model->make_datatables_operation();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = $row->nom;
                $sub_array[] = nl2br(substr($row->TypeOp, 0,50)).'...'; 
                $sub_array[] = nl2br(substr($row->Motif, 0,50)).'...'; 
                $sub_array[] = $row->Montant; 
                $sub_array[] = $row->devise; 

                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->dateAdd)), 0, 23);
 
                $sub_array[] = '<button type="button" name="update" code="'.$row->code.'" class="btn btn-warning btn-xs update"><i class="fa fa-eye"></i></button>';  
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->Crud_model->get_all_data_operation(),  
                "recordsFiltered"     =>     $this->Crud_model->get_filtered_data_operation(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_operation()  
      {  
           $output = array();  
           $data = $this->Crud_model->fetch_single_operation($this->input->post('code'));  
           foreach($data as $row)  
           {  
                $output['Motif'] = $row->Motif;  
                $output['nom'] = $row->nom; 
                $output['Montant'] = $row->Montant; 
                $output['type'] = $row->type; 

                $output['dateAdd'] = $row->dateAdd;
                $output['etat'] = $row->etat;

                $output['devise'] = $row->devise;

                $output['dateValidate'] = $row->dateValidate;
                $output['validateUser'] = $row->validateUser;

                 
           }  
           echo json_encode($output);  
      }


      // script des utilisateurs
    function fetch_users(){  

           $fetch_data = $this->Crud_model->make_datatables_users();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = $row->psedo;
                $sub_array[] = nl2br(substr($row->emailUser, 0,50)).'...'; 
                $sub_array[] = nl2br(substr($row->sexe, 0,50)).'...'; 
                $sub_array[] = $row->tel; 
                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->exp)), 0, 23); 

                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->dateAdd)), 0, 23);
 
                $sub_array[] = '<button type="button" name="update" code="'.$row->code.'" class="btn btn-warning btn-xs update"><i class="fa fa-eye"></i></button>';  
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->Crud_model->get_all_data_users(),  
                "recordsFiltered"     =>     $this->Crud_model->get_filtered_data_users(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_users()  
      {  
           $output = array();  
           $data = $this->Crud_model->fetch_single_users($_POST["code"]);  
           foreach($data as $row)  
           {  
                $output['psedo']      = $row->psedo;  
                $output['sexe']       = $row->sexe; 
                $output['tel']        = $row->tel; 
                $output['exp']        = $row->exp;

                $output['pswd']       = $row->pswd; 

                $output['codeEntrep'] = $row->codeEntrep; 

                $output['dateAdd']    = $row->dateAdd;
                $output['emailUser']  = $row->emailUser;
                
    
           }  
           echo json_encode($output);  
      }



      function update_users(){

          $verification_key = md5(rand());
          $code= $this->input->post('pass');
          $codeEntrep = $this->input->post('codeEntrep');
          $data = array(
              'psedo'       => $this->input->post('psedo'),
              'tel'         => $this->input->post('tel'),
              'exp'         => $this->input->post('exp'),
              'dateAdd'     => $this->input->post('dateAdd'),
              'emailUser'   => $this->input->post('emailUser'),
              'pswd'        =>  md5($this->input->post('pswd'))
          );

          $this->db->where('code', $this->input->post('code'));
          $query = $this->db->update('users', $data);

          $subject = "Update verify informations";
              $message = "
              <p>Hi ".$this->input->post('psedo')."</p>
              <p>This is password verification pass from UPDEPENSES  system. For complete registration process and login into system.<h1>".$this->input->post('pswd')."</h1>.</p>
                            <p>Thanks,</p>
              ";
            

              $name    = $this->input->post('psedo');
              $mail    = $this->input->post('emailUser');
              $website = "uptodateasdeveloper@gmail.com";
              $comment = $message;

             

              $to =$this->input->post('emailUser');
              $subject = "Mot de passe de recupération ";
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
                                      <th align="right" style="width:150px; padding-right:5px;">Mot de passe actuel:</th>
                                      <td align="left" style="padding-left:5px; line-height: 20px;">'. $this->input->post("pswd") .'</td>
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
                  redirect(base_url().'Users/admin_entreprise_detail/'.$codeEntrep);
              } 
              else {
                  $this->session->set_flashdata('message2', "impossible d'envoyer le mail veillez vérifier votre adresse email svp!");
                  redirect(base_url().'Users/admin_entreprise_detail/'.$codeEntrep);
              }

      }

      function agent(){
        $data['title'] = "opérations sur nos agents";
        $this->load->view('backend/users/user_agent', $data);
      }

      function show_select_fonction(){
        $data['title'] = "Ajout opérations des fonctions";
        $this->load->view('backend/users/user_fonction', $data);
      }



      function insert_user_system(){

            $verification_key = md5(rand());
            $data = array(
                'name'        => $this->input->post('user_name'),
                'email'       => $this->input->post('user_email'),
                'telephone'   => $this->input->post('telephone'),
                'password'    =>  md5($this->input->post('user_password')),
                'verification_key' => $verification_key
            );
            $id = $this->Register_model->insert($data);
            if($id > 0)
            {
                $subject = "Votre mail d'activation de compte au compte system UPDEPENSES";
                $to =$this->input->post('user_email');
                $website = "uptodateasdeveloper@gmail.com";

                $message = "
                <p>Hi ".$this->input->post('user_name')."</p>
                <p>This is email verification mail from UPDEPENSES Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."Register/verify_email/".$verification_key."'>link</a>.</p>
                <p>Once you click this link your email will be verified and you can login into system.</p>
                <p>Thanks,</p>
                ";

                $code=str_shuffle(substr("1f-èh_çà234567890+6@-?[K89ZTY\J0-T9*h#+/@THSBJ98461700221VPEHI?S&8!}\|", 0,5));

                $headers= "MIME Version 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: no-reply@uptodateasdeveloper.com" . "\r\n" ."Reply-to: sumailiroger681@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();

                if(mail($to,$subject,$message,$headers) > 0){

                   echo("mail d'activation envoyé");
                } 
                else {
                  echo("erreur lors de l'analyse d'informations");
                }


              }


      }


       // script des utilisateurs
    function fetch_users_system(){  

           $fetch_data = $this->Crud_model->make_datatables_users_system();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = $row->name;
                $sub_array[] = $row->email;
                $sub_array[] = $row->telephone; 
                

 
                $sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger
                 btn-xs delete"><i class="fa fa-trash"></i></button>';  
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->Crud_model->get_all_data_users_system(),  
                "recordsFiltered"     =>     $this->Crud_model->get_filtered_data_users_system(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_users_system()  
      {  
           $output = array();  
           $data = $this->Crud_model->fetch_single_users_system($this->input->post('id'));  
           foreach($data as $row)  
           {  
                $output['name']           = $row->name;  
                $output['email']          = $row->email; 
                $output['telephone']      = $row->telephone; 
                
           }  
           echo json_encode($output); 

      }

      function update_user_system(){



          if ($this->input->post('user_name') && $this->input->post('user_email') && $this->input->post('user_password') && $this->input->post('telephone')) {

             $data = array(
                'name'         => $this->input->post('user_name'),
                'email'        => $this->input->post('user_email'),
                'telephone'    => $this->input->post('telephone'),
                'password'     => md5($this->input->post('user_password')) 
             );

             $id= $this->input->post('id');

             $this->db->where('id', $id);
             $this->db->update('administrator', $data);

             echo("modification avec succès");
            
          }
          elseif ($this->input->post('user_name') && $this->input->post('user_email') && $this->input->post('telephone') && !$this->input->post('user_password')) {

              $data = array(
                  'name'         => $this->input->post('user_name'),
                  'email'        => $this->input->post('user_email'),
                  'telephone'    => $this->input->post('telephone')
               );

               $id= $this->input->post('id');

               $this->db->where('id', $id);
               $this->db->update('administrator', $data);

               echo("modification avec succès");
   
          }

          

      }


      function delete_user_system(){

           $id= $this->input->post('id');

           $this->db->where('id', $id);
           $this->db->delete('administrator');
           echo("suppression avec succès");

      }

     function Ajoutfonction()
     {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           $iduser = $this->input->post('id');
           for($count = 0; $count < count($id); $count++)
           {
               $data = array(
                  'iduser'    =>  $iduser,
                  'idmenu'    =>  $id[$count]
               );
              
              $this->db->insert('menurole', $data);
           }
           echo("enregistrement avec succès");
        }
     }

   function Delete_fonction()
   {
      if($this->input->post('checkbox_value'))
      {
       $id = $this->input->post('checkbox_value');
       for($count = 0; $count < count($id); $count++)
       {
        $this->Crud_model->Delete_fonction($id[$count]);
       }
      }

   }

   function security_one(){
     $data = array(
      'name' => $this->input->post('user_name'),
      'telephone' => $this->input->post('telephone'),
      'email' => $this->input->post('user_email')
     );
     $this->Crud_model->security_one($this->input->post('id'), $data);
     $this->session->set_flashdata('message1_success', 'votre profile a été changer avec succès '.$first_name);
      redirect(base_url().'Users/profile_admin');
   }


    function security(){

      $id_user= $this->input->post('id');
       
       $passwords = md5($this->input->post('user_password_ancien'));

       if ($this->input->post('user_password_nouveau') && $this->input->post('user_password_confirmer') && $this->input->post('user_password_ancien')) {

            $users = $this->db->query("SELECT * FROM administrator WHERE password='".$passwords."' AND id='".$id_user."' ");

           if ($users->num_rows() > 0) {
              
              foreach ($users->result_array() as $row) {
               
                 $nouveau   =  $this->input->post('user_password_nouveau');
                 $confirmer =  $this->input->post('user_password_confirmer');
                   if ($nouveau == $confirmer) {
                    $new_pass= md5($nouveau);

                    echo($row['name']);

                    $data = array(
                      'password'  => $new_pass
                    );

                    $query = $this->Crud_model->security_one($id_user, $data);
                     $this->session->set_flashdata('message_success', 'votre clée de sécurité a été changer avec succès '.$row['name']);
                        redirect(base_url().'Users/profile_admin');
                     // echo("votre clée de sécurité a été changer avec succès");

                   }
                   else{
       
                    $this->session->set_flashdata('message_error', 'les deux mot de passe doivent être identiques');
                       redirect(base_url().'Users/profile_admin');
                     // echo("les deux mot de passe doivent être identiques");
                   }
             
              }

           }
           else{

              $this->session->set_flashdata('message_error', 'information incorecte');
                      redirect(base_url().'Users/profile_admin');
                     // echo("incorecte");
           }
         # code...
       }
       else{

            $data = array(
              'name' => $this->input->post('user_name'),
              'telephone' => $this->input->post('telephone'),
              'email' => $this->input->post('user_email')
            );

            $query = $this->Crud_model->security_one($id_user, $data);
             $this->session->set_flashdata('message_success', 'votre profile a été changer avec succès '.$first_name);
                redirect(base_url().'Users/profile_admin');

       }
       
       
         
    }


    // script des comptes
    function fetch_compte(){  

           $fetch_data = $this->Crud_model->make_datatables_compte();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = nl2br(substr($row->designation, 0,50)).'...'; 
                $sub_array[] = $row->montant;
                $sub_array[] = $row->devise;
                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->dateAdd)), 0, 23);

                $sub_array[] = '<button type="button" name="update" code="'.$row->code.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  

                $sub_array[] = '<button type="button" name="delete" code="'.$row->code.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->Crud_model->get_all_data_compte(),  
                "recordsFiltered"     =>     $this->Crud_model->get_filtered_data_compte(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_compte()  
      {  
           $output = array();  
           $data = $this->Crud_model->fetch_single_compte($this->input->post('code'));  
           foreach($data as $row)  
           {  
                $output['designation'] = $row->designation;  
                $output['montant'] = $row->montant; 
                $output['devise'] = $row->devise; 
                $output['dateAdd'] = $row->dateAdd; 

                
           }  
           echo json_encode($output);  
      }

      function delete_operation_compte(){

           $code= $this->input->post('code');

           $this->db->where('code', $code);
           $this->db->delete('compte');
           echo("suppression avec succès");
      }

      function update_operation_compte(){

            $code= $this->input->post('code');

            $data = array(
              'designation' => $this->input->post('designation'),
              'montant'     => $this->input->post('montant')
            );

           $query = $this->Crud_model->update_operation_compte($code, $data);
           echo("modification avec succès");
      }

      // fin opérations de compte

      // détail des entrises âr rapport à leurs devises
      function fetch_single_devise_operation()  
      {  
           $output = array();  
           $data = $this->Crud_model->fetch_single_devise_operation($this->input->post('designation'));  
           foreach($data as $row)  
           {  
                $output['nombre_total_operation'] = $row->nombre;  
                
           }

           $data2 = $this->Crud_model->fetch_single_devise_entreprise($this->input->post('designation')); 
           foreach($data2 as $row)  
           {  
                $output['nombre_total_entreprise'] = $row->nombre;  
                
           } 

           $data3 = $this->Crud_model->fetch_single_devise_entreprise_type($this->input->post('designation')); 
           foreach($data3 as $row)  
           {  
                $output['nombre'] = $row->nombre; 
                $output['TypeOp'] = $row->TypeOp; 
                
           } 


           echo json_encode($output);  
      }


       // script des  types licences
    function fetch_type_licence(){  

           $fetch_data = $this->Crud_model->make_datatables_type_licence();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = $row->designation;
                $sub_array[] = $row->montant;
                $sub_array[] = $row->durree;
                
                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->dateAdd)), 0, 23);
                
                $sub_array[] = '<button type="button" name="update" code="'.$row->code.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  

                $sub_array[] = '<button type="button" name="delete" code="'.$row->code.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->Crud_model->get_all_data_type_licence(),  
                "recordsFiltered"     =>     $this->Crud_model->get_filtered_data_type_licence(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_type_licence()  
      {  
           $output = array();  
           $data = $this->Crud_model->fetch_single_type_licence($this->input->post('code'));  
           foreach($data as $row)  
           {  
                $output['designation'] = $row->designation;  
                $output['montant'] = $row->montant; 
                $output['durree'] = $row->durree; 
                   
           }  
           echo json_encode($output);  
      }

      function insert_operation_type_licence(){

          $designation = $this->input->post('designation');

          $montant = $this->input->post('montant');
          $durree = $this->input->post('durree');


           $data['designation'] = $designation;
           $data['durree'] = $durree;
           $data['montant'] = $montant;

           $this->db->insert('typelincence', $data);

           echo("insertion avec succès");

           // $query = $this->Crud_model->insert_operation_type_licence($data);
           // echo("designation:".$designation." montant:".$montant." durée:".$durree);
      }

      

      function delete_operation_type_licence(){

           $code= $this->input->post('code');

           $this->db->where('code', $code);
           $this->db->delete('typelincence');

           echo("suppression avec succès");
      }

      function update_operation_type_licence(){

            $code= $this->input->post('code');

            $data = array(
              'designation' => $this->input->post('designation'),
              'montant'     => $this->input->post('montant'),
              'durree'      => $this->input->post('durree')
            );

           $query = $this->Crud_model->update_operation_type_licence($code, $data);
           echo("modification avec succès");
      }

      // fin opérations de typee de licence

      // script des licences
    function fetch_licence(){  

           $fetch_data = $this->Crud_model->make_datatables_licence();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = $row->nom;
                // $sub_array[] = $row->addresse;
                // $sub_array[] = $row->devise;
                $sub_array[] = $row->tel;
                $sub_array[] = $row->designation;
                $sub_array[] = $row->durree;
                $sub_array[] = $row->montant;

                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->debut)), 0, 23);
                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->fin)), 0, 23);
                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->dateAdd)), 0, 23);

                $sub_array[] = '<button type="button" name="update" code="'.$row->code.'" class="btn btn-warning btn-xs update"><i class="fa fa-eye"></i></button>';  

                
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->Crud_model->get_all_data_licence(),  
                "recordsFiltered"     =>     $this->Crud_model->get_filtered_data_licence(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_licence()  
      {  
           $output = array();  
           $data = $this->Crud_model->fetch_single_licence($this->input->post('code'));  
           foreach($data as $row)  
           {  
                $output['codeEntrep'] = $row->codeEntrep;  
                $output['codeType'] = $row->codeType; 
                $output['fin'] = substr(date(DATE_RFC822, strtotime($row->fin)), 0, 23); 
                $output['debut'] = substr(date(DATE_RFC822, strtotime($row->debut)), 0, 23); 
                $output['designation'] = $row->designation; 
                $output['montant'] = $row->montant; 
                $output['durree'] = $row->durree; 

                $output['nom'] = $row->nom; 
                $output['addresse'] = $row->addresse; 
                $output['email'] = $row->email; 
                $output['tel'] = $row->tel; 
                $output['devise'] = $row->devise; 
                $output['dateAdd'] = substr(date(DATE_RFC822, strtotime($row->dateAdd)), 0, 23);

                $date_debut = date_create($row->debut);
                $date_fin = date_create($row->fin);

                $output['debut1'] = date_format($date_debut, 'Y-m-d');
                $output['fin1'] = date_format($date_fin, 'Y-m-d');
                
           }  
           echo json_encode($output);  
      }

      function delete_operation_licence(){

           $code= $this->input->post('code');

           $this->db->where('code', $code);
           $this->db->delete('lincence');
           echo("suppression avec succès");
      }

      function update_operation_licence(){

            $code= $this->input->post('code');

            $data = array(
              'designation' => $this->input->post('designation'),
              'montant'     => $this->input->post('montant')
            );

           $query = $this->Crud_model->update_operation_licence($code, $data);
           echo("modification avec succès");
      }

      function insert_lecence_system(){

           $to_day= date('yy-m-d'); 
           $data = array(
              'codeEntrep'    => $this->input->post('codeEntrep'),
              'codeType'      => $this->input->post('codeType'),
              'debut'         => $this->input->post('debut'),
              'fin'           => $this->input->post('fin'),
              'dateAdd'       => $to_day
            );
           $query = $this->Crud_model->insert_lecence_system($data);
           echo("insertion avec succès");

      }

      function update_licence_system(){

           $code= $this->input->post('code');
           $to_day= date('yy-m-d'); 
           $data = array(
              'codeEntrep'    => $this->input->post('codeEntrep'),
              'codeType'      => $this->input->post('codeType'),
              'debut'         => $this->input->post('debut'),
              'fin'           => $this->input->post('fin'),
              'dateAdd'       => $to_day
            );
           $query = $this->Crud_model->update_licence_system($code, $data);
           echo("modification avec succès");

      }

      function update_expire_licence_system(){
        
           $code= $this->input->post('code');
           $to_day= date('yy-m-d'); 
           $data = array(
              'fin'           => $to_day,
            );
           $query = $this->Crud_model->update_licence_system($code, $data);
           echo("expiration licence avec succès");

      }

      function infomation_par_mail()
     {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {
               
                $mail    = $id[$count];
                $website = "uptodateasdeveloper@gmail.com";

                $to =$id[$count];
                $subject = $this->input->post('sujet');
                $message2 = $this->input->post('message');

                $headers= "MIME Version 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: no-reply@uptodateasdeveloper.com" . "\r\n" ."Reply-to: sumailiroger681@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();

                mail($to,$subject,$message2,$headers);

           }

            if(mail($to,$subject,$message2,$headers) > 0){
                echo("message envoyé avec succès");
            } 
            else {
                echo("echec lors de l'envoie de message!!!!!!!!!!!!");
            }


        }
     }


     function fetch_infos(){  

           $fetch_data = $this->Crud_model->make_datatables_infos();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                $sub_array[] = '<img src="'.base_url().'uploads/infos/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';
  
                $sub_array[] = nl2br(substr($row->infos, 0,50)).' ...';

                $sub_array[] = nl2br(substr($row->typeInfos, 0,50)).' ...';
                
                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->dateAdd)), 0, 23);

                $sub_array[] = '<button type="button" name="voir_plus" code="'.$row->code.'" class="btn btn-success btn-xs voir_plus"><i class="fa fa-eye"></i></button>'; 

                $sub_array[] = '<button type="button" name="update" code="'.$row->code.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" code="'.$row->code.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  

                
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->Crud_model->get_all_data_infos(),  
                "recordsFiltered"     =>     $this->Crud_model->get_filtered_data_infos(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_infos()  
      {  
           $output = array();  
           $data = $this->Crud_model->fetch_single_infos($this->input->post('code'));  
           foreach($data as $row)  
           {  
                $output['infos'] = $row->infos;  
                $output['typeInfos'] = $row->typeInfos;

                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'uploads/infos/'.$row->image.'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }


           }  
           echo json_encode($output);  
      }

      function fetch_single_infos2()  
      {  
           $output = array();  
           $data = $this->Crud_model->fetch_single_infos($this->input->post('code'));  
           foreach($data as $row)  
           {  
                $output['infos'] = $row->infos;  
                $output['typeInfos'] = $row->typeInfos;

                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'uploads/infos/'.$row->image.'" class="img-thumbnail" width="150" height="100" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }


           }  
           echo json_encode($output);  
      }

      function insert_operation_info(){

        $insert_data = array( 
             'infos'               =>     $this->input->post('infos'),  
             'typeInfos'           =>     $this->input->post('typeInfos'),  
             'image'               =>     $this->upload_image_cours()
        );  
         
        $requete=$this->Crud_model->insert_operation_info($insert_data);
        echo("Ajout information avec succès");
        
      }



      function delete_operation_infos(){

           $code= $this->input->post('code');

           $this->db->where('code', $code);
           $this->db->delete('infos');
           echo("suppression avec succès");
      }

      function update_operation_infos(){

            $code= $this->input->post('code');

            $data = array(
              'infos'         => $this->input->post('infos'),
              'typeInfos'     => $this->input->post('typeInfos'),
              'image'         => $this->upload_image_cours()
            );

           $query = $this->Crud_model->update_operation_infos($code, $data);
           echo("modification avec succès");
      }

      function update_operation_infos2(){

            $code= $this->input->post('code');

            $data = array(
              'infos'         => $this->input->post('infos'),
              'typeInfos'     => $this->input->post('typeInfos')
            );

           $query = $this->Crud_model->update_operation_infos($code, $data);
           echo("modification avec succès");
      }


      function upload_image_cours()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './uploads/infos/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      } 









    
}

?>