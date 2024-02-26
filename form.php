<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Eduardo Fialho">
    <meta name="keywords" content="html5, insignia">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
    <title>Insignia Campo Belo</title>
</head>
<body>
 
    <section class="hero-content">
      <img class="logo" src="imagem/logoInsignia.png" alt="logoInsignia">
      <article class="importante">
        <div class="obra"><p>Obras aceleradas</p>
          <p>Mude em 2024</p>
        </div>
          <div class="metragens">
            <p>130m² | 2 a 3 suítes  2 vagas demarcadas</p>
          </div>
        </article>
        <div class="bannerSegundaria">
          <div class="formulario" id="Contatos">
            <form action="form.php" method="post">
                
              <h2 class="saibamais">Solicite mais informações</h2>
              <label for="nome">Nome</label> 
              <input class="campo" placeholder="Digite seu nome" type="text" id="nome" name="nome" required>
          
              <label for="telefone">Telefone</label>
              <input class="campo" placeholder="Digite seu telefone com +DDD" type="tel" id="telefone" name="telefone" required>
          
              <label for="email">E-mail</label>
              <input class="campo"  placeholder="Digite seu e-mail" type="email" id="email" name="email" required>
          
              <input class="submit" type="submit" value="Enviar">
  
              <script>
                $('#telefone').mask('(00) 00000-0000');
              </script>
              
            </form>
          </div> 
        </div>
        <div class="whats">
          <a href="https://wa.me/5511978287810?text=Olá gostaria de mais informações sobre o Insignia Campo Belo." target="_blank">
           <img src="imagem/WhatsApp.svg.png" alt="Fale comigo pelo WhatsApp"> 
          </a>
        </div>
      </section>
    <footer><h2>Insignia Campo Belo</h2></footer>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $destino = "corretordeimoveisfialho@gmail.com"; 

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
header("Location: index.html");
exit;
?>