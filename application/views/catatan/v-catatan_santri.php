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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Catatan Santri">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCatatanSantri"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th style="width: 150px;">Nama Santri</th>
                    <th>Jenis Catatan</th>
                    <th style="width: 500px;">Catatan</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($catatan_santri as $cs) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td style="text-align: left;"><?= $cs['NamaLengkap']; ?></td>
                      <td style="text-align: left;"><?= $cs['JenisCatatan']; ?></td>
                      <td>
                        <p style="text-align: justify;"><?= $cs['IsiCatatan']; ?></p>
                      </td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#UpdateCatatanSantri<?= $cs['IdCatatan']; ?>">Ubah</button>
                        <a href="<?= base_url('catatan/catatan_santri/delete/' . $cs['IdCatatan']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Catatan" namaData=<?= $cs['NamaLengkap']; ?>>Hapus</a>
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
<div class="modal fade" id="addCatatanSantri">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Catatan Santri</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('catatan/catatan_santri/add'); ?>
        <div class="form-group">
          <label for="nama">Nama Santri</label>
          <select name="nama" class="form-control">
            <option>Nama Santri</option>
            <?php foreach ($santri as $san) : ?>
              <option value="<?= $san['IdSiswa']; ?>"><?= $san['NamaLengkap']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="jeniscatatan">Jenis Catatan</label>
          <select name="jeniscatatan" class="form-control">
            <option>Jenis Catatan</option>
            <?php foreach ($jenis_catatan as $jc) : ?>
              <option value="<?= $jc['IdJenisCatatan']; ?>"><?= $jc['JenisCatatan']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="isi">Isi Catatan</label>
          <textarea name="isi" class="form-control" rows="5" placeholder="Isikan Catatan"></textarea>
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


<!-- Modal EditCatatan -->
<?php foreach ($catatan_santri as $c_santri) : ?>
  <div class="modal fade" id="UpdateCatatanSantri<?= $c_santri['IdCatatan']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Catatan Santri</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('catatan/catatan_santri/update/' . $c_santri['IdCatatan']); ?>
          <div class="form-group">
            <label for="nama">Nama Santri</label>
            <select name="nama" class="form-control">
              <?php if ($c_santri['IdSiswa']) : ?>
                <option value="<?= $c_santri['IdSiswa']; ?>"><?= $c_santri['NamaLengkap']; ?></option>
                <option>Nama Santri</option>
                <?php foreach ($santri as $san) : ?>
                  <option value="<?= $san['IdSiswa']; ?>"><?= $san['NamaLengkap']; ?></option>
                <?php endforeach; ?>
              <?php else : ?>
                <option>Nama Santri</option>
                <?php foreach ($santri as $san) : ?>
                  <option value="<?= $san['IdSiswa']; ?>"><?= $san['NamaLengkap']; ?></option>
                <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="jeniscatatan">Jenis Catatan</label>
            <select name="jeniscatatan" class="form-control">
              <?php if ($c_santri['IdJenisCatatan']) : ?>
                <option value="<?= $c_santri['IdJenisCatatan']; ?>"><?= $c_santri['JenisCatatan']; ?></option>
                <option>Jenis Catatan</option>
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
            <label for="isi">Isi Catatan</label>
            <textarea name="isi" class="form-control" rows="5" placeholder="Isikan Catatan"> <?= $c_santri['IsiCatatan']; ?></textarea>
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