<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $fone = htmlspecialchars($_POST['fone']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    // Configura o email
    $para = "far3d@outlook.com"; // Coloque aqui seu email
    $assunto = "Nova mensagem do formulário de contato";
    
    // Monta o corpo do email com HTML
    $corpo = "<html><body>";
    $corpo .= "<h2>Nova mensagem do site</h2>";
    $corpo .= "<p><strong>Nome:</strong> " . $nome . "</p>";
    $corpo .= "<p><strong>Email:</strong> " . $email . "</p>";
    $corpo .= "<p><strong>Telefone:</strong> " . $fone . "</p>";
    $corpo .= "<p><strong>Mensagem:</strong> " . nl2br($mensagem) . "</p>";
    $corpo .= "</body></html>";
    
    // Configura os headers para envio de HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . $nome . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    // Tenta enviar o email
    if (mail($para, $assunto, $corpo, $headers)) {
        echo "<script>
                alert('Mensagem enviada com sucesso!');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao enviar mensagem. Por favor, contate pelo número ou e-mail.');
                window.history.back();
              </script>";
    }
} else {
    header("Location: index.html");
}
?>