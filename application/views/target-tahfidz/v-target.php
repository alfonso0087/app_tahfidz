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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Target Tahfidz">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTarget"><i class="fas fa-plus"></i> Tambah Data</button>
                <a href="<?= base_url('tahfidz/target/export_excel'); ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Data</a>
              </div>

              <table id="example2" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 20px;">No</th>
                    <th>Kelas</th>
                    <th>Periode</th>
                    <th>Ajaran</th>
                    <th style="width: 70px;">Semester</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th style="width: 60px;">Pekan</th>
                    <th style="width: auto;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($target as $tgt) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $tgt['NamaKelas']; ?></td>
                      <td><?= $tgt['Periode']; ?></td>
                      <td><?= $tgt['ThAjaran']; ?></td>
                      <td><?= $tgt['Semester']; ?></td>
                      <td><?= date('d F Y', strtotime($tgt['TglMulai'])); ?></td>
                      <td><?= date('d F Y', strtotime($tgt['TglSelesai'])); ?></td>
                      <td><?= $tgt['Pekan']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editTarget<?= $tgt['IdTarget']; ?>">Ubah</button>
                        <a href="<?= base_url('tahfidz/target/delete/' . $tgt['IdTarget']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Target Tahfidz" namaData=<?= $tgt['Pekan']; ?>>Hapus</i></a>
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

<!-- Modal AddTarget -->
<div class="modal fade" id="addTarget">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Target</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('tahfidz/target/add'); ?>
        <!-- Kelas -->
        <div class="form-group row">
          <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
          <div class="col-sm-8">
            <select name="kelas" class="form-control">
              <option> -- Pilih Kelas -- </option>
              <?php foreach ($kelas as $kls) : ?>
                <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Periode -->
        <div class="form-group row">
          <label for="periode" class="col-sm-4 col-form-label">Periode</label>
          <div class="col-sm-8">
            <select name="periode" class="form-control">
              <option> -- Pilih Periode -- </option>
              <?php foreach ($periode as $p) : ?>
                <option value="<?= $p['IdPeriode']; ?>"><?= $p['Periode']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Th Ajaran -->
        <div class="form-group row">
          <label for="ajaran" class="col-sm-4 col-form-label">Ajaran</label>
          <div class="col-sm-8">
            <select name="ajaran" class="form-control">
              <option> -- Pilih Ajaran -- </option>
              <?php foreach ($ajaran as $aj) : ?>
                <option value="<?= $aj['IdAjaran']; ?>"><?= $aj['ThAjaran']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Semester -->
        <div class="form-group row">
          <label for="semester" class="col-sm-4 col-form-label">Semester</label>
          <div class="col-sm-8">
            <select name="semester" class="form-control">
              <option> -- Pilih Semester -- </option>
              <?php foreach ($semester as $smt) : ?>
                <option value="<?= $smt['IdSemester']; ?>"><?= $smt['Semester']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <!-- Tanggal Mulai -->
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Tanggal Mulai</label>
          <div class="col-sm-8">
            <div class="input-group date" id="tglMulai" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#tglMulai" name="tglMulai" />
              <div class="input-group-append" data-target="#tglMulai" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Tanggal Selesai -->
        <div class="form-group row">
          <label class="col-sm-4 col-form-label">Tanggal Selesai</label>
          <div class="col-sm-8">
            <div class="input-group date" id="tglSelesai" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#tglSelesai" name="tglSelesai" />
              <div class="input-group-append" data-target="#tglSelesai" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>

        </div>
        <!-- Pekan -->
        <div class="form-group row">
          <div class="col-sm-4 col-form-label">
            <label for="pekan">Pekan Ke-</label>
          </div>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="pekan" name="pekan" required autocomplete="off">
          </div>
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


<!-- Modal AddTarget -->
<?php foreach ($target as $t) : ?>
  <div class="modal fade" id="editTarget<?= $t['IdTarget']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Target</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('tahfidz/target/update/' . $t['IdTarget']); ?>
          <!-- Kelas -->
          <div class="form-group row">
            <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
            <div class="col-sm-8">
              <select name="kelas" class="form-control">
                <?php if ($t['IdKelas']) : ?>
                  <option value="<?= $t['IdKelas']; ?>"><?= $t['NamaKelas']; ?></option>
                  <?php foreach ($kelas as $kls) : ?>
                    <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Kelas -- </option>
                  <?php foreach ($kelas as $kls) : ?>
                    <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <!-- Periode -->
          <div class="form-group row">
            <label for="periode" class="col-sm-4 col-form-label">Periode</label>
            <div class="col-sm-8">
              <select name="periode" class="form-control">
                <?php if ($t['IdPeriode']) : ?>
                  <option value="<?= $t['IdPeriode']; ?>"><?= $t['Periode']; ?></option>
                  <?php foreach ($periode as $p) : ?>
                    <option value="<?= $p['IdPeriode']; ?>"><?= $p['Periode']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Periode -- </option>
                  <?php foreach ($periode as $p) : ?>
                    <option value="<?= $p['IdPeriode']; ?>"><?= $p['Periode']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <!-- Th Ajaran -->
          <div class="form-group row">
            <label for="ajaran" class="col-sm-4 col-form-label">Ajaran</label>
            <div class="col-sm-8">
              <select name="ajaran" class="form-control">
                <?php if ($t['IdAjaran']) : ?>
                  <option value="<?= $t['IdAjaran']; ?>"><?= $t['ThAjaran']; ?></option>
                  <?php foreach ($ajaran as $aj) : ?>
                    <option value="<?= $aj['IdAjaran']; ?>"><?= $aj['ThAjaran']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Ajaran -- </option>
                  <?php foreach ($ajaran as $aj) : ?>
                    <option value="<?= $aj['IdAjaran']; ?>"><?= $aj['ThAjaran']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <!-- Semester -->
          <div class="form-group row">
            <label for="semester" class="col-sm-4 col-form-label">Semester</label>
            <div class="col-sm-8">
              <select name="semester" class="form-control">
                <?php if ($t['IdSemester']) : ?>
                  <option value="<?= $t['IdSemester']; ?>"><?= $t['Semester']; ?></option>
                  <?php foreach ($semester as $smt) : ?>
                    <option value="<?= $smt['IdSemester']; ?>"><?= $smt['Semester']; ?></option>
                  <?php endforeach; ?>
                <?php else : ?>
                  <option> -- Pilih Semester -- </option>
                  <?php foreach ($semester as $smt) : ?>
                    <option value="<?= $smt['IdSemester']; ?>"><?= $smt['Semester']; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <!-- Tanggal Mulai -->
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tanggal Mulai</label>
            <div class="col-sm-8">
              <div class="input-group date" id="edttglMulai<?= $t['IdTarget']; ?>" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#edttglMulai<?= $t['IdTarget']; ?>" name="tglMulai" value="<?= $t['TglMulai']; ?>" />
                <div class="input-group-append" data-target="#edttglMulai<?= $t['IdTarget']; ?>" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Tanggal Selesai -->
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tanggal Selesai</label>
            <div class="col-sm-8">
              <div class="input-group date" id="edttglSelesai<?= $t['IdTarget']; ?>" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#edttglSelesai<?= $t['IdTarget']; ?>" name="tglSelesai" value="<?= $t['TglSelesai']; ?>" />
                <div class="input-group-append" data-target="#edttglSelesai<?= $t['IdTarget']; ?>" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Pekan -->
          <div class="form-group row">
            <div class="col-sm-4 col-form-label">
              <label for="pekan">Pekan Ke-</label>
            </div>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pekan" name="pekan" value="<?= $t['Pekan']; ?>" required autocomplete="off">
            </div>
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

  <script>
    $(function() {
      $('#edttglMulai<?= $t['IdTarget']; ?>').datetimepicker({
        format: 'YYYY-MM-DD'
      });
      $('#edttglSelesai<?= $t['IdTarget']; ?>').datetimepicker({
        format: 'YYYY-MM-DD'
      });
    });
  </script>

<?php endforeach; ?>
<!-- /.modal -->