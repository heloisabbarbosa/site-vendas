$(document).ready(function() {
    $("#loginForm").submit(function(event) {
        event.preventDefault();

        var formData = $(this).serialize(); // Serializa os dados do formulário

        $.ajax({
          url: "php/login.php", // Substitua pelo caminho correto para o arquivo PHP
          type: "POST",
          data: formData,
          success: function(response) {
            $("#conteudo").empty(); // Limpa o conteúdo existente na div com o ID "conteudo"
            var h3Element = $("<h3>").text(response); // Cria um elemento <h3> e define o texto como a resposta do arquivo PHP
            $("#conteudo").append(h3Element); // Exibe a resposta do arquivo PHP na div com o ID "conteudo"
          },
          error: function() {
            $("#conteudo").text("Erro ao enviar os dados."); // Mensagem de erro em caso de falha na requisição AJAX
          }
        });
    });
  });