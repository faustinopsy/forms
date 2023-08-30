<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $username = $_GET['username'];
            $password = $_GET['password'];
            
            if ($username === 'admin' && $password === '1234') {
                echo '<p>Login bem-sucedido!</p>';
            } else {
                echo '<p>Nome de usuário ou senha incorretos!</p>';
            }
        }
    ?>

    <form action="" method="GET">
        <label for="username">Nome de usuário:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
