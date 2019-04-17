<?php
use vendor/phpmailer/phpmailer/src/Exception;
use vendor/phpmailer/phpmailer/src/PHPMailer;


  require '/vendor/autoload.php';

  $mail = new PHPMailer;

try {
  $mail->isSMTP();
  $mail->SMTPDebug  = 2;
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'mymailaddress.com';
  $mail->Password   = 'secret';
  $mail->SMTPSecure = 'tls';
  $mail->Port       = 587;

  $headers = "From: ".$name." <".$email.">\r\n";
  $headers = "MIME-Version: 1.0\r\n";
  $headers = "Content-type: text/html; charset-utf-8";


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $to = "mymailaddress.com";
  $mail->Body    = '<html>
               <body>
                   <h2>You have a message from www.fatmaardabicaz.av.tr website user</h2>
                   <hr>
                   <p>Isim:<br>`.$name.`</p>
                   <p>E-mail:<br>`.$email.`</p>
                   <p>Telefon:<br>`.$phone.`</p>
                   <p>Mesaj:<br>`.$message.`</p>
               </body>
           </html>';
  $txt = " You have a message from: ".$name.".\n\n".$message;


  $mail->setFrom($email);
  $mail->addReplyTo('mymailaddress.com');
  $mail->msgHTML(file_get_contents($body), __DIR__);
  $mail->AltBody = $txt;

  $mail->setLanguage('tr', 'vendor/phpmailer/phpmailer/language/phpmailer.lang-tr.php');
  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
