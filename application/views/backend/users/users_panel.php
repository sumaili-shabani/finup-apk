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

    <!-- App css -->
    <link href="<?= base_url('js/assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
     <link href="<?= base_url('js/assets/css/style.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('js/assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('js/assets/css/theme.min.css')?>" rel="stylesheet" type="text/css" />


    <!-- Plugins css -->
    <link href="<?= base_url('js/plugins/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('js/plugins/datatables/responsive.bootstrap4.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('js/plugins/datatables/buttons.bootstrap4.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('js/plugins/datatables/select.bootstrap4.css')?>" rel="stylesheet" type="text/css" />


     <!-- chartContainer avec canavas -->
    <script src="<?= base_url('js/assets/js/canavas.js')?>"></script>
    <!-- <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
    <!-- fin des chart -->

    <?php 
    $nbr_entrer_etat_false;
    $v_user = $this->db->get("v_user");
    if ($v_user->num_rows() > 0) {

        $chart_data = '';
        foreach ($v_user->result_array() as $key) {

            $chart_data .= "{ indexLabel:'".$key["nom"]."', y:".$key["reste"]."}, ";


            $license = $key['EmailEntrep'];
            $etat;
            if ($license =='Gratuite') {
                $etat ='
                <span class="badge badge-soft-danger p-2">Gratuite</span>
                ';
            }
            else{
                $etat ='
                <span class="badge badge-soft-success p-2">"'.$license.'"</span>
                ';
            }
            
            

        }
    }
    else {
        $nbr_entrer_etat_false = 0;
    }
    ?>



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
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">updepenses</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <?php 
            $dashbord;
            $page;
            $calendrier;
            $compte;
            $entreprise;
            $menu;

            $this->db->where('iduser', $id);
            $verify = $this->db->get('profile_menu');
            if ($verify->num_rows() > 0) {
                foreach ($verify->result_array() as $key) {
                    $menu = $key['nom'];


                    if ($menu == "dashbord") {
                        ?>
                       <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-layer float-right m-0 h2 text-muted"></i>
                                    <?php 
                                    $nbr_entrer;
                                    $entrerprise = $this->db->query("SELECT COUNT(code) AS nombre FROM entreprise");
                                    if ($entrerprise->num_rows() > 0) {
                                        foreach ($entrerprise->result_array() as $key) {
                                            $nbr_entrer = $key['nombre'];
                                        }
                                    }
                                    else {
                                        $nbr_entrer = 0;
                                    }
                                    ?>
                                    <h6 class="text-muted text-uppercase mt-0">Nombree total des entreprises actives</h6>
                                    <h3 class="mb-3" data-plugin="counterup"><?php echo($nbr_entrer); ?></h3>
                                    <span class="badge badge-success mr-1"> +89% </span> 
                                    <span class="text-muted"></span>
                                    <?php 
                                    if ($nbr_entrer>0) {
                                        ?>
                                        <a class="text-info" href="<?php echo(base_url())?>Users/admin_entreprise"> 
                                            voir plus <i class="bx bx-plus"></i>
                                        </a>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <a class="text-info" href="javascript:void(0);"> 
                                            voir plus <i class="bx bx-plus"></i>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-user float-right m-0 h2 text-muted"></i>
                                    <?php 
                                    $nbr_users;
                                    $users = $this->db->query("SELECT COUNT(code) AS nombre FROM users");
                                    if ($users->num_rows() > 0) {
                                        foreach ($users->result_array() as $key) {
                                            $nbr_users = $key['nombre'];
                                        }
                                    }
                                    else {
                                        $nbr_users = 0;
                                    }
                                    ?>
                                    <h6 class="text-muted text-uppercase mt-0">Nombre total des utilisateurs</h6>
                                    
                                    <h3 class="mb-3"><span data-plugin="counterup"><?php echo($nbr_users);?></span></h3>
                                    <span class="badge badge-danger mr-1"> 79% </span> 
                                    <span class="text-muted">
                                    <?php 
                                    if ($nbr_users>0) {
                                        ?>
                                        <a class="text-info" href="<?php echo(base_url())?>Users/admin_select_detail"> 
                                            voir plus <i class="bx bx-plus"></i>
                                        </a>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <a class="text-info" href="javascript:void(0);"> 
                                            voir plus <i class="bx bx-plus"></i>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-bx bx-analyse float-right m-0 h2 text-muted"></i>
                                    <?php 
                                    $nbr_operation;
                                    $operation = $this->db->query("SELECT COUNT(code) AS nombre FROM operation");
                                    if ($operation->num_rows() > 0) {
                                        foreach ($operation->result_array() as $key) {
                                            $nbr_operation = $key['nombre'];
                                        }
                                    }
                                    else {
                                        $nbr_operation = 0;
                                    }
                                    ?>
                                    <h6 class="text-muted text-uppercase mt-0">Nombre total d'opérations</h6>
                                    <h3 class="mb-3"><span data-plugin="counterup"><?php echo($nbr_operation);?></span></h3>
                                    <span class="badge badge-warning mr-1"> 72% </span> 
                                    <span class="text-muted">
                                    <?php 
                                    if ($nbr_operation>0) {
                                        ?>
                                        <a class="text-info" href="<?php echo(base_url())?>Users/admin_select_operation/voir_plus"> 
                                            voir plus <i class="bx bx-plus"></i>
                                        </a>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <a class="text-info" href="javascript:void(0);"> 
                                            voir plus <i class="bx bx-plus"></i>
                                        </a>
                                        <?php
                                    }
                                    ?>

                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="bx bx-basket float-right m-0 h2 text-muted"></i>
                                    <?php 
                                    $nbr_entrer_etat_false;
                                    $entrerprise_etat = $this->db->query("SELECT COUNT(code) AS nombre FROM entreprise WHERE etaValidation=0");
                                    if ($entrerprise_etat->num_rows() > 0) {
                                        foreach ($entrerprise_etat->result_array() as $key) {
                                            $nbr_entrer_etat_false = $key['nombre'];
                                        }
                                    }
                                    else {
                                        $nbr_entrer_etat_false = 0;
                                    }
                                    ?>
                                    <h6 class="text-muted text-uppercase mt-0">Nombree total des entreprises inactives</h6>
                                    <h3 class="mb-3" data-plugin="counterup"><?php echo($nbr_entrer_etat_false);?></h3>
                                    <span class="badge badge-success mr-1"> +0% </span> 
                                    <span class="text-muted">
                                    <?php 
                                    if ($nbr_entrer_etat_false>0) {
                                        ?>
                                        <a class="text-info" href="#"> 
                                            voir plus <i class="bx bx-plus"></i>
                                        </a>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <a class="text-info" href="javascript:void(0);"> 
                                            voir plus <i class="bx bx-plus"></i>
                                        </a>
                                        <?php
                                    }
                                    ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                         <?php 
                        $chart_data2 = '';
                        $chart_data3 = '';

                        $detail2 = $this->db->get('v_user');
                        if ($detail2->num_rows() > 0) {
                            foreach ($detail2->result_array() as $key) {

                               

                                $chart_data2 .= "{ indexLabel:'".$key["sexe"]."', y:".$key["reste"]."}, ";

                                $chart_data3 .= "{ indexLabel:'".$key["nom"]."', y:".$key["reste"]."}, ";

                            }

                          
                            $chart_data2 = substr($chart_data2, 0, -2);
                            $chart_data3 = substr($chart_data3, 0, -2);

                            // echo($chart_data);
                            }
                            else{

                            }
                        
                            ?>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                   <p class="text-center">
                                        Statistique des opérations par rapport aux devises
                                   </p>
                                </div>
                                <div class="card-body">
                                   
                                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>

                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                   <p class="text-center">
                                        Statistique de nos entreprises par rapport aux types d'opérations
                                   </p>
                                </div>
                                <div class="card-body">
                                   <?php

                                     $detail2 = $this->db->query("SELECT COUNT(*) as nombre,nom,TypeOp,motif,Montant,devise,dateValidate FROM v_operation  GROUP by TypeOp ");

                                    $chart_data8 = '';

                                        if ($detail2->num_rows() > 0) {
                                        foreach ($detail2->result_array() as $key) {

                                            $chart_data8 .= "{ indexLabel:'".$key["TypeOp"]."', y:".$key["nombre"]."}, ";

                                        }
                                    }
                                    else{

                                    }

                                    ?>
                                    <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                                    
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="card-header">
                               <p class="text-center">
                                    Statistique de nos entreprises par rapport à leurs licenses
                               </p>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                     <?php 
                                    $nbr_users;
                                    $chart_data6 = '';
                                    $users3 = $this->db->query("SELECT COUNT(License) AS nombre, License FROM v_user GROUP BY License");
                                    if ($users3->num_rows() > 0) {
                                        foreach ($users3->result_array() as $key) {
                                            $chart_data6 .= "{ indexLabel:'".$key["License"]."', y:".$key["nombre"]."}, ";
                                        }
                                    }
                                    else {
                                        $nbr_users = 0;
                                    }
                                    ?> 

                                    <div id="chartContainer3" style="height: 300px; width: 100%;"></div>

                                    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->
                        <?php
                     }
                     
                      if ($menu == "entreprise") {
                          ?>
                             <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="table-responsive">
                                        <table class="table table-centered table-hover table-xl mb-0 user_data" id="recent-orders">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">nom de l'entreprise</th>
                                                    <th class="border-top-0">Email entreprise</th>
                                                    <th class="border-top-0">license</th>
                                                    <th class="border-top-0">expiration</th>
                                                    <th class="border-top-0">date d'expiration</th>
                                                    <th class="border-top-0">reste des jours</th>
                                                    <th class="border-top-0">info plus</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php 
                                            $nbr_entrer_etat_false;
                                            $v_user = $this->db->get("v_user");
                                            if ($v_user->num_rows() > 0) {

                                                $chart_data = '';
                                                foreach ($v_user->result_array() as $key) {

                                                    $chart_data .= "{ indexLabel:'".$key["nom"]."', y:".$key["reste"]."}, ";


                                                    $license = $key['License'];
                                                    $etat;
                                                    if ($license =='Gratuite') {
                                                        $etat ='
                                                        <span class="badge badge-soft-danger p-2">'.$license.'</span>
                                                        ';
                                                    }
                                                    elseif ($license=='free standard') {
                                                        $etat ='
                                                        <span class="badge badge-soft-warning p-2">'.$license.'</span>
                                                        ';
                                                    }
                                                    else{
                                                        $etat ='
                                                        <span class="badge badge-soft-success p-2">'.$license.'</span>
                                                        ';
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td class="text-truncate"><?php echo($key['nom']) ?></td>
                                                        <td class="text-truncate"><?php echo($key['EmailEntrep']) ?></td>
                                                        <td> 
                                                            <?php echo($etat) ?>
                                                        </td>
                                                        <td class="text-truncate"><?php echo($key['exp'])?></td>
                                                        <td class="text-truncate"><?php echo($key['lincenceExp'])?></td>
                                                        <td class="text-truncate"><?php echo($key['reste'])?></td>

                                                        <td class="text-truncate"><a href="<?php echo(base_url()) ?>Users/admin_entreprise_detail/<?php echo($key['codeEntrep']) ?>" class="btn btn-warning btn-xs"><i class="fa fa-plus-circle"></i></a></td>
                                                    </tr>
                                                    <?php
                    
                                                }
                                            }
                                            else {
                                                $nbr_entrer_etat_false = 0;
                                            }
                                            ?>
                                                

                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        
                    </div>
                          <?php
                      }  

                      else{
                        
                      } 
                            


                            
                }
            }
            else{

            }


            ?>


                   

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php

             $detail2 = $this->db->query("SELECT COUNT(*) as nombre,nom,TypeOp,motif,Montant,devise,dateValidate FROM v_operation  GROUP by devise ");

            $chart_data7 = '';

                if ($detail2->num_rows() > 0) {
                foreach ($detail2->result_array() as $key) {

                    $chart_data7 .= "{ indexLabel:'".$key["devise"]."', y:".$key["nombre"]."}, ";

                }
            }
            else{

            }

                                    
                            

            ?>



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





     <!-- Morris Js-->
    <script src="<?= base_url('js/plugins/morris-js/morris.min.js')?>"></script>
    <!-- Raphael Js-->
    <script src="<?= base_url('js/plugins/raphael/raphael.min.js')?>"></script>





    <!-- Morris Js-->
    <script src="<?= base_url('js/plugins/morris-js/morris.min.js')?>"></script>
    <!-- Raphael Js-->
    <script src="<?= base_url('js/plugins/raphael/raphael.min.js')?>"></script>

    <!-- Morris Custom Js-->
    <script src="<?= base_url('js/assets/pages/dashboard-demo.js')?>"></script>

    <!-- App js -->
    <script src="<?= base_url('js/assets/js/theme.js')?>"></script>


<script type="text/javascript">
    $(document).ready(function(){  
      

      var dataTable = $('.user_data').DataTable();

     var chart = new CanvasJS.Chart("chartContainer", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                // text: "statistique par rapport aux types d'opérations "
            },
            data: [
            {
                type: "doughnut",                
                dataPoints: [<?php echo $chart_data7; ?>]
            }
            ]
        });
        chart.render();

        
        var chart2 = new CanvasJS.Chart("chartContainer2", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                // text: "Statistique des entreprises par rapport à leur license"
            },
            data: [
                {
                    type: "doughnut",                
                    dataPoints: [<?php echo $chart_data8; ?>]
                }
            ]
        });
        chart2.render();

        var chart3 = new CanvasJS.Chart("chartContainer3", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                // text: "Statistique des entreprises par rapport à leur license"
            },
            
            data: [
            {
                type: "area", 
                showInLegend: true,
                legendText: "{indexLabel}",               
                dataPoints: [<?php echo $chart_data6; ?>]
            }
            ]
        });
        chart3.render();


       

      

 });  
</script>




</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:55 GMT -->
</html>