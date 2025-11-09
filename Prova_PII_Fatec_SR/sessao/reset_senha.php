<?php
require 'enviar_email.php'; // Função PHPMailer

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

   
    $emails_validos = [
        'aluno@test.com.br',
        'professor@test.com.br',
        'flaviaerick666@gmail.com',
        'marcos.sousa12@fatec.sp.gov.br'
    ];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = '<p class="erro">Por favor, informe um e-mail válido.</p>';
    } elseif (!in_array($email, $emails_validos)) {
        $mensagem = '<p class="erro">E-mail não encontrado em nosso sistema.</p>';
    } else {
        // Senha temporária
        $senha_temporaria = 'Fatec2025SI';

        // Corpo do e-mail
        $assunto = 'Redefinição de Senha - Sistema FATEC';
        $corpo = "
            <p>Olá,</p>
            <p>Sua senha foi resetada com sucesso.</p>
            <p>Nova senha temporária: <strong>$senha_temporaria</strong></p>
            <p>Acesse o sistema e altere sua senha após o login.</p>
            <p><em>Mensagem automática - não responda este e-mail.</em></p>
        ";

        // Envia o e-mail para o próprio usuário
        enviarEmail($email, $assunto, $corpo);

        $mensagem = '<p class="info">Uma nova senha foi enviada para o e-mail <b>' . htmlspecialchars($email) . '</b>.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Recuperar Senha</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <header>
      <h1 class="glow">Acesso Restrito</h1>
    </header>

    <h2>Redefinição de Senha</h2>

    <?= $mensagem ?>

    <form method="post" action="">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required placeholder="seuemail@exemplo.com">

        <button type="submit">ENVIAR</button>
    </form>

    <p class="link">
        <a href="login.php" class="voltar-link">Voltar ao login</a>
    </p>
  </main>
</body>
</html>
