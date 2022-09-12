<div class="d-flex justify-content-between">
  <h1 class="page-header"><?= $subtitle; ?></h1>
  <div class="ml-auto">
    <a href="<?= base_url('master-data/menu-categories/add'); ?>" class="btn btn-sm btn-primary btn-round">Tambah Kategori</a>
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
          <th width="20%"></th>
          <th>Nama Kategori</th>
          <th>Tanggal Dibuat</th>
          <th>Tanggal Diubah</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['data'] as $key => $res) : ?>
          <tr>
            <td><?= $key + 1; ?></td>
            <td>
              <a href="<?= base_url('master-data/menu-categories/edit/' . $res['id']); ?>" class="btn btn-primary btn-sm">Ubah</a>
              <a href="<?= base_url('master_data/menu_categories/delete/' . $res['id']); ?>" class="btn btn-danger btn-sm btn-del">Hapus</a>
            </td>
            <td><?= $res['nama_kategori']; ?></td>
            <td><?= dateFormat($res['created_at']); ?></td>
            <td><?= $res['updated_at']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- script -->
  </div>
</div>