<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>404 &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5" style="margin-top: 200px;">
        <div class="page-error">
          <div class="page-inner">
            <i style="font-size: 200px;" class="fas fa-exclamation-triangle text-danger"></i>

            <div class="page-description text-danger font-weight-bold">
              <h2 class="mt-4">Data Laporan tidak tersedia</h2>
            </div>
            <div class="page-search">


            </div>
          </div>
        </div>
        <div class="simple-footer mt-5">
          Copyright &copy; V21 <?= date('Y'); ?>
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

  <!-- Template JS File -->
  <script src="<?= base_url('assets/');  ?>assets/js/scripts.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/js/custom.js"></script>
</body>

</html>