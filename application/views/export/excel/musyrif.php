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
  header("Content-Disposition: attachment; filename=Data Musyrif.xls");
  ?>

  <center>
    <h4>Data Musyrif <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 250px;">Nama</th>
      <th style="width: 100px;">Email</th>
      <th style="width: 250px;">Kontak</th>
    </tr>
    <?php
    $no = 1;
    foreach ($musyrif as $m) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $m['NamaMusyrif']; ?></td>
        <td><?= $m['Email']; ?></td>
        <td><?= $m['NoHp']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>