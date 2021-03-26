  

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
                 <div class="card-header">
                  <h4>Cari Siswa</h4>
                </div>
                <div class="card-body">
                   <form class="form-inline mr-auto" action="<?= base_url('histori-pembayaran/histori/redirect');  ?>" method="post">
         <div class="search-element">
        <input class="form-control nisn" type="search" name="nisn" placeholder="Masukkan NISN" aria-label="Search" data-width="250">
        &nbsp;
            <button class="btn btn-success tambah-siswa" type="submit">Cari</button>
          </div>
        </form>
           


   

                </div>
                </div>
              </div>
            </div>


  


