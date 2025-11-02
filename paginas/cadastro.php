<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../global.css">
</head>
<body>
    <header>
    <span class="logo"><span class="shine">B</span>Conserves</span>
    <nav id="menu" class="navigation-bar">
      <a href="../index.php">Página inicial</a>
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

        <div class="cadastro-container">
             <form class="form">
                 <h2>Cadastro</h2>
                 <label for="inome" class="labels">Nome Completo</label>
                 <div class="campo">
                     <input type="text" id="inome" required>
                 </div>
     
                 <label for="idata" class="labels">Data de Nascimento</label>
                 <div class="campo">
                     <input type="date" id="idata" required>
                 </div>
                 
                 <label for="isexo" class="labels">Sexo</label>
                     
     
                 <div class="campo">
                     <select name="sexo" id="isexo">
                         <option value="M">Masculino</option>
                         <option value="F">Femenino</option>
                     </select>
                 </div>
                 <label for="iemail" class="labels">Email</label>
                 <div class="campo">
                     <input type="email" id="iemail" required>
                 </div>
                 <button type="submit">Submeter</button>
                 <div id="conditionsDiv">
                     <label for="itermos">Eu aceito os termos e condicoes</label>
                     <input type="checkbox" name="termosEcondicoes" id="itermos">
                 </div>
                
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