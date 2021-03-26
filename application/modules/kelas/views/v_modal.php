  <div class="modal fade" tabindex="-1" role="dialog" id="tambah-kelas">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Form Tambah kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="" method="post">

                <div class="form-group">
                      <label>Nama Kelas</label>
                      <input type="text" name="nama_kelas" class="form-control">
                </div>

                <div class="form-group">
                      <label>Nama Jurusan</label>
                      <select name="id_jurusan" class="form-control selectric">

                        <?php foreach ($jurusan as $key => $value): ?>

                           <option value="<?= $value['id_jurusan'];  ?>"><?= $value['jurusan'];  ?></option>
                          
                        <?php endforeach; ?>
                       
       

                      </select>
                    </div>

           

     

              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Kelas</button>
              </div>

              </form>
            </div>
          </div>
        </div>





          <div class="modal fade" tabindex="-1" role="dialog" id="edit-kelas">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Form Edit Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="<?= base_url('kelas/edit');  ?>" method="post">

                <div class="form-group">
                    <label>ID Jurusan</label>
                    <input type="text" name="id_kelas" readonly id="id_kelas" class="form-control">
                </div>

                  <div class="form-group">
                      <label>Nama Kelas</label>
                      <input type="text" name="nama_kelas" id="nama_kelas" class="form-control">
                </div>

           

                <div class="form-group">
                      <label>Nama Jurusan</label>
                      <select name="id_jurusan" id="id_jurusan" class="form-control selectric">

                        <?php foreach ($jurusan as $key => $value): ?>
                           <option value="<?= $value['id_jurusan'];  ?>"><?= $value['jurusan'];  ?></option>                        
                        <?php endforeach; ?>
                      
                      </select>
                 </div>

              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit Jurusan</button>
              </div>

              </form>
            </div>
          </div>
        </div>
  
  
