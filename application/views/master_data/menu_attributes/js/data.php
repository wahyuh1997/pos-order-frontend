<script>
  const dtb_arr = []
  dtb_arr[0] = ''

  function filter_process() {
    dtb_arr[0] = $('#menuAttrName').val()

    $('#dtb-serverside').attr('href', "<?= base_url('datatables/menuattributes/get?filter='); ?>" + '["' + dtb_arr[0] + '"]');
    refreshDtbServerSide()
  }



  $('#btn-submit').click(function() {
    let id = $('#menuAttrId').val();
    let attMenu = $('#menuAttrSelectName').val();
    let price = $('#menuAttrSelectPrice').val();
    let menuAttrSelectId = $('#menuAttrSelectId').val();
    let url;

    if (menuAttrSelectId == '') {
      url = '<?= base_url('master-data/menu-attributes/set-addon/') ?>' + id
    } else {
      url = '<?= base_url('master_data/menu_attributes/update_addon/') ?>' + menuAttrSelectId
    }

    $.ajax({
      url: url,
      method: 'POST',
      dataType: 'JSON',
      data: {
        menuAttrId: id,
        menuAttrSelectName: attMenu,
        menuAttrSelectPrice: price
      },
      success: function(data) {
        if (data.success == true) {
          $('#menuAttrSelectId').val('');
          $('#menuAttrSelectName').val('');
          $('#menuAttrSelectPrice').val('');
          refreshDtbServerSide()
        } else {
          swal({
            title: 'Failed',
            text: data.message,
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
  });


  $(document).on('click', '.btn-edit', function(e) {
    e.preventDefault();
    let id = $(this).data('id');
    let url = '<?= base_url('master_data/menu_attributes/get_addon/') ?>'

    $.get(`${url + id}`, function(data) {
      res = JSON.parse(data);
      if (res.success == true) {
        $('#menuAttrSelectId').val(res.data.menuAttrSelectId);
        $('#menuAttrSelectName').val(res.data.menuAttrSelectName);
        $('#menuAttrSelectPrice').val(res.data.menuAttrSelectPrice);
      }
    });
  });
</script>