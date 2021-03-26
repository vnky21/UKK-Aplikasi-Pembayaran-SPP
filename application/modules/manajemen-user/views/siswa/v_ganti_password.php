  <?php if ($this->session->flashdata('message')): ?>

      <?= $this->session->flashdata('message'); ?>

      <?php else: ?>

      <?= $this->session->flashdata('default'); ?>  
    
  <?php endif ?>
  <div class="row">
         
              <div class="col-lg-7">
                <div class="card">
              

                  <div class="card-header">
                    <h4>Ganti Password</h4>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
               <form action="<?= base_url('manajemen-user/siswa/gantiPassword');  ?>" method="post">
                    <div class="form-group ">
                      <label>Password Lama</label>
                      <input type="password" class="form-control" name="old-password"  placeholder="Password Lama">
                      <?= form_error('old-password','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                     <div class="form-group">
                      <label>Password Baru</label>
                      <input type="password" class="form-control" name="password" placeholder="Password Baru">
                      <?= form_error('password','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                     <div class="form-group">
                      <label>Konfirmasi Password Baru</label>
                      <input type="password" class="form-control" name="password1" placeholder="Konfirmasi Password Baru">
                      <?= form_error('password1','<small class="text-danger pl-3">*','</small>'); ?>
                    </div>

                            <div class="form-group mt-4" style="float: right;">
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