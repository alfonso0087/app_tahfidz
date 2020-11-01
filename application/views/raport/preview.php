<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Raport <?= $identitas_santri['NIS']; ?>_<?= $identitas_santri['NamaLengkap']; ?></title>
</head>

<body>
  <center>
    <div class="row pt-3">
      <div class="col">
        <p style="font-size: 24px; font-style: italic;">HASIL PENCAPAIAN KOMPETENSI SANTRI <br> PONDOK PESANTREN TARUNA AL QUR'AN YOGYAKARTA</p>
      </div>
    </div>
    <hr style="border-width: medium;" class="mt-0">


    <div class="row">
      <div class="col-sm-6">
        <table>
          <tr style="width: 150px;">
            <td>Nama Peserta Didik</td>
            <td>:</td>
            <td><?= $identitas_santri['NamaLengkap']; ?></td>
          </tr>
          <tr>
            <td>Nomor Induk Santri</td>
            <td>:</td>
            <td><?= $identitas_santri['NIS']; ?></td>
          </tr>
          <tr>
            <td>Nama Halaqoh</td>
            <td>:</td>
            <td><?= $identitas_santri['NamaKelompok']; ?></td>
          </tr>
          <tr>
            <td>Nama Musyrif</td>
            <td>:</td>
            <td><?= $identitas_santri['NamaMusyrif']; ?></td>
          </tr>
          <tr>
            <td>No Hp Musyrif</td>
            <td>:</td>
            <td><?= $identitas_santri['NoHp']; ?></td>
          </tr>
          <tr>
            <td>PJ Halaqoh Tahfidz</td>
            <td>:</td>
            <td> - </td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6">
        <table>
          <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?= $identitas_santri['NamaKelas']; ?> / <?= $identitas_santri['Tingkat']; ?></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td>:</td>
            <td><?= $identitas_santri['Semester']; ?></td>
          </tr>
          <tr>
            <td>Ujian Pondok Ke</td>
            <td>:</td>
            <td><?= $identitas_santri['KetPeriode']; ?></td>
          </tr>
          <tr>
            <td>Periode Bulan</td>
            <td>:</td>
            <td><?= $identitas_santri['Periode']; ?></td>
          </tr>
          <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><?= $identitas_santri['ThAjaran']; ?></td>
          </tr>
          <tr>
            <td><a href="<?= base_url('raport'); ?>" class="badge badge-sm badge-danger"><i class="fas fa-arrow-left"></i>Kembali</a></td>
            <td>|</td>
            <td><a href="" class="badge badge-sm badge-primary"><i class="fas fa-print"></i>Cetak Raport</a></td>
          </tr>
        </table>
      </div>
    </div>
  </center>
  <hr style="border-width: medium;" class="mt-3">
  <!-- A. Hasil Nilai Ujian -->
  <div class="row ml-4 mr-4">
    <div class="col">
      <b>A. Hasil Nilai Ujian Pondok</b>
      <br>
      <br>
      <center>
        <div class="row ml-3">
          <table class="table table-bordered">
            <thead class="text-center">
              <tr>
                <th>NO</th>
                <th>Materi</th>
                <th>Target</th>
                <th>Nilai</th>
                <th>Predikat</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center" style="width: 50px;">1</td>
                <td>Tahfidzul Qur'an</td>
                <td>Prosentase Target Tahfidz</td>
                <?php foreach ($prosentase_target as $prosentase) : ?>
                  <td colspan="2" class="text-center"><?= $prosentase['Prosentase']; ?>%</td>
                  <td><b><?= $prosentase['Prosentase'] == 100 ? 'Target Selesai' : 'Target Tidak Selesai'; ?></b></td>
                <?php endforeach; ?>
              </tr>
              <?php $no = 2;
              foreach ($nilai_ujian as $n_ujian) : ?>
                <tr>
                  <td class="text-center" style="width: 50px;"><?= $no++; ?></td>
                  <td><?= $n_ujian['NamaUjian']; ?></td>
                  <td><?= $n_ujian['Keterangan']; ?></td>
                  <td class="text-center" style="width: 180px;"><?= $n_ujian['Nilai']; ?></td>
                  <td style="text-align: center; width: 100px;"><?= $n_ujian['Predikat']; ?></td>
                  <td style="width: 150px;"><b><?= $n_ujian['Keterangan_Ujian']; ?></b></td>

                </tr>
              <?php endforeach; ?>
              <tr>
                <td colspan="3" style="text-align: right;"> Total</td>
                <?php foreach ($hasil_akhir as $ha) : ?>
                  <td class="text-center"><?= $ha['Total']; ?></td>
                <?php endforeach; ?>
              </tr>
              <tr>
                <td colspan="3" style="text-align: right;"> Rata-Rata</td>
                <?php foreach ($hasil_akhir as $ha) : ?>
                  <td class="text-center"><?= round($ha['Rata-rata'], 1); ?></td>
                <?php endforeach; ?>
              </tr>
              <tr>
                <td colspan="3" style="text-align: right;"> Rangking</td>
                <?php foreach ($hasil_akhir as $ha) : ?>
                  <td class="text-center"><b><?= $ha['Rangking']; ?></b> dari <?= implode($jml_siswa); ?> Santri</td>
                <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
        </div>
      </center>
    </div>
  </div>
  <br><br>
  <!-- B. Rekap Pelanggaran -->
  <div class="row ml-4 mr-4">
    <div class="col">
      <b>B. REKAP PELANGGARAN IBADAH DAN BAHASA</b>
      <br>
      <!-- Bagian Ibadah -->
      <div class="row ml-3">
        <b>a. Bagian Ibadah</b>
        <table class="table table-bordered">
          <tr>
            <td style="width: 250px;">Poin Pelanggaran</td>
            <td><?php foreach ($points_ibadah as $points) {
                  echo $points . ' Poin';
                } ?>
            </td>
          </tr>
          <tr>
            <td style="width: 250px;">Keterangan</td>
            <td>
              <?php foreach ($keterangan_ibadah as $ket_ibadah) {
                echo $ket_ibadah['JenisIqob'] . ' (' . $ket_ibadah['Points'] . ')' . '<br>';
              } ?>
            </td>
          </tr>
        </table>
      </div>
      <div class="row ml-3">
        <b>Keterangan Poin Pelanggaran Ibadah:</b>
      </div>
      <div class="row mt-2 ml-3" style="font-weight: bold;">
        <div class="col-md-6">
          1. Datang setelah adzan (30 Poin) <br>
          2. Datang setelah iqomah (40 Poin) <br>
          3. Tidak mengikuti kegiatann ibadah (50 Poin)
        </div>
        <div class="col-md-6">
          4. Tidak sholat berjama'ah di masjid tanpa izin (150 Poin) <br>
          5. Tidak memakai peci saat sholat (30 Poin) <br>
          6. Bercanda atau bergurau setelah adzan (30 Poin)
        </div>
      </div>

      <div class="row mt-2 ml-2">
        <div class="col mt-2">
          <table border="1.5">
            <td>
              <b>Catatan</b> : Batas maksimal rekap iqob Ibadah adalah <b>700 Poin</b>. Apabila melebihi dari poin yang ditentukan, maka santri <b>TIDAK BERHAK</b> mengikuti seluruh Ujian Pondok
            </td>
          </table>
        </div>
      </div>

      <br>
      <div class="row ml-3">
        <b>b. Bagian Bahasa</b>
        <table class="table table-bordered">
          <tr>
            <td style="width: 250px;">Poin Pelanggaran</td>
            <td> <?php foreach ($points_bahasa as $points) {
                    echo $points . ' Poin';
                  } ?>
            </td>
          </tr>
          <tr>
            <td style="width: 250px;">Keterangan</td>
            <td><?php foreach ($keterangan_bahasa as $ket_bahasa) {
                  echo $ket_bahasa['JenisIqob'] . ' (' . $ket_bahasa['Points'] . ')' . '<br>';
                } ?>
            </td>
          </tr>
        </table>
      </div>
      <div class="row ml-3">
        <b>Keterangan Poin Pelanggaran Bahasa:</b>
      </div>
      <div class="row mt-2 ml-3" style="font-weight: bold;">
        <div class="col-md-6">
          1. Berbicara dengan bahasa indonesia (30 Poin)
        </div>
        <div class="col-md-6">
          2. Berbahasa daerah (50 Poin)
        </div>
      </div>
      <div class="row mt-2 ml-2">
        <div class="col mt-2">
          <table border="1.5">
            <td>
              <b>Catatan</b> : Batas maksimal rekap iqob Bahasa adalah <b>800 Poin</b>. Apabila melebihi dari poin yang ditentukan, maka santri <b>TIDAK BERHAK</b> mengikuti seluruh Ujian Pondok
            </td>
          </table>
        </div>
      </div>

    </div>
  </div>
  <br><br>
  <!-- C. Catatan Musyrif -->
  <div class="row ml-4 mr-4">
    <div class="col">
      <b>C. CATATAN DARI MUSYRIF TAHFIDZ</b>
      <br>
      <div class="row ml-3">
        <b>a. Perkembangan Target</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_perkembangan_target ? '' : $c_perkembangan_target['IsiCatatan']; ?></td>
          </tr>
        </table>
        <br>
        <b>b. Sikap Santri Ketika Halaqoh Tahfidz</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_sikap_santri ? '' : $c_sikap_santri['IsiCatatan']; ?></td>
          </tr>
        </table>
        <br>
        <b>c. Penilaian Akhlaq Perilaku</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_akhlaq_perilaku ? '' : $c_akhlaq_perilaku['IsiCatatan']; ?></td>
          </tr>
        </table>
        <br>
        <b>d. Kerapian Dan Kebersihan</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_kerapian_kebersihan ? '' : $c_kerapian_kebersihan['IsiCatatan']; ?></td>
          </tr>
        </table>
        <br>
        <b>e. Catatan Musyrif</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_catatan_musyrif ? '' : $c_catatan_musyrif['CatatanMusyrif']; ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <br>
  <!-- D. Reward Ujian -->
  <div class="row ml-4 mr-4">
    <div class="col">
      <b>D. HASIL REWARD UJIAN PONDOK</b>
      <br>
      <div class="row ml-3">
        <table class="table table-bordered">
          <tr>
            <td>
              <b><?= $reward_ujian['Reward'] != null ? $reward_ujian['Reward'] : ''; ?></b>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <br><br>

  <div class="row ml-4 pl-4 mr-4">
    <div class="col-sm-4">Mengetahui</div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">Sleman, <?= date_indo(date('Y-m-d')); ?></div>
  </div>
  <div class="row ml-4 pl-4 mr-4 mt-2">
    <div class="col-sm-4">
      <table>
        <tr>
          <td><?= $pengasuh['Jabatan']; ?></td>
        </tr>
        <tr>
          <td class="text-center"><img src="<?= base_url('assets/upload/ttd/' . $pengasuh['Ttd']); ?>" width="100px"></td>
        </tr>
        <tr>
          <td class=""><?= $pengasuh['Nama']; ?><br> NIP. <?= $pengasuh['Nip']; ?></td>
        </tr>
      </table>
    </div>
    <div class="col-sm-4">
      <table>
        <tr>
          <td><?= $direktur['Jabatan'] ? $direktur['Jabatan'] : 'Aktifkan Status Direktur'; ?></td>
        </tr>
        <tr>
          <td class="text-center">
            <?php if ($direktur['Ttd']) : ?>
              <img src="<?= base_url('assets/upload/ttd/' . $direktur['Ttd']); ?>" width="100px"></td>
        <?php else : ?>
          'Aktifkan Status Direktur'
        <?php endif; ?>
        </tr>
        <tr>
          <td class=" mt-2"><?= $direktur['Nama'] ? $direktur['Nama'] : 'Aktifkan Status Direktur'; ?> <br> NIP. <?= $direktur['Nip'] ? $direktur['Nip'] : 'Aktifkan Status Direktur'; ?></td>
        </tr>
      </table>
    </div>
    <div class="col-sm-4">
      <table>
        <tr>
          <td>Musyrif Halaqoh <?= $identitas_santri['NamaKelompok']; ?></td>
        </tr>
        <tr>
          <td class="text-center">
            <img src="<?= base_url('assets/upload/ttd_musyrif/' . $identitas_santri['Ttd']); ?>" width="100px">
          </td>
        </tr>
        <tr>
          <td class="mt-2"><?= $identitas_santri['NamaMusyrif']; ?> <br>NIP. - </td>
        </tr>
      </table>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script>
    window.print();
  </script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>