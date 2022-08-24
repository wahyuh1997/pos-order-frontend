<div class="d-flex justify-content-between">
  <h1 class="page-header"><?= $subtitle; ?></h1>
  <div class="ml-auto">
    <a href="<?= base_url('order/add'); ?>" class="btn btn-sm btn-primary btn-round">Tambah Order Baru</a>
  </div>
</div>

<!-- panel datatable -->
<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title">Datatable</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <div class="panel-body">
    <!-- html -->
    <table id="dataTable" class="table table-striped table-bordered align-middle">
      <thead>
        <tr>
          <th width="1%">#</th>
          <th width="5%" data-orderable="false"></th>
          <th>Nama Pemesan</th>
          <th>No. Order</th>
          <th>No. Invoice</th>
          <th>No. Meja</th>
          <th>Total Harga</th>
          <th>Status Pesanan</th>
          <th>Status Pembayaran</th>
          <th>Jenis Pembayaran</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['data'] as $key => $res) :
          switch ($res['status']) {
            case 1:
              $status = 'Dibatalkan';
              break;
            case 2:
              $status = 'Selesai';
              break;
            default:
              $status = 'Sedang Berjalan';
              break;
          }

        ?>

          <?php
          switch ($res['payment_type']) {
            case 1:
              $payment_type = 'Cash';
              break;
            case 2:
              $payment_type = 'QRIS';
              break;
            case 3:
              $payment_type = 'Debit';
              break;
            default:
              $payment_type = '-';
              break;
          }; ?>
          <tr>
            <td><?= $key + 1; ?></td>
            <td class="text-center">
              <?php if ($res['status'] == 0) : ?>
                <div class="btn-group">
                  <a href="#" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <a class="dropdown-item" href="<?= base_url('order/print_qrcode/' . $res['id']); ?>" target="_blank">Cetak QR Code</a>
                    <a class="dropdown-item" href="<?= base_url('order/paid_order/' . $res['id']); ?>" class="btn btn-primary btn-sm">Bayar</a>
                    <a class="dropdown-item cancel" href="<?= base_url('order/cancelled/' . $res['id']); ?>" data-redurl="<?= base_url('order'); ?>">Batalkan Pesanan</a>
                  </ul>
                </div>
              <?php else : ?>
                <a href="<?= base_url('order/paid_order/' . $res['id']); ?>" class="btn btn-sm btn-primary">Detail</a>
              <?php endif; ?>
            </td>
            <td><?= $res['nama_pelanggan']; ?></td>
            <td class="text-end"><?= $res['no_order']; ?></td>
            <td class="text-end"><?= $res['no_receip']; ?></td>
            <td class="text-center"><?= $res['no_meja']; ?></td>
            <td class="text-end">Rp. <?= check_null($res['total_harga']); ?></td>
            <td class="text-center"><?= $status; ?></td>
            <td class="text-center"><?= $res['checkout'] == 1 ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>'; ?></td>
            <td><?= $payment_type; ?></td>
            <td><?= dateFormat($res['created_at']); ?></td>
            <td><?= dateFormat(check_null($res['updated_at'])); ?></td>
          </tr>
        <?php endforeach; ?>
        <!-- Serverside -->
      </tbody>
    </table>

    <!-- script -->
  </div>
</div>