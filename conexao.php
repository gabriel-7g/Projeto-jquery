<?php
$maquina = "172.16.142.250";
$usuario = "estudante";
$senha = "senai1234";
$nome_do_banco = "aula_01_jquery";
$porta = 3306;
try {
    $pdo = new PDO("mysql:host=$maquina;port=$porta;dbname=$nome_do_banco;charset=utf8", "$usuario", "$senha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado com sucesso!";
} catch (PDOException $erro) {
    echo "Falha ao conectar com no BD: $nome_do_banco <br>" . $erro->getMessage();
}
?>
