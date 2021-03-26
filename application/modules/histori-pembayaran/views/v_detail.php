
<div class="row">
<div class="col-lg-7">
	      <div class="card">
             <div class="card-header">
                <h4>Data Pembayaran</h4>


           </div>
           <div class="card-body">
             	  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">ID Pembayaran</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $pembayaran['id_pembayaran'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Bulan dibayar</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $pembayaran['bulan_dibayar'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Tahun dibayar</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $pembayaran['tahun_dibayar'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Tanggal Transaksi</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $pembayaran['tgl_bayar'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Jumlah</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= 'Rp '.number_format($pembayaran['jumlah_bayar'],0,".",".");  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Nama Petugas</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $pembayaran['nama_petugas'];  ?></p> 
                      </div>
                  </div>

           </div>
       </div>
</div>

<div class="col-lg-5">
	      <div class="card">
             <div class="card-header">
                <h4>Data Siswa</h4>
           </div>
           <div class="card-body">
             	  <div class="form-group row">
                      <p class="text-md-right col-md-5 col-lg-5">NISN</p>
                      <div class="col-md-7">
                       <p class="font-weight-bold"><?= $pembayaran['nisn'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-5 col-lg-5">NIS</p>
                      <div class="col-md-7">
                       <p class="font-weight-bold"><?= $pembayaran['nis'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-5 col-lg-5">Nama Siswa</p>
                      <div class="col-md-7">
                       <p class="font-weight-bold"><?= $pembayaran['nama'];  ?></p> 
                      </div>
                  </div>

                 <div class="form-group row">
                      <p class="text-md-right col-md-5 col-lg-5">Kelas</p>
                      <div class="col-md-7">
                       <p class="font-weight-bold"> <?= $pembayaran['nama_kelas'];   ?></p> 
                      </div>
                  </div>


           </div>
       </div>
</div>	

</div>



