<script src="<?= base_url() ?>assets/plugins/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
  $("#default-daterange").daterangepicker({
    opens: "right",
    format: "MM/DD/YYYY",
    separator: " to ",
    // startDate: moment().subtract("days", 29),
    // endDate: moment(),
    minDate: "01/08/2022",
    maxDate: "12/31/2022",
  }, function(start, end) {
    $("#default-daterange input").val(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
    $('#start').val(start.format("YYYY-MM-DD"))
    $('#end').val(end.format("YYYY-MM-DD"))
  });
</script>