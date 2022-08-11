<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>TAMAN IDE | POS</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />

  <!-- ================== BEGIN core-css ================== -->
  <link rel="icon" href="<?= base_url('assets/img/logo/logo.jpeg') ?>" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/vendor.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/default/app.min.css" rel="stylesheet" />

  <link href="<?= base_url() ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />

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
      <!-- BEGIN pos -->
      <div class="pos pos-customer" id="pos-customer">
        <!-- BEGIN pos-menu -->
        <div class="pos-menu">
          <div class="logo">
            <a href="#">
              <div class="logo-img" style="height: 80px !important;">
                <img src="<?= base_url('assets/img/logo/logo.jpeg') ?>" width="80" />
              </div>
              <!-- <div class="logo-text">Pine & Dine</div> -->
            </a>
          </div>
          <div class="nav-container">
            <!-- data-scrollbar="true" data-height="100%" data-skip-mobile="true" -->
            <div>
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#" data-filter="all">
                    Semua Menu
                  </a>
                </li>
                <?php foreach ($data_kategori['data'] as $kat) : ?>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-filter="<?= $kat['id']; ?>">
                      <?= $kat['nama_kategori']; ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- END pos-menu -->

        <!-- BEGIN pos-content -->
        <div class="pos-content">
          <!-- data-scrollbar="true" data-height="100%" data-skip-mobile="true" -->
          <div class="pos-content-container">
            <div class="product-row">
              <?php foreach ($data_menu['data'] as $menu) : ?>
                <?php
                if ($menu['image'] == null) {
                  $menu['image'] = 'no-image-available.png';
                }; ?>
                <div class="product-container" data-type="<?= $menu['kategori_id']; ?>">
                  <a href="#" class="product" data-bs-toggle="modal" data-bs-target="#modalPosItem" data-id="<?= $menu['id']; ?>">
                    <div class="img" style="background-image: url(<?= base_url('assets/img/product/' . $menu['image']) ?>)"></div>
                    <div class="text">
                      <div class="title"><?= $menu['nama_menu']; ?></div>
                      <?php if ($menu['keterangan'] != null) : ?>
                      <?php endif; ?>
                      <div class="desc"><?= $menu['keterangan']; ?></div>
                      <div class="price">Rp. <?= $menu['harga']; ?></div>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <!-- END pos-content -->

        <!-- BEGIN pos-sidebar -->
        <div class="pos-sidebar" id="pos-sidebar">
          <div class="pos-sidebar-header">
            <input type="hidden" id="orderId" value="1">
            <input type="hidden" id="orderTypeMenu" value="1">

            <div class="back-btn">
              <button type="button" data-dismiss-class="pos-mobile-sidebar-toggled" data-target="#pos-customer" class="btn">
                <svg viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
              </button>
            </div>
            <div class="icon"><img src="<?= base_url() ?>assets/img/pos/icon-table.svg" /></div>
            <div class="title">Table 01</div>
            <div class="order">Order: <b>#0056</b></div>
          </div>
          <div class="pos-sidebar-nav">
            <ul class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a class="nav-link active" href="#" data-bs-toggle="tab" data-bs-target="#newOrderTab">New Order (5)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="tab" data-bs-target="#orderHistoryTab">Order History (0)</a>
              </li>
            </ul>
          </div>
          <div class="pos-sidebar-body tab-content" data-scrollbar="true" data-height="100%">
            <div class="tab-pane fade h-100 show active" id="newOrderTab">
              <div class="pos-table">

              </div>
            </div>
            <div class="tab-pane fade h-100" id="orderHistoryTab">
              <div class="h-100 d-flex align-items-center justify-content-center text-center p-20">
                <div>
                  <div class="mb-3 mt-n5">
                    <svg width="6em" height="6em" viewBox="0 0 16 16" class="text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
                      <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
                    </svg>
                  </div>
                  <h4>No order history found</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="pos-sidebar-footer">
            <div class="subtotal">
              <div class="text">Subtotal</div>
              <div class="price">$30.98</div>
            </div>
            <div class="taxes">
              <div class="text">Taxes (6%)</div>
              <div class="price">$2.12</div>
            </div>
            <div class="total">
              <div class="text">Total</div>
              <div class="price">$33.10</div>
            </div>
            <div class="btn-row">
              <a href="#" class="btn btn-default" onclick="handleDashboardGritterNotification()"><i class="fa fa-bell fa-fw fa-lg"></i> Service</a>
              <a href="#" class="btn btn-default"><i class="fa fa-file-invoice-dollar fa-fw fa-lg"></i> Bill</a>
              <a href="#" class="btn btn-success"><i class="fa fa-check fa-fw fa-lg"></i> Submit Order</a>
            </div>
          </div>
        </div>
        <!-- END pos-sidebar -->
      </div>
      <!-- END pos -->

      <!-- BEGIN pos-mobile-sidebar-toggler -->
      <a href="#" class="pos-mobile-sidebar-toggler" data-toggle-class="pos-mobile-sidebar-toggled" data-target="#pos-customer">
        <svg viewBox="0 0 16 16" class="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
          <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
        </svg>
        <span class="badge">5</span>
      </a>
      <!-- END pos-mobile-sidebar-toggler -->
    </div>
    <!-- END #content -->
    <!-- END theme-panel -->
    <!-- BEGIN scroll-top-btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- END scroll-top-btn -->
  </div>
  <!-- END #app -->

  <!-- BEGIN #modalPosItem -->
  <div class="modal modal-pos-item fade" id="modalPosItem">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

      </div>
    </div>
  </div>
  <!-- END #modalPosItem -->

  <!-- ================== BEGIN core-js ================== -->
  <script src="<?= base_url() ?>assets/js/vendor.min.js"></script>
  <script src="<?= base_url() ?>assets/js/app.min.js"></script>
  <!-- ================== END core-js ================== -->

  <!-- Assets -->
  <script src="<?= base_url(); ?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/select2/dist/js/select2.full.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>

  <!-- ================== BEGIN page-js ================== -->

  <script src="<?= base_url(); ?>assets/plugins/gritter/js/jquery.gritter.js"></script>
  <script src="<?= base_url(); ?>assets/js/core_1_0_0_5.js"></script>
  <script src="<?= base_url(); ?>assets/js/html5-qrcode.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/demo/form-plugins.demo.js"></script>
  <script src="<?= base_url(); ?>assets/js/demo/pos-customer-order.demo.js"></script>
  <!-- ================== END page-js ================== -->

  <!-- ================== CUSTOM-js ================== -->
  <script>
    var keranjang = [];
    load_cart();
    /* Laod View menu in order */
    function load_cart() {
      let html = '';
      let subtotal = 0
      if (keranjang.length == 0) {
        // $('.btn-primary.create-new-order').addClass('d-none');
        //<h4>No order history found</h4>      
        html = `<div class="h-100 d-flex align-items-center justify-content-center text-center p-20">
                  <div>
                    <div style="margin-top: 3rem;">
                      <svg width="6em" height="6em" viewBox="0 0 16 16" class="text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
                        <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
                      </svg>
                    </div>
                    <div id="reader" width="600px"></div>
                                
                  </div>
                </div>`;
      } else {
        // $('.btn-primary.create-new-order').removeClass('d-none');
        for (let i = 0; i < keranjang.length; i++) {
          html += `<div class="row pos-table-row">
                      <div class="col-9">
                        <div class="pos-product-thumb">
                          <div class="img" style="${keranjang[i].img}"></div>
                          <div class="info">
                            <div class="title">${keranjang[i].title}</div>
                            <div class="single-price">Rp. ${keranjang[i].price}</div>                            
                            <div class="desc">${keranjang[i].attributes}</div>                        
                            <div class="input-group qty" data-id="${keranjang[i].id}" data-arr="${i}">
                              <div class="input-group-append">
                                <a href="#" class="btn btn-default"><i class="fa fa-minus"></i></a>
                              </div>
                              <input type="text" class="form-control qty-input" value="${keranjang[i].qty}" />
                              <div class="input-group-prepend">
                                <a href="#" class="btn btn-default"><i class="fa fa-plus"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-3 d-flex flex-column">
                        <div class="total-price">
                          Rp. ${keranjang[i].subprice}
                        </div>
                        <a href="#" class="mt-auto text-danger align-self-start text-decoration-none btn-delete-order" data-id="${keranjang[i].orderDetailId}">
                          Delete
                        </a>
                      </div>                      
                    </div>`;
          subtotal += parseInt(keranjang[i].subprice);
        }
      }

      let tax = 0;
      let tax_text = '';
      if ($('#orderTypeMenu').val() == 'takeAway') {
        tax = subtotal * 0 / 100;
        tax_text = 'PPn (0%)';
      } else {
        tax = subtotal * 10 / 100;
        tax_text = 'PPn (10%)';
      }

      let total = parseInt(tax) + parseInt(subtotal);

      $('.subtotal .price').html('Rp. ' + parseInt(subtotal));
      $('.taxes .text').html(tax_text);
      $('.taxes .price').html('Rp. ' + parseInt(tax));
      $('.total .price').html('Rp. ' + parseInt(total));
      $('.total-order').html(`New Order (${keranjang.length})`)
      $('.pos-mobile-sidebar-toggler .badge').html(keranjang.length)
      $('.pos-table').html(html);
    }

    $(document).on('click', '.product', function() {
      let id = $(this).data('id');

      $.get(`pos/get_detail_item/${id}`, function(data) {
        // let res = JSON.parse(data);
        // /* Check if have an Attributes */
        // let html = '';
        // let attr = res.data.attributes;

        $('#modalPosItem .modal-content').html(data)
        $('#modalPosItem').modal('show');
      });
    });

    /* Detail Area */
    $(document).on('click', '#add-to-cart', function() {
      let id = $(this).data('id');
      let title = $('.pos-product-info .title').html();
      let img = $('.pos-product-img .img').attr('style');
      let price = parseInt($('.pos-product-info .price').html().replace('Rp.', ''));
      let qty = parseInt($('#pos-product-qty').val());

      let orderId = $('#orderId').val();
      let size_price = document.querySelector(`.option-input:checked`)?.value;
      var size_name = $(".option-input:checked").map(function() {
        return $(this).data('attr')
      }).get();

      if (size_price == undefined) {
        size_price = 0
      }

      let product = {
        id: id,
        title: title,
        img: img,
        price: price,
        subprice: (price * qty) + parseInt(size_price),
        qty: qty,
        orderDetailId: keranjang.length + 1,
        attributes: size_name.toString()
      }

      keranjang.push(product);
      console.log(keranjang);
      load_cart();
      $('#modalPosItem').modal('hide');
    });

    $(document).on('click', '.pos-product-addqty', function() {
      let qty = $('#pos-product-qty').val();
      $('#pos-product-qty').val(parseInt(qty) + 1);
    })

    $(document).on('click', '.pos-product-minqty', function() {
      let qty = $('#pos-product-qty').val();
      if (qty > 1) {
        $('#pos-product-qty').val(parseInt(qty) - 1);
      }
    })
    /* End Of Detail Area */


    /* Order Item Area */
    /* Minus qty button */
    $(document).on('click', '.input-group-prepend .btn', function() {
      let id = $(this).parent().parent().data('id');
      let arr = $(this).parent().parent().data('arr');
      let orderId = $('#orderId').val();

      let total_price_addon = keranjang[arr].subprice - (keranjang[arr].price * keranjang[arr].qty);
      let total_subprice = keranjang[arr].price * (parseInt(keranjang[arr].qty) + parseInt(1)) + parseInt(total_price_addon);

      keranjang[arr].qty++
      keranjang[arr].subprice = total_subprice
      load_cart();
    })
    /* On Input QTY */
    $(document).on('input', '.qty-input', function() {
      this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');
      let id = $(this).parent().data('id');
      let arr = $(this).parent().data('arr');
      let orderId = $('#orderId').val();
      let valueQty = $(this).val();

      let total_price_addon = keranjang[arr].subprice - (keranjang[arr].price * keranjang[arr].qty);
      let total_subprice = keranjang[arr].price * valueQty + parseInt(total_price_addon);


      keranjang[arr].qty = valueQty;
      keranjang[arr].subprice = total_subprice
      load_cart();

    })

    /* Add qty button */
    $(document).on('click', '.input-group-append .btn', function() {
      let id = $(this).parent().parent().data('id')
      let orderId = $('#orderId').val();
      let arr = $(this).parent().parent().data('arr');

      let total_price_addon = keranjang[arr].subprice - (keranjang[arr].price * keranjang[arr].qty);
      let total_subprice = keranjang[arr].price * (parseInt(keranjang[arr].qty) - parseInt(1)) + parseInt(total_price_addon);

      if (keranjang[arr].qty > 1) {
        keranjang[arr].qty--
        keranjang[arr].subprice = total_subprice
        load_cart();
      }
    })

    /* Remove Order */
    $(document).on('click', '.btn-delete-order', function(e) {
      e.preventDefault();
      let id = $(this).data('id');

      /* Add Delete Confirmation */
      let html = `<div class="pos-remove-confirmation">
										<svg width="2em" height="2em" viewBox="0 0 16 16" class="me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
											<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
										</svg>
										Remove this item? 
										<a href="#" class="btn btn-white ms-auto me-2 cancel-remove">No</a>
										<a href="#" class="btn btn-danger yes-remove" data-id="${id}">Yes</a>
									</div>`;
      $(this).parent().parent().append(html);
    });

    $(document).on('click', '.cancel-remove', function() {
      $(this).parent().remove()
    });

    $(document).on('click', '.yes-remove', function() {
      let orderDetailId = $(this).data('id');
      let this_parent = $(this).parent().parent().remove();

      for (let i = 0; i < keranjang.length; i++) {
        if (keranjang[i].orderDetailId == orderDetailId) {
          keranjang.splice(i, 1);
        }
      }
      load_cart();
    });
    /* End Of Order Item Area */

    /* Function Success Scan */
    function onScanSuccess(qrMessage) {
      window.open(qrMessage + 'pos');

      html5QrcodeScanner.clear();

      $('#btn-render').css('display', 'block');
    }
    /* Function Failure Scan */
    function onScanFailure(error) {
      // handle scan failure, usually better to ignore and keep scanning.
      // for example:
      console.warn(`QR error = ${error}`);
    }

    /* Init Function Scan */
    let html5QrcodeScanner = new Html5QrcodeScanner(
      "reader", {
        fps: 10,
        qrbox: 250
      }, /* verbose= */ false);

    html5QrcodeScanner.render(onScanSuccess, onScanFailure);

    /* Product Item Area */
    /* End Of Product Item Area */

    var handleDashboardGritterNotification = function() {
      $.get("<?= base_url('dashboard/call_service?service=ok'); ?>", function(data) {
        console.log(data);
      })
    };
  </script>
</body>

</html>