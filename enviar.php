<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $mail = new PHPMailer(true);
    
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '2025workwear@gmail.com';
        $mail->Password = 'dqux wwqh hzuu xukf'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->CharSet = 'UTF-8';

        $mail->setFrom('2025workwear@gmail.com', 'Formulário do Site');
        $mail->addAddress('2025workwear@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'Nova Cotação do Site';
        $mail->Body = "Nome: $nome<br>Email: $email<br>Mensagem: $mensagem";

        $mail->send();
        
        header("Location: index.php?status=ok");
        exit();
    } catch (Exception $e) {
        header("Location: index.php?status=erro");
        exit();
    }
}
?>
