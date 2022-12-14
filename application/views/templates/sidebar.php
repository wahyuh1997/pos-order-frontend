<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
  <!-- BEGIN scrollbar -->
  <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
    <!-- BEGIN menu -->
    <div class="menu">
      <div class="menu-profile" img src="<?= base_url(); ?>assets/img/logo/logo.jpeg">
        <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
          <!-- <div class="menu-profile-cover with-shadow"></div> -->
          <div class="menu-profile-image">
            <img src="<?= base_url(); ?>assets/img/user/user-13.jpg" alt="" />
          </div>
          <div class="menu-profile-info">
            <div class="d-flex align-items-center">
              <div class="flex-grow-1">
                <?= $_SESSION['pos_order']['name']; ?>
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
      <?php if ($_SESSION['pos_order']['role'] == 'owner') : ?>
        <div class="menu-item has-sub <?= $this->uri->segment(1) == 'master-data' || $this->uri->segment(1) == 'master_data' ? 'active' : null; ?>">
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
                <div class="menu-text">Kategori</div>
              </a>
            </div>
            <div class="menu-item <?= $this->uri->segment(2) == 'menu_table' ? 'active' : null; ?>">
              <a href="<?= base_url('master_data/menu_table'); ?>" class="menu-link">
                <div class="menu-text">No. Meja</div>
              </a>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($_SESSION['pos_order']['role'] == 'kasir') : ?>
        <div class="menu-item has-sub <?= $this->uri->segment(2) == 'menu' ? 'active' : null; ?>">
          <a href="<?= base_url('master-data/menu'); ?>" class="menu-link">
            <div class="menu-icon">
              <i class="fa fa-hdd"></i>
            </div>
            <div class="menu-text">Menu</div>
          </a>
        </div>
      <?php endif; ?>
      <div class="menu-item <?= $this->uri->segment(1) == 'order' ? 'active' : null; ?>">
        <a href="<?= base_url('order'); ?>" class="menu-link">
          <div class="menu-icon">
            <i class="fa fa-receipt"></i>
          </div>
          <div class="menu-text">Order</div>
        </a>
      </div>
      <div class="menu-item d-none">
        <a href="<?= base_url('pos'); ?>" target="_blank" class="menu-link">
          <div class="menu-icon">
            <i class="fa fa-cash-register"></i>
          </div>
          <div class="menu-text">POS</div>
        </a>
      </div>
      <div class="menu-item d-none">
        <a href="<?= base_url('kitchen'); ?>" target="_blank" class="menu-link">
          <div class="menu-icon">
            <i class="fa fa-bell"></i>
          </div>
          <div class="menu-text">Kitchen</div>
        </a>
      </div>
      <?php if ($_SESSION['pos_order']['role'] == 'owner') : ?>
        <div class="menu-item <?= $this->uri->segment(1) == 'report' ? 'active' : null; ?>">
          <a href="<?= base_url('report'); ?>" class="menu-link">
            <div class="menu-icon">
              <i class="fa fa-file-lines"></i>
            </div>
            <div class="menu-text">Report</div>
          </a>
        </div>
      <?php endif; ?>
      <?php if ($_SESSION['pos_order']['role'] == 'owner') : ?>
        <div class="menu-item <?= $this->uri->segment(1) == 'user' ? 'active' : null; ?>">
          <a href="<?= base_url('user'); ?>" class="menu-link">
            <div class="menu-icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="menu-text">User</div>
          </a>
        </div>
      <?php endif; ?>
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