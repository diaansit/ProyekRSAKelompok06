<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
</head>
<body>

	
<div class="container">
	
	<div class="row mt-3 col-md-6">
		<div class="col md-6">
			<div class="card">
 <div class="card-header">
    Registrasi Mampar's House
  </div>
  <div class="card-body">
  	<?php if (validation_errors()) :?>
  	<div class="alert alert-danger" role="alert">
	<?=validation_errors(); ?>
	</div>
<?php endif; ?>
    <blockquote class="blockquote mb-0">
      
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Phone Number</label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
    </div>
    <div class="form-row">
    	
    <div class="form-group col-md-12">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Tanggal Lahir</label>
      <input type="date" class="form-control" id="tanggal" name="tanggal">
    </div>
    
  </div>
  <div class="form-row">
  <div class="form-group col-md-12">
    <label for="inputAddress">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCity">Kota</label>
      <input type="text" class="form-control" id="kota" name="kota">
    </div>
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Saya Setuju
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Daftar</button>
  <a href="http://localhost/MyProject-CI/Home" class="btn btn-primary" style="background-color: red; border: 0px;" onclick="return confirm('Anda Yakin ?')">Batal</a>
</form>
    </blockquote>
  </div>
</div>
		</div>
	</div>
</div>
</body>
</html>