<?php
include_once("./config/constantes.php");
include_once("./config/conexao.php");
include_once("./func/func.php");

$conn = conectar();

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($dados) && !empty($dados)){
    $id = isset($dados['id']) ? addslashes($dados['id']) : '';

    $retornoSelect = listarItemExpecifico('*','produto','idproduto',$id);

    if ($retornoSelect > 0) {
        echo json_encode(['success' => true, 'message' => "Produto encontrado"]);
    } else {
        echo json_encode(['success' => false, 'message' => "Produto não encontrado"]);
    }
} else {
    echo json_encode((['success' => false, 'message' => 'Produto não encontrado!']));

}

