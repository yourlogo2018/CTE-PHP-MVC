<?php 
$_SESSION["header"] = "Teste";

$render('header', [
    "rota" => "rota"
]); 

echo $formulario_cursos;

$render('footer'); 
?>