<div class="d-flex justify-content-between">
  <h1 class="page-header"><?= $subtitle; ?></h1>
  <div class="ml-auto">
    <a href="<?= base_url('manage/tables/add'); ?>" class="btn btn-sm btn-primary btn-round">{{Add New}}</a>
  </div>
</div>

<!-- panel search -->
<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title">{{Search}}</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <div class="panel-body">
    <!-- Search by Branch Name -->
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-3">
          <label for="locationId" class="form-label">{{Search Location}}</label>
          <select class="form-select teatimeSelect" id="locationId" name="locationId" data-url="<?= base_url('select_serverside/getData?url=v1/locations/select2'); ?>">
            <option value="">Select Option</option>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-3">
          <label for="" class="form-label">{{Search Tables}}</label>
          <select class="form-select teatimeSelect" id="tableId">
            <option value="">Select Option</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-footer text-end">
    <button type="button" onclick="filter_process()" class="btn btn-info">{{Submit}}</button>
  </div>
</div>

<!-- panel datatable -->
<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title">{{Datatable}}</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <div class="panel-body">
    <!-- html -->
    <table id="dtb-serverside" href="<?= base_url('datatables/tables/get'); ?>" class="table table-striped table-bordered align-middle">
      <thead>
        <tr>
          <th width="1%">#</th>
          <th></th>
          <th>{{Location}}</th>
          <th>{{Tables}}</th>
          <th data-orderable="false">{{Created At}}</th>
          <th data-orderable="false">{{Updated At}}</th>
        </tr>
      </thead>
    </table>

    <!-- script -->
  </div>
</div>