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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPredikatHasil2"><i class="fas fa-plus"></i> Tambah Data </button>
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
                                    foreach ($predikathasil2 as $ph2) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ph2['BatasNilaiBawah2']; ?></td>
                                            <td><?= $ph2['BatasNilaiAtas2']; ?></td>
                                            <td><?= $ph2['PredikatHasil2']; ?></td>
                                            <td><?= $ph2['KetHasil2']; ?></td>
                                            <td>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#editPredikatHasil2<?= $ph2['IdPredikatHasil2']; ?>">Ubah</button>
                                                <a href="<?= base_url('nilai/predikat_hasil2/delete/' . $ph2['IdPredikatHasil2']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="PredikatHasil2" namaData=<?= $ph2['BatasNilaiBawah2']; ?>>Hapus</a>
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
<!-- Modal addPredikatHasil2 -->
<div class="modal fade" id="addPredikatHasil2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Tambah Data Predikat Hasil Ujian Kelas 3 dan 4</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('nilai/predikat_hasil2/add'); ?>
                <div class="form-group">
                    <label for="batas_bawah2">Batas Bawah Hasil</label>
                    <input type="text" class="form-control" id="batas_bawah2" placeholder="Batas Bawah Hasil" name="batas_bawah2" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="batas_atas2">Batas Atas Hasil</label>
                    <input type="text" class="form-control" id="batas_atas2" placeholder="Batas Atas Hasil" name="batas_atas2" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="predikat_hasil2">Predikat Hasil</label>
                    <input type="text" class="form-control" id="predikat_hasil2" placeholder="Predikat Hasil" name="predikat_hasil2" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="ket_hasil2">Keterangan Hasil</label>
                    <input type="text" class="form-control" id="ket_hasil2" placeholder="Keterangan Hasil" name="ket_hasil2" required autocomplete="off">
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


<!-- Modal editPredikatHasil2 -->
<?php
foreach ($predikathasil2 as $phl) : ?>
    <div class="modal fade" id="editPredikatHasil2<?= $phl['IdPredikatHasil2']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title">Ubah Data Predikat Hasil Ujian Kelas 3 dan 4</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('nilai/predikat_hasil2/update/' . $phl['IdPredikatHasil2']); ?>
                    <div class="form-group">
                        <label for="batas_bawah2">Batas Bawah Hasil</label>
                        <input type="text" class="form-control" id="batas_bawah2" placeholder="Batas Bawah Hasil" name="batas_bawah2" value="<?= $phl['BatasNilaiBawah2']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="batas_atas2">Batas Atas Hasil</label>
                        <input type="text" class="form-control" id="batas_atas2" placeholder="Batas Atas Hasil" name="batas_atas2" value="<?= $phl['BatasNilaiAtas2']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="predikat_hasil2">Predikat Hasil</label>
                        <input type="text" class="form-control" id="predikat_hasil2" placeholder="Predikat Hasil" name="predikat_hasil2" value="<?= $phl['PredikatHasil2']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="ket_hasil2">Keterangan Hasil</label>
                        <input type="text" class="form-control" id="ket_hasil2" placeholder="Keterangan Hasil" name="ket_hasil2" value="<?= $phl['KetHasil2']; ?>">
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