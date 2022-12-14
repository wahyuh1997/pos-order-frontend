$('#dataTable').DataTable({
  responsive: true
});

$(".default-select2").select2();

$(document).on('click', '.sel-lang', function () {
  let url = window.location.href;
  $.get($(this).attr('href'), function () {
    window.location.href = url;
  });
});

/**
 * btn-del
 */
$(document).on('click', '.btn-del', function (e) {
  e.preventDefault();
  var href = $(this).attr('href')
  swal({
      title: 'Anda Yakin ?',
      text: 'Akan Menghapus Data Ini !',
      icon: 'info',
      buttons: {
        cancel: {
          text: 'Batal',
          value: null,
          visible: true,
          className: 'btn btn-default',
          closeModal: true,
        },
        confirm: {
          text: 'Hapus',
          value: true,
          visible: true,
          className: 'btn btn-danger',
          closeModal: true
        }
      }
    })
    .then((result) => {
      if (result == true) {
        $.get(href, function (response) {
          var parse = JSON.parse(response)

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
$('#regCrudForm').on('submit', function (e) {
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
          xhr: function () {
            var xhr = new XMLHttpRequest(); // Create a custom XHR object

            xhr.onprogress = function (data) {
              var response = data.currentTarget.response, // Get the output
                progress = response.slice(last_response_length); // Remove old output
              $('.progress-bar').css("width", parseInt(progress) + '%');
              $('.progress-bar').html(parseInt(progress) + '%'); // Update the progress bar
              last_response_length = response.length; // Track where the old data is (so they can be removed when new data is received)

            };
            return xhr; // IMPORTANT! Return the custom XHR for .ajax to use
          },
          beforeSend: function () {
            // $('.btn-primary').attr('disabled', true);
            $('.bg-process').fadeIn();
          },
          success: function (response) {
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
$(document).on('click', '.btn-logout', function (e) {
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
      $.get(url, function () {
        window.location.href = redUrl;
      });
    }
  });
});