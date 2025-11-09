<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Restrita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <header>
      <h1 class="glow">Area Restrita</h1>
      <p>Bem-vindo, <?= $_SESSION['usuario']?>!</p>
    </header>

    <section>
      <p>Você está na área protegida do sistema.</p>
    </section>

    <a href="logout.php" class="logout">Sair</a>
  </main>
</body>
</html>
