<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>{{Receipt}}</title>

  <style>
    @font-face {
      font-family: 'Firefly Sung';
      font-style: normal;
      font-weight: 400;
      src: url(http://eclecticgeek.com/dompdf/fonts/cjk/fireflysung.ttf) format('truetype');
    }

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
  </style>
</head>

<body style="margin-top:-40px;padding:0;">
  <!-- Title -->
  <div class="row">
    <div class="text-center">
      <h2 style="font-size:15px;">RECEIPT</h2>
      <h5 style="font-size:15px;"><?= $data['data']['orderReceiptNumber'];?></h5>
    </div>
  </div>
  <div class="row">
    <div style="border-top: 2px double black;"></div>
  </div>

  <!-- Header -->
  <div class="row" style="margin-top: 0.5rem;">
    <table style="width: 100%;">
      <tr>
        <td style="font-size:15px" align="left"><?= dateFormat($data['data']['createdAt']); ?></td>
        <td style="font-size:15px" align="right"><?= timeFormat($data['data']['createdAt']); ?></td>
      </tr>
      <tr>
        <td style="padding-top: 0.5rem;font-size:15px;font-weight:bold;" colspan="2" align="center">No : #<?= $data['data']['orderNumber']; ?></td>
      </tr>
      <tr>
        <td style="font-size:15px">{{Table}} : <?= $data['data']['tableName']; ?></td>
      </tr>
    </table>
  </div>

  <div class="row">
    <div style="border-bottom: 1px dashed black;"></div>
  </div>

  <!-- Main Content -->
  <div class="row" style="margin-top: 0.5rem;">
    <table style="width: 100%;">
      <?php foreach ($data['data']['orderDetails'] as $item) : ?>
        <tr>
        <td style="padding-top: 0.5rem;font-size:13px;font-weight:bold" width="10%"><?= $item['orderDetailQty']; ?> x</td>
          <td style="padding-top: 0.5rem;font-size:13px;font-weight:bold" width="40%"><?= $item['menuName']; ?></td>
          
          <td style="padding-top: 0.5rem;font-size:13px;font-weight:bold;" align="right"><small>$</small> <?= $item['orderDetailPrice']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <div class="row">
    <div style="border-bottom: 2px double black;"></div>
  </div>

  <!-- Total Content -->
  <div class="row" style="margin-top: 0.5rem;">
    <table style="width: 100%;">
      <tr>
        <td style="padding-top: 0.5rem;font-size:15px">{{SUBTOTAL}}</td>
        <td style="font-size:15px" align="right"><small>TWD</small> <?= $data['data']['orderPrice']; ?></td>
      </tr>
      <tr>
        <td style="font-size:15px">{{SERVICE FEE}} (10%)</td>
        <td style="font-size:15px" align="right"><small>TWD</small> <?= currency_format($data['data']['orderServiceFeePrice']); ?></td>
      </tr>
      <tr>
        <td class="font-weight-bold" style="font-size:15px">{{TOTAL AMOUNT}}</td>
        <td class="font-weight-bold" style="font-size:15px" align="right"><small>TWD</small> <?= currency_format($data['data']['orderTotalPrice']); ?></td>
      </tr>
      <?php if ($data['data']['isCheckout'] == 1) : ?>
        <tr>
          <td style="font-size:15px">{{CASH}}</td>
          <td style="font-size:15px" align="right"><small>TWD</small> <?= currency_format($data['data']['orderTotalPay']); ?></td>
        </tr>
        <tr>
          <td style="font-size:15px">{{CHANGE}}</td>
          <td style="font-size:15px" align="right"><small>TWD</small> <?= currency_format($data['data']['orderChange']); ?></td>
        </tr>
      <?php endif; ?>
    </table>
  </div>

  <!-- Payment Content -->
  <?php if ($data['data']['isCheckout'] == 1) : ?>
    <div class="row" style="margin-top: 0.5rem;">
      <table style="width: 100%;">
        <tr>
          <td style="padding-top: 0.5rem; font-size:15px">{{Payment Terms}}</td>
          <td style="padding-top: 0.5rem; font-size:15px" align="right"><?= $data['data']['paymentName']; ?></td>
        </tr>
        <!-- <tr>
        <td style="padding-top: 0.5rem;">Approval#</td>
        <td style="padding-top: 0.5rem;" align="right">192107</td>
      </tr> -->
      </table>
    </div>
  <?php endif; ?>

  <div class="row">
    <div style="border-bottom: 2px dashed black;"></div>
  </div>

  <div class="row">
    <div class="text-center">
      <h5 style="margin-top: 3rem !important;font-size:15px;padding-bottom:10px;">-- THANK YOU ! --</h5>
    </div>
  </div>



</body>

</html>