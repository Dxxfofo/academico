<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Curso</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-......" crossorigin="anonymous" />
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

    <form action="cadastromatricula.php" method="post">
        <h1>Cadastro Curso</h1>
        <p class="p">Prezado(a) Aluno(a), preencha com seus dados: </p>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="curso">Curso</label>
        <select name="curso" id="curso">
        <option type="radio" name="cursoe" id="cursoe" value="e">Engenharia de Software
        <option type="radio" name="cursom" id="cursom" value="m">Manutenção de Computadores
        <option type="radio" name="cursop" id="cursop" value="p">Progamador de Computadores
        <option type="radio" name="cursow" id="cursow" value="w">Progamador Web
        </select>

        <button type="reset" name="limpar">Limpar</button>
        <button type="submit" name="submit">Enviar</button>
    </form>

    <table border="1">
        <thead>
            <tr>Nome</tr>
            <tr>Curso</tr>
            <tr>Ações</tr>
        </thead>
        <tbody>
            <?php
            require ("script/conexao.php");
            $sql = "SELECT * FROM matricula";
            $resultado = mysqli_query($conexao, $sql);

            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>";
                switch ($row['curso']) {
                 case 'e':
                     echo "Engenharia de Software";
                     break;
                 case 'm':
                     echo "Manutenção de Computadores";
                     break;
                 case 'p':
                     echo "Programação de computadores";
                     break;
                 case 'w':
                     echo "Progamador de Computadores";
                     break;
                 
                 default:
                     echo "Por favor preencha os dados" ;
                     break;
                }
            echo "</td>";
            echo "<td>";
            echo "<a href='editar_curso.php?id=".$row['id']."'><i class='fas fa-edit'></i> Editar</a>";

            echo "<a href='excluir_curso.php?id=".$row['id']."'><i class='fas fa-trash-alt'></i> Excluir</a>";
            
            echo "</td>";
            echo "</tr>";
            }
 
             mysqli_close($conexao);
            
            ?>
        </tbody>
    </table>
</body>
</html>