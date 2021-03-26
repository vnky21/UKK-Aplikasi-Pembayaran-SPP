  <div class="modal fade" tabindex="-1" role="dialog" id="tambah-petugas">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Tambah Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="" method="post">

                <div class="form-group">
                      <label>Nama Petugas</label>
                      <input type="text" name="nama_petugas" class="form-control">
                </div>

                <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control">
                </div>

                 <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="password" name="password2" class="form-control">
                </div>
                

                     <div class="form-group">
                      <label>Level</label>
                      <select name="level" class="form-control selectric">
                        <option value="Admin">Admin</option>
                        <option value="Petugas">Petugas</option>

                      </select>
                    </div>
     

              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Petugas</button>
              </div>

              </form>
            </div>
          </div>
        </div>





          <div class="modal fade" tabindex="-1" role="dialog" id="edit-petugas">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="<?= base_url('petugas/edit');  ?>" method="post">

                <div class="form-group">
                    <label>ID Petugas</label>
                    <input type="text" name="id_petugas" readonly id="id_petugas" class="form-control">
                </div>

                <div class="form-group">
                      <label>Nama Petugas</label>
                      <input type="text" name="nama_petugas" id="nama_petugas" class="form-control">
                </div>



              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit Petugas</button>
              </div>

              </form>
            </div>
          </div>
        </div>
  
  
