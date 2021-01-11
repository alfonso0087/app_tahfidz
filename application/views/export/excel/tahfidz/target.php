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
  header("Content-Disposition: attachment; filename=Data Target.xls");
  ?>

  <center>
    <h4>Data Target <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 100px;">Kelas</th>
      <th style="width: 250px;">Periode</th>
      <th style="width: 100px;">Ajaran</th>
      <th style="width: 100px;">Semester</th>
      <th style="width: 200px;">Tanggal Mulai</th>
      <th style="width: 200px;">Tanggal Selesai</th>
      <th style="width: 100px;">Pekan</th>
    </tr>
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
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>