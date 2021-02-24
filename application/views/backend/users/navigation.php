
<?php 
if ($this->session->userdata('id')) {
    $id = $this->session->userdata('id');
}
else{
    redirect(base_url(), 'refresh');
}




 ?>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<div data-simplebar class="h-100">

    <div class="navbar-brand-box">
       <a href="javascript:void(0);" class="logo">
            <img src="<?= base_url('js/assets/images/FINUPIconBlanc.png')?>" style="width: 50px; height: auto; margin-top: 30px;" />
        </a>
        <p align="center" class="text-white" style="font-size: 25px;">
           <b style="font-size: 25px;">
               FINUP
           </b>
        </p>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

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
                        <li>
                            <a href="<?php echo(base_url())?>Users" class="waves-effect"><i class='bx bx-home-smile'></i><span>Dashboard</span></a>
                        </li>
                        <?php
                     }
                     
                      if ($menu == "entreprise") {
                          ?>
                             <li><a href="<?php echo(base_url()) ?>Users/admin_entreprise" class=" waves-effect"><i class="bx bx-building-house"></i><span>Entreprise</span></a></li>
                          <?php
                      }  

                      if ($menu == "compte") {
                          ?>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-table"></i><span>Compte</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo(base_url()) ?>Users/agent">Ajout utilisateur</a></li>
                                    <li><a href="<?php echo(base_url()) ?>Users/show_select_fonction">Atribution fonctions</a></li>
                                </ul>
                            </li>
                          <?php
                      }
                      if ($menu == "parametre") {
                          ?>
                            <li>
                                <a href="<?php echo(base_url())?>Users/seting" class="waves-effect"><i class='bx bx-cog'></i><span>Paramètre</span></a>
                            </li>
                          <?php
                      }
                      else{
                        
                      } 
                            


                            
                }
            }
            else{

            }

             

            


            ?>


        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->