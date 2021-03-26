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
          <a href="#" style="border-radius: 5px;background-color: #1E90FF;" data-toggle="modal" data-target="#tambah-kelas" class="btn btn-lg icon-left btn-primary"><i class="fas fa-plus"></i> Tambah Kelas</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th class="text-center">
                    #
                  </th>
                  <th class="text-center">ID Kelas</th>
                  <th class="text-center">Nama Kelas</th>
                  <th class="text-center">Jurusan</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $i = 1;
                foreach ($kelas as $key => $value) : ?>

                  <tr>
                    <td><?= $i;  ?>.</td>
                    <td class="text-center"><?= $value['id_kelas'];  ?></td>
                    <td><?= $value['nama_kelas'];  ?></td>
                    <td><?php
                        $data = $this->Crud_Model->getWhere('tb_jurusan', 'id_jurusan', $value['id_jurusan']);

                        echo $data['jurusan'];  ?></td>
                    <td style="text-align: center;">
                      <button id="<?= $value['id_kelas']; ?>" class="btn btn-info edit-kelas"><i class="fas fa-edit"></i></button>
                      <a type="button" href="<?= base_url('kelas/delete/') . $value['id_kelas'];;  ?>" class="btn btn-icon btn-danger " onclick="return confirm('Anda Yakin Hapus Data <?= $value['nama_kelas']; ?> ? ');"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>

                <?php
                  $i++;
                endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>