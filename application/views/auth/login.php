<div class="container">
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Register Akun <strong>Berhasil</strong><?php $this->session->flashdata(); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('captcha')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Captcha <strong>Salah</strong><?php $this->session->flashdata(); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('login')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    Email belum terdaftar!
                </div>
            </div>
        </div>
</div>
<?php endif; ?>
<?php if ($this->session->flashdata('logout')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                Anda telah Logout!
            </div>
        </div>
    </div>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('aktif')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                Email belum aktif!
            </div>
        </div>
    </div>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('password')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                Password salah!
            </div>
        </div>
    </div>
    </div>
<?php endif; ?>
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Mampar's Hotel<i class="fas fa-hotel"></i></h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" aria-describedby="emailHelp" name="email" value="<?= set_value('email'); ?>" placeholder="Enter Email Address...">
                                <small class="text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                <small class="text-danger"><?= form_error('password'); ?></small>
                            </div>
                            <div class="form-group">
                                <?php
                                if (validation_errors()) {
                                ?>
                                    <ul style="color: red;">
                                        <?= validation_errors('<li>', '</li>') ?>
                                    </ul>
                                <?php

                                }

                                ?>
                                <p><?= $image; ?><a href="#" onclick="parent.window.location.reload(true)"> <img src="assets/img/refresh.png"></a></p>
                                <p><input type="text" class="form-control form-control-user" name="captcha" placeholder="Masukkan Captcha.."></p>
                            </div>


                            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>

                        </form>
                        <hr>

                        <div class="text-center">
                            <a class="small" href="<?= base_url(); ?>auth/registrasi">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

</div>