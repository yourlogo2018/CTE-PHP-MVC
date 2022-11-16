<?php 
$_SESSION["header"] = "Cursos";

$render('header', [
    "rota" => "cursos"
]); 

echo $formulario_cursos;

$render('footer'); 
?>