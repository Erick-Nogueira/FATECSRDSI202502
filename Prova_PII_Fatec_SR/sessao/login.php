<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require 'usuarios.php';
require 'enviar_email.php'; 

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $senha   = $_POST['senha'] ?? '';

    if (isset($usuarios[$usuario]) && password_verify($senha, $usuarios[$usuario])) {
        $_SESSION['usuario'] = $usuario;

        $destinatario = 'marcos.sousa12@fatec.sp.gov.br'; 
        $assunto = 'Acesso bem-sucedido ao Sistema';
        $mensagem = "O usuário <b>$usuario</b> acessou o sistema com sucesso em " . date('d/m/Y H:i:s') . ".";

        enviarEmail($destinatario, $assunto, $mensagem);

        header('Location: home.php');
        exit;
    } else {
        $erro = 'Usuário ou Senha inválidos!';
    }
}
?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login com hash</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <header>
      <h1 class="glow">Acesso Restrito</h1>
    </header>

    <h2>Login</h2>

    <?php if ($erro): ?>
        <p class="erro"><?= $erro ?></p>
    <?php endif; ?>
    
    <form method="post" action="">
        <label for="usuario">Usuário</label>
        <input type="text" id="usuario" name="usuario" required autofocus placeholder="Digite seu usuário">

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">

        <button type="submit">ENTRAR</button>
    </form>

    <p class="link">
        <a href="reset_senha.php" class="reset-link">Esqueci minha senha</a>
    </p>
  </main>
</body>
</html>
