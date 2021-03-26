
      <?= $this->session->flashdata('message'); ?>

  <div class="row">

    <div class="col-lg-5">
        <div class="card">
             <div class="card-header">
                <h4>Data Siswa</h4>
           </div>
           <div class="card-body">
                <div class="row">
                      <p class="text-md-right col-md-4 col-lg-4">NISN</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['nisn'];  ?></p> 
                      </div>
                  </div>

                  <div class="row">
                      <p class="text-md-right col-md-4 col-lg-4">NIS</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['nis'];  ?></p> 
                      </div>
                  </div>

                  <div class="row">
                      <p class="text-md-right col-md-4 col-lg-4">Nama</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['nama'];  ?></p> 
                      </div>
                  </div>

                    <div class="row">
                      <p class="text-md-right col-md-4 col-lg-4">Kelas</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['nama_kelas'];  ?></p> 
                      </div>
                  </div>

                  <div class="row">
                      <p class="text-md-right col-md-4 col-lg-4">Jurusan</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['jurusan'];  ?></p> 
                      </div>
                  </div>

                  <div class="row">
                      <p class="text-md-right col-md-4 col-lg-4">Tahun SPP</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['tahun'];  ?></p> 
                      </div>
                  </div>





           </div>
       </div>
  
</div>
         
              <div class="col-lg-7">
                <div class="card">
              

                  <div class="card-header">
                    <h4>Reset Password</h4>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
               <form action="<?= base_url('manajemen-user/siswa/resetPassword/').$siswa['nisn'];  ?>" method="post">

                    <input type="hidden" value="<?= $siswa['nisn'];  ?>" name="nisn">

                     <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password Baru">
                      <?= form_error('password','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                     <div class="form-group">
                      <label>Konfirmasi Password</label>
                      <input type="password" class="form-control" name="password1" placeholder="Konfirmasi Password Baru">
                      <?= form_error('password1','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                            <div class="form-group" style="float: right;margin-top: 33px;">
                    <button type="reset" class="btn  btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-success tambah-siswa">Ganti Password</button>
                  </div>


                    
                    </div>
                    
                  </div>
                </div>             
              </div>

                </div>
              </div>
            </div>

</div>