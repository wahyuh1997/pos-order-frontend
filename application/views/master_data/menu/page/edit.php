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
  <form id="regCrudForm" data-redurl="<?= base_url('master-data/menu'); ?>" method="POST" enctype="multipart/form-data">
    <div class="panel-body">
      <input type="hidden" name="menuId" value="<?= $data['menuId']; ?>">
      <div class="mb-3 row">
        <label for="menuName" class="col-sm-2 col-form-label">{{Name}}</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="menuName" name="menuName" value="<?= $data['menuName']; ?>" autocomplete="off">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuDesc" class="col-sm-2 col-form-label">{{Description}}</label>
        <div class="col-sm-6">
          <textarea name="menuDesc" id="menuDesc" cols="30" rows="5" class="form-control" autocomplete="off"><?= $data['menuDesc']; ?></textarea>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuPrice" class="col-sm-2 col-form-label">{{Price}}</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" id="menuPrice" name="menuPrice" autocomplete="off" step="0.01" value="<?= currency_format($data['menuPrice']); ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuTypeId" class="col-sm-2 col-form-label">{{Type}}</label>
        <div class="col-sm-6">
          <select class="form-select" id="menuTypeId" name="menuTypeId">
            <option selected>Select Option</option>
            <?php foreach ($menuTypesData as $mTypesData) : ?>
              <option value="<?= $mTypesData['id']; ?>" <?= $mTypesData['id'] == $data['menuTypeId'] ? 'selected' : null; ?>><?= $mTypesData['name']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuCatId" class="col-sm-2 col-form-label">{{Categories}}</label>
        <div class="col-sm-6">
          <select class="form-select teatimeSelect" id="menuCatId" name="menuCatId" data-url="<?= base_url('select_serverside/getData?url=v1/menu-categories/select2'); ?>">
            <option value="<?= $data['menuCatId']; ?>"><?= $data['menuCatName']; ?></option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuImage" class="col-sm-2 col-form-label">{{Image}}</label>
        <div class="col-sm-6">
          <input class="form-control" type="file" id="menuImage" name="menuImage" accept="image/*">
          <br>
          <img src="<?= $this->image_server . $data['menuImage']; ?>" class="h-150px rounded">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="menuImage" class="col-sm-2 col-form-label">{{Attributes}}</label>
        <div class="col-sm-6">
          <button type="button" class="btn btn-sm btn-primary btn-add"><i class="fa fa-plus"></i> {{Add Attributes}}</button>

          <?php if (count($data['attributes']) > 0) : ?>
            <?php foreach ($data['attributes'] as $key => $attr) : ?>
              <div class="row mt-3">
                <div class="col-lg-9">
                  <select class="form-select teatimeSelect attributes" name="attributes[<?= $key; ?>][menuAttrId]" data-url="<?= base_url('select_serverside/getData?url=v1/menu-attributes/select2'); ?>">
                    <option value="<?= $attr['menuAttrId']; ?>"><?= $attr['menuAttrName']; ?></option>
                  </select>
                </div>
                <div class="col-lg-3 ps-0">
                  <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-times"></i> {{Delete}}</button>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="panel-footer text-end">
        <a href="<?= base_url('master-data/menu'); ?>" class="btn btn-secondary">{{Back}}</a>
        <button class="btn btn-info">{{Submit}}</button>
      </div>
    </div>
  </form>