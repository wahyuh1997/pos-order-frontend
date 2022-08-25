<script>
  $(document).on('keyup', '#pay', function() {
    let change = $(this).val() - $('#total').val();
    $('#change').val(change);
  });

  $(document).on('change', '#payment_type', function() {
    if ($(this).val() != '1') {
      $('.cash').addClass('d-none');
    } else {
      $('.cash').removeClass('d-none');
    }
  });

  $(document).on('click', '#bayar', function(e) {
    // console.log($('#pay').val())
    if ($('#payment_type').val() == 1) {
      if (parseInt($('#pay').val()) < parseInt($('#total').val())) {
        e.preventDefault();
        swal({
          title: 'Gagal',
          text: 'Total Bayar Tidak Boleh Kurang Dari Nominal Pembelian',
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
    }
  })

  /* Logout Function */
  $(document).on('click', '.cancel', function(e) {
    e.preventDefault();

    // init
    var url = $(this).attr('href');
    var redUrl = $(this).data('redurl');

    // confirmation
    swal({
      title: 'Apakah Anda Yakin?',
      text: 'Akan Membatalkan Pesanan ini',
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
        $.get(url, function(response) {
          let parse = JSON.parse(response)
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
        });
      }
    });
  });
</script>