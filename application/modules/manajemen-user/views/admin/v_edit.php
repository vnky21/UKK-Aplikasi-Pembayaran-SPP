 
<h2 class="section-title">Back</h2>
           <?php echo validation_errors('<div class="alert alert-danger alert-dismissible show fade alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body"><button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                       ', '</div>
                    </div>'); ?>

                    <?= $this->session->flashdata('message');  ?>

       <div class="row">
        
              <div class="col-lg-4">
                <div class="card">

                  <div class="card-header">
                    <h4>Detail User</h4>
                    <div class="card-header-action">
                      <a data-collapse="#mycard-collapse" class="btn btn-icon btn-primary" href="#"><i class="fas fa-minus"></i></a>
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
                      <h5><?= $petugas['id_petugas'];  ?> </h5>
                      <h5><?= $petugas['nama_petugas'];  ?></h5>

                      <br>

                      <b>Tanggal Daftar :</b> <?= date('d M Y',$petugas['time']);  ?>


                    
                    </div>
                    
                  </div>
                </div>             
              </div>


               <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit User</h4>
                    <div class="card-header-action">
               
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
                     
                     <form method="POST" action="<?= base_url('manajemen-user/admin/edit/').$petugas['id_petugas']; ?>">

                      <input type="hidden" name="jenis-form" value="edit-username">

                      <div class="form-group">
                      <label>ID User</label>
                      <input readonly value="<?= $petugas['id_petugas'];  ?>" name="id_petugas" type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                      <label>Nama Petugas</label>
                      <input readonly value="<?= $petugas['nama_petugas'];  ?>"  type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" value="<?= $petugas['username'];  ?>" class="form-control form-control-sm">
                      </div>     

                                                             
                <br>
                     <button type="submit" class="btn btn-sm btn-success float-right">Confirm</button>

                       </form>
                                      
                    </div>

                    <div class="card-footer">
                       
                    </div>                    
                  </div>
                 </div>         
                </div>

                <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Ubah Password</h4>
                    <div class="card-header-action">
                    
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <div class="card-body">
                     
                     <form method="POST" action="<?= base_url('manajemen-user/admin/edit/').$petugas['id_petugas']; ?>">
                     
                       <input type="hidden" name="jenis-form" value="edit-password">
                       <input readonly value="900003" name="id_user" type="hidden" >
                      <div class="form-group">
                      <label>New Password</label>
                      <input type="Password" name="password" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="Password" name="password2" class="form-control form-control-sm">
                      </div>

                     <button type="submit" class="btn btn-sm btn-success float-right">Confirm</button>
                       </form>
                                      
                    </div>

                    <div class="card-footer">
                       
                    </div>                    
                  </div>
                 </div>         
                </div>





           </div>