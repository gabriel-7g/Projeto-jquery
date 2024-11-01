<?php
// Atualizar .php

include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$data = $_POST['data'];

// 1° Passo - Comando SQl

$sql = "UPDATE tb_pessoas SET nome_pessoa='$nome',
        data_n_pessoa='$data', cargo_pessoa='$cargo'
        WHERE id_pessoa='$id' ";

// 2° Passo - Preparar a conexão
$atualizar = $pdo->prepare($sql);

// 3° Passo - Tentar executar
try{
    $atualizar->execute();
    if($atualizar->rowCount()>=1){
        echo "Atualizado!!";
    }else{
        echo "Nada foi mudado!";
    }

}catch(PDOException $erro){
    echo "Falha ao atualizar".$erro->getMessage();
}


?>