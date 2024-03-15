<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Curso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <a href="index.html"><img class="s" src="imagens/logosenacv2.png" alt=""></a>
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
    <?php
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];

    echo '<form>';
    echo '<h2 class = "h2">'."Confira os seus dados".'</h2>';
    echo '<p>' .'Nome: ' .$nome .'</p>';
    
    switch ($curso) {
        case 'e':
            echo '<p>'.'Engenharia de Software'.'</p>';
            break;
        case 'm':
            echo '<p>'.'Manutenção de Computadores'.'</p>';
            break;
        case 'p':
            echo '<p>'. 'Progamador de Computadores'.'</p>';
            break;
        case 'w':
            echo '<p>'. 'Progamador Web'.'</p>';
            break;
        default:
            echo '<p>'. 'Prencha o formulario novamente'.'</p>';
            break;
    }

    echo '<br>';

    $grupo = array('Alvaro', 'Kelly', 'Leticia', 'Rodrigo');
    $i = 0;
    while ($i < count($grupo)) {
    $aluno = $grupo[$i];
    echo $aluno .'<br>';
    $i++;
    }
    
    echo '<br>';

    $grupo = array('Alvaro', 'Kelly', 'Leticia', 'Rodrigo');
    $i = 0;
    do {
    $aluno = $grupo[$i];
    echo $aluno .'</br>';
    $i++;
    } while ($i < count($grupo));

    echo '<br>';

    $grupo = array('Alvaro', 'Kelly', 'Leticia', 'Rodrigo');
    for ($i=0; $i < count($grupo); $i++) { 
        $aluno = $grupo[$i];
        echo $aluno .'<br>';
    }

    echo '<br>';

    $disciplinas = array("Engenharia de Software","Manutenção de Computadores","Progamador de Computadores","Progamador Web");
    foreach ($disciplinas as $value) {
        echo '<p>'. $value .'</p>';
    }
    
    echo '<button type = "submit">Correto</button>';
    echo '</form>';


    $x ="sistema acadêmico";
    echo strlen($x) .'<br>';

    $x ="sistema acadêmico";
    echo ucfirst($x) .'<br>';

    $text = "Sistema academico: divulgação de notas dos alunos";
    echo str_replace("nota","média",$text) .'<br>';

    function imprimirnota($prova1, $prova2){
        $media = ($prova1 + $prova2)/2;
        echo "A media do aluno é: " .$media;
    }

    imprimirnota(7.0, 8.0);
    imprimirnota(10,7);
    ?>
</footer>
</body>
</html>