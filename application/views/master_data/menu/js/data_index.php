<script>
  $(document).on('click', '.change-status', function(e) {
    e.preventDefault();
    var href = $(this).attr('href')
    swal({
        title: 'Anda Yakin ?',
        text: 'Akan Mengganti Status Ketersediaan',
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
            className: 'btn btn-danger',
            closeModal: true
          }
        }
      })
      .then((result) => {
        if (result == true) {
          $.get(href, function(response) {
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
</script>