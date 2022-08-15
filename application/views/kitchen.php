<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>I2B | POS - Customer Order System</title>
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
  <div id="app" class="app app-content-full-height app-without-sidebar app-without-header bg-white">
    <!-- BEGIN #content -->
    <div id="content" class="app-content p-0">
      <!-- BEGIN pos-kitchen -->
      <div class="pos pos-kitchen" id="pos-kitchen">
        <div class="pos-kitchen-header">
          <div class="logo">
            <a href="#">
              <div class="logo-img"><img src="<?= base_url(); ?>assets/img/pos/logo.svg" /></div>
              <div class="logo-text">Pine & Dine</div>
            </a>
          </div>
          <div class="time" id="time">00:00</div>
        </div>
        <div class="pos-kitchen-body">

        </div>
      </div>
      <!-- END pos-kitchen -->
    </div>
    <!-- END #content -->

    <!-- BEGIN scroll-top-btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- END scroll-top-btn -->
  </div>
  <!-- END #app -->

  <!-- ================== BEGIN core-js ================== -->
  <script src="<?= base_url(); ?>assets/js/vendor.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/app.min.js"></script>
  <!-- ================== END core-js ================== -->

  <!-- ================== BEGIN page-js ================== -->
  <script src="<?= base_url(); ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/demo/pos-kitchen-order.demo.js"></script>
  <!-- ================== END page-js ================== -->

  <script>
    load_kitchen();

    function load_kitchen() {
      $.get('kitchen/load_kitchen', function(html) {
        $('.pos-kitchen-body').html(html);
      });
    }

    $(document).on('click', '#btn-complete', function(e) {
      e.preventDefault();
      let menuId = $(this).parent().data('id');
      let qty = $(this).parent().data('qty');

      update_kitchen(menuId, 1, 'complete', qty);
    })

    $(document).on('click', '#btn-cancel', function(e) {
      e.preventDefault();
      let menuId = $(this).parent().data('id');

      update_kitchen(menuId, 3, 'cancel', 0);
    })

    function update_kitchen(menuId, status, param, qty) {
      let text;

      if (param === 'complete') {
        text = 'Pesanan ini telah selesai dibuat ?';
      } else {
        text = 'Ingin Membatalkan Pesanan ini ?';
      }

      // console.log(param);

      swal({
        title: 'Apakah anda yakin ?',
        text: text,
        icon: 'info',
        buttons: {
          cancel: {
            text: 'Tidak',
            value: null,
            visible: true,
            className: 'btn btn-default',
            closeModal: true,
          },
          confirm: {
            text: 'Ya',
            value: true,
            visible: true,
            className: 'btn btn-primary',
            closeModal: true
          }
        }
      }).then((result) => {
        if (result == true) {
          $.ajax({
            url: 'kitchen/order_completed/' + menuId + '/' + param,
            method: 'POST',
            async: true,
            dataType: 'JSON',
            data: {
              status: status,
              qty: qty,
              keterangan: '',
            },
            success: function(res) {
              if (res.status == true) {
                swal({
                    title: 'Success',
                    text: res.message,
                    icon: 'success',
                    buttons: {
                      confirm: {
                        text: 'Ok',
                        value: true,
                        visible: true,
                        className: 'btn btn-primary',
                        closeModal: true
                      }
                    }
                  })
                  .then((result) => {
                    if (result == true) {
                      load_kitchen()
                    }
                  })
              } else {
                swal({
                  icon: 'error',
                  title: 'Failed',
                  text: res['message'],
                })
              }
            }
          })
        } {
          return false
        }
      })
    }
  </script>
</body>

</html>