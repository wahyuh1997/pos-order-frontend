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
      <label for="menuId" class="col-sm-2 col-form-label">Menu</label>
      <div class="col-sm-6">
        <select class="form-select" id="menuId" name="menuId">
          <option selected>Select Option</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="itemId" class="col-sm-2 col-form-label">Item</label>
      <div class="col-sm-6">
        <select class="form-select" id="itemId" name="itemId">
          <option selected>Select Option</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="qty" class="col-sm-2 col-form-label">Quantity</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" id="qty" name="qty" autocomplete="off" step="0.01" value="0">
      </div>
    </div>
    <div class="panel-footer text-end">
      <a href="<?= base_url('master-data/menu-ingredients'); ?>" class="btn btn-secondary">Back</a>
      <button class="btn btn-info">Submit</button>
    </div>
  </div>