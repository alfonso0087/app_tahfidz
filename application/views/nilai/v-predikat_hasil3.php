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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPredikatHasil3"><i class="fas fa-plus"></i> Tambah Data </button>
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
                                    foreach ($predikathasil3 as $ph3) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ph3['BatasBawahHasil3']; ?></td>
                                            <td><?= $ph3['BatasAtasHasil3']; ?></td>
                                            <td><?= $ph3['PredikatHasil3']; ?></td>
                                            <td><?= $ph3['KetHasil3']; ?></td>
                                            <td>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#editPredikatHasil3<?= $ph3['IdPredikatHasil3']; ?>">Ubah</button>
                                                <a href="<?= base_url('nilai/predikat_hasil3/delete/' . $ph3['IdPredikatHasil3']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="PredikatHasil3" namaData=<?= $ph3['BatasBawahHasil3']; ?>>Hapus</a>
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
<!-- Modal addPredikatHasil3 -->
<div class="modal fade" id="addPredikatHasil3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Tambah Data Predikat Hasil Ujian Kelas 5 dan 6</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('nilai/predikat_hasil3/add'); ?>
                <div class="form-group">
                    <label for="batas_bawah3">Batas Bawah Hasil</label>
                    <input type="text" class="form-control" id="batas_bawah3" placeholder="Batas Bawah Hasil" name="batas_bawah3" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="batas_atas3">Batas Atas Hasil</label>
                    <input type="text" class="form-control" id="batas_atas3" placeholder="Batas Atas Hasil" name="batas_atas3" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="predikat_hasil3">Predikat Hasil</label>
                    <input type="text" class="form-control" id="predikat_hasil3" placeholder="Predikat Hasil" name="predikat_hasil3" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="ket_hasil3">Keterangan Hasil</label>
                    <input type="text" class="form-control" id="ket_hasil3" placeholder="Keterangan Hasil" name="ket_hasil3" required autocomplete="off">
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


<!-- Modal editPredikatHasil3 -->
<?php
foreach ($predikathasil3 as $phd) : ?>
    <div class="modal fade" id="editPredikatHasil3<?= $phd['IdPredikatHasil3']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title">Ubah Data Predikat Hasil Ujian Kelas 3 dan 4</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('nilai/predikat_hasil3/update/' . $phd['IdPredikatHasil3']); ?>
                    <div class="form-group">
                        <label for="batas_bawah3">Batas Bawah Hasil</label>
                        <input type="text" class="form-control" id="batas_bawah3" placeholder="Batas Bawah Hasil" name="batas_bawah3" value="<?= $phd['BatasBawahHasil3']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="batas_atas3">Batas Atas Hasil</label>
                        <input type="text" class="form-control" id="batas_atas3" placeholder="Batas Atas Hasil" name="batas_atas3" value="<?= $phd['BatasAtasHasil3']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="predikat_hasil3">Predikat Hasil</label>
                        <input type="text" class="form-control" id="predikat_hasil3" placeholder="Predikat Hasil" name="predikat_hasil3" value="<?= $phd['PredikatHasil3']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="ket_hasil3">Keterangan Hasil</label>
                        <input type="text" class="form-control" id="ket_hasil3" placeholder="Keterangan Hasil" name="ket_hasil3" value="<?= $phd['KetHasil3']; ?>">
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