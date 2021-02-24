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
                    		<div class="row">
                    			<div class="col-md-12">
                    				<div class="row">
                    					<div class="col-md-5">
		                    				<!-- <select class="form-control select-picker" name="dateAdd1" id="dateAdd1">
			                                	<?php 

			                                	$date = $this->db->query("SELECT * FROM v_operation GROUP BY dateAdd DESC");
			                                	if ($date->num_rows() > 0) {
			                                		foreach ($date->result_array() as $key) {
			                                			?>
			                                			<option value="<?php echo($key['dateAdd']) ?>"><?php echo(substr($key['dateAdd'], 0,50)) ?></option>
			                                			<?php
			                                		}
			                                	}
			                                	else{

			                                	}

			                                	 ?>
			                                </select> -->
                                            <div class="form-group">
                                                <input type="date" name="dateAdd" class="form-control dateAdd1">
                                            </div>
		                    			</div>
		                    			<div class="col-md-5">
		                    				<!-- <select class="form-control select-picker" name="dateAdd2" id="dateAdd2">
			                                	<?php 

			                                	$date = $this->db->query("SELECT * FROM v_operation GROUP BY dateAdd DESC");
			                                	if ($date->num_rows() > 0) {
			                                		foreach ($date->result_array() as $key) {
			                                			?>
			                                			<option value="<?php echo($key['dateAdd']) ?>"><?php echo(substr($key['dateAdd'], 0,50)) ?></option>
			                                			<?php
			                                		}
			                                	}
			                                	else{


			                                	}

			                                	 ?>
			                                </select> -->
                                            <div class="form-group">
                                                <input type="date" name="dateAdd" class="form-control dateAdd2">
                                            </div>
		                    			</div>
		                    			<div class="col-md-2">
		                    				<form method="POST" action="<?php echo(base_url()) ?>Users/admin_select_operation/show">
		                    					<input type="hidden" name="dateAdd" id="dateAdd_valider">

		                    					<input type="hidden" name="dateAdd2" id="dateAdd2_valider">

		                    					<input type="submit" name="valider" class="btn btn-info pull-right" value="valider la requête" id="valider_formulaire">	
		                    				</form>
		                    				
		                    			</div>

		                    			

                    				</div>
                    			</div>
                    			
                    		</div>
                    	</div>
                       
                    	<div class="col-md-12">
                    		<div class="row">
	                            <form method="POST" action="">
	                            	<div class="col-md-5">
	                                
		                            </div>

		                            <div class="col-md-5">
		                                
		                            </div>

		                            <div class="col-md-5">
		                                
		                            </div>
	                            </form>


	                        </div>
                    	</div>
                        
                    </div>

                    <div class="row" style="margin-top: 20px;">
                       
                    	<div class="col-md-12">

                    		<div class="row">
                    			<!-- debut tables -->
                    			<div class="col-md-8">
                    				<div class="table-responsive">
                    					<div class="table-responsive resultat">
                    						<div class="table-responsive">

							                    <table id="user_data" class="table table-bordered table-striped">  
							                   <thead>  
							                        <tr>  
							                             <th width="10%">nom</th>  
							                             <th width="20%">type d'opération</th>  
							                             <th width="20%">motif</th> 
							                             <th width="20%">montant</th>
							                             <th width="5%">devise</th> 
							                             <th width="20%">date mis à jour</th>
							                             <th width="5%">Détail</th>  
							                             
							                        </tr>  
							                   </thead>
							                   <tbody>
							                    <?php 
							                            
					                            if (isset($dateAdd1) && isset($dateAdd2)) {
					                            	$detail2 = $this->db->query("SELECT * FROM v_operation WHERE dateAdd BETWEEN '".$dateAdd1."' AND '".$dateAdd2."' ");

                                                    
						                            	if ($detail2->num_rows() > 0) {
						                                foreach ($detail2->result_array() as $key) {

                                                           
						                                    ?>
						                                    <tr>
						                                        <td><?php echo($key['nom']) ?></td>
						                                        <td><?php echo($key['TypeOp']) ?></td>
						                                        <td><?php echo($key['Motif']) ?></td>
						                                        <td><?php echo($key['Montant']) ?></td>
						                                        <td><?php echo($key['devise']) ?></td>
						                                        <td><?php echo($key['dateValidate']) ?></td>
						                                        <td>
						                                            <a href="javascript:void(0);" code="<?php echo($key['code']) ?>" nom="<?php echo($key['nom']) ?>" TypeOp="<?php echo($key['TypeOp']) ?>" Motif="<?php echo($key['Motif']) ?>" Montant="<?php echo($key['Montant']) ?>" devise="<?php echo($key['devise']) ?>"  dateValidate="<?php echo($key['dateValidate']) ?>" class="btn btn-info btn-xs opera"><i class="fa fa-eye"></i></a>
						                                        </td>
						                                    </tr>
						                                    <?php

						                                }
						                            }
						                            else{

						                            }

					                            }
					                            else{
					                            	
					                            }

					                           
					                            
					                            

					                             ?>


                                                 <?php 
                                                        
                                                if (isset($dateAdd1) && isset($dateAdd2)) {
                                                    $detail2 = $this->db->query("SELECT COUNT(*) as nombre,nom,TypeOp,motif,Montant,devise,dateValidate FROM v_operation WHERE dateAdd BETWEEN '".$dateAdd1."' AND '".$dateAdd2."' GROUP by TypeOp ");

                                                    $chart_data = '';
                                                    $chart_data2 = '';
                                                    $chart_data3 = '';


                                                        if ($detail2->num_rows() > 0) {
                                                        foreach ($detail2->result_array() as $key) {

                                                            $chart_data .= "{ indexLabel:'".$key["TypeOp"]."', y:".$key["nombre"]."}, ";

                                                            $chart_data2 .= "{ indexLabel:'".$key["TypeOp"]."', y:".$key["nombre"]."}, ";

                                                            $chart_data3 .= "{ indexLabel:'".$key["TypeOp"]."', y:".$key["nombre"]."}, ";

                                                            // echo($chart_data);

                                                            ?>
                                                           
                                                            <?php

                                                        }
                                                    }
                                                    else{

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
                    			<!-- fin de la table -->
                    			<!-- debut des statistiques -->
                    			<div class="col-md-4">

                                     <!-- debut des statistiques -->
                                    <div class="col-md-12">

                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div id="chartContainer" style="height: 500px; width: 100%;"></div>

                                            </div>

                                        </div>
                                          


                                    </div>
                                    <!-- fin statistique -->
                    				
                    			</div>
                    			<!-- fin statistique -->

                    		</div>
                    		<div class="col-md-12">
	                           <!-- debut des statistiques -->
                                <div class="col-md-12">

                                    <div class="row">
                                       

                                        <div class="col-md-4">
                                            
                                            <div id="chartContainer2" style="height: 300px; width: 100%;"></div>

                                        </div>


                                        <div class="col-md-4">
                                            
                                            <div id="chartContainer3" style="height: 300px; width: 100%;"></div>

                                        </div>

                                        <div class="col-md-4">
                                            
                                            <div id="chartContainer4" style="height: 300px; width: 100%;"></div>

                                        </div>


                                    </div>
                                      


                                </div>
                                <!-- fin statistique -->
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



      <div class="modal fade" id="userModal_operation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <div class="modal-title"></div> 
                </div>
                
                   
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong>Nom</strong>&nbsp;  <span class="text-info" id="nom_operqtion"></span> </label>
                                
                                </div>

                                <div class="form-group">
                                    <label><strong>Motifif</strong>&nbsp;  <span class="text-info" id="motif_operation"></span> </label>
                                
                                </div>

                                 <div class="form-group">
                                    <label><strong>type d'opération</strong>&nbsp;  <span class="text-info" id="type_operation"></span> </label>
                                
                                </div>

                                <div class="form-group">
                                    <label><strong>montant de l'opération</strong>&nbsp;  <span class="text-info" id="montant_operation"></span> </label>
                                
                                </div>

                                <div class="form-group">
                                    <label><strong>devise</strong>&nbsp;  <span class="text-info" id="devise_operation"></span> </label>
                                
                                </div>

                                <div class="form-group">
                                    <label><strong>date de validation</strong>&nbsp;  <span class="text-info" id="dateValidation_operation"></span> </label>
                                
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






     <!-- Morris Js-->
    <script src="<?= base_url('js/plugins/morris-js/morris.min.js')?>"></script>
    <!-- Raphael Js-->
    <script src="<?= base_url('js/plugins/raphael/raphael.min.js')?>"></script>


    <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      $('#add_button').click(function(){  
           $('#user_form')[0].reset();  
           $('.modal-title').text("Ajout d'une formation");  
           $('#action').val("Add");  
           $('#user_uploaded_image').html('');  
      }) 

      var codeEntrep = $('#codeEntrep_ok').val();

       var dataTable = $('#user_data').DataTable();
      
      
      $(document).on('click', '.opera', function(){  
	       var code = $(this).attr("code");

	       var code = $(this).attr("code");
	       var Motif = $(this).attr("Motif");
	       var Montant = $(this).attr("Montant");
	       var TypeOp = $(this).attr("TypeOp");
	       var dateValidate = $(this).attr("dateValidate");
	       var devise = $(this).attr("devise");
	       var nom = $(this).attr("nom");

	        $('#userModal_operation').modal('show');  
	         $('#nom_operqtion').text(nom);  
	         $('#motif_operation').text(Motif); 
	         $('#montant_operation').text(Montant);
	         $('#type_operation').text(TypeOp);

	         $('#dateValidation_operation').text(dateValidate);

	         $('#devise_operation').text(devise);
	         
	         
	         $('.modal-title').text("Détail de  l'opération "+nom);  


      });

      $(document).on('change', '.dateAdd1', function(){  
	       var date1 = $(this).val();

	       $('#dateAdd_valider').val(date1);	         

      });

       $(document).on('change', '.dateAdd2', function(){  
	       var date2 = $(this).val();

	       $('#dateAdd2_valider').val(date2);	         

      });



 });  
 </script>

 <script type="text/javascript">
     $(document).ready(function(){

        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                text: "statistique des opérations"
            },
            data: [
            {
                type: "column",                
                dataPoints: [<?php echo $chart_data; ?>]
            }
            ]
        });
        chart.render();

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                text: "statistique des opérations"
            },
            data: [
            {
                type: "doughnut",                
                dataPoints: [<?php echo $chart_data; ?>]
            }
            ]
        });
        chart2.render();

        var chart3 = new CanvasJS.Chart("chartContainer3", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                text: "statistique des opérations par raport aux types d'opérations"
            },
            
            data: [
            {
                type: "pie", 
                showInLegend: true,
                legendText: "{indexLabel}",               
                dataPoints: [<?php echo $chart_data3; ?>]
            }
            ]
        });
        chart3.render();


        var chart4 = new CanvasJS.Chart("chartContainer4", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                text: "statistique des opérations par devise"
            },
            data: [
            {
                type: "area",                
                dataPoints: [<?php echo $chart_data2; ?>]
            }
            ]
        });
        chart4.render();
    


     });
 </script>




</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:55 GMT -->
</html>