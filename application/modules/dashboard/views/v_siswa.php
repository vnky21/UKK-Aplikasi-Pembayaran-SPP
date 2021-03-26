 <div class="row mt-sm-4">
    
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card profile-widget">
                  <div class="profile-widget-header">                     
                    <img alt="image" src="<?= base_url('assets/assets/img/avatar/avatar-1.png');  ?>" class="rounded-circle profile-widget-picture mr-4">
                    <div class="mt-3">

                      <h4 class="ml-3"><?= $user['nama'];  ?></h4>
                      <h6 class="font-weight-normal ml-3"><?= $user['nisn'];  ?></h6>
                    </div>
                  </div>
                  <div class="profile-widget-description ml-3">
                    <div class="row">
                      <div class="col-lg-3 font-weight-bold">NIS ( Nomor Induk Sekolah ) </div>
                      <div class="col-lg-9 font-weight-normal">: <?=  $user['nisn'];  ?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 font-weight-bold">Kelas </div>
                      <div class="col-lg-9 font-weight-normal">: <?=  $user['nama_kelas'];  ?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 font-weight-bold">Jurusan </div>
                      <div class="col-lg-9 font-weight-normal">: <?=  $user['jurusan'];  ?></div>
                    </div>

                     <div class="row">
                      <div class="col-lg-3 font-weight-bold">Alamat </div>
                      <div class="col-lg-9 font-weight-normal">: <?=  $user['alamat'];  ?></div>
                    </div>

                     <div class="row">
                      <div class="col-lg-3 font-weight-bold">Nomor Telepon </div>
                      <div class="col-lg-9 font-weight-normal">: <?=  $user['no_telp'];  ?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 font-weight-bold">Tahun SPP (aktif) </div>
                      <div class="col-lg-9 font-weight-normal">: <?=  $user['tahun'];  ?></div>
                    </div>

                </div>
              </div>
            </div>