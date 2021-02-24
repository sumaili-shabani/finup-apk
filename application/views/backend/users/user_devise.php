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
                                        <li class="breadcrumb-item active">seting devise</li>
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
	                                        	 <th width="50%" class="border-top-0">Designation</th>  
	                                            
	                                             <th width="45%" class="border-top-0">Mis à jour</th>

                                                 <th width="5%" class="border-top-0">voir plus</th>
	                                             
	                                        </tr>  
	                                   </thead>
	                                   <tbody>
	                                   	<?php 
                                           
                                            $v_user = $this->db->get("devise");
                                            if ($v_user->num_rows() > 0) {

                                                $chart_data = '';
                                                foreach ($v_user->result_array() as $key) {

                                                    ?>
                                                    <tr>
                                                        <td class="text-truncate"><?php echo($key['designation']) ?></td>
                                                        <td class="text-truncate"><?php echo(substr(date(DATE_RFC822, strtotime($key['adddate'])), 0, 23)) ?></td>

                                                        <td>
                                                            <a href="javascript:void(0)" class="btn btn-info btn-xs voir_plus" designation="<?php echo($key['designation']) ?>"><i class="fa fa-eye"></i></a>
                                                        </td>

                                                        
                                                    </tr>
                                                    <?php
                    
                                                }
                                            }
                                            else {
                                               
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

                                    <div class="col-xl-6 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="bx bx-layer float-right m-0 h2 text-muted"></i>
                                                
                                                <h6 class="text-muted text-uppercase mt-0">Nombre des entreprises utilisant cette devise</h6>
                                                <h3 class="mb-3" data-plugin="counterup">
                                                    <span id="nombre_total_entreprise">03</span>
                                                </h3>
                                                
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="bx bx-exit float-right m-0 h2 text-muted"></i>
                                                
                                                <h6 class="text-muted text-uppercase mt-0">Nombre total des opérations utilisant cette devise</h6>
                                                <h3 class="mb-3" data-plugin="counterup">
                                                    <span id="nombre_total_operation">06</span>
                                                </h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            


                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               
                                                
                                                </span>
                                            </div>
                                        </div>
                                    </div>



                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <div class="col-md-6">
                          <span class="badge badge-success mr-1" id="nombre"></span><span class="text-muted" id="TypeOp"></span>
                    </div>
                   
                    <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> fermer</a>
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
	      
	      var dataTable = $('#user_data').DataTable();

          $(document).on('click', '.voir_plus', function(){  
               var designation = $(this).attr("designation");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>Users/fetch_single_devise_operation",  
                    method:"POST",  
                    data:{designation:designation},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#nombre_total_operation').text(data.nombre_total_operation);  
                         $('#nombre_total_entreprise').text(data.nombre_total_entreprise);
                         $('#nombre').text(data.nombre);
                         $('#TypeOp').text(data.TypeOp);
                         
                         $('.modal-title').text("Détail de la licence de l'entreprise "+data.nom);  
                          
                    }  
               });  
          });

	 });  
 </script>




</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:55 GMT -->
</html>