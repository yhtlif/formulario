<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['firstname'];

  echo "<!DOCTYPE html>
  <html>
  <head>
    <title>Mensagem de Sucesso</title>
  </head>
  <body>
    <h1>Seu formulário foi enviado com sucesso!</h1>
    <p>Obrigado, $nome.</p>
  </body>
  </html>";
}