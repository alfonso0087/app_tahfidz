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
  header("Content-Disposition: attachment; filename=Data Periode Ujian.xls");
  ?>

  <center>
    <h4>Data Periode Ujian <br />PP Putra Taruna Al-Qur'an</h4>
  </center>

  <table border="1">
    <tr>
      <th style="width: 50px;">No</th>
      <th style="width: 250px;">Periode</th>
      <th style="width: 150px;">Ajaran</th>
      <th style="width: 100px;">Semester</th>
      <th style="width: 150px;">Kelas</th>
      <th style="width: 150px;">Ket.Periode</th>
    </tr>
    <?php
    $no = 1;
    foreach ($periode_ujian as $pu) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $pu['Periode']; ?></td>
        <td><?= $pu['ThAjaran']; ?></td>
        <td><?= $pu['Semester']; ?></td>
        <td><?= $pu['NamaKelas']; ?></td>
        <td><?= $pu['KetPeriode']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>