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
<!-- <form id="regCrudForm" method="POST" data-redurl="<?= base_url('master-data/menu-attributes'); ?>"> -->
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
      <label for="menuAttrName" class="col-sm-2 col-form-label">{{Attributes Name}}</label>
      <div class="col-sm-6">
        <input type="hidden" id="menuAttrId" name="menuAttrId" value="<?= $data['menuAttrId']; ?>">
        <input type="text" class="form-control" value="<?= $data['menuAttrName']; ?>" disabled autocomplete="off">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="menuAttrSelectName" class="col-sm-2 col-form-label">{{Name Of Attributes Selection}}</label>
      <div class="col-sm-6">
        <input type="hidden" class="form-control" id="menuAttrSelectId" value="" autocomplete="off">
        <input type="text" class="form-control" id="menuAttrSelectName" name="menuAttrSelectName" autocomplete="off">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="menuAttrSelectPrice" class="col-sm-2 col-form-label">{{Price}}</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" id="menuAttrSelectPrice" name="menuAttrSelectPrice" autocomplete="off" step="0.01" value="0">
      </div>
    </div>
    <!-- Laod A -->
    <div class="panel-footer text-end">
      <a href="<?= base_url('master-data/menu'); ?>" class="btn btn-secondary">{{Back}}</a>
      <button type="button" id="btn-submit" class="btn btn-info">{{Submit}}</button>
    </div>
  </div>
</div>

<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title"></h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <div class="panel-body">
    <div class="row">
      <table id="dtb-serverside" href="<?= base_url('datatables/menuattributes/get_selection?menuAttrId=' . $data['menuAttrId']); ?>" class="table table-striped table-bordered align-middle">
        <thead>
          <tr>
            <th width="1%">#</th>
            <th data-orderable="false" width="15%"></th>
            <th>{{Name Of Attributes Selection}}</th>
            <th>{{Price}}</th>
          </tr>
        </thead>
        <tbody>
          <!-- Serverside -->
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- </form> -->