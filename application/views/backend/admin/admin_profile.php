<?php 
$nbr_users;
$name;
$email;
$telephone;
$password;
$id;
$utilisateur = $this->session->userdata('admin_login');

$this->db->where('id', $utilisateur);
$users3 = $this->db->get("administrator");
if ($users3->num_rows() > 0) {
    foreach ($users3->result_array() as $key) {
        $name = $key['name'];
        $email = $key['email'];
        $telephone = $key['telephone'];
        $password = $key['password'];

        $id = $key['id'];
    }
}
else {
    $nbr_users = 0;
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:18 GMT -->
<head>
    <meta charset="utf-8" />
    <title><?php echo($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('js/font-awesome/css/font-awesome.min.css')?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

    <!-- App favicon -->
     <link rel="shortcut icon" href="<?= base_url('js/assets/images/FINUPIcon.png')?>">

    <!-- Plugins css -->
    <link href="<?= base_url('js/plugins/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('js/plugins/datatables/responsive.bootstrap4.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('js/plugins/datatables/buttons.bootstrap4.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('js/plugins/datatables/select.bootstrap4.css')?>" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?= base_url('js/assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- <link href="<?= base_url('js/assets/css/style.css')?>" rel="stylesheet" type="text/css" />  -->
    <link href="<?= base_url('js/assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('js/assets/css/theme.min.css')?>" rel="stylesheet" type="text/css" />


    <!-- chartContainer avec canavas -->
    <script src="<?= base_url('js/assets/js/canavas.js')?>"></script>
    <!-- <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
    <!-- fin des chart -->

     <!-- sweetalert -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('js/sweetalert/sweetalert.css')?>">
  <script type="text/javascript" src="<?= base_url('js/sweetalert/sweetalert.js')?>"></script>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include('nav.php') ?>

        <?php include('navigation.php') ;?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                	<div class="row">
                		<div class="col-md-12">

                			<div class="card">
                				
			                    <div class="card-header">
			                    	profile de l'utilisateur <?php echo($name) ?>
			                    	<div class="pull-right">
			                    		
			                    	</div>&nbsp;

			                    	<div class="pull-right" style="display: inline-block;">
			                    	
			                    		<div class="form-group">
			                    			<button class="btn btn-info" data-toggle="modal" data-target="#editprofil_account"><i class="fa fa-key"></i> Editer ma sécurité </button>
			                    			<button class="btn btn-info" data-toggle="modal" data-target="#editprofil"><i class="fa fa-user"></i> Editer mon mon compte </button>
			                    		</div>
			                    		
			                    	</div>
			                    </div>

			                    <div class="card-body">
			                    	<div class="col-md-12">
			                    		<div class="row">

			                    			<div class="col-md-12">
			                    				<div class="form-group">
			                    					<label><i class="fa fa-user"></i> Nom  <span class="text-info"><?php echo($name); ?></span></label>
			                    				</div>
			                    			</div>

			                    			<div class="col-md-12">
			                    				<div class="form-group">
			                    					<label><i class="fa fa-globe"></i> G-mail  <span class="text-info"><?php echo($email); ?></span></label>
			                    				</div>
			                    			</div>

			                    			<div class="col-md-12">
			                    				<div class="form-group">
			                    					<label><i class="fa fa-phone"></i> Téléphone  <span class="text-info"><?php echo($telephone); ?></span></label>
			                    				</div>
			                    			</div>

			                    			

			                    		</div>
			                    	</div>
			                    </div>
			                    <div class="card-footer">
			                    	
			                    </div>
				                
				                

                			</div>
                			
                		</div>
                	</div>
                    

                    

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include ('footer.php');?>
            

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="<?= base_url('js/assets/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('js/assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('js/assets/js/metismenu.min.js')?>"></script>
    <script src="<?= base_url('js/assets/js/waves.js')?>"></script>
    <script src="<?= base_url('js/assets/js/simplebar.min.js')?>"></script>

    <!-- third party js -->
    <script src="<?= base_url('js/plugins/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/dataTables.bootstrap4.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/dataTables.responsive.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/responsive.bootstrap4.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/dataTables.buttons.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/buttons.bootstrap4.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/buttons.html5.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/buttons.flash.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/buttons.print.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/dataTables.keyTable.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/dataTables.select.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/pdfmake.min.js')?>"></script>
    <script src="<?= base_url('js/plugins/datatables/vfs_fonts.js')?>"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="<?= base_url('js/assets/pages/datatables-demo.js')?>"></script>

    <!-- App js -->
    <script src="<?= base_url('js/assets/js/theme.js')?>"></script>

    <!-- sweetalert -->
<script type="text/javascript" src="<?= base_url('js/sweetalert/sweetalert.js')?>"></script>

<script type="text/javascript" src="<?= base_url('js/bootstrap-select-1.13.9/dist/js/bootstrap-select.min.js')?>"></script>


<div class="modal fade" id="editprofil">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				modification de profile de <?php echo($name) ?>
			</div>

			<div class="modal-body">

				<div class="card-body">
                    <div class="col-md-12">
                    	<div class="row">
                    		<!-- block du profile -->
                    		<div class="col-md-1">
                    			
                    		</div>
                    		<!-- fin block -->

                    		<!-- block de securité -->
                    		<div class="col-md-10">
                    			<div class="row">
                    				
                    			<form method="POST" action="<?php echo(base_url()) ?>Admin/security" class="col-md-12">

                    				<div class="form-group">

                    					
                        			 <?php
			                            if($this->session->flashdata('message_success'))
			                            {
			                                echo '
			                                <div class="alert alert-success" >
			                                	<button type="button" class="close" data-dismiss="alert">&times;
			                                	</button>'.$this->session->flashdata("message_success").'
			                                    
			                                </div>
			                                ';
			                            }
			                            elseif ($this->session->flashdata('message_error')) {
							            	echo '
							                <div class="alert alert-danger">
							                    <button type="button" class="close" data-dismiss="alert">&times;
			                                	</button>'.$this->session->flashdata("message_error").'
							                </div>
							                ';
							            }
							            else{

							            }

			                            ?>

		                        	</div>

                    				<div class="col-md-12">
		                                <div class="form-group">
		                                    <label for="username">Nom</label>
		                                    <input class="form-control" type="text" name="user_name" id="user_name" value="<?php echo($name) ?>"  placeholder="nom postnom prenom" required="">
		                                    
		                                </div>
		                            </div>

		                            <div class="col-md-12">
		                                <div class="form-group">
		                                    <label for="emailaddress">Adresse email</label>
		                                    <input class="form-control" type="email" name="user_email" id="user_email" value="<?php echo($email) ?>" placeholder="nomdomaine@gmail.com" required="">
		                                    
		                                </div>
		                            </div>

		                            <div class="col-md-12">
		                                <div class="form-group">
		                                    <label for="telephone">Téléphone</label>
		                                    <input class="form-control" type="text" name="telephone" value="<?php echo($telephone) ?>" id="telephone" placeholder="+243817883541">
		                                    
		                                </div>
		                            </div>

		                            
		                            <div class="col-md-12">
		                                <div class="form-group">
		                                	<input type="hidden" name="id" value="<?php echo($id) ?>">
		                                    <input type="submit" name="valider" class="btn btn-info" id="action" value="modifier" >
		                                </div>
		                            </div>
                    			</form>

		                            


                    			</div>
                    		</div>
                    		<!-- fin bloc -->

                    		<!-- block du profile -->
                    		<div class="col-md-1">
                    			
                    		</div>
                    		<!-- fin block -->

                    	</div>
                    </div>
                </div>
				
			</div>

			<div class="modal-footer">
				<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-danger"><i class="fa fa-close"></i> fermer</a>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="editprofil_account">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				modification de profile de <?php echo($name) ?>
			</div>

			<div class="modal-body">

				<div class="card-body">
                    <div class="col-md-12">
                    	<div class="row">
                    		<!-- block du profile -->
                    		<div class="col-md-1">
                    			
                    		</div>
                    		<!-- fin block -->

                    		<!-- block de securité -->
                    		<div class="col-md-10">
                    			<div class="row">
                    				
                    			<form method="POST" action="<?php echo(base_url()) ?>Admin/security" class="col-md-12">

                    				<div class="form-group">

                    					
                        			 <?php
			                            if($this->session->flashdata('message_success'))
			                            {
			                                echo '
			                                <div class="alert alert-success" >
			                                	<button type="button" class="close" data-dismiss="alert">&times;
			                                	</button>'.$this->session->flashdata("message_success").'
			                                    
			                                </div>
			                                ';
			                            }
			                            elseif ($this->session->flashdata('message_error')) {
							            	echo '
							                <div class="alert alert-danger">
							                    <button type="button" class="close" data-dismiss="alert">&times;
			                                	</button>'.$this->session->flashdata("message_error").'
							                </div>
							                ';
							            }
							            else{

							            }

			                            ?>

		                        	</div>

		                            

                    				<div class="col-md-12">
		                                <div class="form-group">
		                                    <label for="password">Nouveau mot de passe</label>
		                                    <input class="form-control" type="password" name="user_password_nouveau" id="user_password_nouveau" placeholder="Nouveau mot de passse">
		                                    <span class="text-danger" id="password_error"></span>
		                                </div>
		                            </div>

		                            <div class="col-md-12">
		                                <div class="form-group">
		                                    <label for="password">Confirmer mot de passe</label>
		                                    <input class="form-control" type="password" name="user_password_confirmer" id="user_password_confirmer" placeholder="Confirmation le mot de passe">
		                                    
		                                </div>
		                            </div>

		                            <div class="col-md-12">
		                                <div class="form-group">
		                                    <label for="password">Ancien mot de passe</label>
		                                    <input class="form-control" type="password" name="user_password_ancien" id="user_password_ancien" placeholder="Entrer l'ancien mot de passe" >
		                                    <span class="text-danger" id="password_error"></span>
		                                </div>
		                            </div>

		                            <div class="col-md-12">
		                                <div class="form-group">
		                                	<input type="hidden" name="id" value="<?php echo($id) ?>">
		                                    <input type="submit" name="valider" class="btn btn-info" id="action" value="modifier la sécurité" >
		                                </div>
		                            </div>
                    			</form>

		                            


                    			</div>
                    		</div>
                    		<!-- fin bloc -->

                    		<!-- block du profile -->
                    		<div class="col-md-1">
                    			
                    		</div>
                    		<!-- fin block -->

                    	</div>
                    </div>
                </div>
				
			</div>

			<div class="modal-footer">
				<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-danger"><i class="fa fa-close"></i> fermer</a>
			</div>

		</div>
	</div>
</div>






     <!-- Morris Js-->
    <script src="<?= base_url('js/plugins/morris-js/morris.min.js')?>"></script>
    <!-- Raphael Js-->
    <script src="<?= base_url('js/plugins/raphael/raphael.min.js')?>"></script>


    <script type="text/javascript" language="javascript" >  
	 $(document).ready(function(){  
	      $('#add_button').click(function(){  
	           $('#user_form')[0].reset();  
	           $('.modal-title').text("Ajout d'un utilisateur au système");  
	           $('#action').val("Add");  
	         
	      }) ;
	      
	      
	      $(document).on('submit', '#user_form', function(event){ 

	      	   event.preventDefault(); 
	           var user_name = $('#user_name').val();
	           var user_email = $('#user_email').val();
	           var user_password = $('#user_password').val();
	           var confirm_password = $('#confirm_password').val();
	           var telephone = $('#telephone').val();
	           var action = $('#action').val();

	           var id = $('#id').val();



	           // alert(user_name+" "+user_email+" "+user_password+"="+confirm_password);
	           if (user_name != '' && user_email !='' && user_password !='' && confirm_password !='' && telephone !='') {

		           if (user_password == confirm_password) {

		           		if (action=="Add") {
		           			$.ajax({  
				                url:"<?php echo base_url(); ?>Admin/insert_user_system",  
				                method:"POST",  
				                data:{
				                	user_name: user_name,
				                	user_email: user_email,
				                	user_password: user_password,
				                	telephone: telephone
				                	
				                },   
				                success:function(data)  
				                {  
				                      swal(data, 'félicitation', 'success');  
					                  $('#user_form')[0].reset();  
					                  $('#userModal').modal('hide');  
					                  dataTable.ajax.reload();      
				                }  

				           }); 
		           		}

		           		if (action == "Edit") {
		           			
		           			$.ajax({  
				                url:"<?php echo base_url(); ?>Admin/update_user_system",  
				                method:"POST",  
				                data:{
				                	user_name: user_name,
				                	user_email: user_email,
				                	user_password: user_password,
				                	telephone: telephone,
				                	id: id
				                	
				                },   
				                success:function(data)  
				                {  
				                      swal(data, 'félicitation', 'success');  
					                  $('#user_form')[0].reset();  
					                  $('#userModal').modal('hide');  
					                  dataTable.ajax.reload();      
				                }  

				           }); 
		           			
		           		}
			           
		           }
		           else{

		           		swal("les deux mot de passe doint être indentiques","","info");
		           }

	           }
	           else{


	           		if (user_name =='') {
	           			swal("veillez entrer le nom de l'utilisateur","","error");
	           		}

	           		if (user_email =='') {
	           			swal("veillez entrer l'adresse mail","","error");
	           		}
	           		if (user_password =='') {
	           			swal("veillez entrer votre mot de passe","","error");
	           		}
	           		if (telephone =='') {
	           			swal("veillez le numéro de téléphone","","error");
	           		}
	           		if (confirm_password =='') {
	           			swal("veillez entrer le mot de passe de confirmation","","error");
	           		}
	           }

	      });

	      $(document).on('click', '.update', function(){  
	           var id = $(this).attr("id");  
	           $.ajax({  
	                url:"<?php echo base_url(); ?>Admin/fetch_single_users_system",  
	                method:"POST",  
	                data:{id:id},  
	                dataType:"json",  
	                success:function(data)  
	                {  
	                     $('#userModal').modal('show');  
	                     $('#user_name').val(data.name);  
	                     $('#user_email').val(data.email);
	                     $('#telephone').val(data.telephone);
	                     
	                     $('.modal-title').text("modification du profile de "+data.name);  
	                     $('#id').val(id);  
	                     $('#action').val("Edit");  
	                }  
	           });  
	      });


	      $(document).on('click', '.delete', function(){
	          var id = $(this).attr("id");
	          if(confirm("Are you sure you want to delete this?"))
	          {
	            
	            $.ajax({
	              url:"<?php echo base_url(); ?>Admin/delete_user_system",
	              method:"POST",
	              data:{id:id},
	              success:function(data)
	              {
	                swal(data, '', 'success');
	                dataTable.ajax.reload();
	              }
	            });
	          }
	          else
	          {
	            swal("opération annulée", '', 'danger');
	          }

	      });


	  


	        

	    



	 });  
 </script>




</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:55 GMT -->
</html>