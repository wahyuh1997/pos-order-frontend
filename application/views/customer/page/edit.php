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
  <form id="regCrudForm" data-redurl="<?= base_url('customer'); ?>" method="POST">
    <input type="hidden" name="customerId" value="<?= $data['customerId']; ?>">
    <div class="panel-body">
      <!-- Search by Branch Name -->
      <div class="mb-3 row">
        <label for="customerName" class="col-sm-2 col-form-label">{{Customer Name}}</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="customerName" name="customerName" value="<?= $data['customersName']; ?>" autocomplete="off">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="customerPhone" class="col-sm-2 col-form-label">{{Phone}}</label>
        <div class="col-sm-6">
          <input type="tel" class="form-control" id="customerPhone" name="customerPhone" value="<?= $data['customerPhone']; ?>" autocomplete="off">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="customerAddress" class="col-sm-2 col-form-label">{{Address}}</label>
        <div class="col-sm-6">
          <textarea name="customerAddress" id="customerAddress" cols="30" rows="5" class="form-control"><?= $data['customerAddress']; ?></textarea>
        </div>
      </div>
    </div>
    <div class="panel-footer text-end">
      <a href="<?= base_url('customer'); ?>" class="btn btn-secondary">{{Back}}</a>
      <button class="btn btn-info">{{Submit}}</button>
    </div>
  </form>