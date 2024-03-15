<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pegado</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&    display=swap" rel="stylesheet">
    <script src="script/script.js"></script>
</head>
<body>
    <div class="nav">
        <a href="dashboard.php"><img class="s" src="imagens/logosenacv2.png" alt=""></a>
        <nav>
            <ul>
                <li><a href="aluno.html">Alunos</a></li>
                <li><a href="professor.html">Professores</a></li>
                <li><a href="disciplina.html">Disciplinas</a></li>
                <li><a href="media.html">Notas</a></li>
                <li><a href="turmas.html">Turmas</a></li>
            </ul>
        </nav>
            <img class="img" src="imagens/menu.png" alt="">
    </div>

    <div class="main">
        <h1 class="h1">Controle Academico</h1>
        <p>Bem vindo, <?php echo $_SESSION['usuario']; ?> ao <b>sistema de controle academico</b>.</p> <p>Aqui você poderá consultar suas notas.</p> <p>E também sua frequencia.</p>
    </div>

    <?php
        echo '<p>'.'Sistema Acadêmico'.'<php>';

        $aluno = "Iego Castelo";
        $Profissao = "Software Engineer";

        echo '<p>'. $aluno .'</p>';
        echo $Profissao;

        $notas = array ("prova1" => 8.3, "prova2" => 9.2, "prova3" => 10.0); 

        echo $notas["prova1"];
    ?>
</body>
</html>