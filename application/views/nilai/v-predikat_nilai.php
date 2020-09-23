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
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Predikat Nilai">
                        </div>
                        <div class="card-body">
                            <div class="col mb-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPredikatNilai"><i class="fas fa-plus"></i> Tambah Data </button>
                            </div>
                            <table id="example2" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th style="width: 50px;">No</th>
                                        <th>Batas Bawah</th>
                                        <th>Batas Atas</th>
                                        <th>Predikat</th>
                                        <th>Keterangan</th>
                                        <th style="width: 200px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($predikatnilai as $pn) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $pn['BatasNilaiBawah']; ?></td>
                                            <td><?= $pn['BatasNilaiAtas']; ?></td>
                                            <td><?= $pn['PredikatNilai']; ?></td>
                                            <td><?= $pn['KetNilai']; ?></td>
                                            <td>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#editPredikatNilai<?= $pn['IdPredikatNilai']; ?>">Ubah</button>
                                                <a href="<?= base_url('nilai/predikat_nilai/delete/' . $pn['IdPredikatNilai']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="PredikatNilai" namaData=<?= $pn['BatasNilaiBawah']; ?>>Hapus</a>
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

<!-- Modal addPredikatNilai -->
<div class="modal fade" id="addPredikatNilai">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Tambah Data Predikat Nilai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('nilai/predikat_nilai/add'); ?>
                <div class="form-group">
                    <label for="batas_bawah">Batas Nilai Bawah</label>
                    <input type="text" class="form-control" id="batas_bawah" placeholder="Batas Nilai Bawah" name="batas_bawah" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="batas_atas">Batas Nilai Atas</label>
                    <input type="text" class="form-control" id="batas_atas" placeholder="Batas Nilai Atas" name="batas_atas" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="predikat_nilai">Predikat Nilai</label>
                    <input type="text" class="form-control" id="predikat_nilai" placeholder="Predikat Nilai" name="predikat_nilai" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="ket_nilai">Keterangan</label>
                    <input type="text" class="form-control" id="ket_nilai" placeholder="Keterangan" name="ket_nilai" required autocomplete="off">
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


<!-- Modal editPredikatNilai -->
<?php
foreach ($predikatnilai as $pnilai) : ?>
    <div class="modal fade" id="editPredikatNilai<?= $pnilai['IdPredikatNilai']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title">Ubah Data Predikat Nilai</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open('nilai/predikat_nilai/update/' . $pnilai['IdPredikatNilai']); ?>
                    <div class="form-group">
                        <label for="batas_bawah">Nilai Bawah</label>
                        <input type="text" class="form-control" id="batas_bawah" placeholder="Nilai Bawah" name="batas_bawah" value="<?= $pnilai['BatasNilaiBawah']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="batas_atas">Nilai Atas</label>
                        <input type="text" class="form-control" id="batas_atas" placeholder="Nilai Atas" name="batas_atas" value="<?= $pnilai['BatasNilaiAtas']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="predikat_nilai">Predikat Nilai</label>
                        <input type="text" class="form-control" id="predikat_nilai" placeholder="Predikat Nilai" name="predikat_nilai" value="<?= $pnilai['PredikatNilai']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="ket_nilai">Keterangan</label>
                        <input type="text" class="form-control" id="ket_nilai" placeholder="Keterangan" name="ket_nilai" value="<?= $pnilai['KetNilai']; ?>">
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