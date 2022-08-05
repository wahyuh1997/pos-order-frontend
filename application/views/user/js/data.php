<script>
  const dtb_arr = []
  dtb_arr[0] = ''

  function filter_process() {
    dtb_arr[0] = $('#menuCatName').val()

    $('#dtb-serverside').attr('href', "<?= base_url('datatables/menucategories/get?filter='); ?>" + '["' + dtb_arr[0] + '"]');
    refreshDtbServerSide()
  }
</script>