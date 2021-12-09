<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
    <style type="text/css">
    	.isi{
    		padding-top: 150px;

    	}
    	.pendek{
    		padding-left: 40px;
    	}
    	.img{
    		width: 10px;
    		height: 10px;
    		opacity: 10%;
    		margin-left: 270px;

    	}
    	.daftar{
    		background-color: green;
    		border: 0px;
    	}

    </style>
  </head>
  <body>
  	<div class="container">
  		<?php if($this->session->flashdata('flash')): ?>
  		<div class="row mt-3">
  			<div class="col-md-12">
  		<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Register Akun<strong>Berhasil</strong><?php $this->session->flashdata(); ?>
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  		</button>
  			</div>
  		</div>
	</div>
<?php endif; ?>
  		<div class="img">
  		<center><img src="img/hotel.png"></center>
  		</div>
  	<form class="isi">
  		<h3><center>Mampar's House</center></h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <a href="<?php echo base_url(); ?>Home/tambah" class="btn btn-primary daftar">Daftar</a>
  	</div>
</form>