
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form method="post" action="recebe.php">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="exemplo@gmail.com" autocomplete="off">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" autocomplete="off">
        <input type="submit" value="Entrar">
    </form>
</body>
</html>