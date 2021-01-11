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
      margin: 50px;
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
  header("Content-Disposition: attachment; filename=Data All Detail Kelompok.xls");
  ?>

  <center>
    <h4>Data Detail Kelompok <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 100px;">Kelas</th>
      <th style="width: 250px;">Kelompok</th>
      <th style="width: 450px;">Nama Santri</th>
      <th style="width: 400px;">Nama Musyrif</th>
    </tr>
    <?php
    $no = 1;
    foreach ($list_detail_kelompok as $ldk) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $ldk['NamaKelas']; ?></td>
        <td><?= $ldk['NamaKelompok']; ?></td>
        <td><?= $ldk['NamaLengkap']; ?></td>
        <td><?= $ldk['NamaMusyrif']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>