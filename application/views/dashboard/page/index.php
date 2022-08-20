<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
  <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Dashboard</h1>

<!-- BEGIN row -->
<div class="row">
  <!-- BEGIN col-3 -->
  <div class="col-xl-4 col-md-6">
    <div class="widget widget-stats bg-blue">
      <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
      <div class="stats-content">
        <div class="stats-title">Total Pendapatan</div>
        <div class="stats-number">Rp. <?= $data['pendapatan_harian']; ?></div>
      </div>
    </div>
  </div>
  <!-- END col-3 -->
  <!-- BEGIN col-3 -->
  <div class="col-xl-4 col-md-6">
    <div class="widget widget-stats bg-indigo">
      <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
      <div class="stats-content">
        <div class="stats-title">Total Menu Terjual</div>
        <div class="stats-number"><?= $data['dishes_selled']; ?></div>
      </div>
    </div>
  </div>
  <!-- END col-3 -->
  <!-- BEGIN col-3 -->
  <div class="col-xl-4 col-md-6">
    <div class="widget widget-stats bg-gray-900">
      <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
      <div class="stats-content">
        <div class="stats-title">Total Meja Digunakan</div>
        <div class="stats-number"><?= $data['table_used']; ?></div>
      </div>
    </div>
  </div>
  <!-- END col-3 -->
</div>
<!-- END row -->

<div class="row">
  <div class="col-lg-8">
    <div class="card">
      <div class="card-header">
        Total Pendapatan Tahunan
      </div>
      <div class="card-body">
        <div id="interactive-chart" class="h-300px"></div>
      </div>
    </div>
  </div>
  <!-- BEGIN col-4 -->
  <div class="col-xl-4">
    <!-- begin widget-list -->
    <div class="mb-10px fs-10px">
      <b class="text-dark">Top Sales</b>
    </div>
    <div class="widget-list rounded mb-4">
      <!-- begin widget-list-item -->
      <?php foreach ($data['top_menu'] as $menu) : ?>
        <div class="widget-list-item">
          <div class="widget-list-media">
            <img src="<?= base_url('assets/img/product/' . $menu['image']) ?>" width="50" height="50" class="rounded" />
          </div>
          <div class="widget-list-content">
            <h4 class="widget-list-title"><?= $menu['nama_menu']; ?></h4>
            <small><?= $menu['attribute']; ?></small>
            <p class="widget-list-desc">Rp. <?= $menu['harga']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- end widget-list-item -->
    </div>
    <!-- end widget-list -->
  </div>
  <!-- END col-4 -->
</div>

<div class="row mt-3">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        Total Menu Terjual Tahunan
      </div>
      <div class="card-body">
        <div id="interactive-chart2" class="h-300px"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        Total Meja Terpakai Tahunan
      </div>
      <div class="card-body">
        <div id="interactive-chart3" class="h-300px"></div>
      </div>
    </div>
  </div>
</div>