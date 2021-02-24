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
                    <?php 
                            $nom;
                            $License;
                            $exp;
                            $reste;
                            $lincenceExp;
                            $TelEntreprise;
                            $EmailEntrep;
                            $Adresse;
                            $rccm;
                            $durree;
                            $devise;
                            $Infos;
                            

                            $detail = $this->db->where('codeEntrep', $codeEntrep);
                            $detail = $this->db->get('v_user');
                            if ($detail->num_rows() > 0) {
                                foreach ($detail->result_array() as $key) {
                                    $nom = $key['nom'];
                                    $License = $key['License'];
                                    $exp = $key['exp'];
                                    $reste = $key['reste'];
                                    $lincenceExp = $key['lincenceExp'];
                                    $TelEntreprise = $key['TelEntreprise'];
                                    $EmailEntrep = $key['EmailEntrep'];
                                    $Adresse = $key['Adresse'];
                                    $rccm = $key['rccm'];
                                    $durree = $key['durree'];
                                    $devise = $key['devise'];
                                    $Infos = $key['Infos'];
                                }
                            }
                            else{

                            }

                             ?>

                             <?php 
                                $nombre_total_operation;
                                
                                $detail = $this->db->query('SELECT count(TypeOp) AS nombre FROM v_operation WHERE codeEntrep= "'.$codeEntrep.'"');
                                if ($detail->num_rows() > 0) {
                                    foreach ($detail->result_array() as $key) {
                                        $nombre_total_operation = $key['nombre'];
                                    }
                                }
                                else{

                                }

                             ?>

                             <?php 
                                $nombre_total_devise;
                                
                                $detail = $this->db->query('SELECT * FROM v_operation WHERE codeEntrep= "'.$codeEntrep.'" GROUP BY devise ');
                                if ($detail->num_rows() > 0) {

                                    $nombre_total_devise = $detail->num_rows();
                                    foreach ($detail->result_array() as $key) {
                                        
                                    }
                                }
                                else{

                                    $nombre_total_devise = 0;

                                }

                             ?>

                             <?php 
                                $nombre_total_utilisateur;
                                
                                $detail = $this->db->query('SELECT count(psedo) AS nombre FROM users WHERE codeEntrep= "'.$codeEntrep.'"');
                                if ($detail->num_rows() > 0) {
                                    foreach ($detail->result_array() as $key) {
                                        $nombre_total_utilisateur = $key['nombre'];
                                    }
                                }
                                else{

                                }

                             ?>

                    <div class="row">
                        <div class="col-12">

                           <div class="row">


                             <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="text-center">
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 mb-2 mb-sm-0">
                                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                                <p class="img img-center">
                                                                    <a href="<?php echo(base_url()) ?>Users/admin_entreprise_detail/<?php echo($codeEntrep) ?>">
                                                                        <img src="<?php echo(base_url()) ?>js/assets/images/entreplogo.jpg" alt="pas d'image" class="img img-responsive img-circle" style="width:150PX; height: 100; border-radius: 100px;">
                                                                    </a>                                                                </p>
                                                                <p class="text-center">
                                                                    <div class="form-group">
                                                                        <label><strong><font class="text-info"><b>&nbsp; Nom   </b></font></strong>  <?php echo($nom) ?></label>

                                                                        <label><strong><font class="text-info"><b>&nbsp; Email   </b></font></strong>  <?php echo($EmailEntrep) ?></label>
                                                                    </div>

                                                                </p>

                                                               
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <a class="nav-link active show" id="v-pills-dash-tab" data-toggle="pill" href="#v-pills-dash" role="tab" aria-controls="v-pills-home"
                                                        aria-selected="true">
                                                        <i class="mdi mdi-home-variant d-lg-none d-block"></i>
                                                        <span class="d-none d-lg-block">
                                                            <i class="fas fa-chart-bar fa-lg"></i> &nbsp;&nbsp;
                                                            Dash bord</span>
                                                    </a>


                                                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                        aria-selected="true">
                                                        <i class="mdi mdi-home-variant d-lg-none d-block"></i>
                                                        <span class="d-none d-lg-block">
                                                            <i class="fas fa-hospital-user fa-lg"></i> &nbsp;&nbsp;
                                                            Profile</span>
                                                    </a>
                                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                        aria-selected="false">
                                                        <i class="mdi mdi-account-circle d-lg-none d-block"></i>
                                                        <span class="d-none d-lg-block">
                                                        <i class="fas fa-baby-carriage fa-lg pull-left"></i> &nbsp;&nbsp;
                                                        Opération</span>
                                                    </a>
                                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                                        aria-selected="false">
                                                        <i class="mdi mdi-settings-outline d-lg-none d-block"></i>
                                                        <span class="d-none d-lg-block">
                                                            <i class="fas fa-cogs fa-lg pull-left"></i> &nbsp;&nbsp; 
                                                            Paramètre utilisateur</span>
                                                    </a>
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-sm-9">
                                                <div class="tab-content" id="v-pills-tabContent">

                                                    <!-- debut statistique -->
                                                    <div class="tab-pane fade active show" id="v-pills-dash" role="tabpanel" aria-labelledby="v-pills-dash-tab">

                                                        <!-- fultrage -->
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <form method="POST" action="<?php echo(base_url()) ?>Users/requete/show/<?php echo($codeEntrep) ?>" class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="row">

                                                                                <div class="col-md-12">
                                                                                    <div class="row">

                                                                                        <div class="col-md-6">
                                                                                            <input type="date" name="dateAdd" class="form-control" >
                                                                                        </div>

                                                                                        <div class="col-md-6">
                                                                                            <input type="date" name="dateAdd2" class="form-control">
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <input type="submit" name="valider" class="btn btn-info" value="valider">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- fin filtrage -->

                                                        <!-- debut de mes block -->
                                                        <div class="col-md-12" style="margin-top: 10px;">
                                                            <div class="row">
                                                                
                                                                <div class="col-md-12">
                                                                    <div class="row">

                                                                        <div class="col-md-4">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    Nombre total d'operations
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <!-- card-body co;;ence -->
                                                                                    <div class="col-md-12">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <label style="font-size: 30px;">
                                                                        <a href="#javascript:void(0)" role="button" data-toggle="modal" data-target="#modal_montant">
                                                                        <?php echo($nombre_total_operation) ?>
                                                                                                </a>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="col-md-6">
                                                                                                <i class="fas fa-cart-arrow-down fa-lg" style="font-size: 40px;"></i>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- fin de body -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    Nombre total des utilisateurs
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <!-- card-body co;;ence -->
                                                                                    <div class="col-md-12">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <label style="font-size: 30px;">
                                                                     <?php echo($nombre_total_utilisateur) ?>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="col-md-6">
                                                                                                <i class="fas fa-chalkboard-teacher fa-lg" style="font-size: 40px;"></i>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- fin de body -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    Nombre des devises utilisées
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <!-- card-body co;;ence -->
                                                                                    <div class="col-md-12">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                               <label style="font-size: 30px;">
                                                                    <?php echo($nombre_total_devise) ?>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="col-md-6">
                                                                                                <i class="fas fa-money-check fa-lg" style="font-size: 40px;"></i>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- fin de body -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="row">

                                                                                <?php 
                                                                                $nom_operation;
                                                                                $jour;
                                                                                $nombre;
                                                                                $chart_data = '';
                                                                                $detail = $this->db->query('SELECT count(TypeOp) AS nombre, TypeOp,dateAdd FROM v_operation WHERE codeEntrep= "'.$codeEntrep.'" GROUP BY TypeOp ');
                                                                                if ($detail->num_rows() > 0) {
                                                                                    foreach ($detail->result_array() as $key) {
                                                                                        $nom_operation = $key['TypeOp'];
                                                                                        $jour = $key['dateAdd'];
                                                                                        $nombre = $key['nombre'];

                                                                                        $chart_data .= "{ indexLabel:'".$key["TypeOp"]."', y:".$key["nombre"]."}, ";


                                                                                        // echo($chart_data);
                                                                                    }
                                                                                }
                                                                                else{

                                                                                }

                                                                             ?>

                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div id="chartContainer" style="height:250px; width: 100%;"></div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div id="chartContainer2" style="height:250px; width: 100%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
        

     
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                        <!-- fin -->

                                                        

                                                        
                                                    </div>
                                                    <!-- fin statistique -->



                                                    <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                                                        <!-- debut de mes block -->
                                                        <!-- debut de mes block -->
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                
                                                            
                                                        
                                                                <div class="col-md-12">
                                                                    

                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                           
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <label><strong><font class="text-info"><b><i class="fa fa-map"></i>    &nbsp;&nbsp;Adresse  </b></font> &nbsp; </strong><?php echo($Adresse) ?></label>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label><strong><font class="text-info"><b><i class="fa fa-phone"></i>&nbsp;&nbsp;   Téléphone  </b></font>  &nbsp;</strong>  <?php echo($TelEntreprise) ?></label>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label><strong><font class="text-info"><b><i class="fa fa-calendar"></i>    &nbsp;&nbsp;date fin expiration   </b></font></strong>&nbsp;<?php echo($lincenceExp) ?></label>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                    <label><strong><font class="text-info"><b><i class="fa fa-money"></i>&nbsp;&nbsp;Devise</b></font> &nbsp;</strong><?php echo($devise) ?></label>
                                                                                </div>
                                                                                
                                                                                <div class="form-group">
                                                                                    <label><strong><font class="text-info"><b><i class="bx bx-shape-triangle"></i>&nbsp;&nbsp;reste des jours actuels</b></font>&nbsp;</strong><?php echo($reste) ?> jours</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label><strong><font class="text-info"><b><i class="bx bx-shape-triangle"></i>&nbsp;&nbsp;Licence</b></font>&nbsp;</strong>
                                                                                        <?php 
                                                                                       if ($License =='Gratuite') {
                                                                                            $etat ='
                                                                                            <span class="badge badge-soft-danger p-2">'.$License.'</span>
                                                                                            ';
                                                                                        }
                                                                                        else{
                                                                                            $etat ='
                                                                                            <span class="badge badge-soft-success p-2">"'.$License.'"</span>
                                                                                            ';
                                                                                        }
                                                                                        ?>
                                                                                        <?php echo($etat) ?>
                                                                                    </label>
                                                                                </div>


                                                                            </div>

                                                                            <div class="col-md-6">

                                                                                <div class="form-group">
                                                                                    <label><strong><font class="text-info"><b><i class="bx bx-shape-triangle"></i>    &nbsp;&nbsp;Info &nbsp;</b></font>  </strong><?php echo($Infos) ?></label>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    
                                                                    

                                                                </div>


                                                            </div>
                                                        </div>
                                                        <!-- fin -->

                                                        
                                                    </div>






                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                        <!-- debut de mon div tbleau -->
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="table-responsive">
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
                            
                            

                            $detail2 = $this->db->where('codeEntrep', $codeEntrep);
                            $detail2 = $this->db->get('v_operation');
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

                             ?>
                   </tbody>  
                 </table>
                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- fin de mon div tableau -->

                                                    </div>





                                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                       <div class="row">
                       
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <div class="table-responsive">
                    <table id="user_data2" class="table table-bordered table-striped">  
                       <thead>  
                            <tr>   
                                 <th width="20%">pseudo utilisateur</th>  
                                 <th width="20%">emailUser</th> 
                                 
                                 <th width="5%">sexe</th>
                                 <th width="20%">tel</th> 
                                 <th width="20%">date expiration</th> 
                                 <th width="20%">date mis à jour</th>
                                 <th width="5%">Détail</th>  
                                <!-- <th width="5%">modifier</th>   -->
                                 
                            </tr>  
                       </thead>  
                       <tbody>
                           <?php 
                            
                            

                            $detail3 = $this->db->where('codeEntrep', $codeEntrep);
                            $detail3 = $this->db->get('users');
                            if ($detail3->num_rows() > 0) {
                                foreach ($detail3->result_array() as $key) {
                                    ?>
                                    <tr>
                                        <td><?php echo($key['psedo']) ?></td>
                                        <td><?php echo($key['emailUser']) ?></td>
                                        <td><?php echo($key['sexe']) ?></td>
                                        <td><?php echo($key['tel']) ?></td>
                                        <td><?php echo($key['exp']) ?></td>
                                        <td><?php echo($key['dateAdd']) ?></td>

                                        <td>
                                            <a href="javascript:void(0);" code="<?php echo($key['code']) ?>" class="btn btn-info btn-xs voir_plus"><i class="fa fa-eye"></i></a>
                                        </td>
                                        <!-- <td>
                                            <a href="javascript:void(0);" code="<?php echo($key['code']) ?>" class="btn btn-warning btn-xs edit"><i class="fa fa-edit"></i></a>
                                        </td> -->

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



                                                </div> <!-- end tab-content-->
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->


                            
                           </div>

                        </div> <!-- end col -->

                        
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include ('footer.php');?>
            <input type="hidden" name="codeEntrep" value="<?php echo($codeEntrep) ?>" id="codeEntrep_ok">

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>



    <div class="modal fade" id="userModal">
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



                    <input type="submit" name="valider" class="btn btn-info" value="modifier">

                    <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> &nbsp;fermer</a>
                </div> 
                </form>
                
            </div>
        </div>
    </div>




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
                   
                    <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> &nbsp;fermer</a>
                </div> 
               
                
            </div>
        </div>
    </div>





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



    <div class="modal fade" id="modal_montant">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    
                </div>
                <div class="modal-body">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="row">

                                         <?php 
                                            $somme;
                                            
                                            $detail4 = $this->db->query('SELECT SUM(Montant) AS somme, devise FROM v_operation  WHERE codeEntrep= "'.$codeEntrep.'"  GROUP BY devise ');
                                            if ($detail4->num_rows() > 0) {
                                                foreach ($detail4->result_array() as $key) {
                                                    $somme = $key['somme'].''.$key['devise'];

                                                    ?>
                                                     <div class="col-md-6">
                                                         <div class="card">
                                                             <div class="card-header">
                                                                 TOTAL MONTANT
                                                             </div>
                                                             <div class="card-body">
                                                                 <div class="col-md-6">
                                                                    <div class="pull-center">
                                                                        <label class="control-label">
                                                                            <i style="font-size: 20px;">
                                                                                <?php echo($somme) ?>
                                                                            </i>
                                                                        </label>
                                                                    </div>
                                                                    
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                    <?php
                                                }
                                            }
                                            else{
                                                $somme = 0;
                                            }

                                         ?>
                                       

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger"><i class="fa fa-close"></i> &nbsp; fermer</a>
                </div>
            </div>
        </div>
    </div>





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


    <script type="text/javascript" language="javascript" >  
         $(document).ready(function(){  
              
              
              
              var dataTable = $('#user_data').DataTable();
              var dataTable2 = $('#user_data2').DataTable();

              
              $(document).on('click', '.edit', function(){  
                   var code = $(this).attr("code");  
                   $.ajax({  
                        url:"<?php echo base_url(); ?>Users/fetch_single_users",  
                        method:"POST",  
                        data:{code:code},  
                        dataType:"json",  
                        success:function(data)  
                        {  
                             $('#userModal').modal('show');  
                             $('#psedo').val(data.psedo);  
                             $('#emailUser').val(data.emailUser); 
                             $('#tel').val(data.tel);
                             $('#exp').val(data.exp);

                             $('#codeEntrep').val(data.codeEntrep);

                             $('#pswd').val(data.pswd);
                             
                             
                             $('.modal-title').text("modification de profile de l'utilisateur "+data.psedo);  
                             $('#code').val(code);  
                              
                        }  
                   });  
              });

              $(document).on('click', '.voir_plus', function(){  
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

                             
                             
                             $('.modal-title').text("Profile de l'utilisateur "+data.psedo);   
                              
                        }  
                   });  
              });


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

            //   var chart = new CanvasJS.Chart("chartContainer", {
            //     theme: "theme2",
            //     animationEnabled: true,
            //     title: {
            //         // text: "statistique par rapport aux types d'opérations "
            //     },
            //     data: [
            //     {
            //         type: "column",                
            //         dataPoints: [<?php echo $chart_data; ?>]
            //     }
            //     ]
            // });
            // chart.render();

            var chart2 = new CanvasJS.Chart("chartContainer2", {
                theme: "theme2",
                animationEnabled: true,
                title: {
                    // text: "statistique par rapport aux types d'opérations "
                },
                data: [
                {
                    type: "doughnut",                
                    dataPoints: [<?php echo $chart_data; ?>]
                }
                ]
            });
            chart2.render();


            var chart3 = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title:{
                // text: "Crude Oil Reserves vs Production, 2016"
            },  
            axisY: {
                title: "nombre d'opérations",
                titleFontColor: "#4F81BC",
                lineColor: "#4F81BC",
                labelFontColor: "#4F81BC",
                tickColor: "#4F81BC"
            },
            axisY2: {
                title: "Millions of Barrels/day",
                titleFontColor: "#C0504E",
                lineColor: "#C0504E",
                labelFontColor: "#C0504E",
                tickColor: "#C0504E"
            },  
            toolTip: {
                shared: true
            },
            legend: {
                cursor:"pointer",
                itemclick: toggleDataSeries
            },
            data: [{
                type: "column",
                name: "au total",
                legendText: "ensemble d'opérations",
                showInLegend: true, 
                dataPoints:[
                    <?php echo $chart_data; ?>
                ]
            }]
        });
        chart3.render();

        function toggleDataSeries(e) {
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            }
            else {
                e.dataSeries.visible = true;
            }
            chart3.render();
        }


        




         });  
 </script>




</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 11:43:55 GMT -->
</html>