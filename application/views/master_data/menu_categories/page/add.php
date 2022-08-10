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
    <h4 class="panel-title">Form Add</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <form id="regCrudForm" data-redurl="<?= base_url('master-data/menu-categories'); ?>" method="POST" enctype="multipart/form-data">
    <div class="panel-body">
      <!-- Search by Branch Name -->
      <div class="mb-3 row">
        <label for="nama_kategori" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
        <div class="col-sm-6">
          <input type="text" class="form-control text-capitalize" id="nama_kategori" name="nama_kategori" autocomplete="off" required>
        </div>
      </div>
      <div class="panel-footer text-end">
        <a href="<?= base_url('master-data/menu-categories'); ?>" class="btn btn-secondary">Back</a>
        <button class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>