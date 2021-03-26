  <div class="modal fade" tabindex="-1" role="dialog" id="tambah-petugas">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Form Tambah Jurusan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="" method="post">

            <div class="form-group">
              <label>Nama Jurusan</label>
              <input type="text" name="jurusan" class="form-control">
            </div>



        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Jurusan</button>
        </div>

        </form>
      </div>
    </div>
  </div>





  <div class="modal fade" tabindex="-1" role="dialog" id="edit-jurusan">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Form Edit Jurusan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="<?= base_url('jurusan/edit');  ?>" method="post">

            <div class="form-group">
              <label>ID Jurusan</label>
              <input type="text" name="id_jurusan" readonly id="id_jurusan" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama Jurusan</label>
              <input type="text" name="jurusan" id="jurusan" class="form-control">
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