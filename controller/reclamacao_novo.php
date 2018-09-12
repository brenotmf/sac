<?php

session_start();
  use PHPMailer\PHPMailer\PHPMailer;
  require_once("../model/lista_reclamacoes.php");
  require_once("../vendor/autoload.php");

  $sender_email= "brenotmoura@gmail.com";
  $sender_senha= 'breno1404';

  $para_email= $_SESSION["logado"]["email"];
  $para_assunto= "confirmação da reclamação";
  $para_msg= "sua reclamação foi efetuada no sistema";
  
  $mail = new PHPMailer;
  $mail -> isSMTP();
  $mail -> Host = 'smtp.gmail.com';
  $mail-> Port = 587;
  $mail-> SMTPSecure = 'tls';
  $mail-> SMTPAuth = true;
  $mail-> Username = $sender_email;
  $mail-> Password = $sender_senha;
  $mail->setFrom($sender_email);
  $mail->addReplyTo ($para_email);
  $mail->Subject = $para_assunto;
  $mail->AltBody = $para_msg;
  
    
 if (count($_POST) > 0)
 {
   
   $titulo = $_POST['titulo'];
   $produto = $_POST['produto'];
   $descricao = $_POST['descricao'];
   $usuario = $_SESSION["logado"]["usuario"];
  
   
   //novaReclamacao($titulo, $descricao, $produto);
   
   $resultado = novaReclamacao($titulo, $descricao, $produto, $usuario);
     
   if ($resultado == true)
   {
     //envia email antes de redicionar
     $mail->send();
     
     header("Location: ../index.php");
   }
 }

?>

?>
