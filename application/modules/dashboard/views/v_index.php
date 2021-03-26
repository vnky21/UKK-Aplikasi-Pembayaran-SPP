<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Data <br>Siswa</h4>
        </div>
        <div class="card-body">
          <?= $siswa;  ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="far fa-building"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Data <br>Kelas</h4>
        </div>
        <div class="card-body">
          <?= $kelas;  ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Data <br> SPP</h4>
        </div>
        <div class="card-body">
          <?= $spp; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-circle"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Pembayaran <?= bulan() ?></h4>
        </div>
        <div class="card-body">
          <?= $pembayaran;  ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-8 col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Grafik Pembayaran SPP Tahun <?= date('Y');  ?></h4>
      </div>

      <div class="card-body">
        <canvas id="myChart" height="222"></canvas>

      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Pembayaran Terakhir</h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled list-unstyled-border">
          <?php foreach ($histori_pembayaran  as $key => $value) : ?>
            <li class="media">
              <div class="media-body">
                <div class="float-right text-primary"><?= $value['tgl_bayar']; ?></div>
                <div class="media-title"><?= $value['id_pembayaran']; ?></div>
                <span class="text-small text-muted">Jumlah Bayar : <?= 'Rp ' . number_format($value['jumlah_bayar'], 0, ".", "."); ?></span><br>
                <span class="text-small text-muted">Nama Petugas : <?= $value['nama_petugas']; ?></span>
              </div>
            </li>

          <?php endforeach; ?>

          <div class="text-center pt-1 pb-1">
            <a href="<?= base_url('histori-pembayaran/histori') ?>" class="btn btn-primary btn-lg btn-round">
              View All
            </a>
          </div>
      </div>
    </div>
  </div>
</div>