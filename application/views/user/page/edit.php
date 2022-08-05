<?php

use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Base;
?>
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;"><?= $title; ?></a></li>
  <li class="breadcrumb-item"><a href="javascript:;">{{Menu Categories}}</a></li>
  <li class="breadcrumb-item"><a href="javascript:;"><?= $subtitle; ?></a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header"><?= $subtitle; ?></h1>

<!-- panel search -->
<form id="regCrudForm" action="<?= base_url('master_data/menu_categories/edit?menuCatId=' . $menuCatData['menuCatId']); ?>" data-redurl="<?= base_url('master-data/menu-categories'); ?>" method="POST" enctype="multipart/form-data">
  <div class="panel panel-inverse">
    <div class="panel-heading">
      <h4 class="panel-title">{{Form Edit}}</h4>
      <div class="panel-heading-btn">
        <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
      </div>
    </div>
    <div class="panel-body">
      <input type="hidden" name="menuCatId" value="<?= $menuCatData['menuCatId']; ?>">
      <!-- Search by Branch Name -->
      <div class="mb-3 row">
        <label for="menuCatName" class="col-sm-2 col-form-label">{{Name}}</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="menuCatName" name="menuCatName" value="<?= $menuCatData['menuCatName']; ?>" autocomplete="off" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuImage" class="col-sm-2 col-form-label">{{Image}}</label>
        <div class="col-sm-6">
          <input class="form-control" type="file" id="menuImage" name="menuImage" accept="image/*">
          <br>
          <img src="<?= $this->image_server . $menuCatData['menuCatImage']; ?>" class="h-150px rounded">
        </div>
      </div>
      <div class="panel-footer text-end">
        <a href="<?= base_url('master-data/menu-categories'); ?>" class="btn btn-secondary">{{Back}}</a>
        <button class="btn btn-info">{{Submit}}</button>
      </div>
    </div>
  </div>
</form>