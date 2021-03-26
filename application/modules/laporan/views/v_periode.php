  

           <?= $this->session->flashdata('message'); ?>
           <?php echo validation_errors('<div class="alert alert-danger alert-dismissible show fade alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body"><button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                       ', '</div>
                    </div>'); ?>
            <div class="row">
              <div class="col-12">
                <div class="card">
                 <div class="card-header">
                  <h4>Periode Tahunan</h4>
                </div>
                <div class="card-body">
                   <form class="form-inline mr-auto" target="_blank" action="<?= base_url('laporan/laporan_tahunan');  ?>" method="post">
         <div class="search-element">
      <select name="tahun" class="form-control">

       <option value="<?= $tahun[0];  ?>">Tahun <?= $tahun[0];  ?></option>
       <option value="<?= $tahun[1];  ?>">Tahun <?= $tahun[1];  ?></option>
       <option value="<?= $tahun[2];  ?>">Tahun <?= $tahun[2];  ?></option>
       <option value="<?= $tahun[3];  ?>">Tahun <?= $tahun[3];  ?></option>
                      </select>
            <button class="btn btn-danger tambah-siswa " type="submit"><i class="fas fa-file-pdf"></i> Generate PDF</button>
          </div>
        </form>
           
                </div>
                </div>
              </div>
            </div>

             <div class="row">
              <div class="col-12">
                <div class="card">
                 <div class="card-header">
                  <h4>Periode Bulanan</h4>
                </div>
                <div class="card-body">
                   <form class="form-inline mr-auto" target="_blank" action="<?= base_url('laporan/laporan_bulanan');  ?>" method="post">
         <div class="search-element">
             <select name="bulan" class="form-control">
       
       <?php foreach ($bulan as $key => $value): ?>
         <option value="<?= $value['bulan'];  ?>"><?=$value['bulan'];  ?></option>
       <?php endforeach; ?>
       
             </select>
      <select name="tahun" class="form-control">

       <option value="<?= $tahun[0];  ?>"><?= $tahun[0];  ?></option>
       <option value="<?= $tahun[1];  ?>"><?= $tahun[1];  ?></option>
       <option value="<?= $tahun[2];  ?>"><?= $tahun[2];  ?></option>
       <option value="<?= $tahun[3];  ?>"><?= $tahun[3];  ?></option>
                      </select>
            <button class="btn btn-danger tambah-siswa " type="submit"><i class="fas fa-file-pdf"></i> Generate PDF</button>
          </div>
        </form>
           
                </div>
                </div>
              </div>
            </div>


  


