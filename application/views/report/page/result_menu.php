<link href="<?= base_url(); ?>assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;">Report</a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header"><?= $subtitle; ?></h1>

<div class="card">
  <div class="card-body h-100">
    <!-- html -->
    <table id="data-table-default" class="table table-striped table-bordered align-middle" style="width: 100%;">
      <thead>
        <tr>
          <th width="1%">#</th>
          <th>Nama</th>
          <th>Ukuran</th>
          <th class="text-center">Jumlah Terjual</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['data'] as $key => $report) : ?>
          <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $report['nama_menu']; ?></td>
            <td><?= $report['attribute']; ?></td>
            <td class="text-center"><?= number_format($report['jumlah'], 0); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="card-footer text-end">
    <a href="<?= base_url('report'); ?>" class="btn btn-info">Back</a>
  </div>
</div>