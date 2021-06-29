<div id="app">
<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?= base_url(); ?>">Parkir</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item <?php if($title=="Dashboard"){echo "active";} ?>">
                            <a href="<?= base_url(); ?>Dashboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php if($title=="Data Masuk"){echo "active";} ?>">
                            <a href="<?= base_url(); ?>Data_Masuk" class='sidebar-link'>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Data Masuk</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($title=="Data Keluar"){echo "active";} ?>">
                            <a href="<?= base_url(); ?>Data_Keluar" class='sidebar-link'>
                                <i class="bi bi-x-circle-fill"></i>
                                <span>Data Keluar</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($title=="Data Kendaraan"){echo "active";} ?>">
                            <a href="<?= base_url(); ?>Data_Kendaraan" class='sidebar-link'>
                                <i class="bi bi-folder-fill"></i>
                                <span>Data Kendaraan</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($title=="Data Akun"){echo "active";} ?>">
                            <a href="<?= base_url(); ?>Data_Akun" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Data Akun</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="<?= base_url('Logout') ?>" class='sidebar-link'>
                                <i class="bi bi-puzzle"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"><?= $this->userdata->row()->name ?></h6>
                                            <p class="mb-0 text-sm text-gray-600"><?php 
                                                    $key = $this->userdata->row();
                                                    if ($key->RoleID == 0){
                                                        echo "Superuser";
                                                    } else if ($key->RoleID == 1){
                                                        echo "Admin";
                                                    } else if ($key->RoleID == 2){
                                                        echo "Kepala Parkir";
                                                    } else if ($key->RoleID == 3){
                                                        echo "Operator Parkir";
                                                    } else if ($key->RoleID == 4){
                                                        echo "Personal Parkir";
                                                    } else {
                                                        echo "Tidak Ada Role";
                                                    }
                                            
                                        ?></p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="<?= base_url(); ?>assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, Riza Ilhamsyah!</h6>
                                    </li>
                                    <!-- <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li> -->
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>Auth/logout"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>