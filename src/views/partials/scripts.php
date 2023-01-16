
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


//CEP
function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
}

function meu_callback(conteudo) {

    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";


            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};

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