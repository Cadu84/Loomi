<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Carlos Eduardo Fialho">
  <meta name="keywords" content="html5, loomi">
  <title>Loomi Chácara Santo Antônio</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="slide.js" defer></script>
  <script src="menu.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
</head>
<body>
  <div class="hero-container">
    <header class="header-container">
      <img src="img/TEIXEIRADUARTE_LOOMI_Logo-02.png" alt="logo">
      <div class="hamburger-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <nav class="header-nav">
        <ul>
          <li><a href="#sobreLoomi">Sobre o Loomi</a></li>
          <li><a href="#galeria">Galeria</a></li>
          <li><a href="#Plantas">Plantas</a></li>
          <li><a href="#Contatos">Contatos</a></li>
        </ul>
      </nav>
    </header>
  </div>

  <div class="bannerContainer">
    <section class="bannerPrincipal">
      <div class="headerBanner">
        <video autoplay muted loop>
          <source src="video/Apresentacao1.mp4" type="video/mp4">
        </video>
      </div>
    </section>
  </div>

  <div class="informacoes">
    <h2>Apartamentos com 2 ou 3 suítes 82m², 115m², 159m² e 180m²</h2>
  </div>

  <div>
    <section class="hero-content">
      <div class="bannerSegundaria">
        <div class="formulario" id="Contatos">
          <form action="formulario.php" method="post">
            <h2 class="saibamais">Quer mais informações?</h2>
            <label for="nome">Nome</label> 
            <input placeholder="Digite seu nome e sobrenome" type="text" id="nome" name="nome" required>
        
            <label for="telefone">Telefone</label>
            <input placeholder="Digite seu telefone com +DDD" type="tel" id="telefone" name="telefone" required>
        
            <label for="email">E-mail</label>
            <input placeholder="Digite seu e-mail" type="email" id="email" name="email" required>
        
            <input class="submit" type="submit" value="Enviar">

            <script>
              $('#telefone').mask('(00) 00000-0000');
            </script>
            
          </form>
        </div>

      </div>
    </section>
  </div>

  <div class="container-sobre">
    <article class="sobre" id="sobreLoomi">
      <img src="img/Loomi_Boreal.jpg" alt="praca">
      <div class="sobre-container">
        <h2>Sobre o Loomi</h2>
        <p>O Loomi Chácara Santo Antônio se destaca pela sua proposta inovadora e pela qualidade de vida que oferece aos seus moradores. O projeto se destaca por sua arquitetura moderna e elegante, proporcionando uma experiência residencial única.

          Os apartamentos foram projetados com atenção aos detalhes, privilegiando a ventilação cruzada com nascer e pôr do sol no mesmo apartamento para proporcionar ambientes arejados e agradáveis.
          
          Além da excelência na concepção dos apartamentos, o Loomi se destaca pela sua ampla área de lazer, que abrange 3.500m². Essa área é projetada para oferecer uma experiência completa aos moradores, proporcionando momentos de relaxamento, convívio social e atividades físicas. Dentre as opções disponíveis, é possível encontrar espaços como piscinas, Floresta Kids, quadra esportiva, playground e salões de festas. Tudo isso contribui para criar um ambiente propício ao bem-estar e à qualidade de vida.</p>
      </div>
    </article>
  </div>

  <h1 class="plants" id="Plantas">Plantas</h1>

  <section class="slider-container">
    <div class="slider-track" id="plantas">
      <div class="slider-plants">
        <img src="img/180m²ampli-3suites-Autral.png" alt="planta 1">
        <h1>180m² ampliada - 3 suítes (Torre Austral)</h1>
      </div>
      <div class="slider-plants">
        <img src="img/180m²Padrao-4dorms-Austral.png" alt="planta 2">
        <h1>180m² ampliada - 4 dormitórios (Torre Austral)</h1>
      </div>
      <div class="slider-plants">
        <img src="img/159m²-Padrao-3suites-Austral.png" alt="planta 3">
        <h1>159m² padrão - 3 suítes (Torre Austral)</h1>
      </div>
      <div class="slider-plants">
        <img src="img/115m²-ampliada-2suites-Boreal.png" alt="planta 4">
        <h1>115m² ampliada - 2 suítes (Torre Boreal)</h1>
      </div>
      <div class="slider-plants">
        <img src="img/115m²-padrao-3dorms-Boreal.png" alt="planta 5">
        <h1>115m² padrão - 3 dormitórios (Torre Boreal)</h1>
      </div>
      <div class="slider-plants">
        <img src="img/82m²-ampliada-1suite-Boreal.png" style="max-height: 1050px; max-width: 700px; margin-left: 8.6%"
          alt="planta 6">
        <h1>82m² ampliada - 1 suíte (Torre Boreal)</h1>
      </div>
      <div class="slider-plants">
        <img src="img/82m²Padrao-2suites-Boreal.png" style="max-height: 1050px; max-width: 700px; margin-left: 8.6%;"
          alt="planta 7">
        <h1>82m² padrão - 2 suítes (Torre Boreal)</h1>
      </div>
    </div>
        <button class="slider-prev" onclick="prevSlide2()"><</button>
        <button class="slider-next" onclick="nextSlide2()">></button>
  </section>

  <h1 class="gallery" id="galeria"> Galeria</h1>

  <div class="carousel-container">
    <div class="carousel-track" id="carouselTrack">
      <div class="carousel-slide">
        <img src="img/MLommi_Hall.jpeg" alt="Image 1">
        <h1>Hall</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLommi_Brinquedoteca.jpg" alt="Image 2">
        <h1>Brinquedoteca</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Beauty.jpg" alt="Image 3">
        <h1>Espaço Beauty</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Piscina_Coberta.jpeg" alt="Image 4">
        <h1>Piscina Coberta</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Piscina_Descoberta.jpg" alt="Image 5">
        <h1>Piscina Descoberta</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Fitness.jpg" alt="Image 6">
        <h1>Fitness</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Floresta_Kids.jpg" alt="Image 7">
        <h1>Floresta Kids</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Churrasqueira.jpg" alt="Image 8">
        <h1>Churrasqueira</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Gourmet.jpg" alt="Image 9">
        <h1>Salão Gourmet</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Praca.jpg" alt="Image 10">
        <h1>Praça Central</h1>
      </div>
      <div class="carousel-slide" id="boreal">
        <img src="img/Loomi_Boreal.jpg" style="max-height: 600px; max-width: 390px; margin-left: 30%;" alt="Image11">
        <h1>Torre Boreal</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Living_115m.jpg" alt="Image 12">
        <h1>Living 115m²</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Terraco_115m.jpg" alt="Image 13">
        <h1>Terraço 115m²</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Master_115m.png" alt="Image 14">
        <h1>Suíte Master 115m²</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Living_180m.jpg" alt="Image 15">
        <h1>Living 180m²</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Living_Ampli_180m.jpg" alt="Image 16">
        <h1>Living Ampliado 180m²</h1>
      </div>
      <div class="carousel-slide">
        <img src="img/MLoomi_Master_180m.jpg" alt="Image 17">
        <h1>Suíte Master 180m²</h1>
      </div>
    </div>
    <button class="carousel-prev" onclick="prevSlide()"><</button>
        <button class="carousel-next" onclick="nextSlide()">></button>
  </div>

  <h1 class="localizacao"> Localização</h1>
  <div class="location-container">
    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.133927605741!2d-46.696602299999995!3d-23.6353743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ee37a602c7%3A0xbcd8f12730a4e6fc!2sR.%20Fernandes%20Moreira%2C%20132%20-%20Ch%C3%A1cara%20Santo%20Ant%C3%B4nio%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004716-000!5e0!3m2!1spt-BR!2sbr!4v1707330501459!5m2!1spt-BR!2sbr" 
            width="100%" height="525" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br><br>
        <address class="endereco"><h1>Rua Fernandes Moreira, 132 - Chácara Santo Antônio - São Paulo/SP</h1><br> </address>
    </section>
</div>



<div class="wrapperContainer wrapperContainer-dark">
  <footer class="rodape">Todos os direitos reservados &#174;<a href="#"></footer>
</div>

  <div class="whats">
    <a href="https://wa.me/5511989314394?text=Olá gostaria de mais informações sobre o Loomi Chácara Santo Antônio." target="_blank">
     <img src="img/WhatsApp.svg.png" alt="Fale comigo pelo WhatsApp"> 
    </a>
  </div>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $destino = "corretordeimoveisfialho@gmail.com"; // Substitua pelo seu endereço de e-mail

    $assunto = "Nova mensagem do formulário de contato";

    $corpo = "Nome: $nome\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "E-mail: $email\n";

    // Envia o e-mail
    mail($destino, $assunto, $corpo, "From: $email");

    // Redireciona de volta para a página do formulário
    echo '<script>alert("Seu dados foram enviados com sucesso!Em breve um profissional entrará em contato");</script>';
    echo '<script>alert("Em breve um profissional entrará em contato");</script>';
} else {
    // Se o formulário não foi enviado, redireciona para a página do formulário
    echo '<script>alert("Erro ao enviar o formulário. Tente novamente!");</script>';
}
?>
