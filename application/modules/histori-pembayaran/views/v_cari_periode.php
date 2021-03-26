<?= $this->session->flashdata('message'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Periode per Bulan</h4>
            </div>
            <div class="card-body">
                <form class="form-inline mr-auto" action="<?= base_url('histori-pembayaran/histori/periodeBulan');  ?>" method="get">
                    <div class="search-element">
                        <select name="bulan" class="form-control">

                            <?php foreach ($bulan as $key => $value) : ?>
                                <option value="<?= $value['bulan'];  ?>"><?= $value['bulan'];  ?></option>
                            <?php endforeach; ?>

                        </select>
                        <select name="tahun" class="form-control">

                            <option value="<?= $tahun[0];  ?>"><?= $tahun[0];  ?></option>
                            <option value="<?= $tahun[1];  ?>"><?= $tahun[1];  ?></option>
                            <option value="<?= $tahun[2];  ?>"><?= $tahun[2];  ?></option>
                            <option value="<?= $tahun[3];  ?>"><?= $tahun[3];  ?></option>
                        </select>
                        <button class="btn btn-danger" style="margin-left:20px;" type="submit"><i class="fas fa-search"></i> Lihat Histori</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Periode per Tahun</h4>
            </div>
            <div class="card-body">
                <form class="form-inline mr-auto" action="<?= base_url('histori-pembayaran/histori/periodeTahun');  ?>" method="get">
                    <div class="search-element">
                        <select name="tahun" class="form-control">

                            <option value="<?= $tahun[0];  ?>"><?= $tahun[0];  ?></option>
                            <option value="<?= $tahun[1];  ?>"><?= $tahun[1];  ?></option>
                            <option value="<?= $tahun[2];  ?>"><?= $tahun[2];  ?></option>
                            <option value="<?= $tahun[3];  ?>"><?= $tahun[3];  ?></option>
                        </select>
                        <button class="btn btn-danger" style="margin-left:20px;" type="submit"><i class="fas fa-search"></i> Lihat Histori</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>