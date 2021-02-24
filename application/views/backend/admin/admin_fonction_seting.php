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
                                        <li class="breadcrumb-item active">seting fonction</li>
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
	                                        	 <th width="50%" class="border-top-0">Fonction</th>  
	                                            
	                                             <th width="50%" class="border-top-0">Mise à jour</th>
	                                             
	                                        </tr>  
	                                   </thead>
	                                   <tbody>
	                                   	<?php 
                                           
                                            $v_user = $this->db->get("fontion");
                                            if ($v_user->num_rows() > 0) {

                                                $chart_data = '';
                                                foreach ($v_user->result_array() as $key) {

                                                    ?>
                                                    <tr>
                                                        <td class="text-truncate"><?php echo($key['designation']) ?></td>
                                                        <td class="text-truncate"><?php echo(substr(date(DATE_RFC822, strtotime($key['dateAdd'])), 0, 23)) ?></td>
                                                        
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

	 });  
 </script>




</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:55 GMT -->
</html>