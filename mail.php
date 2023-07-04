<?
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "smtp.yandex.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "mertyurek@memsidea.com";  // SMTP username$mail->SMTPSecure = 'ssl';
$mail->Password = "EmpeRiaNbaba2!"; // SMTP password
$mail->Port     = 465; 
$mail->CharSet = "utf-8"; 
$mail->From     = "mertyurek@memsidea.com"; // smtp kullanıcı adınız ile aynı olmalı
$mail->Fromname = "Memsidea";
 $mail->AddAddress("mertyurek@memsidea.com","Memsidea");  
$mail->Subject  =  "Memsidea İletişim Formundan Gelen Mesaj";
$mail->Body = 'Hello, <b>my friend</b>! This message uses HTML!';
$mail->IsHTML(true);
if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Mesaj Gönderildi";


?>
