<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>QR CODE-<?= $data['data']['no_order']; ?></title>
</head>

<body>
  <div class="row">
    <div class="text-center">
      <h3>SCAN MENU</h3>
      <h1><?= $data['data']['nama_pelanggan']; ?></h1>
      <h3>No. Order : <?= $data['data']['no_order']; ?></h3>
      <h3>Meja : <?= $data['data']['no_meja']; ?></h3>
    </div>
  </div>
  <img src="<?= base_url('assets/img/qrcode/' . $data['data']['kode_unik'] . '.png'); ?>" style="width: 100%; margin-top: 3rem;" alt="QRCODE">
</body>

</html>