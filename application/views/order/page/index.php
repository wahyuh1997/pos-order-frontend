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
          <th width="14%"></th>
          <th>Nama Pelanggan</th>
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
        <?php foreach ($data['data'] as $key => $res) : ?>
          <tr>
            <td><?= $key + 1; ?></td>
            <td>
              <a href="<?= base_url('order/print_qrcode/' . $res['id']); ?>" target="_blank" class="btn btn-info btn-sm">Cetak QR Code</a>
              <a href="#" class="btn btn-primary btn-sm">Bayar</a>
              <!-- <a href="<?= base_url('order/delete/' . $res['id']); ?>" class="btn btn-danger btn-sm btn-del">Hapus</a> -->
            </td>
            <td><?= $res['nama_pelanggan']; ?></td>
            <td class="text-end"><?= $res['no_order']; ?></td>
            <td class="text-end"><?= $res['no_receip']; ?></td>
            <td class="text-center"><?= $res['meja_id']; ?></td>
            <td class="text-end">Rp. <?= check_null($res['total_harga']); ?></td>
            <td><?= $res['status']; ?></td>
            <td><?= $res['checkout']; ?></td>
            <td>-</td>
            <td><?= dateFormat($res['created_at']); ?></td>
            <td><?= dateFormat($res['updated_at']); ?></td>
          </tr>
        <?php endforeach; ?>
        <!-- Serverside -->
      </tbody>
    </table>

    <!-- script -->
  </div>
</div>