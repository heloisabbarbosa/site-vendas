<?php
  session_start();
  

  if(!isset($_SESSION['email']) && !isset($_SESSION['senha']) ){
    // O usuário não está logado, redirecionar para a página de login (login.html)
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    header("Location: index.html");
    exit();
  }
  include "./php/conexao.php";
  $logado = $_SESSION['email'];
  $sql = "SELECT * FROM cadastros_parceiro WHERE email = '$logado'";
  $result = $conn->query($sql);

  // Verificar se o email foi encontrado
  if ($result->num_rows > 0) {
    // O email foi encontrado, recuperar as informações
    $row = $result->fetch_assoc();
      
    $nome = $row["nome"];
    $email = $row["email"];
    $senha = $row["senha"];
    $cpf = $row["cpf"]; 
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles2.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="shortcut icon" href="img/icon-pag.ico" type="image/x-icon">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="ajax.js"></script>
  
  <title>Minha conta</title>
</head>

<body>
  <header class="headerprofile">
    <div class="headerprofile1">
      <a href="#" class="logo"> <i class="fas fa-dollar"></i> JAHV-G</a>
      <div class="icons">
        <div id="search-btn" class="fas fa-search"></div>
        <div class="user"> <img src="img/ava1.jpg" alt="" id="user-btn"></div>
      </div>
    </div>

    <div class="headerprofile2">
      <nav class="navbar2"></nav>
    </div>

    <div class="account">
      <div class="box">
        <img src="img/ava1.jpg" alt="">
        <p> User Teste</p>
      </div>
      <ul>
        <li>
          <i class="fas fa-user"></i>
          <a href="#minhaconta">Minha conta</a>
        </li>
        <li>
          <i class="fas fa-box"></i>
          <a href="#meusanuncios">Meus anúncios</a>
        </li>
        <hr color="#d3d3d3 " size="3">
        <li>
          <i class="fas fa-gear"></i>
          <a href="">Configurações</a>
        </li>
        <li>
          <i class="fas fa-circle-info"></i>
          <a href="">Ajuda</a>
        </li>
        <hr color="#d3d3d3 " size="3">
        <li onclick="sair()">
          <i class="fas fa-right-from-bracket"></i>
          <a href="sair.php">Sair</a>
        </li>
      </ul>
  </header>

  <section class="cadastro" id="minhaconta">
    <div class="row">
      <div class="content">
        <ul>
          <li id="meucad" onclick="cadastro()">
            <i class="fas fa-file-lines"></i>
            <p>Meu cadastro</p>
          </li>
          <li onclick="segurança()">
            <i class="fas fa-lock"></i>
            <p>Segurança e privacidade</p>
          </li>
          <li onclick="pagamentos()">
            <i class="fas fa-money-check-dollar"></i>
            <p>Pagamentos</p>
          </li>
          <li onclick="comunicacoes()">
            <i class="fas fa-comments"></i>
            <p>Comunicações</p>
          </li>
          <li onclick="nivel()">
            <i class="fas fa-database"></i>
            <p>Meu nível</p>
          </li>
        </ul>
      </div>

      <div class="form-cadastro">
        <form id="update">
          <div class="erro"></div>
          <h1>Meu cadastro</h1>
          <h3>Dados da conta</h3>
          <span>Apelido</span>
          <input type="text" class="box" name="nome" value="<?php echo $nome; ?>" required>
          <span>CPF</span>
          <input type="text" maxlength="20" class="box" name="cpf" value="<?php echo $cpf; ?>" readonly>
          <span>E-mail</span>
          <input type="email" class="box" name="email" value="<?php echo $email; ?>" required>
          <div class="inputSenha2">
            <input type="password" maxlength="20" class="box" name="senha" id="password2" value="<?php echo $senha; ?>" required>
            <div id="iconsenha2" class="fas fa-eye" onclick="show()"></div>
            </div>
          <input type="submit" value="Alterar" class="btn">
        </form>
      </div>
    </div>
  </section>

  <section class="anuncios" id="meusanuncios">
    <h1 class="heading"> <span>Meus Anúncios</span> </h1>
    <div class="swiper produtos-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <div class="image">
            <img src="img/produto-2.png" alt="">
          </div>
          <div class="content">
            <h3>Produto 1</h3>
            <div class="preco">R$18.99 <span>R$39.99</span></div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, iusto.</p>
            <a href="#" class="btn">Retirar anúncio</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="image">
            <img src="img/produto-3.png" alt="">
          </div>
          <div class="content">
            <h3>Produto 2</h3>
            <div class="preco">R$18.99 <span>R$39.99</span></div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, iusto.</p>
            <a href="#" class="btn">Retirar anúncio</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="image">
            <img src="img/produto-4.png" alt="">
          </div>
          <div class="content">
            <h3>Produto 3</h3>
            <div class="preco">R$18.99 <span>R$39.99</span></div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, iusto.</p>
            <a href="#" class="btn">Retirar anúncio</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="image">
            <img src="img/produto-4.png" alt="">
          </div>
          <div class="content">
            <h3>Produto 3</h3>
            <div class="preco">R$18.99 <span>R$39.99</span></div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, iusto.</p>
            <a href="#" class="btn">Retirar anúncio</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="image">
            <img src="img/produto-4.png" alt="">
          </div>
          <div class="content">
            <h3>Produto 3</h3>
            <div class="preco">R$18.99 <span>R$39.99</span></div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, iusto.</p>
            <a href="#" class="btn">Retirar anúncio</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <div class="image">
            <img src="img/produto-4.png" alt="">
          </div>
          <div class="content">
            <h3>Produto 3</h3>
            <div class="preco">R$18.99 <span>R$39.99</span></div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, iusto.</p>
            <a href="#" class="btn">Retirar anúncio</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>






  <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/cleave.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="scripts/script2.js"></script>
</body>

</html>