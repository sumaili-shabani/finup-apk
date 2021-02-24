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

	                            <div class="table-responsive">

	                            	<div class="row">
                    					<div class="col-md-12 pull-right">
                    						<button class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#userModal" id="add_button">
		                    					<i class="fa fa-user"></i> Ajouter
		                    				</button>
                    					</div>
                    				</div> <br>

	                                <table id="user_data" class="table table-bordered table-centered table-hover table-xl mb-0 user_data">  
	                                   <thead>  
	                                        <tr>   
	                                             <th width="5%"><button type="button" name="delete_all" id="delete_all" class="btn btn-danger btn-xs">supprimer</button></th>  
	                                             <th width="30%">nom</th> 
	                                             <th width="30%">email</th>
	                                             <th width="15%">téléphone</th>
	                                             <th width="20%">menu</th>

	                                             <th width="20%">modifier</th>

	                                             
	                                        </tr>  
	                                   </thead>
	                                   <tbody>
	                                   	<?php
	                                   	$this->db->group_by('name'); 
	                                   	$menu = $this->db->get('profile_menu');
	                                   	if ($menu->num_rows() > 0) {
	                                   		foreach ($menu->result_array() as $key) {
	                                   			?>
	                                   			<tr>
	                                   				<td width="5%">
	                                   					<input type="checkbox" class="delete_checkbox2" value="<?php echo($key['idmenurole']) ?>" />
	                                   				</td>
	                                   				<td width="30%"><?php echo($key['name']) ?></td>
	                                   				<td width="30%"><?php echo($key['email']) ?></td>
	                                   				<td width="15%"><?php echo($key['telephone']) ?></td>
	                                   				<td width="15%"><?php echo($key['nom']) ?></td>
	                                   				<td width="5%"><a href="<?php echo(base_url()) ?>Admin/modifier_fonction/view_detail/<?php echo($key['iduser']) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a></td>
	                                   			</tr>
	                                   			<?php
	                                   		}
	                                   	}
	                                   	else{

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
                                    <label for="username">Name</label>
                                    <select class="form-control select-picker" name="agent" id="agent">
                                   <?php 
                                   	$idrole = 2;
                                   	$this->db->where('idrole', $idrole);
                                   	$rep = $this->db->get('administrator');
                                   	if ($rep->num_rows() > 0) {
                                   		foreach ($rep->result_array() as $key) {
                                   			?>
                                   			<option value="<?php echo($key['id']) ?>"><?php echo($key['name']) ?></option>
                                   			<?php
                                   		}
                                   	}
                                   	else{

                                   	}

                                   	 ?> 
                                   </select>
                                    
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <table class="col"></table>
                                    
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="table-responsive">
                                    	
                                    	<table class="table table-centered table-hover table-xl mb-0 user_data" id="recent">
                                    		<thead>
                                    			<th>ajouter</th>
                                    			<th>fonction</th>
                                    		</thead>
                                    		<tbody>
                                    		<?php

                                				$rep2 = $this->db->get('menu');
			                                   	if ($rep2->num_rows() > 0) {
			                                   		foreach ($rep2->result_array() as $key) {
			                                   			?>
			                                   			<tr>
			                                   				<td>
			                                   					<input type="checkbox" class="delete_checkbox" value="<?php echo($key['idmenu']) ?>" />
			                                   				</td>
			                                   				<td>
			                                   					<?php echo($key['nom']) ?>
			                                   				</td>
			                                   			</tr>
			                                   			<?php
			                                   		}
			                                   	}
			                                   	else{

			                                   	}

                                    			?>
                                    		</tbody>
                                    	</table>

                                    </div>
                                    
                                </div>
                            </div>

                           
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" class="form-control id">
                    
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
	           $('.modal-title').text("Attribution des fonctions pour le menu système");  
	           $('#action').val("Add");  
	         
	      }) ;


	      
	      var dataTable = $('#user_data').DataTable();

	      
	     
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

 <script type="text/javascript">
 	$(document).ready(function(){
 		var tab = $('#recent').Datatable();
 	});
 </script>


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

	$('.delete_checkbox2').click(function(){
	  if($(this).is(':checked'))
	  {
	   $(this).closest('tr').addClass('removeRow');
	  }
	  else
	  {
	   $(this).closest('tr').removeClass('removeRow');
	  }
	});

	$('#agent').on('change', function(){
		var id = $(this).val();
		$('#id').val(id);
	});

 	$('#action').click(function(event){
 		  event.preventDefault();
	  	  var checkbox = $('.delete_checkbox:checked');
	  	  var id = $('#id').val();
	  	  if (id !='') {

	  	  	  if(checkbox.length > 0)
			  {
				   var checkbox_value = [];
				   $(checkbox).each(function(){
				    checkbox_value.push($(this).val());
				   });

				   // alert("id agent:"+id+""+checkbox_value);
				   $.ajax({
					    url:"<?php echo base_url(); ?>Admin/Ajoutfonction",
					    method:"POST",
					    data:{
					    	checkbox_value:checkbox_value,
					    	id:id
					    },
					    success:function()
					    {
					     	$('.removeRow').fadeOut(1500);
					    }
				   });
			  }
			  else
			  {
			  	swal("veillez selectionner les menus appropriés", '', 'danger');
			   
			  }

	  	  }
	  	  else{
	  	  	swal("veillez selectionner utilisateur", '', 'danger');
	  	  }
		  
	 });

 	$('#delete_all').click(function(event){
 		  event.preventDefault();
	  	  var checkbox = $('.delete_checkbox2:checked');
	  	  if(checkbox.length > 0)
		  {
			   var checkbox_value = [];
			   $(checkbox).each(function(){
			    checkbox_value.push($(this).val());
			   });

			   // alert("id agent:"+id+""+checkbox_value);
			   $.ajax({
				    url:"<?php echo base_url(); ?>Admin/Delete_fonction",
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