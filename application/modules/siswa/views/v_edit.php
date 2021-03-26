  <div class="row">
        
              <div class="col-lg-8">
                <div class="card">
              

                  <div class="card-header">
                    <h4>Data Pribadi</h4>
                    <div class="card-header-action">
                      <a data-collapse="#mycard-collapse" class="btn btn-icon btn-primary" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
               <form action="<?= base_url('siswa/edit/').$siswa['nisn'];  ?>" method="post">
                    <div class="form-group">
                      <label>NISN (Nomor Induk Siswa Nasional)</label>
                      <input type="text" readonly class="form-control nisn" name="nisn" value="<?= $siswa['nisn']; ?>" placeholder="Nomor Induk Siswa Nasional">
                      <?= form_error('nisn','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                     <div class="form-group">
                      <label>NIS (Nomor Induk Sekolah)</label>
                      <input type="text" readonly class="form-control" name="nis" value="<?= $siswa['nis']; ?>" placeholder="Nomor Induk Sekolah">
                      <?= form_error('nis','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                     <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" class="form-control" name="nama" value="<?= $siswa['nama'];  ?>" placeholder="Nama Siswa">
                      <?= form_error('nama','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <input type="text" class="form-control" name="telp" value="<?= $siswa['no_telp'];  ?>" placeholder="No.Telepon">
                      <?= form_error('telp','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                     <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" name="alamat"><?= $siswa['alamat'];  ?></textarea>
                      <?= form_error('alamat','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>
                    
                    </div>
                    
                  </div>
                </div>             
              </div>


                 <div class="col-lg-4">
                <div class="card">

                  <div class="card-header">
                    <h4>Data Sekolah Siswa</h4>
                    <div class="card-header-action">
                     
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">

                     
                    <div class="form-group">
                      <label>Kelas</label>
                      <select name="id_kelas" class="form-control select2">
                        <option  value="<?= null; ?>">--- Kelas ---</option>

                        <?php foreach ($kelas as $key => $value): ?>

                          <?php if ($value['id_kelas'] == $siswa['id_kelas']): ?>

                            <option selected value="<?= $value['id_kelas'];  ?>"><?= $value['nama_kelas'];  ?></option>

                          <?php else : ?>

                            <option value="<?= $value['id_kelas'];  ?>"><?= $value['nama_kelas'];  ?></option>
                                                  
                          <?php endif; ?>

                        <?php endforeach ?>
                      

                      </select>
                      <?= form_error('id_kelas','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                    <div class="form-group">
                      <label>Tahun SPP</label>
                      <select name="id_spp" class="form-control select2">
                      <option value="<?= null; ?>">--- Tahun SPP ---</option>

                       
                        <?php foreach ($spp as $key => $value): ?>

                          <?php if ($value['id_spp'] == $siswa['id_spp']): ?>

                            <option selected value="<?= $value['id_spp'];  ?>"><?= $value['tahun'];  ?></option>

                          <?php else : ?>

                            <option value="<?= $value['id_spp'];  ?>"><?= $value['tahun'];  ?></option>
                                                  
                          <?php endif; ?>

                        <?php endforeach ?>
                      

                      </select>
                      <?= form_error('id_spp','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>
                     
                     <div class="form-group mt-4" style="float: right;">
                    <button type="reset" class="btn  btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-success tambah-siswa">Tambah Siswa</button>
                  </div>

                </form>


    

             
                </div>
                </div>
              </div>
            </div>

</div>
