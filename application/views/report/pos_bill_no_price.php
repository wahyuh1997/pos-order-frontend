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
      margin: 25px
    }

    .line h2 {
      font-size: 15px;
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

<body>
  <!-- Title -->
  <div class="row">
    <div class="col-12" style="border-bottom: 6px double black;">
    </div>
    <div class="text-center">
      <h4>ORDER SHEET</h4>
      <h5 style="font-size:15px;"><?= $data['data']['orderReceiptNumber'];?></h5>
    </div>
  </div>
  <div class="row">
    <div style="border-top: 6px double black;"></div>
  </div>

  <!-- Header -->
  <div class="row" style="margin-top: 0.5rem;">
    <table style="width: 100%;">
      <tr>
        <td style="padding-top: 0.5rem;font-size:15px;font-weight:bold;" colspan="2" align="center">No : #<?= $data['data']['orderNumber']; ?></td>
      </tr>
      <tr>
        <td style="padding-top: 0.5rem;">Table : <?= $data['data']['tableName']; ?></td>
        <td style="padding-top: 0.5rem;" align="right"><?= $data['data']['createdAt']; ?></td>
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
          <td style="padding-top: 0.5rem;"><?= $item['orderDetailQty']; ?> x <?= $item['menuName']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <div class="row">
    <div style="border-bottom: 6px double black;"></div>
  </div>

  <!-- Payment Content -->
  <!-- <div class="row" style="margin-top: 0.5rem;">
    <table style="width: 100%;">
      <tr>
        <td style="padding-top: 0.5rem;">Bank Card</td>
        <td style="padding-top: 0.5rem;" align="right">**** **** **** 7211</td>
      </tr>
      <tr>
        <td style="padding-top: 0.5rem;">Approval#</td>
        <td style="padding-top: 0.5rem;" align="right">192107</td>
      </tr>
    </table>
  </div> -->

  <div class="row">
    <div style="border-bottom: 2px dashed black;"></div>
  </div>

  <div class="row">
    <div class="text-center">
      <h5 style="margin-top: 3rem !important;">-- THANK YOU! --</h5>
    </div>
  </div>



</body>

</html>