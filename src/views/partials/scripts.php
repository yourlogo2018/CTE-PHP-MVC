
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
<script src="<?php echo $base ?>/template/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo $base ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $base ?>/template/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo $base ?>/template/plugins/sparklines/sparkline.js"></script>
<script src="<?php echo $base ?>/template/plugins/moment/moment.min.js"></script>
<script src="<?php echo $base ?>/template/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo $base ?>/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo $base ?>/template/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo $base ?>/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo $base ?>/template/dist/js/adminlte.js"></script>
<script src="<?php echo $base ?>/template/dist/js/pages/dashboard.js"></script>
<script src="<?php echo $base ?>/template/plugins/toastr/toastr.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>

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