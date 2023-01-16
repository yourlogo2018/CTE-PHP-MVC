<?php 

$_SESSION["header"] = "Consultar Alunos";
$render('header', [
   "rota" => "consultar_alunos"
]); 

// echo "<pre>";
// print_r($consul_alunos);
?>

<div class="card mb-4">
   <h5 class="card-header">Filtro de cadastro</h5>
   <form method="POST"  action="<?php echo $base ?>/pesquisa_alunos"  class="card-body">
      <h6 class="fw-normal">1. Dados dos Alunos</h6>
      <div class="row g-3">
         <div class="col-md-6">
            <label class="form-label">Nome completo</label>
            <input type="text"  class="form-control" name="nome"  placeholder="" required>
         </div>
         <!-- <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="text" name="alunoemail" class="form-control"  placeholder=""  >
            </div> -->
         <div class="col-md-6">
            <label class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpf" placeholder=""  >
            <div class="form-text"> Somente números </div>
         </div>
         <!-- <div class="col-md-6">
            <label class="form-label">Cidade</label>
            <input type="text" name="celular" class="form-control phone-mask" placeholder="">
            <div class="form-text"></div>
            </div> -->
         <!-- Select de Alunos -->
         <div class="col-md-4" >
            <label>Nucleos</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
               <option value="">Selecione</option>
               <?php
                  if( $consul_alunos["nucleos"] ){
                  
                     foreach ($consul_alunos["nucleos"] as $k => $n) {
                        echo '<option value="'.$n["nucleoid"].'">'.$n["nucleoid"].'|'.$n["nucleonome"].'</option>';
                     }
                  
                  }
                  
                  ?>
            </select>
         </div>
      </div>
      <div class="pt-4">
         <button  type="submit" class="btn btn-primary me-sm-3 me-1" ><i class="bx bxs-save me-2"><i class="icon_fa fas fa-search"></i>&nbsp;&nbsp;</i>Pesquisar</button>
         <button type="reset" class="btn btn-info me-sm-3 me-1" ><i class="icon_fa fas fa-broom"></i>&nbsp;&nbsp;</i>Limpar</button>
      </div>    
   </form>  
</div>
<?php
$render('footer'); 
?>