<?php 
$_SESSION["header"] = "Editar Curso";

$render('header', [
    "rota" => "editar"
]); 


echo $formulario_editar;


$render('footer'); 
?>