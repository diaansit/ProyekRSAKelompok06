    <div class="container">
        <center>

            <div class="card-body p-0">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi Akun<i class="fas fa-hotel"></i></h1>
                        </div>
                        <form action="<?= base_url('auth/registrasi') ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" placeholder="Username" name="username" value="<?= set_value('username') ?>">
                                <small class="text-danger"><?= form_error('username'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                                <small class="text-danger"><?= form_error('email'); ?></small>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                <small class="text-danger"><?= form_error('password'); ?></small>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="confirm_password" placeholder="Confirm password" name="confirm_password">
                                <small class="text-danger"><?= form_error('confirm_password'); ?></small>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="phone" placeholder="Phone" name="phone" value="<?= set_value('phone') ?>">
                                <small class="text-danger"><?= form_error('phone'); ?></small>
                            </div>

                            <div class="form-group">
                                <input type="date" class="form-control form-control-date" id="tanggal" placeholder="Tanggal lahir" name="tanggal" value="<?= set_value('tanggal') ?>">
                                <small class="text-danger"><?= form_error('tanggal'); ?></small>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="alamat" placeholder="Alamat" name="alamat" value="<?= set_value('alamat') ?>">
                                <small class="text-danger"><?= form_error('alamat'); ?></small>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="kota" placeholder="Kota" name="kota" value="<?= set_value('kota') ?>">
                                <small class="text-danger"><?= form_error('kota'); ?></small>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar
                            </button>
                            <a href="http://localhost/MyProject-CI/" class="btn btn-primary btn-user btn-block" style="background-color: red; border: 0px;" onclick="return confirm('Anda Yakin ?')">Batal</a>


                        </form>
                        <hr>

                        <div class="text-center">
                            <a class="small" href="http://localhost/MyProject-CI/">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>

    </center>
    </div>