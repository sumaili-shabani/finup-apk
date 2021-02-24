<?php 

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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <!-- chartContainer avec canavas -->
    <script src="<?= base_url('js/assets/js/canavas.js')?>"></script>
    <!-- <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
    <!-- fin des chart -->

     <!-- sweetalert -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('js/sweetalert/sweetalert.css')?>">
  <script type="text/javascript" src="<?= base_url('js/sweetalert/sweetalert.js')?>"></script>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">


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

                	<!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">paramètre</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">updepenses</a></li>
                                        <li class="breadcrumb-item active">seting licence</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    

                    <div class="row">

                        <div class="col-md-3" style="background-color: #f5f7fa; color:#FFFFFF;">
                            <?php include("menu.php") ?>
                            
                        </div>
                    	
                    	<div class="col-md-9" style="margin-top: 15px;">
                    		<div class="col-md-12">

	                            <div class="table-responsive">

	                            	<div class="row">
                    					<div class="col-md-12 pull-right">
                    						<button class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#userModal2" id="add_button">
		                    					<i class="fa fa-home"></i> Ajouter
		                    				</button>
                    					</div>
                    				</div> <br>

	                                <table id="user_data" class="table table-bordered table-striped">  
	                                   <thead>  
	                                        <tr>  
	                                        	 <th width="15%">Nom de l'entreprise</th>	                                        	 
	                                        	 <th width="10%">téléphone</th> 
	                                             <th width="15%">Catégorie licence</th> 
	                                             <th width="10%">Durée de la licence</th>
	                                             <th width="10%">Montant de la licence</th>
	                                             <th width="10%">Date debit</th>
	                                             <th width="5%">Date fin</th>
	                                             <th width="5%">Mis à jour</th>
                                                 <th width="5%">Voir</th>
	                                             <th width="5%">Modifier</th>
	                                             <th width="5%">Expirqtion</th>
	                                             
	                                        </tr>  
	                                   </thead> 
                                       <tbody>
                                        <?php 
                                        $query = $this->db->get('profile_license');
                                        if ($query->num_rows() > 0) {
                                            foreach ($query->result_array() as $key) {
                                                ?>
                                                <tr>
                                                    <td><?php echo($key['nom']) ?></td>
                                                    <td><?php echo($key['tel']) ?></td>
                                                    <td><?php echo($key['designation']) ?></td>
                                                    <td><?php echo($key['durree']) ?></td>
                                                    <td><?php echo($key['montant']) ?></td>
                                                    <td><?php echo(substr(date(DATE_RFC822, strtotime($key['debut'])), 0, 23)) ?></td>
                                                    <td><?php echo(substr(date(DATE_RFC822, strtotime($key['fin'])), 0, 23)) ?></td>

                                                    <td><?php echo(substr(date(DATE_RFC822, strtotime($key['dateAdd'])), 0, 23)) ?></td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-info btn-xs voir_plus" code="<?php echo($key['code']) ?>"><i class="fa fa-eye"></i></a>
                                                    </td>

                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-warning btn-xs edit" code="<?php echo($key['code']) ?>"><i class="fa fa-edit"></i></a>
                                                    </td>

                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-danger btn-xs delete" code="<?php echo($key['code']) ?>"><i class="fa fa-close"></i></a>
                                                    </td>


                                                </tr>
                                                <?php
                                            }
                                        }
                                         ?>
                                       </tbody> 
	                                 </table>
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




     <div class="modal fade" id="userModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                   <div class="modal-title"></div> 
                </div>
                
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="row">
                                	<div class="col-md-6">
                                		 <img src="<?= base_url('js/assets/images/entrepriselogo.png')?>" style="width: 200px; height: 200px;" class="img img-responsive img-circle" />
                                	</div>
                                	<div class="col-md-6">
                                		<div class="form-group">
		                                    <label for="emailaddress"><i class="fa fa-home"></i>&nbsp;  Nom</label>&nbsp;
		                                    <span class="text-info" id="nom"></span> 
		                                </div>

		                                <div class="form-group">
		                                    <label for="emailaddress"><i class="fa fa-globe"></i>&nbsp;  Email</label>&nbsp;
		                                    <span class="text-info" id="email"></span> 
		                                </div>

		                                 <div class="form-group">
		                                    <label for="emailaddress"><i class="fa fa-map"></i>&nbsp;  Adresse</label>&nbsp;
		                                    <span class="text-info" id="addresse"></span> 
		                                </div>

		                                <div class="form-group">
		                                    <label for="emailaddress"><i class="fa fa-phone"></i>&nbsp;  Téléphone</label>&nbsp;
		                                    <span class="text-info" id="tel"></span> 
		                                </div>

		                                <div class="form-group">
		                                    <label for="emailaddress"><i class="fa fa-money"></i>&nbsp;  Montant</label>&nbsp;
		                                    <span class="text-info" id="montant"></span> 
		                                </div>


                                	</div>

                                </div>
                            </div>

                            <div class="col-md-6">
                            	
                                

                                <div class="form-group">
                                    <label for="emailaddress"><i class="fa fa-money"></i>&nbsp;   Devise</label>&nbsp;
                                    <span class="text-info" id="devise"></span> 
                                </div>

                                

                                <div class="form-group">
                                    <label for="emailaddress"><i class="fa fa-calculator"></i>&nbsp;  Durée</label>&nbsp;
                                    <span class="text-info" id="durree"></span> 
                                </div>

                                <div class="form-group">
                                    <label for="emailaddress"><i class="fa fa-calendar"></i>&nbsp;Debut</label>
                                    <span class="text-info" id="debut"></span> 
                                </div>
                                
                        	</div>

                             <div class="col-md-6">
                             	
                                <div class="form-group">
                                    <label for="emailaddress"><i class="fa fa-calendar"></i> &nbsp;Fin</label>&nbsp;
                                    <span class="text-info" id="fin"></span> 
                                    
                                </div>

                                 <div class="form-group">
                                    <label for="emailaddress"><i class="fa fa-clock-o"></i>&nbsp;créé</label>&nbsp;
                                    <span class="text-info" id="dateAdd"></span> 
                                    
                                </div>


                            </div>

                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                   
                    <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> fermer</a>
                </div> 
                
            </div>
        </div>
    </div>


    <div class="modal fade" id="userModal2">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                   <div class="modal-title"></div> 
                </div>
                
              

                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">

                        	<div class="col-md-12">

                        		<div class="col-md-12 mon_entreprise">
	                              <label><i class="fa fa-home"></i> Entreprise</label>
	                              <select name="type" class="form-control selectpicker" id="entreprise" data-live-search="true">
	                                  <?php 
	                                  $type = $this->db->get('entreprise');
	                                  if ($type->num_rows() > 0) {
	                                      foreach ($type->result_array() as $key) {
	                                         ?>
	                                         <option value="<?php echo($key['code']) ?>"><?php echo($key['nom']) ?></option>
	                                         <?php
	                                      }
	                                  }

	                                   ?>
	                              </select>
	                           </div>

                          
	                            <div class="col-md-12">
	                                <div class="row">
	                                    
	                                   <div class="col-md-12 ma_licence">
	                                      <label><i class="fa fa-book"></i> Type de licence</label>
	                                      <select name="type" class="form-control selectpicker" id="type" data-live-search="true">
	                                          <?php 
	                                          $type = $this->db->get('typelincence');
	                                          if ($type->num_rows() > 0) {
	                                              foreach ($type->result_array() as $key) {
	                                                 ?>
	                                                 <option value="<?php echo($key['code']) ?>"><?php echo($key['designation']) ?></option>
	                                                 <?php
	                                              }
	                                          }

	                                           ?>
	                                      </select>
	                                   </div>


	                                </div>
	                            </div>
                        		
                        	</div>
               			 <form method="POST" id="user_form" class="col-md-12">

                		 <div class="col-md-12">
                                <div class="row">
                                    
                                   <div class="col-md-12">
                                      <label><i class="fa fa-calendar"></i> Date debut </label>
                                      <input type="date" name="debut" class="form-control" id="debut1">
                                     
                                   </div>

                                   <div class="col-md-12">
                                      <label><i class="fa fa-calendar"></i> Date fin </label>
                                      <input type="date" name="fin" class="form-control" id="fin1">
                                     
                                   </div>

                                </div>
                            </div>
                            

                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                	<input type="hidden" name="code" id="code" class="form-control">
                   	<input type="hidden" name="codeType" id="codeType" class="form-control">

                   	<input type="hidden" name="codeEntrep" id="codeEntrep" class="form-control">

                    <input type="submit" name="valider" id="action" class="btn btn-info" value="Add">
                    <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> fermer</a>
                </div> 
                </form>
                
            </div>
        </div>
    </div>





     <!-- Morris Js-->
    <script src="<?= base_url('js/plugins/morris-js/morris.min.js')?>"></script>
    <!-- Raphael Js-->
    <script src="<?= base_url('js/plugins/raphael/raphael.min.js')?>"></script>

    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>


    <script type="text/javascript" language="javascript" >  
	 $(document).ready(function(){  
	      $('#add_button').click(function(){  
	           $('#user_form')[0].reset();  
	           $('.modal-title').text("Atribution d'une entreprise à une licence"); 
	           $('.mon_entreprise').show(); 
	           $('#action').val("Add");  
	         
	      }) ;

	      var dataTable = $('#user_data').DataTable();

          
	      $(document).on('click', '.voir_plus', function(){  
	           var code = $(this).attr("code");  
	           $.ajax({  
	                url:"<?php echo base_url(); ?>Admin/fetch_single_licence",  
	                method:"POST",  
	                data:{code:code},  
	                dataType:"json",  
	                success:function(data)  
	                {  
	                     $('#userModal').modal('show');  
	                     $('#designation').text(data.designation);  
	                     $('#nom').text(data.nom);
	                     $('#debut').text(data.debut);
	                     $('#fin').text(data.fin);
	                     $('#dateAdd').text(data.dateAdd);
	                     $('#montant').text(data.montant);
	                     $('#durree').text(data.durree);
	                     $('#devise').text(data.devise);
	                     $('#addresse').text(data.addresse);
	                     $('#tel').text(data.tel);
	                     $('#devise').text(data.devise);
	                     $('#email').text(data.email);
	                    
	                     $('.modal-title').text("Détail de la licence de l'entreprise "+data.nom);  
	                      
	                }  
	           });  
	      });

	      $(document).on('click', '.edit', function(){  
	           var code = $(this).attr("code");  
	           $.ajax({  
	                url:"<?php echo base_url(); ?>Admin/fetch_single_licence",  
	                method:"POST",  
	                data:{code:code},  
	                dataType:"json",  
	                success:function(data)  
	                {  
	                     $('#userModal2').modal('show');  
	                     $('#codeType').val(data.codeType);  
	                     $('#codeEntrep').val(data.codeEntrep);
	                     $('#debut1').val(data.debut1);
	                     $('#fin1').val(data.fin1);
	                     $('#action').val("Edit");

	                     $('#code').val(code);

	                     $('.mon_entreprise').hide();
	                    
	                     $('.modal-title').text("Modification de la licence de "+data.nom);  
	                      
	                }  
	           });  
	      });

	      $(document).on('click', '.delete', function(){  
	          var code = $(this).attr("code"); 

	          if(confirm("Etes-vous sûre de vouloir faire expirer cette licence?"))
	          {
	            
		            $.ajax({  
		                url:"<?php echo base_url(); ?>Admin/update_expire_licence_system",  
		                method:"POST",  
		                data:{
		                	code: code
		                },   
		                success:function(data)  
		                {  
		                      swal(data, 'félicitation', 'success');  
			                  $('#user_form')[0].reset();  
			                  $('#userModal2').modal('hide');  
			                       
		                }  

		           }); 

	          }
	          else
	          {
	            swal("opération annulée", '', 'danger');
	          }


	           
	      });

	      $('.selectpicker').selectpicker();

	      $(document).on('change','#type', function(){

	      		var codeType = $(this).val();
	      		$('#codeType').val(codeType);
	      });

	      $(document).on('change','#entreprise', function(){

	      		var codeEntrep = $(this).val();
	      		$('#codeEntrep').val(codeEntrep);
	      });

	      $(document).on('submit', '#user_form', function(event){ 

	      	   // event.preventDefault(); 
	           var codeType = $('#codeType').val();
	           var codeEntrep = $('#codeEntrep').val();
	           var debut1 = $('#debut1').val();
	           var fin1 = $('#fin1').val();
	           var code = $('#code').val();
	           
	           var action = $('#action').val();


	           // alert(user_name+" "+user_email+" "+user_password+"="+confirm_password);
	           if (codeType != '' && codeEntrep !='' && debut1 !='' && fin1 !='') {

		           if (action=="Add") {
	           			$.ajax({  
			                url:"<?php echo base_url(); ?>Admin/insert_lecence_system",  
			                method:"POST",  
			                data:{
			                	codeType: codeType,
			                	codeEntrep: codeEntrep,
			                	debut: debut1,
			                	fin: fin1
			                	
			                },   
			                success:function(data)  
			                {  
			                      swal(data, 'félicitation', 'success');  
				                  $('#user_form')[0].reset();  
				                  $('#userModal2').modal('hide');  
				                      
			                }  

			           }); 
	           		}

	           		if (action == "Edit") {
	           			
	           			$.ajax({  
			                url:"<?php echo base_url(); ?>Admin/update_licence_system",  
			                method:"POST",  
			                data:{
			                	codeType: codeType,
			                	codeEntrep: codeEntrep,
			                	debut: debut1,
			                	fin: fin1,
			                	code: code
			                	
			                },   
			                success:function(data)  
			                {  
			                      swal(data, 'félicitation', 'success');  
				                  $('#user_form')[0].reset();  
				                  $('#userModal2').modal('hide');  
				                       
			                }  

			           }); 
	           			
	           		}

	           }
	           else{


	           		if (debut1 =='') {
	           			swal("veillez entrer la date debut de sa licence","","error");
	           		}

	           		if (fin1 =='') {
	           			swal("veillez entrer la date fin de sa licence","","error");
	           		}

	           		if (codeType =='') {
	           			swal("veillez selectionner un type d'entreprise","","error");
	           		}
	           		if (codeEntrep =='') {
	           			swal("veillez selectionner une entreprise","","error");
	           		}
	           		
	           }

	      });


	     
	 });  
 </script>




</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:55 GMT -->
</html>