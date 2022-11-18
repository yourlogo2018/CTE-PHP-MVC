<?php 
$_SESSION["header"] = "Editar Curso";

$render('header', [
    "rota" => "editar_curso"
]); 


echo $formulario_editar;


$render('footer'); 
?>