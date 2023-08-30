<?php

$data = json_decode(file_get_contents('php://input'), true);
//var_dump(file_get_contents('php://input'));
//var_dump($data);exit;
if(empty($data['fruta'])){
    echo json_encode(['message' => 'Falta preencher!']);
    exit;
}
if(isset($data['fruta'])){
    $fruta=$data['fruta'];
    $nomes=['b'=> 'banana','a'=> 'abacaxi','g'=>'goiaba'];
    $encontrei=0;
    foreach($nomes as $key=> $value){
        if($fruta==$key){
            $encontrei++;
           
        } 
    }
    if($encontrei>0){
        echo json_encode(['message' => 'Encontrei!', 'fruta'=> $nomes[$fruta]]);
    }else{
        echo json_encode(['message' => 'Fruta não encontrada!']);
    }
} else {
    echo json_encode(array('message' => 'Requisição inválida!'));
}

