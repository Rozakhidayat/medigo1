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
                <a class="nav-link" href="<?php echo base_url('Profile')?>">
                    <i class=" 	fas fa-user-circle"></i>
                    <span>My Profile</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('User/tampil_data')?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pendaftaran</span></a>
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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow ">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('assets/template/img/profile/'). $user ['foto'] ;?>">
                            </a>

    
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
