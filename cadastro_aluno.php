<?php
    $cpf = $_POST['cpf'];
    $aluno = $_POST['aluno'];
    $endereco = $_POST['endereco'];
    
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];

    require ("script/conexao.php");

    $inserir = "INSERT INTO aluno (cpf, aluno , endereco, cep, bairro, cidade, estado, telefone) VALUES ( '$cpf', '$aluno' , '$endereco', '$cep', '$bairro', '$cidade', '$estado', '$telefone' )";

    if (mysqli_query($conexao, $sql)){
        echo "Registro inserido com sucesso";
    }
    else {
        echo "Erro ao inserir registro" .mysqli_error($conexao);
    }

    header("location:cadastroaluno.php");
?>