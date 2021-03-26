  

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
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th class="text-center">ID Petugas</th>
                            <th class="text-center">Nama Petugas</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Level</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        $i=1;
                         foreach ($petugas as $key => $value): ?>
                                                                                                                                           
                          <tr>
                            <td><?= $i;  ?>.</td>
                            <td class="text-center"><?= $value['id_petugas'];  ?></td>
                            <td><?= $value['nama_petugas'];  ?></td>
                            <td><?= $value['username'];  ?></td>
                            <td><?= $value['level'];  ?></td>
                            <td style="text-align: center;">
                              <a href="<?= base_url('manajemen-user/admin/edit/').$value['id_petugas']; ?>" class="btn btn-info edit-petugas"><i class="fas fa-cog"></i></a>
                            
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


  


