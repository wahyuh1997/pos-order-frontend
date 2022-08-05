<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>I2B POS System | Login</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  <!-- ================== BEGIN core-css ================== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/vendor.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/default/app.min.css" rel="stylesheet" />
  <!-- ================== END core-css ================== -->
</head>

<body class='pace-top'>
  <!-- BEGIN #loader -->
  <div id="loader" class="app-loader">
    <span class="spinner"></span>
  </div>
  <!-- END #loader -->

  <!-- BEGIN #app -->
  <div id="app" class="app">
    <!-- BEGIN login -->
    <div class="login login-with-news-feed">
      <!-- BEGIN news-feed -->
      <div class="news-feed">
        <div class="news-image" style="background-image: url(<?= base_url(); ?>assets/img/login-bg/login-bg-11.jpg)"></div>
        <div class="news-caption">
          <h4 class="caption-title"><b>I2B</b> POS</h4>
          <p>
            I2B POS System
          </p>
        </div>
      </div>
      <!-- END news-feed -->

      <!-- BEGIN login-container -->
      <div class="login-container">
        <!-- BEGIN login-header -->
        <div class="login-header mb-30px">
          <div class="brand">
            <div class="d-flex align-items-center">
              <span class="logo"></span>


              <b>POS</b> System
            </div>
            <small>POS system for retail and F&B</small>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in-alt"></i>
          </div>
        </div>
        <!-- END login-header -->

        <!-- BEGIN login-content -->
        <?php if ($this->session->flashdata('alert')) : ?>
          <div class="alert alert-danger fade show">
            <?= $this->session->flashdata('alert')['message']; ?>
          </div>
        <?php endif; ?>

        <div class="login-content">
          <form action="<?= base_url('login/process'); ?>" method="POST" class="fs-13px">
            <div class="form-floating mb-15px">
              <input type="text" class="form-control h-45px fs-13px" placeholder="Username" id="username" name="username" />
              <label for="username" class="d-flex align-items-center fs-13px text-gray-600">Username</label>
            </div>
            <div class="form-floating mb-15px">
              <input type="password" class="form-control h-45px fs-13px" placeholder="Password" id="password" name="password" />
              <label for="password" class="d-flex align-items-center fs-13px text-gray-600">Password</label>
            </div>
            <div class="form-check mb-30px">
              <input class="form-check-input" type="checkbox" value="1" id="rememberMe" />
              <label class="form-check-label" for="rememberMe">
                Remember Me
              </label>
            </div>
            <div class="mb-15px">
              <button type="submit" class="btn btn-success d-block h-45px w-100 btn-lg fs-14px">Sign me in</button>
            </div>
            <div class="mb-40px pb-40px text-dark">
              <!-- Not a member yet? Click <a href="register_v3.html" class="text-primary">here</a> to register. -->
            </div>
            <hr class="bg-gray-600 opacity-2" />
            <div class="text-gray-600 text-center  mb-0">
              I2B Digital Inteligence
            </div>
          </form>
        </div>
        <!-- END login-content -->
      </div>
      <!-- END login-container -->
    </div>
    <!-- END login -->

    <!-- BEGIN scroll-top-btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- END scroll-top-btn -->
  </div>
  <!-- END #app -->

  <!-- ================== BEGIN core-js ================== -->
  <script src="<?= base_url(); ?>assets/js/vendor.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/app.min.js"></script>
  <!-- ================== END core-js ================== -->
</body>

</html>