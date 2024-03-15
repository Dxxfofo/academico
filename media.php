<?php 
    $nome = $_POST['nome'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $falta = $_POST['falta'];

    function calcularmMedia ($prova1, $prova2){
    return ($prova1 + $prova2) /2;   
    }

    $resultado = calcularmMedia($p1, $p2);
    
    if ($resultado >= 7.0 && $resultado <=10 && $falta <=32) {
        echo $nome. ' aprovado com nota ' .$resultado;
    }
    elseif($resultado < 7.0 && $resultado >=10 && $falta <=32){
        echo $nome.' em recuperação com nota '.$resultado;
    }
    elseif($resultado == 0 || $falta>32) {
        echo $nome. ' reprovado';
    }
    else{
        echo 'Preencha novamente';
    }
    
?>