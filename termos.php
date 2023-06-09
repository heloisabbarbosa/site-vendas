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
    <link rel="stylesheet" href="css/styles4.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="shortcut icon" href="img/icon-pag.ico" type="image/x-icon">
    <title>Termos de Uso</title>
</head>
<body>
  <div class="container">
    <a href="index.html" class="logo"> <i class="fas fa-dollar"></i> JAHV-G</a>
    <p>Termos de uso e Segurança</p>
    <span>1. TERMOS DE USO
    <br>1.1. Copyright
        O conteúdo integral deste site, incluindo, textos, gráficos, imagens, sons e quaisquer outras informações, é de propriedade da loja virtual, que detém os direitos de autor sobre o mesmo. A proteção dos direitos de autor do mencionado conteúdo estende-se a todas as reproduções ou cópias, obtidas a partir deste site. Nenhum conteúdo pode ser modificado, transmitido, reproduzido, publicado, licenciado, transferido ou vendido sem o consentimento prévio, por escrito, do seu titular.<br>
    </br>
    1.2. Correções<br>
    As informações disponíveis no site podem, eventualmente, conter erros de natureza tipográfica, incorreções ou omissões relacionados a descrição dos produtos, preços e disponibilidade. Respeitando os direitos do consumidor e a sua política de relacionamento com o cliente, reserva-se à Loja virtual o direito de promover a correção destes eventuais erros e omissões a qualquer momento e sem comunicação prévia. Consequentemente, a Loja virtual não garante que as informações obtidas através deste site sejam, a todo o tempo, exatas, completas e mesmo atualizadas.
    <br></br>
    1.3. Produtos<br>
    A Loja virtual não se obriga a possuir, em todos os seus canais de venda (lojas, catálogos e venda on-line), todos os itens de sua linha, de forma que alguns produtos disponíveis nos catálogos da Loja virtual e/ou nas lojas podem não estar necessariamente disponíveis para compras online e vice-versa.
    O cliente deverá sempre certificar-se da disponibilidade do produto para aquisição online. A Loja virtual poderá divulgar produtos neste site, em caráter meramente ilustrativo, não os disponibilizando para a venda.
    Os preços dos produtos oferecidos pela Loja virtual neste site estão expressos em reais e são válidos somente para aquisições em território nacional.
    Os preços dos produtos oferecidos neste site não guardam necessária relação e/ou equivalência com os preços de produtos idênticos, oferecidos em lojas Loja virtual e/ou multimarcas.
    As imagens constantes neste site podem apresentar variações de cor, por força das resoluções específicas de cada equipamento e das matizes disponíveis neste ambiente. Ao apresentar os produtos, a Loja virtual sempre empenhará os melhores esforços para fazer constar as suas cores originais. Eventuais diferenças, portanto, podem ocorrer, sem que isto represente defeito ou má informação.
    <br></br>
    1.4. Parceiros<br>
    A Loja virtual, ao divulgar seus parceiros, assim o faz em caráter exclusivamente informativo. Neste sentido, não assume nenhuma responsabilidade por informações e ações destes e, consequentemente, por eventuais danos causados por estes aos usuários.
    <br></br>
    1.5. Responsabilidade da Loja virtual<br>
    A Loja virtual não medirá esforços para oferecer, neste site, uma navegabilidade segura, prática e confortável. Contudo, a Loja virtual não se responsabiliza por eventuais danos causados ao usuário e/ou ao seu equipamento, decorrentes de ataques de vírus e/ou invasões, havidos durante o uso, uma vez não responsável pela segurança das conexões.
    <br></br>
    2. SEGURANÇA<br>
    A Loja virtual online store tem um compromisso com você no que diz respeito à segurança e privacidade de dados. O respeito ao cliente e ao sigilo de suas informações são muito importantes para nós. Por isso, tenha certeza que a sua experiência de compra na Loja virtual online store é totalmente segura e os dados informados criptografados.
    <br></br>
    2. 1. Criptografia<br>
    Todos os dados informados para a Loja virtual online store durante o processo de compra são automaticamente criptografados antes de serem transmitidos.
    <br></br>
    2.2. Compras com Cartão de Crédito<br>
    Os dados do seu cartão de crédito são transmitidos diretamente para a operadora. É importante ressaltar que a Loja virtual online store não armazena em seus arquivos nenhum registro dos dados de cartão do cliente.
    <br></br>
    2.3. Identificação e Senha<br>
    Com a função de facilitar a sua próxima compra, os dados cadastrais da sua primeira visita ficam armazenados para que você não precise digitá-los novamente. É importante ressaltar que esses dados são armazenados apenas para facilitar futuras compras e não são divulgados, vendidos ou disponibilizados para terceiros, exceto em estrito cumprimento de ordens judiciais. Os dados pessoais poderão ser usados para elaboração de informações estatísticas, sem identificação nominativa do consumidor. Os dados de cartão de crédito e outras informações de pagamento não são armazenados, conforme informado anteriormente no item 2.2 desse termo de uso e segurança.
    </span>
  </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/cleave.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script2.js"></script>
</body>
</html>