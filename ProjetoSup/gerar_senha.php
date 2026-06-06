<?php
require_once('conexao.php');

// Define um novo e-mail e senha para teste
$email_teste = 'suporte@empresa.com';
$senha_teste = '123'; 

// Cria a criptografia correta que o PHP espera
$senha_criptografada = password_hash($senha_teste, PASSWORD_DEFAULT);

try {
    $stmt = $conexao->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->execute(['Tecnico Auxiliar', $email_teste, $senha_criptografada]);
    echo "Usuário criado com sucesso! Use o e-mail: <b>$email_teste</b> e a senha: <b>$senha_teste</b>";
} catch(Exception $e) {
    echo "Erro ao criar: " . $e->getMessage();
}
?>