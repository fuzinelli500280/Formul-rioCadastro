<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];


  echo"<h2>Dados do Formulário</h2>";
  echo "<p><strong>Nome></strong> $name</p>";
  echo "<p><strong>E-mail:</strong> $email</p>";
  echo "<p><strong>Mensagem:</strong> $message</p>";
} else {
  echo "Erro ao processar o formulário.";
}
?>