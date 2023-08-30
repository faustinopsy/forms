<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === 'admin' && $password === '1234') {
        echo '<p>Login bem-sucedido!</p>';
    } else {
        echo '<p>Nome de usuário ou senha incorretos!</p>';
    }

