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
    <h4 class="panel-title">Search</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <div class="panel-body">
    <!-- Search by Branch Name -->
    <div class="mb-3 row">
      <label for="menuName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-6">
        <input type="hidden" class="form-control" id="id" name="id" autocomplete="off">
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
      <label for="wh_id" class="col-sm-2 col-form-label">Warehouse</label>
      <div class="col-sm-6">
        <select class="form-select" id="wh_id" name="wh_id">
          <option selected>Select Option</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="panel-footer text-end">
      <a href="<?= base_url('branch'); ?>" class="btn btn-secondary">Back</a>
      <button class="btn btn-info">Submit</button>
    </div>
  </div>