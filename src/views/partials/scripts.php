
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
<!-- <script src="<?php echo $base ?>/template/plugins/jquery/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $base ?>/template/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $base ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $base ?>/template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $base ?>/template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap
<script src="<?php echo $base ?>/template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $base ?>/template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="<?php echo $base ?>/template/plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<script src="<?php echo $base ?>/template/plugins/moment/moment.min.js"></script>
<script src="<?php echo $base ?>/template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $base ?>/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $base ?>/template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $base ?>/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $base ?>/template/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $base ?>/template/dist/js/pages/dashboard.js"></script>

<!-- Toastr -->
<script src="<?php echo $base ?>/template/plugins/toastr/toastr.min.js"></script>


<?php
use core\Alerts;
if( !empty($_SESSION["erro"]) ){

  if( $_SESSION["erro"] == "true" ){

      Alerts::sessionsAlertsErrorToastTr($_SESSION["mensagem"]);
      $_SESSION["erro"] = "";
      $_SESSION["mensagem"] = "";

  }else{

      Alerts::sessionsAlertsSucessToastTr($_SESSION["mensagem"]);
      $_SESSION["erro"] = "";
      $_SESSION["mensagem"] = "";

  }

}
?>