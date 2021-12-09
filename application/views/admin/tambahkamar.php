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
                <div class="sidebar-brand-text mx-3">Mampar's Hotel<i class="fas fa-hotel"></i></div>
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
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('adminprofile') ?>">
                    <i class="fas fa-eye"></i>

                    <span>Lihat User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Penginapan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
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
                <div class="container-fluid">

                    <form action="<?= base_url('adminprofile/tambahkamar'); ?>" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Kamar</label>
                            <input type="text" class="form-control" name="namakamar" id="exampleFormControlInput1" placeholder="Nama kamar..">
                            <small class="text-danger"><?= form_error('namakamar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipe Kamar</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="tipekamar">
                                <option value="Standard Room">Standard Room</option>
                                <option value="Superior Room">Superior Room</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Presidential Room">Presidential Room</option>
                                <option value="Single Room">Single Room</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">No. Kamar</label>
                            <input type="text" class="form-control" name="nokamar" id="exampleFormControlInput1" placeholder="Nomor kamar..">
                            <small class="text-danger"><?= form_error('nokamar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Foto Kamar</label>
                            <input type="file" class="form-control" name="fotokamar" id="exampleFormControlInput1">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Harga</label>
                            <input type="text" class="form-control" name="hargakamar" id="exampleFormControlInput1" placeholder="Harga..">
                            <small class="text-danger"><?= form_error('hargakamar'); ?></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Buat</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                        <a class="btn btn-primary" href="<?= base_url('adminprofile'); ?>" onclick="return confirm('Anda Yakin ?')">Kembali</a>
                    </form>
                </div>
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

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>