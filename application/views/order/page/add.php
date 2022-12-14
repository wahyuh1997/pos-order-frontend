<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;"><?= $title; ?></a></li>
  <li class="breadcrumb-item"><a href="javascript:;"><?= $subtitle; ?></a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header"><?= $subtitle; ?></h1>

<!-- panel search -->
<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title">Form Add</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <form id="regCrudForm" data-redurl="<?= base_url('order'); ?>" method="POST">
    <input type="hidden" name="created_by" value="<?= $_SESSION['pos_order']['id']; ?>">
    <div class="panel-body">
      <!-- Search by Branch Name -->
      <div class="mb-3 row">
        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
        <div class="col-sm-6">
          <input type="text" class="form-control text-capitalize" id="nama_pelanggan" name="nama_pelanggan" autocomplete="off">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="meja_id" class="col-sm-2 col-form-label">Nomor Meja</label>
        <div class="col-sm-6">
          <select class="form-select default-select2" id="meja_id" name="meja_id" required>
            <option selected value="">Select Option</option>
            <?php foreach ($data_meja['data'] as $meja) : ?>
              <option value=<?= $meja['id']; ?>><?= $meja['no_meja']; ?></option>
            <?php endforeach; ?>
          </select>
          <!-- <input type="number" class="form-control" id="meja_id" name="meja_id" value="1" min="1" max="40" autocomplete="off"> -->
        </div>
      </div>
      <div class="panel-footer text-end">
        <a href="<?= base_url('order'); ?>" class="btn btn-secondary">Back</a>
        <button class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>