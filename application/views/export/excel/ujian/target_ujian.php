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
  header("Content-Disposition: attachment; filename=Data Target Ujian.xls");
  ?>

  <center>
    <h4>Data Target Ujian <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 150px;">Nama Ujian</th>
      <th style="width: 350px;">Keterangan</th>
    </tr>
    <?php
    $no = 1;
    foreach ($target_ujian as $tu) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $tu['NamaUjian']; ?></td>
        <td><?= $tu['Keterangan']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>