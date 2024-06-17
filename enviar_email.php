<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    // Destinatário do e-mail (seu endereço de e-mail)
    $destinatario = "viniciussantostec.vs@gmail.com"; // Substitua pelo seu endereço de e-mail

    // Assunto do e-mail
    $assunto = "Formulário de Contato - Meu Site";

    // Corpo da mensagem
    $corpo_mensagem = "Nome: $nome\n";
    $corpo_mensagem .= "Email: $email\n\n";
    $corpo_mensagem .= "Mensagem:\n$mensagem";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Enviar e-mail
    if (mail($destinatario, $assunto, $corpo_mensagem, $headers)) {
        echo '<script>alert("Mensagem enviada com sucesso! Entraremos em contato em breve.");</script>';
        echo '<script>window.location.href = "index.html";</script>';
    } else {
        echo '<script>alert("Erro ao enviar mensagem. Por favor, tente novamente mais tarde.");</script>';
        echo '<script>window.location.href = "index.html";</script>';
    }
} else {
    // Se o método não for POST, redirecionar para a página inicial
    header("Location: index.html");
    exit;
}
?>
