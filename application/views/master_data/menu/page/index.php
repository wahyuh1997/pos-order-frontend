<div class="d-flex justify-content-between">
  <h1 class="page-header"><?= $subtitle; ?></h1>
  <div class="ml-auto">
    <a href="<?= base_url('master-data/menu/add'); ?>" class="btn btn-sm btn-primary btn-round">Add New</a>
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
          <th width="10%"></th>
          <th>Nama Makanan</th>
          <th width="1%" data-orderable="false">Gambar</th>
          <th>Harga</th>
          <th>Jenis</th>
          <th>Kategori</th>
          <th>Tanggal Dibuat</th>
          <th>Tanggal Diubah</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $key => $menu) : ?>
          <tr>
            <td><?= $key + 1; ?></td>
            <td>
              <a href="<?= base_url('master-data/menu/edit/' . $menu['id']); ?>" class="btn btn-primary btn-sm">Ubah</a>
              <a href="<?= base_url('master_data/menu/delete/' . $menu['id']); ?>" class="btn btn-danger btn-sm btn-del">Hapus</a>
            </td>
            <td><?= $menu['nama_menu']; ?></td>
            <td><img src="<?= base_url('assets/img/product/' . $menu['image']); ?>" class="img-thumbnail" alt="Gambar Product"></td>
            <td><?= $menu['harga']; ?></td>
            <td><?= $menu['jenis']; ?></td>
            <td><?= $menu['nama_kategori']; ?></td>
            <td><?= dateFormat($menu['created_at']); ?></td>
            <td><?= dateFormat($menu['updated_at']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <!-- script -->
  </div>
</div>