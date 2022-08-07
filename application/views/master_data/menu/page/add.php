<?php

use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Base;
?>
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;"><?= $title; ?></a></li>
  <li class="breadcrumb-item"><a href="javascript:;"><?= $subtitle; ?></a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header"><?= $subtitle; ?></h1>

<!-- panel search -->
<form id="regCrudForm" method="POST" data-redurl="<?= base_url('master_data/menu'); ?>" enctype="multipart/form-data">
  <div class="panel panel-inverse">
    <div class="panel-heading">
      <h4 class="panel-title"></h4>
      <div class="panel-heading-btn">
        <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
      </div>
    </div>
    <div class="panel-body">
      <!-- Search by Branch Name -->
      <div class="mb-3 row">
        <label for="nama_menu" class="col-sm-2 col-form-label">Nama Makanan <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama_menu" name="nama_menu" autocomplete="off" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-6">
          <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control" autocomplete="off"></textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="harga" class="col-sm-2 col-form-label">Harga <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <input type="number" class="form-control" id="harga" name="harga" autocomplete="off" step="0.01" value="0" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jenis" class="col-sm-2 col-form-label">Jenis Makanan <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <select class="form-select default-select2" id="jenis" name="jenis" required>
            <option selected value="">Select Menu type</option>
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="kategori_id" class="col-sm-2 col-form-label">Kategori <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <select class="form-select default-select2" id="kategori_id" name="kategori_id" required>
            <option selected value="">Select Option</option>
            <?php foreach ($kategori as $kat) : ?>
              <option value=<?= $kat['id']; ?>><?= $kat['nama_kategori']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-6">
          <input class="form-control" type="file" id="image" name="image" accept="image/*">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="Ukuran" class="col-sm-2 col-form-label">Ukuran</label>
        <div class="col-sm-6">
          <button type="button" class="btn btn-sm btn-primary btn-add"><i class="fa fa-plus"></i> Tambah Ukuran</button>

        </div>
      </div>
      <!-- Laod A -->
      <div class="panel-footer text-end">
        <a href="<?= base_url('master-data/menu'); ?>" class="btn btn-secondary">Back</a>
        <button class="btn btn-info">Submit</button>
      </div>
    </div>
</form>