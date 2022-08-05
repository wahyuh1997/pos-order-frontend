<script>
  const dtb_arr = []
  dtb_arr[0] = ''

  function filter_process() {
    dtb_arr[0] = $('#orderNumber').val()

    $('#dtb-serverside').attr('href', "<?= base_url('datatables/order/get?filter='); ?>" + '["' + dtb_arr[0] + '"]');
    refreshDtbServerSide()
  }

  dtb_serverside.on('draw', function() {
    $('tr td:nth-child(7)').each(function() {
      $(this).addClass('text-end')
    })
    $('tr td:nth-child(8)').each(function() {
      $(this).addClass('text-end')
    })
    $('tr td:nth-child(9)').each(function() {
      $(this).addClass('text-center')
    })
    $('tr td:nth-child(10)').each(function() {
      $(this).addClass('text-center')
    })
  });
</script>