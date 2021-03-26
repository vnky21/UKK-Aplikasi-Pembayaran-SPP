
   <?= $this->session->flashdata('message'); ?>
<div class="row">
<div class="col-lg-5">
	      <div class="card">
             <div class="card-header">
                <h4>Data Pribadi</h4>
           </div>
           <div class="card-body">
             	  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">NISN</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['nisn'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">NIS</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['nis'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Nama</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['nama'];  ?></p> 
                      </div>
                  </div>

                    <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Kelas</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['nama_kelas'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Jurusan</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['jurusan'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Tahun SPP</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['tahun'];  ?></p> 
                      </div>
                  </div>



           </div>
       </div>
</div>

<div class="col-lg-7">

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
</div>
