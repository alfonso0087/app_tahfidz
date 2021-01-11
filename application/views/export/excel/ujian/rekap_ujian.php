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
  header("Content-Disposition: attachment; filename=Data Rekap Ujian.xls");
  ?>

  <center>
    <h4>Data Rekap Ujian <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 350px;">Target Ujian</th>
      <th style="width: 350px;">Nama Santri</th>
      <th style="width: 250px;">Periode Ujian</th>
      <th style="width: 100px;">Nilai</th>
      <th style="width: 100px;">Predikat</th>
      <th style="width: 150px;">Keterangan</th>
    </tr>
    <?php
    $no = 1;
    foreach ($rekap_ujian as $ru) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td style="text-align: justify;">
          <?= $ru['NamaUjian']; ?> <br> <?= $ru['Keterangan']; ?>
        </td>
        <td><?= $ru['NamaLengkap']; ?></td>
        <td><?= $ru['Periode']; ?>| <?= $ru['NamaKelas']; ?></td>
        <td><?= $ru['Nilai']; ?></td>
        <td><?= $ru['Predikat']; ?></td>
        <td><b><?= $ru['ket_rekap']; ?></b></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>