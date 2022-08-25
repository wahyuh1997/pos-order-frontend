<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>Receipt</title>

  <style>
    body {
      font-family: Firefly Sung, DejaVu Sans, Verdana, Arial, sans-serif;
    }

    .line {
      display: block;
    }

    .line h2 {
      font-size: 10px;
      text-align: center;
      border-bottom: 3px dotted black;
      position: relative;
    }

    .line h2 span {
      background-color: white;
      position: relative;
      top: 10px;
      padding: 0 10px;
    }

    @page {
      margin-right: 1.5rem;
      margin-left: 1.5rem;
    }
  </style>
</head>

<body style="margin-top:-40px;padding:0;">
  <!-- Title -->
  <div class="row">
    <div class="text-center">
      <h2 style="font-size:13px;">TAMAN IDE Cafe</h2>
      <h6 style="font-size:11px;"><?= $data['data']['created_by_username']; ?></h6>
      <h5 style="font-size:13px;"><?= $data['data']['no_receip']; ?></h5>
    </div>
  </div>
  <div class="row">
    <div style="border-top: 2px double black;"></div>
  </div>

  <!-- Header -->
  <div class="row" style="margin-top: 0.5rem; margin-bottom: -1rem;">
    <table style="width: 100%;">
      <tr>
        <td style="font-size:12px" align="left"><?= dateFormat($data['data']['created_at']); ?></td>
        <td style="font-size:12px" align="right"><?= timeFormat($data['data']['created_at']); ?></td>
      </tr>
    </table>
  </div>

  <div class="row" style="margin-top: 0;">
    <table style="width: 100%;">
      <tr>
        <td style="padding-top: 0.5rem;font-size:12px;font-weight:bold;" colspan="2" align="left">Order No. : #<?= $data['data']['no_order']; ?></td>
        <td style="font-size:12px" align="right">No. Meja : <?= $data['data']['no_meja']; ?></td>
      </tr>
    </table>
  </div>

  <div class="row">
    <div style="border-bottom: 1px dashed black;"></div>
  </div>

  <!-- Main Content -->
  <div class="row" style="margin-top: 0.5rem;">
    <table style="width: 100%;">
      <?php foreach ($data['data']['order_detail'] as $item) : ?>
        <?php if ($item['status'] != 3) : ?>
          <tr>
            <td style="padding-top: 0.5rem;font-size:13px;font-weight:bold" width="7%"><?= $item['qty']; ?></td>
            <td style="padding-top: 0.5rem;font-size:13px;font-weight:bold" width="63%">
              <p style="margin-bottom: -0.75rem;"><?= $item['nama_menu']; ?></p>
              <?php if ($item['name_attribute']) : ?>
                <small><?= $item['name_attribute']; ?></small>
              <?php endif; ?>
            </td>
            <td style="padding-top: 0.5rem;font-size:13px;font-weight:bold;" align="right"><small>Rp.</small> <?= number_format($item['harga'], 0); ?></td>
          </tr>
        <?php endif; ?>
      <?php
        $subtotal[] = $item['sub_harga'];
      endforeach; ?>
    </table>
  </div>

  <div class="row">
    <div style="border-bottom: 2px double black;"></div>
  </div>

  <!-- Total Content -->
  <div class="row" style="margin-top: 0.5rem;">
    <table style="width: 100%;">
      <tr>
        <td style="padding-top: 0.5rem;font-size:13px">SUBTOTAL</td>
        <td style="font-size:13px" align="right"><small>Rp.</small> <?= number_format(array_sum($subtotal), 0); ?></td>
      </tr>
      <tr>
        <td style="font-size:13px">PB1 (10%)</td>
        <td style="font-size:13px" align="right"><small>Rp.</small> <?= number_format($data['data']['pajak'], 0); ?></td>
      </tr>
      <tr>
        <td class="font-weight-bold" style="font-size:13px">TOTAL</td>
        <td class="font-weight-bold" style="font-size:13px" align="right"><small>Rp.</small> <?= number_format($data['data']['total_harga'], 0); ?></td>
      </tr>
      <?php if ($data['data']['checkout'] == 1 && $data['data']['payment_type'] == 1) : ?>
        <tr>
          <td style="font-size:13px">BAYAR</td>
          <td style="font-size:13px" align="right"><small>Rp.</small> <?= number_format($data['data']['bayar'], 0); ?></td>
        </tr>
        <tr>
          <td style="font-size:13px">KEMBALIAN</td>
          <td style="font-size:13px" align="right"><small>Rp.</small> <?= number_format($data['data']['kembalian']); ?></td>
        </tr>
      <?php endif; ?>
    </table>
  </div>

  <div class="row">
    <div style="border-bottom: 2px dashed black;"></div>
  </div>

  <div class="row">
    <div class="text-center">
      <h5 style="margin-top: 3rem !important;font-size:13px;padding-bottom:10px;">-- THANK YOU ! --</h5>
    </div>
  </div>

  <footer class="fixed-bottom text-center">
    <p style="font-size:11px">Jl. Raya Triraksa Village 2, Tigaraksa, Kec. Tigaraksa, Kabupaten Tangerang, Banten.</p>
  </footer>



</body>

</html>