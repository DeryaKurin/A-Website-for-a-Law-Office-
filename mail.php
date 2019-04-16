<?php
if(isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $to = "dozdemir663@gmail.com";
  $subject = "Site kullanıcısından mesajınız var";
  $body = '<html>
               <body>
                   <h2>www.fatmaardabicaz.av.tr sitesinden kullanıcı mesajı</h2>
                   <hr>
                   <p>Isim:<br>`.$name.`</p>
                   <p>E-mail:<br>`.$email.`</p>
                   <p>Telefon:<br>`.$phone.`</p>
                   <p>Mesaj:<br>`.$message.`</p>
               </body>
           </html>';



  $headers = "From: ".$name." <".$email.">\r\n";
  $headers .= "Reply-To: ".$email."\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset-utf-8";


  $send = mail($to, $subject, $body, $headers);

  if($send) {
      echo '<br>';
      echo 'Bizimle iletişime geçtiğiniz için teşekkürler! Mesajınız bize ulaştı, en kısa zamanda size dönüş yapacağız.';
  } else {
      echo 'Hata!';
  }
}

?>
