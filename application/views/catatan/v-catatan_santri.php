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
                    <th>Periode</th>
                    <th>Jenis Catatan</th>
                    <th style="width: 250px;">Detail Catatan</th>
                    <th style="width: 250px;">Catatan Musyrif</th>
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
                      <td style="text-align: left;"><?= $cs['Periode']; ?></td>
                      <td style="text-align: left;"><?= $cs['JenisCatatan']; ?></td>
                      <td>
                        <p style="text-align: left;"><?= $cs['IsiCatatan']; ?></p>
                      </td>
                      <td>
                        <p style="text-align: left;"><?= $cs['CatatanMusyrif']; ?></p>
                      </td>
                      <td>
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
  <div class="modal-dialog modal-lg">
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
            <option> -- Pilih Nama Santri -- </option>
            <?php foreach ($santri as $san) : ?>
              <option value="<?= $san['IdSiswa']; ?>"><?= $san['NamaLengkap']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="periode">Periode</label>
          <select name="periode" class="form-control">
            <option> -- Pilih Periode -- </option>
            <?php foreach ($periode as $p) : ?>
              <option value="<?= $p['IdPeriode']; ?>"><?= $p['Periode']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="jeniscatatan">Jenis Catatan</label>
          <select name="jeniscatatan" class="form-control">
            <option> -- Pilih Jenis Catatan -- </option>
            <?php foreach ($jenis_catatan as $jc) : ?>
              <option value="<?= $jc['IdJenisCatatan']; ?>" id_jeniscatatan="<?= $jc['IdJenisCatatan']; ?>"><?= $jc['JenisCatatan']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label>Detail Jenis Catatan</label>
          <div class="select2-blue">
            <select class="select2" multiple="multiple" style="width: 100%;" data-dropdown-css-class="select2-blue" name="detailjeniscatatan[]" data-placeholder=" -- Pilih Detail Jenis Catatan -- " id="detailjeniscatatan">
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="catatan_musyrif">Catatan Musyrif</label>
          <textarea name="catatan_musyrif" class="form-control" rows="4" placeholder="Jika ada catatan tambahan silahkan isi form ini, jika tidak bisa diabaikan."></textarea>
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

<script>
  $(function() {
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });

  $(document).ready(function() {
    $("select[name=jeniscatatan]").on("change", function() {
      var idjeniscatatan = $("option:selected", this).attr("id_jeniscatatan");
      // alert(idjeniscatatan);
      $.ajax({
        type: "POST",
        url: "<?= base_url('catatan/Catatan_santri/getDetailCatatanByJenis') ?>",
        data: 'id_jenis_catatan=' + idjeniscatatan,
        success: function(hasil) {
          // console.log(hasil);
          $("select[id=detailjeniscatatan]").html(hasil);
        }
      });
    });
  });
</script>