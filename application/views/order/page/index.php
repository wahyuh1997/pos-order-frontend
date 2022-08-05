<div class="d-flex justify-content-between">
  <h1 class="page-header"><?= $subtitle; ?></h1>
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
      <div class="col-lg-12">
        <div class="form-group">
          <label for="orderNumber">{{Search Order Number}}</label>
          <input type="text" class="form-control" id="orderNumber">
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
    <table id="dtb-serverside" href="<?= base_url('datatables/order/get'); ?>" class="table table-striped table-bordered align-middle nowrap" style="width: 100%;">
      <thead>
        <tr>
          <th width="1%">#</th>
          <th width="10%"></th>
          <th>{{Order Number}}</th>
          <th>{{Receipt Number}}</th>
          <th>{{Location}}</th>
          <th>{{Table}}</th>
          <th>{{Total Price}}</th>
          <th>{{Service Fee}}</th>
          <th>{{Complete}}</th>
          <th>{{Checkout}}</th>
          <th>{{Payment Type}}</th>
          <th>{{Created At}}</th>
          <th>{{Updated At}}</th>
        </tr>
      </thead>
      <tbody>
        <!-- Serverside -->
      </tbody>
    </table>

    <!-- script -->
  </div>
</div>