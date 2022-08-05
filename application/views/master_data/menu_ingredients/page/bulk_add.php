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
    <div class="row">
      <div class="col-lg-4">
        <div class="mb-3">
          <label for="menuId">Menu</label>
          <select class="form-select" id="menuId" name="menuId">
            <option selected>Select Option</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="mb-3 ">
          <label for="itemId">Item</label>
          <select class="form-select" id="itemId" name="itemId">
            <option selected>Select Option</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="mb-3 ">
          <label for="qty">Quantity</label>
          <div class="d-flex">
            <input type="number" class="form-control" id="qty" name="qty" autocomplete="off" step="0.01" value="0" style="width: 78%;">
            <button type="button" class="btn btn-sm btn-primary ms-2 align-self-center"><i class="fa fa-plus"></i> Add More</button>
          </div>
        </div>
      </div>
    </div>

    <div class="panel-footer text-end">
      <a href="<?= base_url('master-data/menu-ingredients'); ?>" class="btn btn-secondary">Back</a>
      <button class="btn btn-info">Submit</button>
    </div>
  </div>