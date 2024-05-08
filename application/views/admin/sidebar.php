<body id="page-top" onload="setInterval('displayTime()', 1000);">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <i class="fas  	fa fa-heartbeat"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Medigo</div>
                
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                
                    <h1 id="jam"></h1>
            </li>
            

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>
            

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Profile_admin')?>">
                    <i class=" 	fas fa-user-circle"></i>
                    <span>My Profile</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('')?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pasien</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('')?>">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Jadwal Dokter</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('')?>">
                    <i class="fas fa fa-comments-o"></i>
                    <span>Feedback</span></a>
            </li>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('')?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            

            
        </ul>
         <!-- End of Sidebar -->