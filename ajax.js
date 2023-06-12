$(document).ready(function () {
  $("#loginForm").submit(function (event) {
    event.preventDefault();

    var formData = $(this).serialize(); // Serializa os dados do formulário

    $.ajax({
      url: "php/login.php", // Substitua pelo caminho correto para o arquivo PHP
      type: "POST",
      data: formData,
      success: function (response) {

        if (response === "success") {
          // Redireciona para a página profile.html
          window.location.href = "./profile.html";
        } else {
          // Exibe a mensagem de erro na div conteudoLogin
          $("#conteudoLogin").text(response);
        }
      },
      error: function () {
        $("#conteudoLogin").text("Erro ao enviar os dados."); // Mensagem de erro em caso de falha na requisição AJAX
      }
    });
  });

  $("#cadastroForm").submit(function (event) {
    event.preventDefault();

    var formData = $(this).serialize(); // Serializa os dados do formulário
    var minhaDiv = document.getElementById("conteudoCadastro")
    $.ajax({
      url: "php/login.php", // Substitua pelo caminho correto para o arquivo PHP
      type: "POST",
      data: formData,
      success: function (response) {

        if (response === "CADASTRO REALIZADO COM SUCESSO") {
          $("#conteudoCadastro").empty(); // Limpa o conteúdo existente na div com o ID "conteudo"
          var h3Element = $("<h2>").text(response); // Cria um elemento <h3> e define o texto como a resposta do arquivo PHP
          $("#conteudoCadastro").append(h3Element);
          minhaDiv.style.color = "green";
        }else{
          
          $("#conteudoCadastro").empty(); // Limpa o conteúdo existente na div com o ID "conteudo"
          var h3Element = $("<h2>").text(response); // Cria um elemento <h3> e define o texto como a resposta do arquivo PHP
          $("#conteudoCadastro").append(h3Element); // Exibe a resposta do arquivo PHP na div com o ID "conteudo"
          minhaDiv.style.color = "red";
        }
        },
      error: function () {
        $("#conteudoCadastro").text("Erro ao enviar os dados."); // Mensagem de erro em caso de falha na requisição AJAX
      }
    });
  });


});