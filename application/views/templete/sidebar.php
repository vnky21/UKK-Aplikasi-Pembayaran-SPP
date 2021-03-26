  <div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"><img width="100px" src="<?= base_url('assets/');  ?>img/e-spp.png"></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html"><img width="50px" src="<?= base_url('assets/');  ?>img/e-spp.png"></a>
      </div>

      <?php if ($this->session->userdata('level') == 'Admin') : ?>
        <ul class="sidebar-menu mt-3">
          <?php if ($judul == 'Dashboard') : ?>
            <li class="active">
            <?php else : ?>
            <li>
            <?php endif; ?>
            <a class="nav-link" href="<?= base_url('dashboard'); ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

            <?php if (isset($dropdown)) : ?>
              <?php if ($dropdown == 'Data') : ?>

                <li class="dropdown active">

                <?php endif; ?>

              <?php else : ?>

                <li class="dropdown">

                <?php endif; ?>


                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i>
                  <span>Data</span></a>
                <ul class="dropdown-menu">
                  <?php foreach ($navbar_admin as $key => $value) : ?>

                    <?php if ($value['nav'] == $judul) : ?>

                      <li class="active"><a class="nav-link" href="<?= base_url() . $value['link']; ?>"><?= $value['nav'];  ?></a>
                      </li>

                    <?php else : ?>

                      <li><a class="nav-link" href="<?= base_url() . $value['link']; ?>"><?= $value['nav'];  ?></a></li>

                    <?php endif ?>

                  <?php endforeach ?>


                </ul>
                </li>

                <?php if ($judul == 'Entri Pembayaran') : ?>
                  <li class="active">
                  <?php else : ?>
                  <li>
                  <?php endif; ?>
                  <a class="nav-link" href="<?= base_url('entri-pembayaran/pembayaran'); ?>"><i class="fas fa-share-square"></i>
                    <span>Entri Pembayaran</span></a></li>

                  <?php if ($judul == 'Histori Pembayaran') : ?>
                    <li class="active">
                    <?php else : ?>
                    <li>
                    <?php endif; ?>
                    <a class="nav-link" href="<?= base_url('histori-pembayaran/histori/search'); ?>"><i class="fas fa-file"></i>
                      <span>Histori Pembayaran</span></a></li>

                    <?php if ($judul == 'Generate Laporan') : ?>
                      <li class="active">
                      <?php else : ?>
                      <li>
                      <?php endif; ?>
                      <a class="nav-link" href="<?= base_url('laporan'); ?>"><i class="fas fa-print"></i> <span>Generate
                          Laporan</span></a></li>

                      <?php if ($judul == 'Manajemen User') : ?>
                        <li class="dropdown active">
                        <?php else : ?>
                        <li class="dropdown">
                        <?php endif; ?>
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Manajemen
                            User</span></a>

                        <ul class="dropdown-menu">
                          <?php foreach ($menu as $key => $value) : ?>

                            <?php if ($value['nav'] == $subjudul) : ?>

                              <li class="active"><a class="nav-link" href="<?= base_url() . $value['link']; ?>"><?= $value['nav'];  ?></a>
                              </li>

                            <?php else : ?>

                              <li><a class="nav-link" href="<?= base_url() . $value['link']; ?>"><?= $value['nav'];  ?></a></li>

                            <?php endif ?>

                          <?php endforeach ?>


                        </ul>
                        </li>




        </ul>

      <?php elseif ($this->session->userdata('level') == 'Petugas') : ?>

        <ul class="sidebar-menu mt-3">

          <?php if ($judul == 'Dashboard') : ?>
            <li class="active">
            <?php else : ?>
            <li>
            <?php endif; ?>
            <a class="nav-link" href="<?= base_url('dashboard'); ?>"><i class="fas fa-tachometer-alt"></i>
              <span>Dashboard</span></a></li>

            <?php if ($judul == 'Entri Pembayaran') : ?>
              <li class="active">
              <?php else : ?>
              <li>
              <?php endif; ?>
              <a class="nav-link" href="<?= base_url('entri-pembayaran/pembayaran'); ?>"><i class="fas fa-share-square"></i>
                <span>Entri Pembayaran</span></a></li>

              <?php if ($judul == 'Histori Pembayaran') : ?>
                <li class="active">
                <?php else : ?>
                <li>
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url('histori-pembayaran/histori/search'); ?>"><i class="fas fa-file"></i>
                  <span>Histori Pembayaran</span></a></li>

        </ul>

      <?php elseif ($this->session->userdata('level') == 'Siswa') : ?>


        <ul class="sidebar-menu mt-3">

          <?php if ($judul == 'Dashboard') : ?>
            <li class="active">
            <?php else : ?>
            <li>
            <?php endif; ?>
            <a class="nav-link" href="<?= base_url('dashboard/siswa'); ?>"><i class="fas fa-tachometer-alt"></i>
              <span>Dashboard</span></a></li>

            <?php if ($judul == 'Histori Pembayaran') : ?>
              <li class="active">
              <?php else : ?>
              <li>
              <?php endif; ?>
              <a class="nav-link" href="<?= base_url('histori-pembayaran/siswa'); ?>"><i class="fas fa-file"></i>
                <span>Histori Pembayaran</span></a></li>

              <?php if ($judul == 'Ganti Password') : ?>
                <li class="active">
                <?php else : ?>
                <li>
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url('manajemen-user/siswa/gantiPassword'); ?>"><i class="fas fa-key"></i>
                  <span>Ganti Password</span></a></li>

        </ul>

      <?php endif; ?>
    </aside>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1><?= $judul;  ?></h1>
      </div>