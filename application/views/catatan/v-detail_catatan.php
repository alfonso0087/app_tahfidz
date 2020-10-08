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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Detail Jenis Catatan">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDetailJenisCatatan"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Jenis Catatan</th>
                    <th>Detail Catatan</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($detail_jenis_catatan as $djc) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td style="text-align: left;"><?= $djc['JenisCatatan']; ?></td>
                      <td style="text-align: left;"><?= $djc['DetailCatatan']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#UpdateDetailJenisCatatan<?= $djc['IdDetailJenisCatatan']; ?>">Ubah</button>
                        <a href="<?= base_url('catatan/detail_catatan/delete/' . $djc['IdDetailJenisCatatan']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Detail Jenis Catatan" namaData=<?= $djc['JenisCatatan']; ?>>Hapus</a>
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

<!-- Modal AddCatatan -->
<div class="modal fade" id="addDetailJenisCatatan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Detail Jenis Catatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('catatan/Detail_catatan/add'); ?>
        <div class="form-group">
          <label for="jeniscatatan">Jenis Catatan</label>
          <select name="jeniscatatan" class="form-control">
            <option> --Pilih Jenis Catatan-- </option>
            <?php foreach ($jenis_catatan as $jc) : ?>
              <option value="<?= $jc['IdJenisCatatan']; ?>"><?= $jc['JenisCatatan']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="isidetailcatatan">Detail Catatan</label>
          <textarea name="isidetailcatatan" class="form-control" rows="5" placeholder="Isikan Detail Catatan"></textarea>
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


<!-- Modal AddCatatan -->
<?php foreach ($detail_jenis_catatan as $d_jenis_catatan) : ?>
  <div class="modal fade" id="UpdateDetailJenisCatatan<?= $d_jenis_catatan['IdDetailJenisCatatan']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Detail Jenis Catatan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('catatan/detail_catatan/update/' . $d_jenis_catatan['IdDetailJenisCatatan']); ?>
          <div class="form-group">
            <label for="jeniscatatan">Jenis Catatan</label>
            <select name="jeniscatatan" class="form-control">
              <?php if ($d_jenis_catatan['IdJenisCatatan']) : ?>
                <option value="<?= $d_jenis_catatan['IdJenisCatatan']; ?>"><?= $d_jenis_catatan['JenisCatatan']; ?></option>
                <option> -- Pilih Jenis Catatan -- </option>
                <?php foreach ($jenis_catatan as $jc) : ?>
                  <option value="<?= $jc['IdJenisCatatan']; ?>"><?= $jc['JenisCatatan']; ?></option>
                <?php endforeach; ?>
              <?php else : ?>
                <option>Jenis Catatan</option>
                <?php foreach ($jenis_catatan as $jc) : ?>
                  <option value="<?= $jc['IdJenisCatatan']; ?>"><?= $jc['JenisCatatan']; ?></option>
                <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="isidetailcatatan">Isi Detail Catatan</label>
            <textarea name="isidetailcatatan" class="form-control" rows="5" placeholder="Isikan Detail Jenis Catatan"> <?= $d_jenis_catatan['DetailCatatan']; ?></textarea>
          </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Ubah</button>
        </div>
        <?= form_close(); ?>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php endforeach; ?>
<!-- /.modal -->