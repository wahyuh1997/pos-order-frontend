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
  <form id="regCrudForm" data-redurl="<?= base_url('manage/location'); ?>" method="POST">
    <div class="panel-body">
      <input type="hidden" name="locationId" value="<?= $data['locationId']; ?>">
      <!-- Search by Branch Name -->
      <div class="mb-3 row">
        <label for="locationName" class="col-sm-2 col-form-label">{{Location Name}}</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="locationName" name="locationName" value="<?= $data['locationName']; ?>" autocomplete="off">
        </div>
      </div>
      <div class="panel-footer text-end">
        <a href="<?= base_url('manage/location'); ?>" class="btn btn-secondary">{{Back}}</a>
        <button class="btn btn-info">{{Submit}}</button>
      </div>
    </div>
  </form>