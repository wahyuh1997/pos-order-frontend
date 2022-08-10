<script src="<?= base_url() ?>assets/plugins/switchery/dist/switchery.min.js"></script>
<script>
  var elm = document.getElementById('switchery-default');
  var switchery = new Switchery(elm, {
    color: '#00acac'
  });

  $(document).on('change', '#switchery-default', function() {
    if ($(this).prop('checked') == true) {
      $('#status').val(1);
    } else {
      $('#status').val(0);
    }
  });

  /* Add Section */
  $(document).on('click', '.btn-add', function() {
    let cnt = $('.attributes').length
    let html = `<div class="row mt-1">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="">Jenis Ukuran</label>
                <input type="text" class="form-control attributes" name="attribute[${cnt}][nama]" value="" autocomplete="off">
              </div>
            </div>
            <div class="col-lg-6 ps-0">
              <div class="mb-3">
                <label for="">Harga</label>
                <div class="row">
                  <div class="col-lg-8">
                    <input type="number" class="form-control" name="attribute[${cnt}][harga]" value="0" min="0" autocomplete="off">
                  </div>
                  <div class="col-lg-4">
                    <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-times"></i> Hapus</button>
                  </div>
                </div>
              </div>
            </div>
          </div>`;
    $(this).parent().append(html)
    // teatimeSelect();
  });

  $(document).on('click', '.btn-delete', function() {
    $(this).parent().parent().parent().parent().parent().remove();
  });
</script>