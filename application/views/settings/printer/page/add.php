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
  <form id="regCrudForm" data-redurl="<?= base_url('settings/printer'); ?>" method="POST">
    <div class="panel-body">
      <!-- Search by Branch Name -->
      <div class="mb-3 row">
        <label for="printerName" class="col-sm-2 col-form-label">{{Printer Name}}</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="printerName" name="printerName" autocomplete="off">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="locationId" class="col-sm-2 col-form-label">{{Location}}</label>
        <div class="col-sm-6">
          <select class="form-select teatimeSelect" id="locationId" name="locationId" data-url="<?= base_url('select_serverside/getData?url=v1/locations/select2'); ?>">
            <option>Select Option</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="printerType" class="col-sm-2 col-form-label">{{Printer Type}}</label>
        <div class="col-sm-6">
          <select class="form-select default-select2" id="printerType" name="printerType">
            <option>Select Option</option>
            <option value="receipt">{{Receipt}}</option>
            <option value="kitchen">{{Kitchen}}</option>
            <option value="checkout">{{Checkout}}</option>
            <option value="bar">{{Bar}}</option>
            <option value="food">{{Food}}</option>
            <option value="dish">{{Dish}}</option>
          </select>
        </div>
      </div>
      <div class="panel-footer text-end">
        <a href="<?= base_url('settings/printer'); ?>" class="btn btn-secondary">{{Back}}</a>
        <button class="btn btn-info">{{Submit}}</button>
      </div>
    </div>
  </form>