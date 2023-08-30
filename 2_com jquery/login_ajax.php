<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === 'admin' && $password === '1234') {
        echo json_encode(array('message' => 'Login bem-sucedido!'));
    } else {
        echo json_encode(array('message' => 'Nome de usuário ou senha incorretos!'));
    }

