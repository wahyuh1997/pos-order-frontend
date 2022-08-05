<div class="d-flex justify-content-between">
  <h1 class="page-header"><?= $title; ?></h1>
  <div class="ml-auto">
    <a href="<?= base_url('branch/add'); ?>" class="btn btn-sm btn-primary btn-round">Add New</a>
  </div>
</div>

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
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="">Branch Name</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label for="">Warehouse</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="panel-footer text-end">
    <button class="btn btn-info">Submit</button>
  </div>
</div>

<!-- panel datatable -->
<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title">Datatable</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse" data-bs-original-title="" title="" data-tooltip-init="true"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <div class="panel-body">
    <!-- html -->
    <table id="#dtb-serverside" class="table table-striped table-bordered align-middle">
      <thead>
        <tr>
          <th width="1%">#</th>
          <th width="1%" data-orderable="false">Name</th>
          <th width="1%" data-orderable="false">Desc</th>
          <th width="1%" data-orderable="false">Warehouse</th>
          <th width="1%" data-orderable="false">Created By</th>
        </tr>
      </thead>
    </table>

    <!-- script -->
  </div>
</div>