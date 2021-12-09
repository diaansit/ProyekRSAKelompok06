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
                <div id="content-wrapper">

    <div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
    <?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

   

    <!-- Area Chart Example-->
    <div class="card mb-3">
          <div class="card-header bg-success">
           
            <i class="fas fa-table"></i>
            Proses Check Out</div>
          
          <div class="card-body">
              
                    <?php if(validation_errors()) { ?>
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo validation_errors(); ?>
                </div>
                <?php 
                } 
                ?>
                    
                      <?php echo form_open_multipart('admin/new_reservasi_out_simpan/','class="form-horizontal"'); ?>
                      <div class="form-body">
                        <?php

                        if ($waktu==0) {

                          $total_bayar = $harga_kamar * 0.5;

                        }
                        else {

                          $total_bayar = $harga_kamar * $waktu;
                        }



                        ?>
                        <input type="hidden" name="waktu" value="<?php echo $waktu;?>">
                        <input type="hidden" name="id_reservasi" value="<?php echo $id_reservasi;?>">
                        <input type="hidden" name="status_reservasi" value="<?php echo $status_reservasi;?>">
                        <input type="hidden" name="id_kamar" value="<?php echo $id_kamar;?>">
                        <h3 class="form-section">Informasi</h3>
                        <hr>
                        <div class="card-body">
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Nama</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control"  name="nama_reservasi" value="<?php echo $nama_reservasi;?>" disabled>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Telp</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="tlp_reservasi" value="<?php echo $tlp_reservasi;?>" disabled>
                                
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Alamat</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control"  name="alamat_reservasi" value="<?php echo $alamat_reservasi;?>" disabled>
                                
                              </div>
                            </div>
                          </div>

                        
                          
                        </div>
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Tanggal Masuk</label>
                              <div class="col-md-9">
                                 <input class="form-control form-control-inline input-medium date-picker" name="tgl_reservasi_masuk" id="tgl_reservasi_masuk" size="16" type="text" value="<?php echo tgl_indo($tgl_reservasi_masuk);?>" disabled/>
                                                              
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Tanggal Keluar</label>
                              <div class="col-md-9">
                                 <input class="form-control form-control-inline input-medium date-picker" name="tgl_reservasi_keluar" id="tgl_reservasi_keluar" size="16" type="text" value="<?php echo tgl_indo($tgl_reservasi_keluar);?>" disabled/>
                                                              
                              </div>
                            </div>
                          </div>
                          
                        </div>
                    
                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Kamar</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control"  name="no_kamar" value="<?php echo $no_kamar;?>" disabled>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-6">Harga Kamar/hari</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="harga_kamar" value="<?php echo rupiah($harga_kamar);?>" disabled>
                                
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>

                        <h3 class="form-section">Pembayaran</h3>
                        <hr>
                        <div class="card-body">
                          <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Total Bayar</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control"  name="" id="" value="<?php echo rupiah($total_bayar);?>" readonly>
                                <input type="hidden" class="form-control"  name="total_bayar" id="total_bayar" value="<?php echo $total_bayar;?>" readonly>
                                
                              </div>
                            </div>
                          </div>

                          
                          
                        </div>

                        <div class="row">
                          
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-3">Uang Bayar</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control"  name="uang_bayar" id="uang_bayar" value="" >
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label col-md-4">Uang Kembali</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="kembalian" id="kembalian" value="" >
                                
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>

                      </div>
                      <div class="form-actions">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-success">Bayar</button>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                          </div>
                        </div>
                      </div>
                    <?php echo form_close();?>  
                    

          </div>
        </div>
      </div>

    

    </div>
    <!-- /.container-fluid -->
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