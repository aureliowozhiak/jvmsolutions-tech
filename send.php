
<?php
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $subject = $_GET['subject'];
    $message = $_GET['message'];


    $email_from = $name.'<'.$email.'>';

    $to ="contato@jvmsolutions.tech";
    $email_subject = "$subject";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From: ".$email_from."\r\n";
    $message .= "<strong>Email enviado por:</strong> ".$name."<br>";
    $message .= "<strong>Email do remetente:</strong> ".$email."<br>";
    $message .= "<strong>Mensagem:</strong> ".nl2br($_GET['message'])."<br>";
    $message .= "<br>";

    $message .= "<strong>Enviado:</strong> ".date("d/m/Y H:i:s")."<br>";

    $message .= "<br>";
    $message .= "Email enviado do formulário de contato do site";

    if (@mail($to, $email_subject, $message, $headers))
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('Mensagem enviada com sucesso!');
        </script>";
    }
    else
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('Falha no envio da mensagem, por favor tente novamente.');
        </script>";
    }

}
?>
