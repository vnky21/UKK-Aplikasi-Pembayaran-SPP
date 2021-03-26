  

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
                     
                    <div class="row">
                           <form action="" method="get">
                      <div class="col-lg-12"> 
                      <select name="id_kelas" class="form-control select2">
                      <option value="">--- Semua ---</option>

                        <?php foreach ($kelas as $key => $value): ?>

                          <?php if ($_GET['id_kelas'] === $value[id_kelas]): ?>
                                 <option selected value="<?= $value['id_kelas'];  ?>"><?= $value['nama_kelas'];  ?></option>
                            <?php else: ?>
                                 <option value="<?= $value['id_kelas'];  ?>"><?= $value['nama_kelas'];  ?></option>
                          <?php endif; ?>

                           
                          
                        <?php endforeach ?>
                      </select>
                       </div> 
                    </div>  
                           <button type="submit" value="cari" style="margin-left: 15px; border-radius: 5px;"  class="btn btn-lg  btn-success" > Tampilkan</button>  

                           </form>
                
                                        
                     <a style="margin-left: 400px;margin-right: 20px;border-radius: 5px;" href="<?= base_url('siswa/add')  ?>" class="btn btn-lg  btn-success" ><i class="fas fa-plus"></i> Tambah Data Siswa</a>  
                     <a style=";border-radius: 5px;" href="<?= base_url('siswa/add')  ?>" class="btn btn-lg  btn-primary" ><i class="fas fa-plus"></i> Tambah Data Siswa</a>  


                  </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th class="text-center">NISN</th>
                            <th class="text-center">NIS</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Tahun SPP</th>
                            <th class="text-center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        $i=1;
                         foreach ($siswa as $key => $value): ?>
                                                                                                                                           
                          <tr>
                            <td><?= $i;  ?>.</td>
                            <td class="text-center"><?= $value['nisn'];  ?></td>
                            <td><?= $value['nis'];  ?></td>
                            <td><?= $value['nama'];  ?></td>
                            <td><?= $value['nama_kelas']; ?></td>
                            <td class="text-center"><?= $value['tahun']; ?></td>
                            <td style="text-align: center;">
                              <a type="button" href="<?= base_url('manajemen-user/siswa/resetPassword/'). $value['nisn']; ;  ?>" class="btn btn-icon btn-danger ">Reset Password</a>
                            </td>
                          </tr>

                            <?php 
                           $i++; 
                          endforeach; ?>  
    
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


  


