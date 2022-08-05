<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
  <!-- BEGIN scrollbar -->
  <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
    <!-- BEGIN menu -->
    <div class="menu">
      <div class="menu-profile">
        <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
          <div class="menu-profile-cover with-shadow"></div>
          <div class="menu-profile-image">
            <img src="<?= base_url(); ?>assets/img/user/user-13.jpg" alt="" />
          </div>
          <div class="menu-profile-info">
            <div class="d-flex align-items-center">
              <div class="flex-grow-1">
                Username
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="menu-header">Navigation</div>
      <div class="menu-item has-sub <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : null; ?>">
        <a href="<?= base_url(); ?>" class="menu-link">
          <div class="menu-icon">
            <i class="fa fa-sitemap"></i>
          </div>
          <div class="menu-text">Dashboard</div>
        </a>
      </div>
      <div class="menu-item has-sub <?= $this->uri->segment(1) == 'master-data' ? 'active' : null; ?>">
        <a href="javascript:;" class="menu-link">
          <div class="menu-icon">
            <i class="fa fa-hdd"></i>
          </div>
          <div class="menu-text">Master Data</div>
          <div class="menu-caret"></div>
        </a>
        <div class="menu-submenu">
          <div class="menu-item <?= $this->uri->segment(2) == 'menu' ? 'active' : null; ?>">
            <a href="<?= base_url('master-data/menu'); ?>" class="menu-link">
              <div class="menu-text">Menu</div>
            </a>
          </div>
          <div class="menu-item <?= $this->uri->segment(2) == 'menu-categories' ? 'active' : null; ?>">
            <a href="<?= base_url('master-data/menu-categories'); ?>" class="menu-link">
              <div class="menu-text">Menu Categories</div>
            </a>
          </div>
          <div class="menu-item <?= $this->uri->segment(2) == 'menu-attributes' ? 'active' : null; ?>">
            <a href="<?= base_url('master-data/menu-attributes'); ?>" class="menu-link">
              <div class="menu-text">Menu Attributes</div>
            </a>
          </div>
        </div>
      </div>
      <div class="menu-item <?= $this->uri->segment(1) == 'order' ? 'active' : null; ?>">
        <a href="<?= base_url('order'); ?>" class="menu-link">
          <div class="menu-icon">
            <i class="fa fa-receipt"></i>
          </div>
          <div class="menu-text">Order</div>
        </a>
      </div>
      <div class="menu-item">
        <a href="<?= base_url('pos'); ?>" target="_blank" class="menu-link">
          <div class="menu-icon">
            <i class="fa fa-cash-register"></i>
          </div>
          <div class="menu-text">POS</div>
        </a>
      </div>
      <div class="menu-item">
        <a href="<?= base_url('pos'); ?>" target="_blank" class="menu-link">
          <div class="menu-icon">
            <i class="fa fa-file-lines"></i>
          </div>
          <div class="menu-text">Report</div>
        </a>
      </div>
      <div class="menu-item">
        <a href="<?= base_url('pos'); ?>" target="_blank" class="menu-link">
          <div class="menu-icon">
            <i class="fa fa-user"></i>
          </div>
          <div class="menu-text">User</div>
        </a>
      </div>
      <!-- BEGIN minify-button -->
      <div class="menu-item d-flex">
        <a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
      </div>
      <!-- END minify-button -->
    </div>
    <!-- END menu -->
  </div>
  <!-- END scrollbar -->
</div>