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
  header("Content-Disposition: attachment; filename=Data Rekap Setoran.xls");
  ?>

  <center>
    <h4>Data Rekap Setoran <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 350px;">Nama Santri</th>
      <th style="width: 100px;">Kelas</th>
      <th style="width: 100px;">Jumlah <br>Tugas</th>
      <th style="width: 100px;">Jumlah <br> Setoran</th>
      <th style="width: 100px;">Pekan Ke-</th>
      <th style="width: 100px;">Prosentase</th>
      <th style="width: 150px;">Hasil</th>
      <th style="width: 150px;">Reward</th>
    </tr>
    <?php
    $no = 1;
    foreach ($rekap_setoran as $rs) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $rs['NamaLengkap']; ?></td>
        <td><?= $rs['NamaKelas']; ?></td>
        <td><?= $rs['JmlTugas']; ?></td>
        <td><?= $rs['JmlSetoran']; ?></td>
        <td><?= $rs['PekanRekap']; ?></td>
        <td><?= $rs['Prosentase']; ?></td>
        <td><?= $rs['Hasil']; ?></td>
        <td><?= $rs['Reward']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>