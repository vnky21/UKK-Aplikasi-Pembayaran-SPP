  <div class="modal fade" tabindex="-1" role="dialog" id="tambah-spp">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Form Tambah SPP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="" method="post">

                <div class="form-group">
                      <label>Tahun</label>
                      <input type="text" name="tahun" class="form-control">
                </div>

                           <div class="form-group">
                      <label>Nominal per Bulan</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                           Rp
                          </div>
                        </div>
                        <input type="text" name="nominal_bulan" id="nominal_bulan" class="form-control uang">
                      </div>
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



          <div class="modal fade" tabindex="-1" role="dialog" id="edit-spp">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Form Edit SPP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="<?= base_url('spp/edit');  ?>" method="post">

                   <div class="form-group">
                      <label>ID SPP</label>
                      <input type="text" readonly id="id_spp"  name="id_spp" class="form-control">
                </div>

                <div class="form-group">
                      <label>Tahun</label>
                      <input type="text" id="tahun"  name="tahun" class="form-control">
                </div>

                <div class="form-group">
                   <label>Nominal per Bulan</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                           Rp
                          </div>
                        </div>
                        <input type="text" name="nominal_bulan" id="nominal_bulan_edit" class="form-control">
                      </div>
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
  
  
