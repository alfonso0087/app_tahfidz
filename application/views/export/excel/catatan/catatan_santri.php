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
  header("Content-Disposition: attachment; filename=Data Catatan Santri.xls");
  ?>

  <center>
    <h4>Data Catatan Santri <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 250px;">Nama Santri</th>
      <th style="width: 250px;">Periode</th>
      <th style="width: 150px;">Jenis Catatan</th>
      <th style="width: 400px;">Detail Catatan</th>
      <th style="width: 450px;">Catatan Musyrif</th>
    </tr>
    <?php
    $no = 1;
    foreach ($catatan_santri as $cs) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td style="text-align: left;"><?= $cs['NamaLengkap']; ?></td>
        <td style="text-align: left;"><?= $cs['Periode']; ?></td>
        <td style="text-align: left;"><?= $cs['JenisCatatan']; ?></td>
        <td>
          <p style="text-align: left;"><?= $cs['IsiCatatan']; ?></p>
        </td>
        <td>
          <p style="text-align: left;"><?= $cs['CatatanMusyrif']; ?></p>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>