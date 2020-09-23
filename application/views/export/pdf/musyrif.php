<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Data Musyrif</title>
</head>

<body>
  <div align="center">
    <h2> Data Musyrif</h2>
  </div>

  <div class="row">
    <div class="col" style="font-weight: bold;">
      tanggal cetak : <?= date('d F Y'); ?>
    </div>
  </div>
  <div class="row mt-3">
    <table width="100%" style="border: 0.2mm solid #000000;" cellpadding="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Kontak</th>
        </tr>
      </thead>
      <tbody>
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
      </tbody>
    </table>
  </div>

</body>

</html>