<!DOCTYPE html>
<html>

<head>
  <title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>

<body>
  <style type="text/css">
    body {
      font-family: sans-serif;
    }

    table {
      margin: 50px auto;
      border-collapse: collapse;
    }

    table th,
    table td {
      border: 1px solid #3c3c3c;
      padding: 3px 8px;

    }

    a {
      background: blue;
      color: #fff;
      padding: 8px 10px;
      text-decoration: none;
      border-radius: 2px;
    }
  </style>

  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data Rekap Hasil Ujian.xls");
  ?>

  <center>
    <h4>Data Rekap Hasil Ujian <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 350px;">Nama Santri</th>
      <th style="width: 150px;">Kelas</th>
      <th style="width: 350px;">Periode</th>
      <th style="width: 150px;">Total Nilai</th>
      <th style="width: 150px;">Rata-Rata</th>
      <th style="width: 150px;">Reward</th>
      <th style="width: 150px;">Rangking</th>
    </tr>
    <?php
    $no = 1;
    foreach ($hasil_ujian as $hu) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $hu['NamaLengkap']; ?></td>
        <td style="text-align: center;"><?= $hu['NamaKelas']; ?></td>
        <td style="text-align: center;"><?= $hu['periode']; ?></td>
        <td style="text-align: center;"><?= $hu['Total']; ?></td>
        <td style="text-align: center;"><?= round($hu['Rata-rata'], 1); ?></td>
        <td style="text-align: center;"><?= $hu['Reward']; ?></td>
        <td style="text-align: center;"><?= $hu['Rangking']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>