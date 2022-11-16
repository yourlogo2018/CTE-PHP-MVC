<?php 

$_SESSION["header"] = "Cursos";

$render('header', [
    "rota" => "listar_cursos"
]); 

echo $cursos;

$render('footer'); 

?>