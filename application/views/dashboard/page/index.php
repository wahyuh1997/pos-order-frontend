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
  <div class="col-xl-3 col-md-6">
    <div class="widget widget-stats bg-teal">
      <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
      <div class="stats-content">
        <div class="stats-title">TODAY'S VISITOR</div>
        <div class="stats-number">2,950</div>
        <div class="stats-progress progress">
          <div class="progress-bar" style="width: 70.1%;"></div>
        </div>
        <div class="stats-desc">Better than last week (70.1%)</div>
      </div>
    </div>
  </div>
  <!-- END col-3 -->
  <!-- BEGIN col-3 -->
  <div class="col-xl-3 col-md-6">
    <div class="widget widget-stats bg-blue">
      <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
      <div class="stats-content">
        <div class="stats-title">TODAY'S REVENUE</div>
        <div class="stats-number">180,200</div>
        <div class="stats-progress progress">
          <div class="progress-bar" style="width: 40.5%;"></div>
        </div>
        <div class="stats-desc">Better than last week (40.5%)</div>
      </div>
    </div>
  </div>
  <!-- END col-3 -->
  <!-- BEGIN col-3 -->
  <div class="col-xl-3 col-md-6">
    <div class="widget widget-stats bg-indigo">
      <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
      <div class="stats-content">
        <div class="stats-title">TOTAL DISHES SELLED</div>
        <div class="stats-number">156</div>
        <div class="stats-progress progress">
          <div class="progress-bar" style="width: 76.3%;"></div>
        </div>
        <div class="stats-desc">Better than last week (76.3%)</div>
      </div>
    </div>
  </div>
  <!-- END col-3 -->
  <!-- BEGIN col-3 -->
  <div class="col-xl-3 col-md-6">
    <div class="widget widget-stats bg-gray-900">
      <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
      <div class="stats-content">
        <div class="stats-title">TABLE USED</div>
        <div class="stats-number">178</div>
        <div class="stats-progress progress">
          <div class="progress-bar" style="width: 54.9%;"></div>
        </div>
        <div class="stats-desc">Better than last week (54.9%)</div>
      </div>
    </div>
  </div>
  <!-- END col-3 -->
</div>
<!-- END row -->

<div class="row">
  <!-- BEGIN col-8 -->
  <div class="col-xl-8">
    <!-- BEGIN panel -->
    <div class="panel panel-inverse" data-sortable-id="index-1">
      <div class="panel-heading">
        <h4 class="panel-title">Website Analytics (Last 7 Days)</h4>
        <div class="panel-heading-btn">
          <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
        </div>
      </div>
      <div class="panel-body pe-1">
        <div id="interactive-chart" class="h-300px"></div>
      </div>
    </div>
    <!-- END panel -->
  </div>
  <!-- END col-8 -->

  <!-- BEGIN col-4 -->
  <div class="col-xl-4">
    <!-- begin widget-list -->
    <div class="mb-10px fs-10px">
      <b class="text-dark">Top Sales</b>
    </div>
    <div class="widget-list rounded mb-4">
      <!-- begin widget-list-item -->
      <div class="widget-list-item">
        <div class="widget-list-media">
          <img src="<?= base_url() ?>assets/img/pos/product-1.jpg" width="50" height="50" class="rounded" />
        </div>
        <div class="widget-list-content">
          <h4 class="widget-list-title">Grill Chicken Chop®</h4>
          <p class="widget-list-desc">$10.99</p>
        </div>
      </div>
      <div class="widget-list-item">
        <div class="widget-list-media">
          <img src="<?= base_url() ?>assets/img/pos/product-2.jpg" width="50" height="50" class="rounded" />
        </div>
        <div class="widget-list-content">
          <h4 class="widget-list-title">Grill Pork Chop®</h4>
          <p class="widget-list-desc">$10.99</p>
        </div>
      </div>
      <div class="widget-list-item">
        <div class="widget-list-media">
          <img src="<?= base_url() ?>assets/img/pos/product-3.jpg" width="50" height="50" class="rounded" />
        </div>
        <div class="widget-list-content">
          <h4 class="widget-list-title">Capellini Tomato Sauce®</h4>
          <p class="widget-list-desc">$10.99</p>
        </div>
      </div>
      <div class="widget-list-item">
        <div class="widget-list-media">
          <img src="<?= base_url() ?>assets/img/pos/product-4.jpg" width="50" height="50" class="rounded" />
        </div>
        <div class="widget-list-content">
          <h4 class="widget-list-title">Vegan Salad Bowl®</h4>
          <p class="widget-list-desc">$10.99</p>
        </div>
      </div>
      <div class="widget-list-item">
        <div class="widget-list-media">
          <img src="<?= base_url() ?>assets/img/pos/product-5.jpg" width="50" height="50" class="rounded" />
        </div>
        <div class="widget-list-content">
          <h4 class="widget-list-title">Avocado Shake</h4>
          <p class="widget-list-desc">$10.99</p>
        </div>
      </div>
      <!-- end widget-list-item -->
    </div>
    <!-- end widget-list -->
  </div>
  <!-- END col-4 -->
</div>