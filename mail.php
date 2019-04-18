<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require '/vendor/autoload.php';

$mail = new PHPMailer(true);

$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$phone = test_input($_POST["phone"]);
$subject = test_input($_POST["subject"]);
$message = test_input($_POST["message"]);


$mySmtpHost = 'smtp.gmail.com';
$myEmail = 'dozdemir663@gmail.com';
$myemailPassword = 'DeryaOzdemir2017';


$Body = "<html>
<body>
   <h2>You have a message from www.fatmaardabicaz.av.tr website user</h2>
   <hr>
   <p>Isim:<br>`.$name.`</p>
   <p>E-mail:<br>`.$email.`</p>
   <p>Telefon: <br>`.$phone.`</p>
   <p>Konu: <br>`.$subject.`</p>
   <p>Mesaj:<br>`.$message.`</p>
</body>
</html>";

try {

  $mail->isSMTP();
  $mail->SMTPDebug  = 2;
  $mail->Host       = $mySmtpHost;
  $mail->SMTPAuth   = true;
  $mail->Username   = $myEmail;
  $mail->Password   = $myemailPassword;
  $mail->SMTPSecure = 'tls';
  $mail->Port       = 587;

  $mail->setFrom($myEmail);
  $mail->addReplyTo($myEmail);
  $mail->addAddress($email, $name);
  $mail->Subject = 'Here is the subject';

$mail->isHTML(true); 
$mail->Subject = 'Here is the subject';
$mail->Body = $message;

$mail->setLanguage('tr', 'vendor/phpmailer/phpmailer/language/phpmailer.lang-tr.php');
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function send() {
        if (!$this->mail->send()) {
                echo $this->mail->ErrorInfo;
        }
}


?>
