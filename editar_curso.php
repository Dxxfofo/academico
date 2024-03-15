<?php
//verificar se o id está selecionado
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //abrir a conexão
    require ('script/conexao.php');
    $sql = "SELECT * FROM matricula WHERE id = $id" ;
    $resultado = mysqli_query($conexao,$sql);

    //verificar se existe id
    if (mysqli_num_rows($resultado) == 1) {
        $curso =mysqli_fetch_assoc($resultado) ;
    } else {
       //deu erro volta para a lista dos cursos

       header("location:cadastrocurso.php");
       exit;
    }
    mysqli_close($conexao);
} else {
    //não achou o id e termina o código    
    header("Location:cadastrocurso.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
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

    <form action="atualizar_curso.php" method="post">
        <h2>Editar curso</h2>
        <input type="text" name="id" id="id" value="<?php echo $curso['id']; ?>">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $curso['nome']; ?>">

        <label for="curso">Curso</label>
        <select name="curso" id="curso">
        <option name="curso" id="cursoe" value="e">Engenharia de Software
        <?php echo $curso['curso'] == 'e' ? 'selected' : '' ; ?>

        <option name="curso" id="cursom" value="m">Manutenção de Computadores
        <?php echo $curso['curso'] == 'm' ? 'selected' : '' ; ?>

        <option name="curso" id="cursop" value="p">Progamador de Computadores
        <?php echo $curso['curso'] == 'p' ? 'selected' : '' ; ?>

        <option name="curso" id="cursow" value="w">Progamador Web
        <?php echo $curso['curso'] == 'w' ? 'selected' : '' ; ?>

        </select>

        <button type="reset" name="limpar">Limpar</button>
        <button type="submit" name="submit">Enviar</button>
    </form>  
</body>
</html>