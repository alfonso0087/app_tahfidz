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
              <h4 class="m-0" style="color: white;"><?= $title; ?></h4>
            </div>
            <div class="card-body">
              <form action="<?= base_url('ujian/rekap_ujian/add'); ?>" method="POST">
                <div class="form-group">
                  <label for="periode_ujian">Periode Ujian</label>
                  <select name="periode_ujian" class="form-control">
                    <option> -- Pilih Periode Ujian -- </option>
                    <?php foreach ($periode_ujian as $pu) : ?>
                      <option value="<?= $pu['IdPeriodeUjian']; ?>"><?= $pu['Periode']; ?> | (<?= $pu['Semester']; ?> - <?= $pu['ThAjaran']; ?>) / <?= $pu['NamaKelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="target_ujian">Kelas</label>
                  <select name="kelas" class="form-control">
                    <option> -- Pilih Kelas -- </option>
                    <?php foreach ($kelas as $kls) : ?>
                      <option value="<?= $kls['IdKelas']; ?>" idkelas="<?= $kls['IdKelas']; ?>"><?= $kls['NamaKelas']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="target_ujian">Target Ujian</label>
                  <select name="target_ujian" class="form-control" name="target_ujian" id="targetujian" data-placeholder=" -- Pilih Target Ujian -- ">
                    <option value="">-- Pilih Target Ujian --</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_santri">Nama Santri</label>
                  <select name="nama_santri" class="form-control" id="santri" data-placeholder=" -- Pilih Santri -- ">
                    <option value="">-- Pilih Santri --</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nilai">Nilai</label>
                  <input type="text" class="form-control" id="nilai" name="nilai" onkeyup="cek_nilai()" required autocomplete="off">
                </div>
                <!-- <button type="button" class="btn btn-danger">Proses</button> -->
                <div class="form-group">
                  <label for="predikat">Predikat</label>
                  <input type="text" class="form-control" id="predikat" name="predikat" readonly>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" readonly>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
              <a href="<?= base_url('ujian/rekap_ujian'); ?>" class="btn btn-default" data-dismiss="modal">Batal</a>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            </div>
            </form>
          </div>
        </div>

      </div>
    </div>

    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  // cek_nilai();

  $(document).ready(function() {
    $("select[name=kelas]").on("change", function() {
      var idKelas = $("option:selected", this).attr("idkelas");
      // alert(idKelas);
      $.ajax({
        type: "POST",
        url: "<?= base_url('ujian/Rekap_Ujian/getTargetByKelas') ?>",
        data: 'id_kelas=' + idKelas,
        success: function(targetujian) {
          // alert(targetujian);
          $("select[id=targetujian]").html(targetujian);
        }
      });
      $.ajax({
        type: "POST",
        url: "<?= base_url('ujian/Rekap_Ujian/getSantriByKelas') ?>",
        data: 'id_kelas=' + idKelas,
        success: function(santri) {
          // alert(santri);
          $("select[id=santri]").html(santri);
        }
      });
    });
  });


  function cek_nilai() {
    // var Predikat = "";
    // var Keterangan = "";
    Nilai = document.getElementById("nilai").value;
    // alert(Nilai);

    $.ajax({
      type: "POST",
      url: "<?= base_url('ujian/rekap_ujian/predikat_ket') ?>",
      data: 'Nilai=' + Nilai,
      success: function(pk) {
        // ! Data hasil query Masih kosong, belum mau muncul
        // console.log(pk);
        var json = pk,
          // console.log(json);
          obj = JSON.parse(json);
        $('#predikat').val(obj.PredikatNilai);
        $('#keterangan').val(obj.KetNilai);
        $('#alamat').val(obj.alamat);
      }
    });
  }
</script>