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
      <img style="width: 150px;height: 70px;" src="<?= base_url('assets/img/e-spp.png');  ?>" class="rounded mt-4 ml-4" alt="...">

    <section class="section">
 <div class="container mt-2 text-center">



   <h2 class="font-weight-bolder">Selamat Datang</h2>
   <h5>Sistem Pembayaran Pendidikan Sekolah</h5>
  <div align="center" class="row" style="margin-top: 50px;">
  <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <a href="<?= base_url('auth/petugas');  ?>" style="text-decoration: none;">
              <div class="card card-hero" style="width: 250px; border-radius: 20px;">
                <div class="card-header " style="border-radius: 20px;">        
                    <i class="fas fa-user-tie" style="font-size: 110px;"></i> 
                  <div class="card-description"><h4>Petugas</h4></div>
                </div>
            </div>
          </a>
        </div>



            <div class="col-lg-4">
        <a href="<?= base_url('auth/siswa');  ?>" style="text-decoration: none;">
              <div class="card card-hero" style="width: 250px; border-radius: 20px;">
                <div class="card-header" style="border-radius: 20px;">        
                    <i class="fas fa-graduation-cap" style="font-size: 110px;"></i> 
                  <div class="card-description"><h4>Siswa</div>
                </div>
            </div>
          </a>
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
</body>
</html>