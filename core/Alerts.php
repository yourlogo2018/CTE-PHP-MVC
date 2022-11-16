<?php

namespace core;

class Alerts{

    static function sessionsAlertsSucess($message){

        echo "
        <script>
        $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Ok, tudo certo',
            autohide: true,
            delay: 3000,
            subtitle: 'Sucess',
            position: 'topCenter',
            body: '".$message."'
          })
        </script>
        ";
       
    }


    static function sessionsAlertsError($message){

        echo "
        <script>
        $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Errrouuuu',
            autohide: true,
            delay: 3000,
            subtitle: 'Error',
            body: '".$message."'
          })
        </script>
        ";
       
    }


    static function sessionsAlertsSucessToastTr($message){

      echo "
      <script>
        toastr.success('".$message."')
      </script>
      ";
     
    }


    static function sessionsAlertsErrorToastTr($message){

      echo "
      <script>
        toastr.error('".$message."')
      </script>
      ";
     
  }

}