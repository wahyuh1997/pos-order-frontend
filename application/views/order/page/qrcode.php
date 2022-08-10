<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR CODE-<?= $data['data']['no_order']; ?></title>
</head>

<body>
  <img src="<?= base_url('assets/img/qrcode/' . $data['data']['kode_unik'] . '.png'); ?>" alt="QRCODE">
</body>

</html>