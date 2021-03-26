<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

    <link rel="icon" href="<?= base_url('assets/');  ?>img/e.png">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
 <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2  col-md-6 offset-md-3 mt-4 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
      <div class="login-brand mb-2">
            
            </div>

            <div class="card card-primary" style="padding-left: 10px; padding-top: 10px;">
             <img src="<?= base_url('assets/');  ?>img/e-spp.png" alt="logo" width="150">
                    
              <div class="card-body">

                <?= $this->session->flashdata('message'); ?>

              <form method="POST" action="<?= base_url('auth/siswa'); ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="nisn">NISN (Nomor Induk Siswa Nasional)</label>
                    <input id="nisn" type="text" class="form-control" name="nisn" placeholder="NISN (Nomor Induk Siswa Nasional)" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      NISN tidak terisi
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>     
                    </div>
                    <input id="password" type="password" class="form-control password" placeholder="Password" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                     Password tidak terisi
                    </div>
                      <input type="checkbox" style="margin-top: 10px;" onclick="showPassword()"> Lihat Password
                  </div>

                  <div class="form-group">
                  
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                 <div class="simple-footer">
             Copyright &copy; V21 <?= date('Y');  ?>
            </div>
 
            </div>

           
          </div>
        </div>
      </div>
      </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/');  ?>assets/modules/jquery.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/popper.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/tooltip.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/moment.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?= base_url('assets/');  ?>assets/js/scripts.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/js/custom.js"></script>

  <script type="text/javascript">
    function showPassword(){
      var x = document.getElementById('password');

      if (x.type === "password") {
        x.type = "text";
      }else{
        x.type = "password";
      }
    }
  </script>
</body>
</html>