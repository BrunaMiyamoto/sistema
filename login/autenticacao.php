<?php
session_start(); //funciona como uma chave/interruptor, aqui manipulamos qualquer informação da minha sessão, verifica se já existe uma sessão, se não existir ela cria
$email = $_POST["email"];
$senha = $_POST["senha"];

// echo $email . "-" . $senha;

if ($email == "senac@aulaphp.com.br" && $senha == "12345678") {
    $_SESSION["logado"] = true;
    $_SESSION["nome"] = "Bruna Miyamoto";

    header("Location: ../admin/dashboard.php"); //redireciona o usuário para qualquer ponto do sei sistema
} else {
    echo "Senha Inválida!!";
    echo "<br>";
    echo "<a href='index.php'>Voltar para Login</a>"; //volta para a página inicial e apaga os dados preenchidos, refresh na página 
    echo "<br>";
    echo "<a href='javascript:history.back()'>Voltar para Login</a>"; // volta para a página inicial com os campos preenchidos
}
