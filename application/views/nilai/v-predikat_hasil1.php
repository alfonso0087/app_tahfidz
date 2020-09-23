<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content mt-2">
        <div class="container-fluid">
            <div class="row">

                <!-- /.col-md-6 -->
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header bg-success">
                            <h4 class="m-0"><?= $title; ?></h4>
                        </div>

                        <!-- Swall -->
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Predikat Hasil">
                        </div>
                        <div class="card-body">
                            <div class="col mb-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPredikatHasil1"><i class="fas fa-plus"></i> Tambah Data </button>
                            </div>
                            <table id="example2" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th style="width: 50px;">No</th>
                                        <th>Batas Bawah Hasil</th>
                                        <th>Batas Atas Hasil</th>
                                        <th>Predikat Hasil</th>
                                        <th>Keterangan Hasil</th>
                                        <th style="width: 200px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($predikathasil1 as $ph1) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ph1['BatasNilaiBawah1']; ?></td>
                                            <td><?= $ph1['BatasNilaiAtas1']; ?></td>
                                            <td><?= $ph1['PredikatHasil1']; ?></td>
                                            <td><?= $ph1['KetHasil1']; ?></td>
                                            <td>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#editPredikatHasil1<?= $ph1['IdPredikatHasil1']; ?>">Ubah</button>
                                                <a href="<?= base_url('nilai/predikat_hasil1/delete/' . $ph1['IdPredikatHasil1']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="PredikatHasil1" namaData=<?= $ph1['BatasNilaiBawah1']; ?>>Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Modal addPredikatHasil1 -->
<div class="modal fade" id="addPredikatHasil1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Tambah Data Predikat Hasil Ujian Kelas 1 dan 2</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('nilai/predikat_hasil1/add'); ?>
                <div class="form-group">
                    <label for="batas_bawah1">Batas Bawah Hasil</label>
                    <input type="text" class="form-control" id="batas_bawah1" placeholder="Batas Bawah Hasil" name="batas_bawah1" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="batas_atas1">Batas Atas Hasil</label>
                    <input type="text" class="form-control" id="batas_atas1" placeholder="Batas Atas Hasil" name="batas_atas1" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="predikat_hasil1">Predikat Hasil</label>
                    <input type="text" class="form-control" id="predikat_hasil1" placeholder="Predikat Hasil" name="predikat_hasil1" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="ket_hasil1">Keterangan Hasil</label>
                    <input type="text" class="form-control" id="ket_hasil1" placeholder="Keterangan Hasil" name="ket_hasil1" required autocomplete="off">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Modal editPredikatHasil1 -->
<?php
foreach ($predikathasil1 as $phs) : ?>
    <div class="modal fade" id="editPredikatHasil1<?= $phs['IdPredikatHasil1']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title">Ubah Data Predikat Hasil Ujian Kelas 1 dan 2</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('nilai/predikat_hasil1/update/' . $phs['IdPredikatHasil1']); ?>
                    <div class="form-group">
                        <label for="batas_bawah1">Batas Bawah Hasil</label>
                        <input type="text" class="form-control" id="batas_bawah1" placeholder="Batas Bawah Hasil" name="batas_bawah1" value="<?= $phs['BatasNilaiBawah1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="batas_atas1">Batas Atas Hasil</label>
                        <input type="text" class="form-control" id="batas_atas1" placeholder="Batas Atas Hasil" name="batas_atas1" value="<?= $phs['BatasNilaiAtas1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="predikat_hasil1">Predikat Hasil</label>
                        <input type="text" class="form-control" id="predikat_hasil1" placeholder="Predikat Hasil" name="predikat_hasil1" value="<?= $phs['PredikatHasil1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="ket_hasil1">Keterangan Hasil</label>
                        <input type="text" class="form-control" id="ket_hasil1" placeholder="Keterangan Hasil" name="ket_hasil1" value="<?= $phs['KetHasil1']; ?>">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Ubah</button>
                </div>
                <?= form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach; ?>
<!-- /.modal -->