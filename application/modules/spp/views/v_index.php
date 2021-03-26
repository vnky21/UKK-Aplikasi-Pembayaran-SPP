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
          <a href="#" style="border-radius: 5px;background-color: #1E90FF;" data-toggle="modal" data-target="#tambah-spp" class="btn btn-lg icon-left btn-primary "><i class="fas fa-plus"></i> Tambah Data SPP</a>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th class="text-center">
                    #
                  </th>
                  <th class="text-center">ID SPP</th>
                  <th class="text-center">Tahun Ajaran</th>
                  <th class="text-center">Nominal per Bulan</th>
                  <th class="text-center">Nominal per Tahun</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $i = 1;
                foreach ($spp as $key => $value) : ?>

                  <tr>
                    <td><?= $i;  ?>.</td>
                    <td class="text-center"><?= $value['id_spp'];  ?></td>
                    <td class="text-center"><?= $value['tahun'];  ?></td>
                    <td class="text-center">Rp <?= number_format($value['nominal_bulan'], 0, ".", ".");  ?></td>
                    <td class="text-center">Rp <?= number_format($value['nominal_tahun'], 0, ".", ".");  ?></td>
                    <td class="text-center">
                      <button id="<?= $value['id_spp']; ?>" class="btn btn-info edit-spp"><i class="fas fa-edit"></i></button>
                      <a type="button" href="<?= base_url('spp/delete/') . $value['id_spp'];;  ?>" class="btn btn-icon btn-danger " onclick="return confirm('Anda Yakin Hapus Data <?= $value['id_spp']; ?> ? ');"><i class="fa fa-trash"></i></a>
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