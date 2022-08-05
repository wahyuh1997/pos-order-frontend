<script>
  const dtb_arr = []
  dtb_arr[0] = ''
  dtb_arr[1] = ''

  $(document).on('change', '#locationId', function() {
    let tableHtml = $('#tableId');
    let id = $(this).val();
    dtb_arr[0] = $(this).val();

    let url = '<?= base_url() ?>' + `select_serverside/getData?url=v1/tables/select2&locationId=${id}`;
    tableHtml.html('<option value="">{{Select Option}}</option>');
    tableHtml.data('url', url);
    teatimeSelect();
  });

  $(document).on('change', '.form-select', function() {
    dtb_arr[1] = $(this).val();
  })

  function filter_process() {
    dtb_arr[0] = $('#menuName').val()
    $('#dtb-serverside').attr('href', "<?= base_url('datatables/tables/get?filter='); ?>" + '["' + dtb_arr[0] + '", "' + dtb_arr[1] + '"]');
    refreshDtbServerSide()
  }
</script>