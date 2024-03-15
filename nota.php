<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="media.php" method="post">
        <label for="nome">Nome do aluno:
            <input type="text" name="nome" id="nome">
        </label>

        <label for="p1">Nota da 1° prova:
            <input type="text" name="p1" id="p1">
        </label>

        <label for="p2">Nota da 2° prova:
            <input type="text" name="p2" id="p2">
        </label>

        <label for="falta">Quantidades de faltas: 
            <input type="text" name="falta" id="falta">
        </label>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>