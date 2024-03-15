<?php
    $conexao = mysqli_connect("localhost", "root", "", "academico");

    if (!$conexao){
        die('Não foi posssivel conectar ao banco de dados. Erro detectado: ' .'mysqli_error'());
    }
?>