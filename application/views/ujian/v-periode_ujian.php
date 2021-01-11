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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Periode Ujian">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPeriodeUjian"><i class="fas fa-plus"></i> Tambah Data</button>
                <a href="<?= base_url('ujian/periode_ujian/export_excel'); ?>" target="_blank" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Data</a>
              </div>

              <table id="example2" class="table  table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Periode</th>
                    <th>Ajaran</th>
                    <th>Semester</th>
                    <th>Kelas</th>
                    <th>Ket.Periode</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($periode_ujian as $pu) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $pu['Periode']; ?></td>
                      <td><?= $pu['ThAjaran']; ?></td>
                      <td><?= $pu['Semester']; ?></td>
                      <td><?= $pu['NamaKelas']; ?></td>
                      <td><?= $pu['KetPeriode']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editPeriodeUjian<?= $pu['IdPeriodeUjian']; ?>">Ubah</button>
                        <a href="<?= base_url('ujian/periode_ujian/delete/' . $pu['IdPeriodeUjian']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Periode Ujian" namaData=<?= $pu['NamaKelas']; ?>>Hapus</a>
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


<!-- Modal AddPeriodeUjian -->
<div class="modal fade" id="addPeriodeUjian">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Periode Ujian</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('ujian/periode_ujian/add'); ?>
        <!-- Periode -->
        <div class="form-group">
          <label for="periode">Periode</label>
          <select name="periode" class="form-control" required>
            <option> -- Pilih Periode -- </option>
            <?php foreach ($periode as $p) : ?>
              <option value="<?= $p['IdPeriode']; ?>"><?= $p['Periode']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <!-- Ajaran -->
        <div class="form-group">
          <label for="ajaran">Ajaran</label>
          <select name="ajaran" class="form-control" required>
            <option> -- Pilih Tahun Ajaran -- </option>
            <?php foreach ($tahun_ajaran as $ta) : ?>
              <option value="<?= $ta['IdAjaran']; ?>"><?= $ta['ThAjaran']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <!-- Semester -->
        <div class="form-group">
          <label for="semester">Semester</label>
          <select name="semester" class="form-control" required>
            <option> -- Pilih Semester -- </option>
            <?php foreach ($semester as $smt) : ?>
              <option value="<?= $smt['IdSemester']; ?>"><?= $smt['Semester']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <!-- Kelas -->
        <div class="form-group">
          <label for="kelas">Kelas</label>
          <select name="kelas" class="form-control" required>
            <option> -- Pilih Kelas -- </option>
            <?php foreach ($kelas as $kls) : ?>
              <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="ketPeriode">Keterangan Periode</label>
          <input type="text" class="form-control" name="KetPeriode" id="ketPeriode" required autocomplete="off">
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


<!-- Modal EditPeriodeUjian -->
<?php foreach ($periode_ujian as $p_ujian) : ?>
  <div class="modal fade" id="editPeriodeUjian<?= $p_ujian['IdPeriodeUjian']; ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Periode Ujian</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open('ujian/periode_ujian/update/' . $p_ujian['IdPeriodeUjian']); ?>
          <!-- Periode -->
          <div class="form-group">
            <label for="periode">Periode</label>
            <select name="periode" class="form-control" required>
              <?php if ($p_ujian['IdPeriode']) : ?>
                <option value="<?= $p_ujian['IdPeriode']; ?>" selected><?= $p_ujian['Periode']; ?></option>
                <option> -- Pilih Periode -- </option>
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
          <!-- Ajaran -->
          <div class="form-group">
            <label for="ajaran">Ajaran</label>
            <select name="ajaran" class="form-control" required>
              <?php if ($p_ujian['IdAjaran']) : ?>
                <option value="<?= $p_ujian['IdAjaran']; ?>" selected><?= $p_ujian['ThAjaran']; ?></option>
                <option> -- Pilih Tahun Ajaran -- </option>
                <?php foreach ($tahun_ajaran as $ta) : ?>
                  <option value="<?= $ta['IdAjaran']; ?>"><?= $ta['ThAjaran']; ?></option>
                <?php endforeach; ?>
              <?php else : ?>
                <option> -- Pilih Tahun Ajaran -- </option>
                <?php foreach ($tahun_ajaran as $ta) : ?>
                  <option value="<?= $ta['IdAjaran']; ?>"><?= $ta['ThAjaran']; ?></option>
                <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>
          <!-- Semester -->
          <div class="form-group">
            <label for="semester">Semester</label>
            <select name="semester" class="form-control" required>
              <?php if ($p_ujian['IdSemester']) : ?>
                <option value="<?= $p_ujian['IdSemester']; ?>" selected><?= $p_ujian['Semester']; ?></option>
                <option> -- Pilih Semester -- </option>
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
          <!-- Kelas -->
          <div class="form-group">
            <label for="kelas">Kelas</label>
            <select name="kelas" class="form-control" required>
              <?php if ($p_ujian['IdKelas']) : ?>
                <option value="<?= $p_ujian['IdKelas']; ?>" selected><?= $p_ujian['SebutanKelas']; ?> | <?= $p_ujian['NamaKelas']; ?></option>
                <option> -- Pilih Kelas -- </option>
                <?php foreach ($kelas as $kls) : ?>
                  <option value="<?= $kls['IdKelas']; ?>"><?= $kls['SebutanKelas']; ?> | <?= $kls['NamaKelas']; ?></option>
                <?php endforeach; ?>
              <?php else : ?>
                <option> -- Pilih Kelas -- </option>
                <?php foreach ($kelas as $kls) : ?>
                  <option value="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
                <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="ketPeriode">Keterangan Periode</label>
            <input type="text" class="form-control" name="KetPeriode" id="ketPeriode" value="<?= $p_ujian['KetPeriode']; ?>" required autocomplete="off">
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
<?php endforeach; ?>
<!-- /.modal -->