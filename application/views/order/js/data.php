<script>
  $(document).on('keyup', '#pay', function() {
    let change = $(this).val() - $('#total').val();
    $('#change').val(change);
  });

  $(document).on('change', '#payment_type', function() {
    if ($(this).val() != 'cash') {
      $('.cash').addClass('d-none');
    } else {
      $('.cash').removeClass('d-none');
    }
  });
</script>