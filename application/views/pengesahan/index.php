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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>" data-title="Data Pengesahan">
            </div>
            <div class="card-body">
              <!-- Add/Import/Export -->
              <div class="col mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPengesahan"><i class="fas fa-plus"></i> Tambah Data</button>
              </div>

              <table id="example2" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>NIP</th>
                    <th>Tanda Tangan</th>
                    <th>Status</th>
                    <th style="width: 200px;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($pengesahan as $p) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $p['Nama']; ?></td>
                      <td><?= $p['Jabatan']; ?></td>
                      <td><?= $p['Nip']; ?></td>
                      <td>
                        <img src="<?= base_url('assets/upload/ttd/' . $p['Ttd']); ?>" width="100px" height="100px">
                      </td>
                      <td><?= $p['Status']; ?></td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#editPengesahan<?= $p['IdPengesahan']; ?>">Ubah</button>
                        <a href="<?= base_url('pengesahan/delete/' . $p['IdPengesahan']); ?>" class="btn btn-danger ml-3 tombol-hapus" tipeData="Pengesahan" namaData=<?= $p['Nama']; ?>>Hapus</a>
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

<!-- Modal Add Pengesahan -->
<div class="modal fade" id="addPengesahan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Tambah Data Pengesahan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('pengesahan/add'); ?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama_musyrif">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_musyrif" placeholder="Nama Lengkap" name="nama" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <select name="jabatan" class="form-control" required>
              <option value="">-- Pilih Jabatan --</option>
              <option value="Pengasuh PP Taruna Al Quran">Pengasuh PP Taruna Al Quran</option>
              <option value="Direktur Tahfidzul Quran">Direktur Tahfidzul Quran</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" required autocomplete="off">
          </div>
          <div class="form-group">
            <label for="nip">Tanda Tangan <small>(Format : .jpg/png)</small> <br> <small>Ukuran Max. 2MB</small></label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="ttd" name="ttd" accept=".png,.jpg" onchange="previewFile()" required>
              <label class="custom-file-label" for="customFile">Pilih Gambar</label>
            </div>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Modal EditMusyrif -->
<?php foreach ($pengesahan as $p) : ?>
  <div class="modal fade" id="editPengesahan<?= $p['IdPengesahan']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h4 class="modal-title">Ubah Data Pengesahan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('pengesahan/update/' . $p['IdPengesahan']); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $p['Nama']; ?>" required autofocus>
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <select name="jabatan" class="form-control" required>
                <?php if ($p['Jabatan']) : ?>
                  <option value="<?= $p['Jabatan']; ?>"><?= $p['Jabatan']; ?></option>
                  <option value="">-- Pilih Jabatan --</option>
                  <option value="Pengasuh PP Taruna Al Quran">Pengasuh PP Taruna Al Quran</option>
                  <option value="Direktur Tahfidzul Quran">Direktur Tahfidzul Quran</option>
                <?php else : ?>
                  <option value="">-- Pilih Jabatan --</option>
                  <option value="Pengasuh PP Taruna Al Quran">Pengasuh PP Taruna Al Quran</option>
                  <option value="Direktur Tahfidzul Quran">Direktur Tahfidzul Quran</option>
                <?php endif; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="nip">NIP</label>
              <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" value="<?= $p['Nip']; ?>" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="nip">Tanda Tangan <small>(Format : .jpg/png)</small> <?= $p['Ttd'] ? 'Tanda Tangan sudah tersimpan' : ''; ?><br> <small>Ukuran Max. 2MB</small></label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="ttd" name="ttd" accept=".png,.jpg" onchange="previewFile()">
                <label class="custom-file-label" for="customFile">Pilih Gambar</label>
              </div>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" class="form-control" required>
                <?php if ($p['Status']) : ?>
                  <option value="<?= $p['Status']; ?>"><?= $p['Status']; ?></option>
                  <option value="">-- Pilih Status --</option>
                  <option value="Aktif">Aktif</option>
                  <option value="Tidak Aktif">Tidak Aktif</option>
                <?php else : ?>
                  <option value="">-- Pilih Status --</option>
                  <option value="Aktif">Aktif</option>
                  <option value="Tidak Aktif">Tidak Aktif</option>
                <?php endif; ?>
              </select>
            </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Ubah</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php endforeach; ?>
<!-- /.modal -->

<script>
  function previewFile() {
    const importfile = document.querySelector('#ttd');
    const importLabel = document.querySelector('.custom-file-label');

    // ! Cannot read property 'files' of null
    importLabel.textContent = importfile.files[0].name;
  }
</script>