<!DOCTYPE html>
<html>

<head>
  <title><?= $title; ?></title>
</head>

<body>
  <style type="text/css">
    body {
      font-family: sans-serif;
    }

    table {
      margin: 100px auto;
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
  header("Content-Disposition: attachment; filename=Data Setoran Santri.xls");
  ?>

  <center>
    <h4>Data Setoran Santri <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 400px;">Isi Target</th>
      <th style="width: 250px;">Jadwal Halaqoh</th>
      <th style="width: 350px;">Kelompok</th>
      <th style="width: 100px;">Presensi</th>
      <th style="width: 100px;">Keterangan</th>
    </tr>
    <?php
    $no = 1;
    foreach ($setoran as $setor) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $setor['IsiTarget']; ?></td>
        <td><?= $setor['Waktu']; ?></td>
        <td><?= $setor['NamaKelompok']; ?> (<?= $setor['NamaLengkap']; ?>)</td>
        <td><?= $setor['Presensi']; ?></td>
        <td><?= $setor['Keterangan']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>