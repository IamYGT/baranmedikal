<?php
require 'vendor/phpmailer/PHPMailerAutoload.php';
if($_POST['action'] == 'iletisim'){
    $veri = $_POST;
    unset($veri['action']);
    unset($veri['gonder']);
    foreach ($veri as $key => $value) {
        $mesaj .= ucfirst($key).': '.$value.'<br>';
    }
    $konu = 'İletişim Formu';
    $name = $veri['ad'].' '.$veri['soyad'];
    $mail = $veri['mail'];
    $mail = $veri['telefon'];
    echo formgonder($mail, $name, $telefon, $mesaj);
}

function formgonder($mail, $name, $konu, $mesaj){
    $phpmailer = new PHPMailer;
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.yandex.com'; // Your smtp host         Edit This
    $phpmailer->SMTPAuth = true;
    $phpmailer->Username = 'info@baranmedikal.com.tr'; // Your smtp email    Edit This
    $phpmailer->Password = 'Brkylc0106'; // Your email password       Edit This
    $phpmailer->SMTPSecure = 'tsl'; // SSL
    $phpmailer->Port = '587'; // SSL port       Edit This
    $phpmailer->From = 'info@baranmedikal.com.tr'; 
    $phpmailer->FromName = $name; 
    $phpmailer->AddReplyTo($mail, $name);
    $phpmailer->addAddress('info@baranmedikal.com.tr', 'Baran Medikal İletişim Formu'); // Who will get this email? Edit This
    $phpmailer->isHTML(true);
    $phpmailer->Subject = $konu;
    $phpmailer->Body    = $mesaj;
    $phpmailer->CharSet = 'UTF-8';

    if($phpmailer->send()){
        return '<div class="alert alert-warning" style="text-align:center;margin-bottom:100px;" role="alert"><h3>Başarıyla gönderildi / Successfully sent</h3></div>';
    }else{
        return '<div class="alert alert-warning" role="alert"><bold>Hata / Error :</bold>'.$phpmailer->ErrorInfo.'</div>';
    }
}