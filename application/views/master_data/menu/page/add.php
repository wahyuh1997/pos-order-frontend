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
<form id="regCrudForm" action="<?= base_url('master_data/menu/add'); ?>" method="POST" data-redurl="<?= base_url('master_data/menu'); ?>" enctype="multipart/form-data">
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
        <label for="menuName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="menuName" name="menuName" autocomplete="off">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuDesc" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-6">
          <textarea name="menuDesc" id="menuDesc" cols="30" rows="5" class="form-control" autocomplete="off"></textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuPrice" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" id="menuPrice" name="menuPrice" autocomplete="off" step="0.01" value="0">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuTypeId" class="col-sm-2 col-form-label">Type</label>
        <div class="col-sm-6">
          <select class="form-select default-select2" id="menuTypeId" name="menuTypeId">
            <option selected value="">Select Menu type</option>
            <option value="">Makanan</option>
            <option value="">Minuman</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuCatId" class="col-sm-2 col-form-label">Categories</label>
        <div class="col-sm-6">
          <select class="form-select teatimeSelect" id="menuCatId" name="menuCatId" data-url="<?= base_url('select_serverside/getData?url=v1/menu-categories/select2'); ?>">
            <option>Select Option</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuImage" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-6">
          <input class="form-control" type="file" id="menuImage" name="menuImage" accept="image/*">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuImage" class="col-sm-2 col-form-label">Ukuran</label>
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