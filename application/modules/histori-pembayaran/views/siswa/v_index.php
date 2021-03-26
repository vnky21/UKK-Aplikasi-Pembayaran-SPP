  

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
<!--                   <div class="card-header">
                     
                  
                  </div> -->
             
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th class="text-center">ID Pembayaran</th>
                            <th class="text-center">Bulan di Bayar</th>
                            <th class="text-center">Tahun di Bayar</th>
                            <th class="text-center">Tanggal Bayar</th>
                            <th class="text-center">Jumlah Bayar</th>
                            <th class="text-center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        $i=1;
                         foreach ($pembayaran as $key => $value): ?>
                                                                                                                                           
                          <tr>
                            <td><?= $i;  ?>.</td>
                            <td class="text-center"><?= $value['id_pembayaran'];  ?></td>
                            <td><?= $value['bulan_dibayar'];  ?></td>
                            <td class="text-center"><?= $value['tahun_dibayar'];  ?></td>
                            <td><?= $value['tgl_bayar']; ?></td>
                            <td><?= 'Rp '.number_format($value['jumlah_bayar'],0,".","."); ?></td>
                            <td style="text-align: center;">
                              <a type="button" href="<?= base_url('histori-pembayaran/histori/detail/').$value['id_pembayaran'];  ?>" class="btn btn-primary edit-kelas"><i class="fas fa-eye"></i></a>
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


  


