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

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

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
                                        <li class="breadcrumb-item active">seting account</li>
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

	                                <table id="user_data" class="table table-bordered table-striped">  
	                                   <thead>  
	                                        <tr>  
	                                        	 <th width="30%">Designation</th>  
	                                             <th width="30%">Montant</th> 
	                                             <th width="20%">Devise</th>
	                                             <th width="20%">Mis à jour</th>
	                                             
	                                             <th width="10%">modifier</th>
	                                             <th width="10%">supprimer</th> 
	                                             
	                                        </tr>  
	                                   </thead>  
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
                <form method="POST" id="user_form">
                    <div class="col-md-12">
                        <div class="form-group">
                            
                        </div>
                    </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="username">Designation</label>
                                    <input class="form-control" type="text" name="designation" id="designation"  placeholder="la designation">
                                    
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="emailaddress">Montant</label>
                                    <input class="form-control" type="number" name="montant" id="montant" min="1">
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="code" id="code" class="form-control code">
                    
                    <input type="submit" name="valider" class="btn btn-info" id="action" value="Add">

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


    <script type="text/javascript" language="javascript" >  
	 $(document).ready(function(){  
	      $('#add_button').click(function(){  
	           $('#user_form')[0].reset();  
	           $('.modal-title').text("Ajout d'un utilisateur au système");  
	           $('#action').val("Add");  
	         
	      }) ;
	      
	      var dataTable = $('#user_data').DataTable({  
	           "processing":true,  
	           "serverSide":true,  
	           "order":[],  
	           "ajax":{  
	                url:"<?php echo base_url() . 'Admin/fetch_compte'; ?>",  
	                type:"POST",  

	           },  
	           "columnDefs":[  
	                {  
	                     "targets":[0, 3,3],  
	                     "orderable":false,  
	                },  
	           ],  
	      });

	      
	      $(document).on('submit', '#user_form', function(event){ 

	      	   event.preventDefault(); 
	           var designation = $('#designation').val();
	           var montant = $('#montant').val();
	           
	           var action = $('#action').val();

	           var code = $('#code').val();



	           // alert(designation+" "+montant+" "+code);
	           if (designation != '' && montant !=''  && code !='') {

	           		if (action == "Edit") {
		           			
	           			$.ajax({  
			                url:"<?php echo base_url(); ?>Admin/update_operation_compte",  
			                method:"POST",  
			                data:{
			                	designation: designation,
			                	montant: montant,
			                	code: code
			                	
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


	           		if (designation =='') {
	           			swal("veillez entrer la designation","","error");
	           		}

	           		if (montant =='') {
	           			swal("veillez entrer le montant","","error");
	           		}
	           		if (code =='') {
	           			swal("veillez vérifier les informations","","error");
	           		}
	           		
	           }

	      });

	      $(document).on('click', '.update', function(){  
	           var code = $(this).attr("code");  
	           $.ajax({  
	                url:"<?php echo base_url(); ?>Admin/fetch_single_compte",  
	                method:"POST",  
	                data:{code:code},  
	                dataType:"json",  
	                success:function(data)  
	                {  
	                     $('#userModal').modal('show');  
	                     $('#designation').val(data.designation);  
	                     $('#montant').val(data.montant);
	                    
	                     $('.modal-title').text("modification de compte "+data.designation);  
	                     $('#code').val(code);  
	                     $('#action').val("Edit");  
	                }  
	           });  
	      });


	      $(document).on('click', '.delete', function(){
	          var code = $(this).attr("code");

              if(confirm("Etes-vous sûre de vouloir le supprimer?"))
              {
                
                    $.ajax({
                      url:"<?php echo base_url(); ?>Admin/delete_operation_compte",
                      method:"POST",
                      data:{code:code},
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