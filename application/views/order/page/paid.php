<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;"><?= $title; ?></a></li>
  <li class="breadcrumb-item"><a href="javascript:;"><?= $subtitle; ?></a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header"><?= $subtitle; ?></h1>

<div class="card">
  <div class="card-header d-flex justify-content-between">
    <span>Informasi Pelanggan</span>
    <?php if (count($data['order_detail']) > 1) : ?>
      <?php if ($data['status'] != 0) : ?>
        <a href="<?= base_url('order/print_bill/' . $data['id']); ?>" class="btn btn-sm btn-danger"><i class="fa fa-print-pdf"></i> Cetak Tagihan</a>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <table class="table-borderless">
          <tr>
            <th class="h6">Nama</th>
            <td class="h5">: <?= $data['nama_pelanggan']; ?></td>
          </tr>
          <tr>
            <th class="h6">No. Meja</th>
            <td class="h5">: <?= $data['no_meja']; ?></td>
          </tr>
          <tr>
            <th class="h6">No. Pesanan</th>
            <td class="h5">: #<?= $data['no_order']; ?></td>
          </tr>
        </table>
      </div>
      <div class="col-lg-3 offset-lg-3">
        <table class="table-borderless">
          <tr>
            <th class="h6">Kasir</th>
            <td class="h5">: <?= $data['created_by_username']; ?></td>
          </tr>
          <tr>
            <th class="h6">Tanggal</th>
            <td class="h5">: <?= date('d F Y H:i', strtotime($data['created_at'])); ?></td>
          </tr>
          <tr>
            <th class="h6">Status Pesanan</th>
            <?php
            switch ($data['status']) {
              case 1:
                $status = 'Dibatalkan';
                break;
              case 2:
                $status = 'Selesai';
                break;
              default:
                $status = 'Sedang Berjalan';
                break;
            }; ?>
            <td class="h5">: <?= $status; ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Menu</th>
          <th class="text-center">Jumlah</th>
          <th>Ukuran</th>
          <th class="text-center">Harga Tambahan</th>
          <th class="text-center">Harga</th>
          <th class="text-center">Total</th>
          <th class="text-center">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['order_detail'] as $key => $menu) :
          if ($menu['name_attribute'] != null) {
            $priceAttr = $menu['sub_harga'] - ($menu['harga'] * $menu['qty']);
          } else {
            $priceAttr = null;
          }

          switch ($menu['status']) {
            case 1:
              $menu['harga']      = $menu['harga'];
              $menu['sub_harga']  = $menu['sub_harga'];
              $status             = 'Berhasil';
              break;
            case 2:
              $menu['harga']      = $menu['harga'];
              $menu['sub_harga']  = $menu['sub_harga'];
              $status             = 'Sedang Diproses';
              break;
            default:
              $menu['harga']      = 0;
              $menu['sub_harga']  = 0;
              $status             = 'Dibatalkan';
              break;
          }
        ?>
          <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $menu['nama_menu']; ?></td>
            <td class="text-center"><?= $menu['qty']; ?></td>
            <td><?= $menu['name_attribute']; ?></td>
            <td class="text-center"><?= $priceAttr; ?></td>
            <td class="text-end">Rp. <?= $menu['harga']; ?></td>
            <td class="text-end">Rp. <?= $menu['sub_harga']; ?></td>
            <td class="text-center"><?= $status; ?></td>
          </tr>
        <?php
          $subtotal[] = $menu['sub_harga'];
        endforeach; ?>
        <?php if (!isset($subtotal)) : ?>
          <tr>
            <td colspan="8" class="text-center">Tidak Ada Pesanan</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<form id="regCrudForm" data-redurl="<?= base_url('order'); ?>" method="POST">
  <div class="card mt-3">
    <div class="card-header <?= !isset($subtotal) ? 'd-none' : null; ?>">
      Pembayaran
    </div>
    <div class="card-body <?= !isset($subtotal) ? 'd-none' : null; ?>">
      <div class="mb-3 row">
        <label for="payment_type" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
        <div class="col-sm-6">
          <?php if ($data['status'] == 0) : ?>
            <select class="form-select default-select2" id="payment_type" name="payment_type" required>
              <option selected value="1">Cash</option>
              <option value="2">QRIS</option>
              <option value="3">Debit</option>
            </select>
          <?php else : ?>
            <?php
            switch ($data['payment_type']) {
              case 1:
                $payment_type = 'Cash';
                break;
              case 2:
                $payment_type = 'QRIS';
                break;
              default:
                $payment_type = 'Debit';
                break;
            }; ?>
            <input type="text" class="form-control" value="<?= $payment_type; ?>" readonly>
          <?php endif; ?>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="keterangan" class="col-sm-2 col-form-label">Subtotal</label>
        <div class="col-sm-6">
          <div class="input-group">
            <span class="input-group-text">Rp.</span>
            <input type="text" class="form-control" value="<?= isset($subtotal) ? array_sum($subtotal) : 0; ?>" readonly>
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="pajak" class="col-sm-2 col-form-label">Pajak (10 %)</label>
        <div class="col-sm-6">
          <div class="input-group">
            <span class="input-group-text">Rp.</span>
            <input type="text" class="form-control" id="pajak" name="pajak" value="<?= isset($subtotal) ? array_sum($subtotal) * 10 / 100 : 0; ?>" readonly>
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="total_harga" class="col-sm-2 col-form-label">Total</label>
        <div class="col-sm-6">
          <div class="input-group">
            <span class="input-group-text">Rp.</span>
            <input type="text" class="form-control" id="total" name="total_harga" value="<?= isset($subtotal) ? array_sum($subtotal) + (array_sum($subtotal) * 10 / 100) : 0; ?>" readonly>
          </div>
        </div>
      </div>

      <?php if ($data['payment_type'] != 2 && $data['payment_type'] != 3) : ?>
        <div class="mb-3 row cash">
          <label for="pay" class="col-sm-2 col-form-label">Bayar</label>
          <div class="col-sm-6">
            <div class="input-group">
              <span class="input-group-text">Rp.</span>
              <input type="number" class="form-control" id="pay" name="bayar" value="<?= $data['bayar'] != null ? $data['bayar'] : 0; ?>" min="0" <?= $data['bayar'] != null ? 'readonly' : null; ?>>
            </div>
          </div>
        </div>
        <div class="mb-3 row cash">
          <label for="change" class="col-sm-2 col-form-label">Kembali</label>
          <div class="col-sm-6">
            <div class="input-group">
              <span class="input-group-text">Rp.</span>
              <input type="number" class="form-control" id="change" name="kembalian" value="<?= $data['kembalian'] != null ? $data['kembalian'] : 0; ?>" min="0" readonly>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="card-footer text-end">
      <a href="<?= base_url('order'); ?>" class="btn btn-secondary">Back</a>
      <?php if (isset($subtotal) && $data['status'] == 0) : ?>
        <button type="submit" id="bayar" class="btn btn-info">Bayar</button>
      <?php endif; ?>
    </div>
  </div>
</form>