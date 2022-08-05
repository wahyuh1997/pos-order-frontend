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
  <form id="regCrudForm" action="<?= base_url('master_data/menu_categories/add'); ?>" data-redurl="<?= base_url('master-data/menu-categories'); ?>" method="POST" enctype="multipart/form-data">
    <div class="panel-body">

      <div class="mb-3 row">
        <label for="menuCatName" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="menuCatName" name="menuCatName" autocomplete="off">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuCatName" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="menuCatName" name="menuCatName" autocomplete="off">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuCatName" class="col-sm-2 col-form-label">Posisi</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="menuCatName" name="menuCatName" autocomplete="off">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuCatName" class="col-sm-2 col-form-label">Kata Sandi</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" id="menuCatName" name="menuCatName" autocomplete="off">
        </div>
      </div>
      <div class="panel-footer text-end">
        <a href="<?= base_url('master-data/menu-categories'); ?>" class="btn btn-secondary">Back</a>
        <button class="btn btn-info">Submit</button>
      </div>
    </div>
  </form>