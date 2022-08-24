</div>
<!-- END #content -->
<!-- END theme-panel -->
<!-- BEGIN scroll-top-btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
<!-- END scroll-top-btn -->
</div>
<!-- END #app -->

<!-- ================== BEGIN core-js ================== -->
<script src="<?= base_url(); ?>assets/js/vendor.min.js"></script>
<script src="<?= base_url(); ?>assets/js/app.min.js"></script>
<!-- ================== END core-js ================== -->

<!-- ================== BEGIN page-js ================== -->
<script src="<?= base_url(); ?>assets/plugins/d3/d3.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/nvd3/build/nv.d3.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
<script src="<?= base_url(); ?>assets/plugins/simple-calendar/dist/jquery.simple-calendar.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/gritter/js/jquery.gritter.js"></script>


<script src="<?= base_url(); ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables.net-fixedheader-bs5/js/fixedHeader.bootstrap5.min.js"></script>

<script src="<?= base_url(); ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/select2/dist/js/select2.full.js"></script>
<script src="<?= base_url(); ?>assets/js/demo/dashboard-v2-02.js"></script>
<script src="<?= base_url(); ?>assets/js/core.js"></script>
<!-- ================== END page-js ================== -->
</body>

</html>
<script>
  /** 
   * token check
   */
  setInterval(function() {
    $.get("<?= base_url('dashboard/get_service'); ?>", function(data) {
      let res = JSON.parse(data)
      // console.log(res);

      if (res.status == true) {
        setTimeout(function() {
          $.gritter.add({
            title: res.title,
            text: res.text,
            // image: '../assets/img/user/user-12.jpg',
            sticky: true,
            time: '',
            class_name: 'my-sticky-class'
          });
        }, 1000);
      }
    })
  }, 3000)
</script>