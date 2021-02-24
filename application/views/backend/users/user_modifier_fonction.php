<?php 
$nbr_users;
$name;
$email;
$telephone;
$password;
$id;
$utilisateur = $id;

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
                    	
                    	<div class="col-md-12" style="margin-top: 15px;">
                    		<div class="col-md-12">

                                <div class="card">
                                    <div class="card-header">
                                        modification des fonctions de <?php echo($name) ?>
                                    </div>
                                    <div class="card-body">

                                        <div class="col-md-8">

                                     <div class="card-body">
                                        <div class="col-md-12">
                                            <div class="row">
                                               

                                                <!-- block de securité -->
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        
                                                        <form method="POST" action="<?php echo(base_url()) ?>Admin/security" class="col-md-12">

                                                            <div class="form-group">

                                                                
                                                             <?php
                                                                if($this->session->flashdata('message_success'))
                                                                {
                                                                    echo '
                                                                    <div class="alert alert-success" >
                                                                    <button type="button" class="close" data-dismiss="alert">&times;</i></button>
                                                                        '.$this->session->flashdata("message_success").'
                                                                    </div>
                                                                    ';
                                                                }
                                                                elseif ($this->session->flashdata('message_error')) {
                                                                    echo '
                                                                    <div class="alert alert-danger"><i class="fa fa-question"></i>
                                                                        '.$this->session->flashdata("message_error").'
                                                                    </div>
                                                                    ';
                                                                }
                                                                else{

                                                                }

                                                                ?>

                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="username">Nom: <span class="text-info"><?php echo($name) ?></span></label>
                                                                   
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="username">Email: <span class="text-info"><?php echo($email) ?></span></label>
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                   <label for="username">téléphone: <span class="text-info"><?php echo($telephone) ?></span></label>
                                                                </div>
                                                            </div>

                                                            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo($id) ?>">

                                                           
                                                        </form>

                                                            


                                                        </div>
                                                    </div>
                                                    <!-- fin bloc -->

                                                    <!-- block du profile -->
                                                    <div class="col-md-6">

                                                        <?php

                                                        // echo($id);

                                                        $this->db->where('iduser', $id);
                                                        $rep2 = $this->db->get('profile_menu');
                                                        if ($rep2->num_rows() > 0) {
                                                            foreach ($rep2->result_array() as $key) {
                                                                ?>

                                                               <table>
                                                                   <tr>
                                                                        <td>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <input type="checkbox" class="delete_checkbox" value="<?php echo($key['idmenurole']) ?>" /> <?php echo($key['nom']) ?>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                   </tr>
                                                               </table>

                                                                <?php
                                                            }
                                                        }
                                                        else{

                                                        }

                                                        ?>
                                                        
                                                    </div>
                                                    <!-- fin block -->

                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                        
                                    </div>
                                    <div class="card-footer">
                                        <a href="javascript:void(0);" class="btn btn-danger" id="delete_all">Retirer</a>
                                    </div>
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


    


 <style>
.removeRow
{
 background-color: #FF0000;
    color:#FFFFFF;
}
</style>
<script>
$(document).ready(function(){
 
	$('.delete_checkbox').click(function(){
	  if($(this).is(':checked'))
	  {
	   $(this).closest('tr').addClass('removeRow');
	  }
	  else
	  {
	   $(this).closest('tr').removeClass('removeRow');
	  }
	});

	

 	$('#delete_all').click(function(event){
 		  event.preventDefault();
	  	  var checkbox = $('.delete_checkbox:checked');
          var id = $('#id').val();
	  	  if(checkbox.length > 0)
		  {
			   var checkbox_value = [];
			   $(checkbox).each(function(){
			    checkbox_value.push($(this).val());
			   });

			   // alert("id agent:"+id+" idmenu:"+checkbox_value);
			   $.ajax({
				    url:"<?php echo base_url(); ?>Users/Delete_fonction",
				    method:"POST",
				    data:{
				    	checkbox_value:checkbox_value
				    },
				    success:function()
				    {
				     	$('.removeRow').fadeOut(1500);
				    }
			   });
		  }
		  else
		  {
		  	swal("veillez selectionner les menus appropriés", '', 'error');
		   
		  }
		  
	 });

});
</script>




</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:55 GMT -->
</html>