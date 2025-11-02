<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo Popups</title>
  <style>
    /* Estilo dos botões */
    .btn-laranja {
      background-color: #ff6600;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      margin: 5px;
    }

    .btn-verde {
      background-color: #00cc99;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      margin: 5px;
    }

    .btn-azul {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      margin: 5px;
    }

    /* Popup genérico */
    .popup {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      justify-content: center;
      align-items: center;
      background: rgba(0,0,0,0.5);
      z-index: 1000;
    }

    .popup-conteudo {
      background: white;
      padding: 20px 30px;
      border-radius: 10px;
      max-width: 400px;
      text-align: center;
    }

    .popup-conteudo h2 {
      margin-bottom: 10px;
    }

    .popup-conteudo p {
      margin-bottom: 15px;
    }

    button.fechar {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #555;
      color: white;
      cursor: pointer;
    }

    button.fechar:hover {
      background-color: #333;
    }

    /* Layout das divs de exemplo */
    .secao {
      margin: 20px;
    }

    .secao h3 {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <!-- Seção 1 -->
  <div class="secao">
    <h3>Produtos</h3>
    <button class="btn-laranja" data-popup="popup-produto1">Produto 1</button>
    <button class="btn-verde" data-popup="popup-produto2">Produto 2</button>
  </div>

  <!-- Seção 2 -->
  <div class="secao">
    <h3>Serviços</h3>
    <button class="btn-azul" data-popup="popup-servico1">Serviço 1</button>
    <button class="btn-laranja" data-popup="popup-servico2">Serviço 2</button>
  </div>

  <!-- Popups correspondentes -->
  <div class="popup" id="popup-produto1">
    <div class="popup-conteudo">
      <h2>Produto 1</h2>
      <p>Descrição detalhada do Produto 1...</p>
      <button class="fechar">Fechar</button>
    </div>
  </div>

  <div class="popup" id="popup-produto2">
    <div class="popup-conteudo">
      <h2>Produto 2</h2>
      <p>Descrição detalhada do Produto 2...</p>
      <button class="fechar">Fechar</button>
    </div>
  </div>

  <div class="popup" id="popup-servico1">
    <div class="popup-conteudo">
      <h2>Serviço 1</h2>
      <p>Descrição detalhada do Serviço 1...</p>
      <button class="fechar">Fechar</button>
    </div>
  </div>

  <div class="popup" id="popup-servico2">
    <div class="popup-conteudo">
      <h2>Serviço 2</h2>
      <p>Descrição detalhada do Serviço 2...</p>
      <button class="fechar">Fechar</button>
    </div>
  </div>

  <!-- JavaScript genérico -->
  <script>
    // Seleciona todos os botões que têm data-popup
    const botoes = document.querySelectorAll('[data-popup]');
    const popups = document.querySelectorAll('.popup');

    // Abrir popup correspondente
    botoes.forEach(botao => {
      botao.addEventListener('click', () => {
        const idPopup = botao.getAttribute('data-popup');
        const popup = document.getElementById(idPopup);
        popup.style.display = 'flex';
      });
    });

    // Fechar popup
    popups.forEach(popup => {
      const btnFechar = popup.querySelector('.fechar');

      btnFechar.addEventListener('click', () => popup.style.display = 'none');

      // Fechar clicando fora da caixa
      popup.addEventListener('click', e => {
        if(e.target === popup) popup.style.display = 'none';
      });
    });
  </script>

</body>
</html>
