<script>
  const dtb_arr = []
  dtb_arr[0] = ''
  dtb_arr[1] = ''

  $(document).on('change', '.form-select', function() {
    dtb_arr[1] = $(this).val();
  })

  function filter_process() {
    dtb_arr[0] = $('#menuName').val()
    $('#dtb-serverside').attr('href', "<?= base_url('datatables/menu/get?filter='); ?>" + '["' + dtb_arr[0] + '", "' + dtb_arr[1] + '"]');
    refreshDtbServerSide()
  }

  /* Add Section */
  $(document).on('click', '.btn-add', function() {
    let cnt = $('.attributes').length
    let html = `<div class="row mt-1">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="">Jenis Ukuran</label>
                <input type="text" class="form-control" id="" name="menuName" value="" autocomplete="off">
              </div>
            </div>
            <div class="col-lg-6 ps-0">
              <div class="mb-3">
                <label for="">Harga</label>
                <div class="row">
                  <div class="col-lg-8">
                    <input type="number" class="form-control" id="" name="" value="0" min="0" autocomplete="off">
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-times"></i> Hapus</button>
                  </div>
                </div>
              </div>
            </div>
          </div>`;
    $(this).parent().append(html)
    teatimeSelect();
  });

  $(document).on('click', '.btn-delete', function() {
    $(this).parent().parent().parent().parent().parent().remove();
  });
</script>