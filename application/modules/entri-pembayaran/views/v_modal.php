  <div class="modal fade" tabindex="-1" role="dialog" id="ubah-spp">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Form Ubah SPP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="<?= base_url('siswa/naikKelas');  ?>" method="post">

                   <div class="form-group">
                      <label>NISN (Nomor Induk Siswa Nasional)</label>
                      <input type="text" readonly class="form-control nisn" id="nisn" name="nisn" readonly>
                    </div>

                     <div class="form-group">
                      <label>Nama Siswa</label>
                      <input type="text" class="form-control" name="nama" id="nama" readonly>
                    </div>

                 <div class="form-group">
                      <label>Tahun SPP</label>
                      <select name="spp"  class="spp form-control selectric">
                        <option  value="<?= null; ?>">--- Kelas ---</option>

                        <?php foreach ($spp as $key => $value): ?>

                            <option value="<?= $value['id_spp'];  ?>"><?= $value['tahun'];  ?></option>
                                                  
                        <?php endforeach ?>
                      
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Kelas</label>
                      <select name="kelas"  class="kelas form-control selectric">
                        <option  value="<?= null; ?>">--- Kelas ---</option>

                        <?php foreach ($kelas as $key => $value): ?>

                            <option value="<?= $value['id_kelas'];  ?>"><?= $value['nama_kelas'];  ?></option>
                                                  
                        <?php endforeach ?>
                      
                      </select>
                    </div>

    

          

              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah Tahun SPP</button>
              </div>

              </form>
            </div>
          </div>
        </div>
  
  
