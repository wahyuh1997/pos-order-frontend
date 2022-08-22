<script src="<?= base_url(); ?>assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jszip/dist/jszip.min.js"></script>

<!-- script -->
<script>
  $('#data-table-default').DataTable({
    responsive: true,
    dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
    buttons: [{
        extend: 'copy',
        className: 'btn-sm'
      },
      {
        extend: 'csv',
        className: 'btn-sm'
      },
      {
        extend: 'excel',
        className: 'btn-sm'
      },
      {
        extend: 'pdf',
        className: 'btn-sm'
      },
      {
        extend: 'print',
        className: 'btn-sm'
      }
    ],
  });
</script>