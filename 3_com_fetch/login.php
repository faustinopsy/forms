<?php

$data = json_decode(file_get_contents('php://input'), true);
//var_dump(file_get_contents('php://input'));
//var_dump($data);exit;
if(isset($data['username']) && isset($data['password'])){
    $username = $data['username'];
    $password = $data['password'];
    $fruta=$data['fruta'];
    $nomes=['b'=> 'banana','a'=> 'abacaxi','g'=>'goiaba'];
    if($username === 'admin' && $password === '1234'){
        echo json_encode(['message' => 'Login bem-sucedido!', 'Fruta'=> $nomes[$fruta]]);
    } else {
        echo json_encode(array('message' => 'Nome de usuário ou senha incorretos!'));
    }
} else {
    echo json_encode(array('message' => 'Requisição inválida!'));
}

