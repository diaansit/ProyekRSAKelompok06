<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    Akun berhasil dihapus
                </div>
            </div>
        </div>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('edit')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berhasil <strong>mengubah profile</strong> <?= $this->session->flashdata('message'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('adminprofile'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Amanuba Hotel<i class="fas fa-hotel"></i></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Administrator
            </div>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('adminprofile/utama'); ?>">
                    <i class="fas fa-user-cog"></i>

                    <span>Admin</span></a>
            </li> -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-eye"></i>

                    <span>Liat User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Penginapan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link " href="<?= base_url('adminprofile/tambahkamar'); ?>" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-plus-circle"></i>
                    <span>Tambah Kamar</span>
                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">

                <a class="nav-link " href="<?= base_url('adminprofile/lihatkamar'); ?>" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-eye"></i>
                    <span>Lihat Kamar</span>
                </a>
            </li>

            <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
            <a class="nav-link dropdown-toggle" href="<?php echo site_url('admin/new_reservasi') ?>" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>PEMESANAN BARU</span>
            </a>
            </li>
            <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
            <a class="nav-link dropdown-toggle" href="<?php echo site_url('admin/all_reservasi') ?>" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>PEMESANAN SELESAI</span>
            </a>
            </li>
        
            
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/saran') ?>">
            <i class="fas fa-fw fa-envelope-open"></i>
            <span>KRITIK & SARAN</span></a>
    </li>
            <!-- Heading -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

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

                    <!-- Topbar Search -->
                    <form action="<?= base_url('adminprofile/DaftarOrang'); ?>" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari orang..." name="cariorang" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['username']; ?></span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <!-- Area Chart Example-->
    <div class="card mb-3">
          <div class="card-header bg-success">
           
            <i class="fas fa-table"></i>
            Pemesanan</div>
             <?php 
                  
                          if($this->session->flashdata('in')){
                            echo "<div class='alert alert-success'>
                                           <span>Pemesanan Check IN SUCCESS</span>  
                                        </div>";
                          }
                          else if($this->session->flashdata('out')){

                            echo "<div class='alert alert-success'>
                                           <span>Pemesanan Check OUT SUCCESS</span>  
                                        </div>";

                          }
                          else if($this->session->flashdata('berhasil')){

                            echo "<div class='alert alert-success'>
                                           <span>Pemesanan Baru SUCCESS</span>  
                                        </div>";

                          }

                          else if($this->session->flashdata('perpanjang')){

                            echo "<div class='alert alert-success'>
                                           <span>Perpanjang SUCCESS</span>  
                                        </div>";

                          }
                          
                        
              ?>
          <div class="card-body">
            <div class="table-responsive">
               <a class="btn btn-success " href="new_reservasi_tambah">Add <i class="fa fa-plus"></i></a><br>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <br>
         <thead>
          <tr>
            <th width="1%">No</th>
            <th width="29%" >Aksi</th>
            <th >Nama</th>
            <th >Telp</th>
            <th >Alamat</th>
            <th width="12%">Tgl Masuk</th>
            <th width="12%">Tgl Keluar</th>
            <th >Kamar</th>
          </tr>
        </thead>
         <tbody>
          <?php 
          $no = 1;
          foreach($reservasi as $r){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td>
                
               

                <?php
                        if ($r->status_reservasi == 0) { ?>

                         <a  class="btn btn-success" href="<?php echo base_url().'admin/new_reservasi_in/'.$r->id_reservasi?>/1">Proses Check-IN</a> 
                        <?php
                        }
                        else if ($r->status_reservasi == 1) { ?>
                           <a  class="btn btn-danger" href="<?php echo base_url().'admin/new_reservasi_out/'.$r->id_reservasi?>/2"> Proses Check-OUT</a> 
                           <a  class="btn btn-primary" href="<?php echo base_url().'admin/new_reservasi_perpanjang/'.$r->id_reservasi?>">PERPANJANG</a> 
                        <?php
                        }
                        else { ?>
                          <span class="label label-success">CHECK OUT SUCCESS</span>
                        <?php
                        }
                        ?>
              </td>
              <td><?php echo $r->nama_reservasi; ?></td>
              <td><?php echo $r->tlp_reservasi; ?></td>
              <td><?php echo $r->alamat_reservasi; ?></td>
              <td><?php echo $r->tgl_reservasi_masuk; ?></td>
              <td><?php echo $r->tgl_reservasi_keluar; ?></td>
              <td><?php echo $r->no_kamar; ?></td>
            <?php 
          }
          ?>
        </tbody> 
            </table>
          </div>
        </div>
      </div>
<hr style="border: 1px solid">

                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2019</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="<?=base_url('assets/')?>css/sb-admin.min.css">
        <link rel="stylesheet" href="<?=base_url('assets/')?>css/sb-admin.min.css">
        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
                            
        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>