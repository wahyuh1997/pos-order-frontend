<link href="<?= base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Report</h1>

<form action="report/result" method="post">
  <div class="card">
    <div class="card-body h-100">
      <div class="row">
        <div class="col-lg-6">
          <div class="mb-3">
            <label for="">Pilih Laporan</label>
            <select class="form-select default-select2" id="type" name="type">
              <option value="1" selected>Laporan Penjualan</option>
              <option value="2">Laporan Produk</option>
            </select>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mb-3">
            <label for="">Pilih Tanggal</label>
            <div class="input-group" id="default-daterange">
              <input type="text" name="default-daterange" class="form-control" value="" placeholder="Klik Untuk Memilih Tanggal" />
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
            <input type="hidden" id="start" name="start">
            <input type="hidden" id="end" name="end">
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer text-end">
      <button class="btn btn-info">Submit</button>
    </div>
  </div>
</form>