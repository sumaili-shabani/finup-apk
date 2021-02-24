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

            <li>
                <a href="<?php echo(base_url())?>Admin" class="waves-effect"><i class='bx bx-home-smile'></i><span>Dashboard</span></a>
            </li>

            <li><a href="<?php echo(base_url()) ?>Admin/admin_entreprise" class=" waves-effect"><i class="bx bx-building-house"></i><span>Entreprise</span></a></li>

            

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-table"></i><span>Compte</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?php echo(base_url()) ?>Admin/agent">Ajout utilisateur</a></li>
                    <li><a href="<?php echo(base_url()) ?>Admin/show_select_fonction">Atribution fonctions</a></li>
                </ul>
            </li>

            <li>
                <a href="<?php echo(base_url())?>Admin/seting" class="waves-effect"><i class='bx bx-cog'></i><span>Paramètre</span></a>
            </li>

            

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->