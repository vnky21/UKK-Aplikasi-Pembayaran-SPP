
<div class="row">
<div class="col-lg-7">
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
                      <p class="text-md-right col-md-4 col-lg-4">Nama Siswa</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['nama'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">Alamat</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['alamat'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-4 col-lg-4">No.Telp</p>
                      <div class="col-md-8">
                       <p class="font-weight-bold"><?= $siswa['no_telp'];  ?></p> 
                      </div>
                  </div>

           </div>
       </div>
</div>

<div class="col-lg-5">
	      <div class="card">
             <div class="card-header">
                <h4>Data Sekolah</h4>
           </div>
           <div class="card-body">
             	  <div class="form-group row">
                      <p class="text-md-right col-md-5 col-lg-5">Kelas</p>
                      <div class="col-md-7">
                       <p class="font-weight-bold"><?= $siswa['nama_kelas'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-5 col-lg-5">Jurusan</p>
                      <div class="col-md-7">
                       <p class="font-weight-bold"><?= $siswa['jurusan'];  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-5 col-lg-5">Tahun SPP</p>
                      <div class="col-md-7">
                       <p class="font-weight-bold"><?= $siswa['tahun'];  ?></p> 
                      </div>
                  </div>

                 <div class="form-group row">
                      <p class="text-md-right col-md-5 col-lg-5">SPP per Bulan</p>
                      <div class="col-md-7">
                       <p class="font-weight-bold">RP <?= number_format($siswa['nominal_bulan'],0,".",".");  ?></p> 
                      </div>
                  </div>

                  <div class="form-group row">
                      <p class="text-md-right col-md-5 col-lg-5">SPP per Tahun</p>
                      <div class="col-md-7">
                       <p class="font-weight-bold">RP <?= number_format($siswa['nominal_tahun'],0,".",".");  ?></p> 
                      </div>
                  </div>


           </div>
       </div>
</div>	

</div>



