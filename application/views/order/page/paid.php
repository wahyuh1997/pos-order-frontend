<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;"><?= $title; ?></a></li>
  <li class="breadcrumb-item"><a href="javascript:;"><?= $subtitle; ?></a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header"><?= $subtitle; ?></h1>

<div class="card">
  <div class="card-header">
    Informasi Pelanggan
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
            <td class="h5">: <?= $_SESSION['pos_order']['name']; ?></td>
          </tr>
          <tr>
            <th class="h6">Tanggal</th>
            <td class="h5">: <?= date('d F Y H:i', strtotime($data['created_at'])); ?></td>
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
          <th>Jumlah</th>
          <th>Ukuran</th>
          <th>Harga Tambahan</th>
          <th>Harga</th>
          <th>Total</th>
          <th>Status</th>
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
              $status = 'Berhasil';
              break;
            case 2:
              $status = 'Sedang Diproses';
              break;
            default:
              $status = 'Dibatalkan';
              break;
          }
        ?>
          <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $menu['nama_menu']; ?></td>
            <td><?= $menu['qty']; ?></td>
            <td><?= $menu['name_attribute']; ?></td>
            <td><?= $priceAttr; ?></td>
            <td><?= $menu['harga']; ?></td>
            <td><?= $menu['sub_harga']; ?></td>
            <td><?= $status; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="card mt-3">
  <div class="card-header">
    Pembayaran
  </div>
  <div class="card-body">
    <div class="mb-3 row">
      <label for="payment_type" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
      <div class="col-sm-6">
        <select class="form-select default-select2" id="payment_type" name="payment_type" required>
          <option selected value="cash">Cash</option>
          <option value="qris">QRIS</option>
          <option value="debit">Debit</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="keterangan" class="col-sm-2 col-form-label">Subtotal</label>
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-text">Rp.</span>
          <input type="text" class="form-control" value="<?= $data['sub_total']; ?>" readonly>
        </div>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="keterangan" class="col-sm-2 col-form-label">Pajak (10 %)</label>
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-text">Rp.</span>
          <input type="text" class="form-control" value="<?= $data['pajak']; ?>" readonly>
        </div>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="keterangan" class="col-sm-2 col-form-label">Total</label>
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-text">Rp.</span>
          <input type="text" class="form-control" id="total" value="<?= $data['total_harga']; ?>" readonly>
        </div>
      </div>
    </div>

    <div class="mb-3 row cash">
      <label for="pay" class="col-sm-2 col-form-label">Bayar</label>
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-text">Rp.</span>
          <input type="number" class="form-control" id="pay" value="0" min="0">
        </div>
      </div>
    </div>
    <div class="mb-3 row cash">
      <label for="change" class="col-sm-2 col-form-label">Kembali</label>
      <div class="col-sm-6">
        <div class="input-group">
          <span class="input-group-text">Rp.</span>
          <input type="number" class="form-control" id="change" value="0" min="0" readonly>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer text-end">
    <a href="<?= base_url('order'); ?>" class="btn btn-secondary">Back</a>
    <button class="btn btn-info">Submit</button>
  </div>
</div>