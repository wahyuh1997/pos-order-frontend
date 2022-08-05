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

<body style="margin-top:-50px;">
  <!-- Title -->
  <div class="row">
    <div style="border-top: 6px double black;"></div>
  </div>

  <!-- Header -->
  <div class="row" style="margin-top: 0.5rem;">
    <table style="width: 100%;">
      <tr>
        <td style="padding-top: 0.5rem;font-size:20px;font-weight:bold;" colspan="2" align="center">No : #<?= $orderData['orderNumber']; ?> | <?= $orderData['createdAt']; ?></td>
      </tr>
    </table>
  </div>

  <div class="row">
    <div style="border-bottom: 1px dashed black;"></div>
  </div>

  <!-- Main Content -->
  <div class="row" style="margin-top: 0.5rem;">
    <div class="col-12">
      <table style="width: 100%;">
        <?php if($orderData['orderType'] == 'dineIn'):?>
          <tr>
            <td style="padding-top: 0.5rem;">Type :</td>
            <td style="padding-top: 0.5rem;font-size:17px;">內用</td>
          </tr>
          <tr>
            <td style="padding-top: 0.5rem;">Table :</td>
            <td style="padding-top: 0.5rem;font-size:17px;"><?= $orderData['tableName']; ?></td>
          </tr>
          <?php else:?>
          <tr>
            <td style="padding-top: 0.5rem;">Type :</td>
            <td style="padding-top: 0.5rem;font-size:17px;">外帶</td>
          </tr>
        <?php endif;?>
      </table>
      <table style="width: 100%;">
        <tr>
          <td style="padding-top: 0.5rem;font-size:26px;word-wrap: break-word;"><?= $orderMenu['orderDetailQty']; ?> x <?= $orderMenu['menuName']; ?></td>
        </tr>
      </table>
    </div>
  </div>

  <div class="row" style="padding-bottom: 40px;">
    <div style="border-bottom: 6px double black;"></div>
  </div>
</body>

</html>