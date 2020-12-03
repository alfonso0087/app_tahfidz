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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Target Ujian Perkelas">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTargetUjianKelas"><i class="fas fa-plus"></i> Tambah Banyak Data</button>
                <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#addTargetUjian"><i class="fas fa-plus"></i> Tambah Banyak 1 Data</button>
              </div>

              <table id="example2" class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Kelas</th>
                    <th>Target Ujian</th>
                    <th style="width: 200px;" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $jum = 1;
                  foreach ($target_ujian_kelas as $tuk) : ?>
                    <?php if ($jum <= 1) : ?>
                      <tr>
                        <td rowspan="<?= $tuk['JumlahKelas']; ?>" style="vertical-align: middle;"><?= $no++; ?></td>
                        <td rowspan="<?= $tuk['JumlahKelas']; ?>" class="text-center" style="vertical-align: middle;"><?= $tuk['NamaKelas']; ?></td>
                        <?php $jum = $tuk['JumlahKelas']; ?>
                      <?php else : ?>
                        <?php $jum = $jum - 1; ?>
                      <?php endif; ?>
                      <td><?= $tuk['Keterangan']; ?></td>
                      <td class="text-center">
                        <a href="<?= base_url('ujian/target_ujian_kelas/delete/' . $tuk['IdTargetKelas']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Target Ujian" namaData=<?= $tuk['Keterangan']; ?>><i class="fas fa-fw fa-trash"></i> Hapus</a>
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

<!-- Modal Add Target Ujian Kelas -->
<div class="modal fade" id="addTargetUjianKelas">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Target Ujian Kelas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('ujian/target_ujian_kelas/add'); ?>
        <div class="form-group">
          <label for="jenis_ujian">Kelas</label>
          <select name="kelas" class="form-control">
            <option> -- Pilih Kelas -- </option>
            <?php foreach ($kelas as $kls) : ?>
              <option value="<?= $kls['IdKelas']; ?>" id_kelas="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label>Target Ujian</label>
          <div class="select2-green">
            <select class="select2" multiple="multiple" style="width: 100%;" data-dropdown-css-class="select2-green" name="targetujian[]">
              <option value="">-- Pilih Target Ujian --</option>
              <?php foreach ($target_ujian as $tu) : ?>
                <option value="<?= $tu['IdTargetUjian']; ?>"><?= $tu['NamaUjian']; ?> - <?= $tu['Keterangan']; ?></option>
              <?php endforeach; ?>
            </select>
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
</div>
<!-- /.modal -->

<!-- Modal Add 1 Target Ujian -->
<div class="modal fade" id="addTargetUjian">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Target Ujian Kelas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('ujian/target_ujian_kelas/add_tunggal'); ?>
        <div class="form-group">
          <label for="jenis_ujian">Kelas</label>
          <select name="kelas" class="form-control">
            <option> -- Pilih Kelas -- </option>
            <?php foreach ($kelas as $kls) : ?>
              <option value="<?= $kls['IdKelas']; ?>" id_kelas="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label>Target Ujian</label>
          <div class="select2-blue">
            <select class="select2" style="width: 100%;" data-dropdown-css-class="select2-blue" name="targetujian">
              <option value="">-- Pilih Target Ujian --</option>
              <?php foreach ($target_ujian as $tu) : ?>
                <option value="<?= $tu['IdTargetUjian']; ?>"><?= $tu['NamaUjian']; ?> - <?= $tu['Keterangan']; ?></option>
              <?php endforeach; ?>
            </select>
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
</div>
<!-- /.modal -->


<script>
  $(function() {
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });
</script>