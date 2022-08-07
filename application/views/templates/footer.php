</div>
<!-- END #content -->
<!-- END theme-panel -->
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
<script src="<?= base_url(); ?>assets/plugins/d3/d3.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/nvd3/build/nv.d3.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
<script src="<?= base_url(); ?>assets/plugins/simple-calendar/dist/jquery.simple-calendar.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-fixedheader-bs5/js/fixedHeader.bootstrap5.min.js"></script>

<script src="<?= base_url(); ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/select2/dist/js/select2.full.js"></script>
<script src="<?= base_url(); ?>assets/js/core_1_0_0_5.js"></script>
<!-- <script src="<?= base_url(); ?>assets/js/core-system_0_5234.js"></script> -->
<script src="<?= base_url(); ?>assets/js/demo/dashboard-v2-01.js"></script>
<!-- ================== END page-js ================== -->
</body>

</html>
<script>
  refreshDtbServerSide()
  $(".default-select2").select2();

  $(document).on('click', '.sel-lang', function() {
    let url = window.location.href;
    $.get($(this).attr('href'), function() {
      window.location.href = url;
    });
  });

  /**
   * btn-del
   */
  $(document).on('click', '.btn-del', function(e) {
    e.preventDefault();
    var href = $(this).attr('href')
    swal({
        title: 'Anda Yakin ?',
        text: 'Akan Menghapus Data Ini !',
        icon: 'info',
        buttons: {
          cancel: {
            text: 'Cancel',
            value: null,
            visible: true,
            className: 'btn btn-default',
            closeModal: true,
          },
          confirm: {
            text: 'Delete',
            value: true,
            visible: true,
            className: 'btn btn-danger',
            closeModal: true
          }
        }
      })
      .then((result) => {
        if (result == true) {
          $.get(href, function(response) {
            var parse = JSON.parse(response)
            // console.log(parse);
            if (parse.status == true) {
              swal({
                  title: 'Success',
                  text: parse.message,
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
                    window.location.href = window.location.href
                  }
                })
            } else {
              swal({
                title: 'Failed',
                text: parse.message,
                icon: 'error',
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
            }
          })
        } {
          return false
        }
      })

  })

  /**
   * form submit
   */
  $('#regCrudForm').on('submit', function(e) {
    e.preventDefault();

    // make the confirmation first
    swal({
        icon: 'info',
        title: 'Konfirmasi',
        text: 'Pastikan Data Yang Anda Masukan Telah Sesuai',
        buttons: {
          cancel: {
            text: 'Cancel',
            value: null,
            visible: true,
            className: 'btn btn-default',
            closeModal: true,
          },
          confirm: {
            text: 'Submit',
            value: true,
            visible: true,
            className: 'btn btn-primary',
            closeModal: true
          }
        }
      })
      .then((result) => {
        if (result == false) {
          return false;
        } else if (result == true) {
          // init
          var url = $(this).attr('action');
          var redUrl = $(this).data('redurl');
          var form_data = new FormData($(this)[0]);
          var data_upload_url = "<?= base_url('user/manual_upload/add_with_excel'); ?>";
          var current_url = window.location.href;
          var last_response_length = 0;
          $.ajax({
            type: 'POST',
            url: url,
            data: form_data,
            processData: false,
            contentType: false,
            xhr: function() {
              var xhr = new XMLHttpRequest(); // Create a custom XHR object

              xhr.onprogress = function(data) {
                var response = data.currentTarget.response, // Get the output
                  progress = response.slice(last_response_length); // Remove old output
                $('.progress-bar').css("width", parseInt(progress) + '%');
                $('.progress-bar').html(parseInt(progress) + '%'); // Update the progress bar
                last_response_length = response.length; // Track where the old data is (so they can be removed when new data is received)

              };
              return xhr; // IMPORTANT! Return the custom XHR for .ajax to use
            },
            beforeSend: function() {
              // $('.btn-primary').attr('disabled', true);
              $('.bg-process').fadeIn();
            },
            success: function(response) {
              $('.bg-process').attr('style', 'display: none !important');
              if (current_url == data_upload_url) {
                $('.btn-primary').removeAttr('disabled');
                Swal.fire({
                  icon: 'success',
                  title: 'Upload Complete',
                });

                $('.log-data-upload').html(response);
                $('.form-data-upload').hide();
                $('.alert-warning').hide();
                window.location.href = redUrl;
              } else {
                textParse = JSON.parse(response);
                // check status of response
                if (textParse['status'] == true) {
                  swal({
                    icon: 'success',
                    title: 'Success',
                    text: textParse['message'],
                  }).then((result) => {
                    if (result) {
                      window.location.href = redUrl;
                    }
                  });
                } else {
                  swal({
                    icon: 'error',
                    title: 'Failed',
                    text: textParse['message'],
                  }).then((result) => {
                    $('.btn-primary').removeAttr('disabled');
                  })
                }
              }
            }
          });
        }
      })
  });

  /* Logout Function */
  $(document).on('click', '.btn-logout', function(e) {
    e.preventDefault();

    // init
    var url = $(this).attr('href');
    var redUrl = $(this).data('redurl');

    // confirmation
    swal({
      title: 'Are you sure?',
      text: 'Want To Logout ?',
      icon: 'info',
      buttons: {
        cancel: {
          text: 'No',
          value: null,
          visible: true,
          className: 'btn btn-default',
          closeModal: true,
        },
        confirm: {
          text: 'Yes',
          value: true,
          visible: true,
          className: 'btn btn-primary',
          closeModal: true
        }
      }
    }).then((result) => {
      // check if confirmed
      if (result == false) {
        return false;
      } else if (result == true) {
        $.get(url, function() {
          window.location.href = redUrl;
        });
      }
    });
  });

  /** 
   * token check
   */
  setInterval(function() {
    $.get("<?= base_url('dashboard/call_service'); ?>", function(data) {
      let res = JSON.parse(data)


      if (res == 'ok') {
        setTimeout(function() {
          $.gritter.add({
            title: 'Welcome back, Admin!',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus lacus ut lectus rutrum placerat.',
            image: '../assets/img/user/user-12.jpg',
            sticky: true,
            time: '',
            class_name: 'my-sticky-class'
          });
        }, 400);
      }
    })
  }, 1000)
</script>