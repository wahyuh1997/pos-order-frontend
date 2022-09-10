<link href="<?= base_url(); ?>assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;">Report</a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header"><?= $subtitle; ?></h1>

<!-- BEGIN card -->
<div class="card border-0 mb-3 overflow-hidden bg-success text-white">
  <!-- BEGIN card-body -->
  <div class="card-body">
    <!-- BEGIN row -->
    <div class="row">
      <!-- BEGIN col-7 -->
      <div class="col-xl-7 col-lg-8">
        <!-- BEGIN title -->
        <div class="mb-3 text-white">
          <b>Total Pendapatan Bulanan</b>
        </div>
        <!-- END title -->
        <!-- BEGIN total-sales -->
        <div class="d-flex mb-1">
          <h2 class="mb-0">Rp. <span data-animation="number" data-value="<?= $data['data']['detail_pendapatan']['jumlah_pendapatan']; ?>">0.00</span></h2>
          <div class="ms-auto mt-n1 mb-n1">
            <div id="total-sales-sparkline"></div>
          </div>
        </div>
        <!-- END total-sales -->

        <hr class="bg-white bg-opacity-50" />
        <!-- BEGIN row -->
        <div class="row text-truncate">
          <!-- BEGIN col-6 -->
          <div class="col-6">
            <div class=" text-white">Total Menu Terjual</div>
            <div class="fs-18px mb-5px fw-bold" data-animation="number" data-value="<?= $data['data']['detail_pendapatan']['jumlah_item']; ?>">0</div>
            <div class="progress h-5px rounded-3 bg-gray-900 mb-5px">
              <div class="progress-bar progress-bar-striped rounded-right bg-warning" data-animation="width" data-value="55%" style="width: 0%"></div>
            </div>
          </div>
          <!-- END col-6 -->
          <!-- BEGIN col-6 -->
          <div class="col-6">
            <div class=" text-white">Pendapatan Rata-Rata</div>
            <div class="fs-18px mb-5px fw-bold">Rp. <span data-animation="number" data-value="<?= $data['data']['detail_pendapatan']['rata_rata']; ?>">0.00</span></div>
            <div class="progress h-5px rounded-3 bg-gray-900 mb-5px">
              <div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
            </div>
          </div>
          <!-- END col-6 -->
        </div>
        <!-- END row -->
      </div>
      <!-- END col-7 -->
      <!-- BEGIN col-5 -->
      <div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
        <img src="../assets/img/svg/img-1.svg" height="150px" class="d-none d-lg-block" />
      </div>
      <!-- END col-5 -->
    </div>
    <!-- END row -->
  </div>
  <!-- END card-body -->
</div>
<!-- END card -->

<div class="card">
  <div class="card-body h-100">
    <!-- html -->
    <table id="data-table-default" class="table table-striped table-bordered align-middle" style="width: 100%;">
      <thead>
        <tr>
          <th width="1%">#</th>
          <th>Nama</th>
          <th>Ukuran</th>
          <th class="text-center">Jumlah</th>
          <th class="text-center">Harga</th>
          <th class="text-center">Total Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['data']['report'] as $key => $report) : ?>
          <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $report['nama_menu']; ?></td>
            <td><?= $report['attribute']; ?></td>
            <td class="text-center"><?= number_format($report['jumlah'], 0); ?></td>
            <td class="text-end">Rp. <?= number_format($report['harga'], 0); ?></td>
            <td class="text-end">Rp. <?= number_format($report['total_harga'], 0); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="card-footer text-end">
    <a href="<?= base_url('report'); ?>" class="btn btn-info">Back</a>
  </div>
</div>