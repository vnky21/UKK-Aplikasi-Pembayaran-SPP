
   <?= $this->session->flashdata('message'); ?>
   <?php if ($total == TRUE): ?>
         <div class="alert alert-danger alert-has-icon alert-dismissible show fade ">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Perhatian</div>
                        SPP siswa <b><?= $siswa['nama'];  ?></b> telah <b>Lunas</b>, harap ubah <b>tahun SPP</b> !
                      </div>
                    </div>
   <?php endif; ?>


<div class="row">
<div class="col-lg-5">
	      <div class="card">
             <div class="card-header">
                <h4>Data Pribadi</h4>
                 <div class="card-header-action">
                  <?php if ($total == TRUE): ?>
                     <button class="btn btn-icon btn-danger ubah-spp" id="<?= $siswa['nisn'];  ?>">Ubah Tahun SPP</button>
                  <?php endif; ?>
                      
                    </div>
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

                     <div class="row">
                      <p class="text-md-right col-md-4 col-lg-4">SPP per Bulan</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold">RP <?= number_format($siswa['nominal_bulan'],0,".",".");  ?></p> 
                      </div>
                  </div>

                  <div class="row">
                      <p class="text-md-right col-md-4 col-lg-4">SPP per Tahun</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold">RP <?= number_format($siswa['nominal_tahun'],0,".",".");  ?></p> 
                      </div>
                  </div>
             </div>
       </div>
       <div class="card chat-box" id="mychatbox" style="height: 525px;">
                  <div class="card-header">
                    <h4>Histori Pembayaran Siswa</h4>
                  </div>
                  <div class="card-body chat-content">
                        <?php foreach ($pembayaran as $key => $value): ?>

              <div class="card">                 
                <div class="card-body">
                  <b><?= $value['id_pembayaran'];  ?></b> <span style="float: right;"><?= $value['tgl_bayar'];  ?></span><br>
                  Bulan : <span class="font-weight-bold"><?= $value['bulan_dibayar'];  ?></span><br>
                  Tahun : <span class="font-weight-bold"><?= $value['tahun_dibayar'];  ?></span><br>
                  Jumlah Bayar : <span class="font-weight-bold"><?= 'Rp '.number_format($value['jumlah_bayar'],0,".","."); ?></span>
                  <br>
                  Nama Petugas : <span class="font-weight-bold"><?= $value['nama_petugas'];  ?></span>                  
                </div>
              </div>
    
             <?php endforeach; ?>
                  </div>

                </div>
</div>


<div class="col-lg-7">
   <div class="card">
                <div class="card-header">
                  <h4>Bulan Pembayaran</h4>
                </div>
                <div class="card-body p-0">    
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>Bulan Pembayaran</th>
                        <th>Status Pembayaran</th>
                        <th>Aksi</th>
                      </tr>

                   <?php 
                   $i=1;
                   foreach ($bulan as $key => $value): ?>

                    <?php if ($data !== null && in_array($value['bulan'],$data)): ?>
                      
                      <tr>
                      <th><?= $i;  ?></th>
                      <th><?= $value['bulan'] ?></th>
                      <td><div class="badge badge-success">Bayar</div></td>
                      <th></th>
                      </tr>

                      <?php else: ?>
                      
                      <tr>
                      <th><?= $i;  ?></th>
                      <th><?= $value['bulan'] ?></th>
                      <td><div class="badge badge-danger">Belum Bayar</div></td>
                      <th><a d href="<?= base_url('entri-pembayaran/pembayaran/transaksi/').$siswa['nisn'].'/'.$siswa['id_spp'].'/'.$value['bulan'];  ?>" type="button" onclick="return confirm('Anda yakin melakukan transaksi bulan <?= $value['bulan']; ?> ?');" class="btn btn-info">Bayar</a></th>
                      </tr>
                      
                    <?php endif; ?>
                     
                   <?php 
                 $i++;  
                 endforeach; ?>
  
                      
                    </table>
                  </div>
                </div>
           
 </div>	
</div>





