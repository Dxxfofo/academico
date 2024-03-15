<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aluno</title>
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

    <p>Preencher dados do aluno(a): </p>
    <fieldset>
        <legend>Cadastro de aluno(a)</legend>
        <form action="cadastro_aluno.php" method="post">
            <label for="aluno">Aluno</label>
            <input type="text" id="aluno" name="aluno">

            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf">

            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco">

            <label for="complemento">Complemento</label>
            <input type="text" id="complemento" name="complemento">

            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep">

            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro">


            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade">

            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="" disabled>Selecione o Estado</option>
                <option value="ac">Acre</option>
                <option value="al">Alagoas</option>
                <option value="ap">Amapá</option>
                <option value="am">Amazonas</option>
                <option value="ba">Bahia</option>
                <option value="ce">Ceará</option>
                <option value="df">Distrito Federal</option>
                <option value="es">Espírito Santo</option>
                <option value="go">Goiás</option>
                <option value="ma">Maranhão</option>
                <option value="ms">Mato Grosso do Sul</option>
                <option value="mt">Mato Grosso</option>
                <option value="mg">Minas Gerais</option>
                <option value="pa">Pará</option>
                <option value="pb">Paraíba</option>
                <option value="pr">Paraná</option>
                <option value="pe">Pernambuco</option>
                <option value="pi">Piauí</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="ro">Rondônia</option>
                <option value="rr">Roraima</option>
                <option value="sc">Santa Catarina</option>
                <option value="sp">São Paulo</option>
                <option value="se">Sergipe</option>
                <option value="to">Tocantins</option>
            </select>

            <label for="tefefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone">

            <button type="reset" value="Limpar" name="limpar">Limpar

            <button type="submit" value="Enviar" name="submit">Enviar
        </form>
    </fieldset>
</body>
</html>