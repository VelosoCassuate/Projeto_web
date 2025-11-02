<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../global.css">
</head>

<body>

<?php
include("./../php/conexao.php");

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$consulta = "SELECT email, chave_acesso 
             FROM clientes 
             WHERE email = ? AND chave_acesso = ? 
             LIMIT 1";

$stm = mysqli_prepare($conexao, $consulta);

if (!$stm) {
    die("Erro ao preparar consulta: " . mysqli_error($conexao));
}

mysqli_stmt_bind_param($stm, "ss", $email, $password);
mysqli_stmt_execute($stm);

$result = mysqli_stmt_get_result($stm);

if ($result && mysqli_num_rows($result) > 0) {
    // login ok
    echo "Encontrado";
} else {
    // errado
    echo "Credenciais inválidas";
}

mysqli_stmt_close($stm);
mysqli_close($conexao);
?>






  <header>
    <span class="logo"><span class="shine">B</span>Conserves</span>
    <nav id="menu" class="navigation-bar">
      <a href="index.php">Página inicial</a>
      <a href="produtos.php">Produtos</a>
      <a href="login.php">Contacto</a>
      <a href="sobre nós.php">Sobre nós</a>
    </nav>
    <span id="nav-button" class="nav-button">
      <span></span>
      <span></span>
      <span></span>
    </span>
  </header>
  <main>

  
    <div class="login-container">
      <form class="form" method="post">
        <h2>Entrar</h2>
        <div class="campo">
          <input type="email" id="email" name="email" required>
          <label for="email">Email</label>
        </div>
        <div class="campo">
          <input type="password" id="chave" required>
          <label for="chave">Chave</label>
        </div>
        <button type="submit">Login</button>
        <p id="loginArea">Não tem conta? <a href="cadastro.php">Cadastre-se aqui!</a></p>
      </form>
    </div>
  </main>
  <footer>
    <div class="footer-container">
      <div class="contacts">
        <a href="#" href="">Pedir emprego</a>
        <a href="#" href="">Suporte</a>
        <a href="#" href="">Política de Privacidade </a>
        <a href="#" href="">Condições de Utilização</a>
  
      </div>
      <p>&copy; 2025 BConserves. Todos os direitos reservados.</p>
    </div>
  </footer>
</body>

</html>