<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Work Wear – Indústria de Uniformes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php if (isset($_GET['status'])): ?>
  <div class="mensagem-envio <?php echo $_GET['status'] === 'ok' ? 'sucesso' : 'erro'; ?>">
    <?php
      if ($_GET['status'] === 'ok') {
        echo "Mensagem enviada com sucesso!";
      } else {
        echo "Ocorreu um erro ao enviar. Tente novamente.";
      }
    ?>
  </div>
<?php endif; ?>

    <header class="navbar">
      <a href="#hero" class="logo-link">
        <img src="imagens/logo.png" alt="Logo Workwear" class="logo" />
      </a>
      <nav class="nav-links">
        <a href="#home" class="nav-btn">HOME</a>
        <a href="#cotacao" class="nav-btn">FAZER COTAÇÃO</a>
        <a href="#quem-somos" class="nav-btn">QUEM SOMOS</a>
        <a href="#contato" class="nav-btn">CONTATO</a>
      </nav>
    </header>

    <section class="hero" id="hero">
      <div class="container-hero">
        <div class="hero-texto">
          <p>Indústria de uniformes</p>
          <h1>INDÚSTRIA WORKWEAR</h1>
          <h3>A maior indústria de uniformes<br>do Brasil</h3>
        </div>
      </div>
    </section>

    <section id="home" class="uniformes-corporativos">
      <div class="container-uniformes">
        <div class="conteudo-uniformes">
          <div class="texto-uniformes">
            <h2>UNIFORMES CORPORATIVOS</h2>
            <p>Nossos uniformes são peças de vestuário padronizadas, utilizadas em diversos contextos, desde escolas e empresas até equipes esportivas e eventos formais.</p>
            <p>Eles desempenham um papel fundamental na construção da identidade visual, na promoção da organização e no desempenho de funções específicas.</p>
            <h2 class="personalizado">100% PERSONALIZADO</h2>
          </div>
          <div class="bloco-imagens">
            <div class="imagens-uniformes">
              <img src="imagens/camisapolologo.png" alt="Camisa polo frente" class="imagem-uniforme" />
              <img src="imagens/calca.png" alt="Calça azul marinho" class="imagem-uniforme calca" />
            </div>
            <div class="cores-uniformes">
              <div class="lista-cores">
                <div class="cor-item"><span class="cor" style="background:#000;"></span><p>preto</p></div>
                <div class="cor-item"><span class="cor" style="background:#fff; border:1px solid #ccc;"></span><p>branco</p></div>
                <div class="cor-item"><span class="cor" style="background:#B0B0B0;"></span><p>cinza</p></div>
                <div class="cor-item"><span class="cor" style="background:#002F6C;"></span><p>azul marinho</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cotacao" class="cotacao">
      <div class="conteudo-cotacao">
        <h2>Solicite uma Cotação</h2>
        <p>Preencha o formulário abaixo e entraremos em contato o mais breve possível.</p>
        <form class="formulario-cotacao" method="POST" action="enviar.php">
          <input type="text" name="nome" placeholder="Seu nome" required />
          <input type="email" name="email" placeholder="Seu e-mail" required />
          <input type="tel" name="telefone" placeholder="Seu telefone" required />
          <textarea name="mensagem" placeholder="Descreva o tipo de uniforme que deseja" required></textarea>
          <button type="submit">ENVIAR</button>
        </form>
      </div>
    </section>    

    <section id="quem-somos" class="quem-somos">
      <div class="conteudo-quemsomos">
        <h2>Quem Somos</h2>
        <p>Bem-vindo à <strong>WORK-WEAR</strong>, sua parceira ideal na criação de uniformes que refletem a identidade e o profissionalismo da sua equipe. Somos uma empresa apaixonada por design, qualidade e atendimento personalizado, com o objetivo de oferecer soluções completas em uniformização para empresas de todos os portes e segmentos.</p>

        <h3>Nossa História</h3>
        <p>Nascemos da paixão por transformar ideias em peças únicas, que inspiram confiança e orgulho em quem as veste. Ao longo de 10 anos de experiência, construímos uma trajetória sólida, baseada em valores como:</p>

        <ul class="valores">
          <li><strong>Qualidade:</strong> Utilizamos tecidos de alta durabilidade e conforto, garantindo uniformes que resistem ao dia a dia e proporcionam bem-estar aos seus colaboradores.</li>
          <li><strong>Design:</strong> Contamos com uma equipe de designers talentosos, que criam modelos modernos e personalizados, alinhados à identidade visual da sua empresa.</li>
          <li><strong>Atendimento personalizado:</strong> Acreditamos que cada cliente é único, por isso oferecemos um atendimento consultivo, desde a escolha dos tecidos até a entrega final, garantindo a sua total satisfação.</li>
          <li><strong>Compromisso:</strong> Buscamos superar as expectativas dos nossos clientes, entregando uniformes impecáveis, dentro do prazo e com o melhor custo-benefício.</li>
        </ul>
      </div>
    </section>

    <footer id="contato">
      <h2>Entre em contato</h2>
      <p><strong>Celular:</strong> (11) 98613-7691</p>
      <p><strong>E-mail:</strong> WorkWearIndustria@gmail.com</p>
      <p><strong>Endereço:</strong> Rua Boa Vista, 180 – Boa Vista – São Paulo – SP, 01014-000</p>
    </footer>
  </body>
</html><!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Work Wear – Indústria de Uniformes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="navbar">
      <a href="#hero" class="logo-link">
        <img src="imagens/logo.png" alt="Logo Workwear" class="logo" />
      </a>
      <nav class="nav-links">
        <a href="#home" class="nav-btn">HOME</a>
        <a href="#cotacao" class="nav-btn">FAZER COTAÇÃO</a>
        <a href="#quem-somos" class="nav-btn">QUEM SOMOS</a>
        <a href="#contato" class="nav-btn">CONTATO</a>
      </nav>
    </header>

    <section class="hero" id="hero">
      <div class="container-hero">
        <div class="hero-texto">
          <p>Indústria de uniformes</p>
          <h1>INDÚSTRIA WORKWEAR</h1>
          <h3>A maior indústria de uniformes<br>do Brasil</h3>
        </div>
      </div>
    </section>

    <section id="home" class="uniformes-corporativos">
      <div class="container-uniformes">
        <div class="conteudo-uniformes">
          <div class="texto-uniformes">
            <h2>UNIFORMES CORPORATIVOS</h2>
            <p>Nossos uniformes são peças de vestuário padronizadas, utilizadas em diversos contextos, desde escolas e empresas até equipes esportivas e eventos formais.</p>
            <p>Eles desempenham um papel fundamental na construção da identidade visual, na promoção da organização e no desempenho de funções específicas.</p>
            <h2 class="personalizado">100% PERSONALIZADO</h2>
          </div>
          <div class="bloco-imagens">
            <div class="imagens-uniformes">
              <img src="imagens/camisapolologo.png" alt="Camisa polo frente" class="imagem-uniforme" />
              <img src="imagens/calca.png" alt="Calça azul marinho" class="imagem-uniforme calca" />
            </div>
            <div class="cores-uniformes">
              <div class="lista-cores">
                <div class="cor-item"><span class="cor" style="background:#000;"></span><p>preto</p></div>
                <div class="cor-item"><span class="cor" style="background:#fff; border:1px solid #ccc;"></span><p>branco</p></div>
                <div class="cor-item"><span class="cor" style="background:#B0B0B0;"></span><p>cinza</p></div>
                <div class="cor-item"><span class="cor" style="background:#002F6C;"></span><p>azul marinho</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cotacao" class="cotacao">
      <div class="conteudo-cotacao">
        <h2>Solicite uma Cotação</h2>
        <p>Preencha o formulário abaixo e entraremos em contato o mais breve possível.</p>
        <form id="form-cotacao" class="formulario-cotacao">
          <input type="text" name="nome" placeholder="Nome" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="tel" name="telefone" placeholder="Telefone" required>
          <textarea name="mensagem" placeholder="Mensagem" required></textarea>
          <button type="submit">Enviar</button>
        </form>
      </div>
    </section>    

    <section id="quem-somos" class="quem-somos">
      <div class="conteudo-quemsomos">
        <h2>Quem Somos</h2>
        <p>Bem-vindo à <strong>WORK-WEAR</strong>, sua parceira ideal na criação de uniformes que refletem a identidade e o profissionalismo da sua equipe. Somos uma empresa apaixonada por design, qualidade e atendimento personalizado, com o objetivo de oferecer soluções completas em uniformização para empresas de todos os portes e segmentos.</p>

        <h3>Nossa História</h3>
        <p>Nascemos da paixão por transformar ideias em peças únicas, que inspiram confiança e orgulho em quem as veste. Ao longo de 10 anos de experiência, construímos uma trajetória sólida, baseada em valores como:</p>

        <ul class="valores">
          <li><strong>Qualidade:</strong> Utilizamos tecidos de alta durabilidade e conforto, garantindo uniformes que resistem ao dia a dia e proporcionam bem-estar aos seus colaboradores.</li>
          <li><strong>Design:</strong> Contamos com uma equipe de designers talentosos, que criam modelos modernos e personalizados, alinhados à identidade visual da sua empresa.</li>
          <li><strong>Atendimento personalizado:</strong> Acreditamos que cada cliente é único, por isso oferecemos um atendimento consultivo, desde a escolha dos tecidos até a entrega final, garantindo a sua total satisfação.</li>
          <li><strong>Compromisso:</strong> Buscamos superar as expectativas dos nossos clientes, entregando uniformes impecáveis, dentro do prazo e com o melhor custo-benefício.</li>
        </ul>
      </div>
    </section>

    <footer id="contato">
      <h2>Entre em contato</h2>
      <p><strong>Celular:</strong> (11) 98613-7691</p>
      <p><strong>E-mail:</strong> WorkWearIndustria@gmail.com</p>
      <p><strong>Endereço:</strong> Rua Boa Vista, 180 – Boa Vista – São Paulo – SP, 01014-000</p>
    </footer>

    
    <div id="popupModal" class="modal" style="display: none;">
      <div class="modal-content">
        <span class="close-btn" style="cursor:pointer;">&times;</span>
        <p id="popupMessage">AAAAAA</p>
      </div>
    </div>

   
    <script>
  const form = document.getElementById('form-cotacao');
  const popupModal = document.getElementById('popupModal');
  const popupMessage = document.getElementById('popupMessage');
  const closeBtn = document.querySelector('.close-btn');

  form.addEventListener('submit', function (e) {
    e.preventDefault(); 

    const formData = new FormData(form);

    fetch('enviar.php', {
      method: 'POST',
      body: formData
    })
    .then(res => res.text())
    .then(data => {
      if (data.includes("sucesso")) {
        popupMessage.textContent = "Cotação enviada com sucesso!";
        popupMessage.style.color = "#155724";
      } else {
        popupMessage.textContent = "Erro ao enviar. Tente novamente.";
        popupMessage.style.color = "#721c24";
      }

      popupModal.style.display = "block";
      form.reset();
    })
    .catch(() => {
      popupMessage.textContent = "Erro ao enviar. Tente novamente.";
      popupMessage.style.color = "#721c24";
      popupModal.style.display = "block";
    });
  });

  closeBtn.onclick = function () {
    popupModal.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target === popupModal) {
      popupModal.style.display = "none";
    }
  };
</script>

  </body>
</html>
