<?php
// deletar.php
include "conexao.php";

$id = $_POST['id'];

// 1° Passo - Comando SQL
$sql = "DELETE FROM tb_pessoas 
        WHERE id_pessoa='$id' ";

// 2° Passo - Preparar a conexão
$deletar = $pdo->prepare($sql);

// 3° Passo - Tentar Executar
try{
    $deletar->execute();
    if($deletar->rowCount()>=1){
        echo "Deletou com sucesso";
    }else{
        echo "Nada foi deletado! ";
    }

    
}catch(PDOException $erro){
    echo "Falha ao deletar".$erro->getMessage();
}

?>