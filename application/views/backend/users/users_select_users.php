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

                        <!-- debut des statistiques -->
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-4">
                                    
                                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>

                                </div>

                                <div class="col-md-4">
                                    
                                    <div id="chartContainer2" style="height: 300px; width: 100%;"></div>

                                </div>


                                <div class="col-md-4">
                                    
                                    <div id="chartContainer3" style="height: 300px; width: 100%;"></div>

                                </div>

                               <?php 


                                                    
                                $chart_data = '';
                                $chart_data2 = '';
                                $chart_data3 = '';
                                $this->db->group_by('codeEntrep');
                                $this->db->limit(10);
                                $detail2 = $this->db->get('v_user');
                                if ($detail2->num_rows() > 0) {
                                    foreach ($detail2->result_array() as $key) {

                                       $chart_data .= "{ indexLabel:'".$key["psedo"]."', y:".$key["reste"]."}, ";

                                        $chart_data2 .= "{ indexLabel:'".$key["sexe"]."', y:".$key["reste"]."}, ";

                                        $chart_data3 .= "{ indexLabel:'".$key["nom"]."', y:".$key["reste"]."}, ";

                                    }

                                    $chart_data = substr($chart_data, 0, -2);
                                    $chart_data2 = substr($chart_data2, 0, -2);
                                    $chart_data3 = substr($chart_data3, 0, -2);

                                    // echo($chart_data);
                            }
                            else{

                            }
                            ?>


                             <?php 

                                $chart_data4 = '';
                                $detail2 = $this->db->query("
                                    SELECT sexe, count(*) as no_of_like FROM v_user GROUP BY sexe");
                                if ($detail2->num_rows() > 0) {
                                    foreach ($detail2->result_array() as $key) {

                                       $chart_data4 .= "{ indexLabel:'".$key["sexe"]."', y:".$key["no_of_like"]."}, ";

                                    }

                                    $chart_data4 = substr($chart_data4, 0, -2);
                                    
                                        // echo($chart_data);
                                }
                                else{

                                }
                            ?>


                            


                            </div>
                              


                        </div>
                        <!-- fin statistique -->
                       
                    	<div class="col-md-12" style="margin-top: 15px;">
                    		<div class="col-md-12">
	                            <div class="table-responsive">
	                                <table id="user_data" class="table table-bordered table-striped">  
	                                   <thead>  
	                                        <tr>   
	                                             <th width="20%">pseudo utilisateur</th>  
	                                             <th width="20%">emailUser</th> 
	                                             
	                                             <th width="5%">sexe</th>
	                                             <th width="20%">tel</th> 
	                                             <th width="20%">date expiration</th> 
	                                             <th width="20%">date mis à jour</th>
	                                             <th width="5%">Détail</th>  
	                                             
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


    <div class="modal fade" id="userModal_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <div class="modal-title"></div> 
                </div>
                <form method="POST" action="<?php echo(base_url()) ?>Users/update_users">
                    <div class="col-md-12">
                        <div class="form-group">
                            <p>
                                <?php
                                if($this->session->flashdata('message'))
                                {
                                    echo '
                                    <div class="alert alert-success" >
                                    <button type="button" class="close" data-dismiss="alert">&times;<i class="fa fa-check"></i></button>
                                        '.$this->session->flashdata("message").'
                                    </div>
                                    ';
                                }
                                if($this->session->flashdata('message2'))
                                {
                                    echo '
                                    <div class="alert alert-danger" >
                                    <button type="button" class="close" data-dismiss="alert">&times;<i class="fa fa-close"></i></button>
                                        '.$this->session->flashdata("message").'
                                    </div>
                                    ';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><i class="fa fa-user"></i> &nbsp; Pseudo</label>&nbsp;
                                    <span class="text-info" id="psedo1"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><i class="fa fa-globe"></i>&nbsp; Email</label>&nbsp;
                                     <span class="text-info" id="emailUser1"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><i class="fa fa-phone"></i> &nbsp; Téléphone</label>&nbsp;
                                    <span class="text-info" id="tel1"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><i class="fa fa-calendar"></i>&nbsp;  Expiration</label> &nbsp;
                                     <span class="text-info" id="exp1"></span>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; fermer</a>
                </div> 
                </form>
                
            </div>
        </div>
    </div>



     <div class="modal fade" id="userModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                   <div class="modal-title"></div> 
                </div>
                <form method="POST" action="<?php echo(base_url()) ?>Users/update_users">
                    <div class="col-md-12">
                        <div class="form-group">
                            <p>
                                <?php
                                if($this->session->flashdata('message'))
                                {
                                    echo '
                                    <div class="alert alert-success" >
                                    <button type="button" class="close" data-dismiss="alert">&times;<i class="fa fa-check"></i></button>
                                        '.$this->session->flashdata("message").'
                                    </div>
                                    ';
                                }
                                if($this->session->flashdata('message2'))
                                {
                                    echo '
                                    <div class="alert alert-danger" >
                                    <button type="button" class="close" data-dismiss="alert">&times;<i class="fa fa-close"></i></button>
                                        '.$this->session->flashdata("message").'
                                    </div>
                                    ';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>pseudo</label>
                                    <input type="text" name="psedo" class="form-control" placeholder="entrer le nom de l'utilisateur" id="psedo">
                                    <span class="text-danger"><?php echo form_error('psedo'); ?></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="emailUser" class="form-control" placeholder="entrer le nom de l'utilisateur" id="emailUser">
                                    <span class="text-danger"><?php echo form_error('emailUser'); ?></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="text" name="tel" class="form-control" placeholder="+243817883541" id="tel">
                                    <span class="text-danger"><?php echo form_error('tel'); ?></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Expiration</label>
                                    <input type="date" name="exp" class="form-control" placeholder="entrer le nom de l'utilisateur" id="exp">
                                    <span class="text-danger"><?php echo form_error('exp'); ?></span>
                                </div>
                            </div>

                            

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" name="pswd" class="form-control" id="pswd">
                                    <span class="text-danger"><?php echo form_error('pswd'); ?></span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="code" id="code" class="form-control code">
                    <input type="hidden" name="codeEntrep" id="codeEntrep" class="form-control codeEntrep">



                  <!--   <input type="submit" name="valider" class="btn btn-info" value="modifier"> -->

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
           $('.modal-title').text("Ajout d'une formation");  
           $('#action').val("Add");  
           $('#user_uploaded_image').html('');  
      }) 

      var codeEntrep = $('#codeEntrep_ok').val();
      
      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'Users/fetch_users'; ?>",  
                type:"POST",  

           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });

      
      $(document).on('click', '.update', function(){  
           var code = $(this).attr("code");  
           $.ajax({  
                url:"<?php echo base_url(); ?>Users/fetch_single_users",  
                method:"POST",  
                data:{code:code},  
                dataType:"json",  
                success:function(data)  
                {  
                     $('#userModal_view').modal('show');  
                     $('#psedo1').text(data.psedo);  
                     $('#emailUser1').text(data.emailUser); 
                     $('#tel1').text(data.tel);
                     $('#exp1').text(data.exp);

                     $('.modal-title').text("modification de profile de l'utilisateur "+data.psedo);  
                      
                }  
           });  
      });


      var chart = new CanvasJS.Chart("chartContainer", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                text: "statistique des utilisateurs"
            },
            data: [
            {
                type: "line",                
                dataPoints: [<?php echo $chart_data; ?>]
            }
            ]
        });
        chart.render();

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                text: "statistique des utilisateurs par raport aux restes  des jours au systèmes"
            },
            data: [
            {
                type: "pie",                
                dataPoints: [<?php echo $chart_data; ?>]
            }
            ]
        });
        chart2.render();

        var chart4 = new CanvasJS.Chart("chartContainer3", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                text: "statistique des utilisateurs par raport au genre"
            },
            
            data: [
            {
                type: "doughnut", 
                showInLegend: true,
                legendText: "{indexLabel}",               
                dataPoints: [<?php echo $chart_data4; ?>]
            }
            ]
        });
        chart4.render();


        

    



 });  
 </script>




</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:55 GMT -->
</html>