<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form method="post" action="recebeDisciplina.php">
        <label for="nome">Nome Disciplina</label>
        <input type="text" id="nmDisciplina" name="nmDisciplina" placeholder="Linguagens de Servidor" autocomplete="off">
        
        <br>

        <label for="nome">Professor</label>
        <input type="text" id="nmProfessor" name="nmProfessor" autocomplete="off">

        <br>

        <label for="nome">Dia</label>
        <input type="text" id="dia" name="dia" autocomplete="off">

        <br>

        <label for="nome">Descrição</label>
        <input type="text" id="desc" name="desc" autocomplete="off">

        <br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>