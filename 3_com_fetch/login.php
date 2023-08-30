<?php

$data = json_decode(file_get_contents('php://input'), true);

if(isset($data['username']) && isset($data['password'])){
    $username = $data['username'];
    $password = $data['password'];

    if($username === 'admin' && $password === '1234'){
        echo json_encode(array('message' => 'Login bem-sucedido!'));
    } else {
        echo json_encode(array('message' => 'Nome de usuário ou senha incorretos!'));
    }
} else {
    echo json_encode(array('message' => 'Requisição inválida!'));
}

