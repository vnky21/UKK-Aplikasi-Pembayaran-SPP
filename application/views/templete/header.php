
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $judul;  ?> - Aplikasi SPP</title>
  
  <link rel="icon" href="<?= base_url('assets/');  ?>img/e.png">
  <!-- General CSS Files -->

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/fontawesome/css/all.min.css">
    <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/ionicons/css/ionicons.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">


    <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?= base_url('assets/');  ?>assets/modules/summernote/summernote-bs4.css">

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
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg" style="background-color: #1E90FF;"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
  
        </form>
        <ul class="navbar-nav navbar-right">
  
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url('assets/');  ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $nama; ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">

              <?php if ($this->session->userdata('level') == 'Admin'): ?>
                    <a href="<?=  base_url('manajemen-user/admin/edit/').$this->session->userdata('id_petugas'); ?>" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
                    </a>

              <?php endif; ?>
             
              <div class="dropdown-divider"></div>
              <a href="#" data-toggle="modal" data-target="#log-out"  class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>