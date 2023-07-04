<?php include("admin/include/site_db.php"); include("mail/PHPMailerAutoload.php");
$active="iletisim";
 ?>  
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Baran Medikal l İletişim </title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="css\medical-icons.css">
		<link rel="stylesheet" href="css\social-icons.css">
		<link rel="stylesheet" href="css\icon-font.css">
		<link rel="stylesheet" href="js\owl.carousel\owl.carousel.css">
		<link rel="stylesheet" href="css\frontend-grid.css">
		<link rel="stylesheet" href="css\style.css">
		<link rel="stylesheet" href="css\mobile.css"> <?php include("favo.php")?>
		<!--[if IE]>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js"></script>
		<script type="text/javascript" src="js/selectivizr-min.js"></script>
		<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="page">
			<!-- Preloader -->
		 
		 <?php include("ust.php")?>

		 <section class="full-screen fw-main-row fixed-height" style="background-image: url(images/imgs/contact.jpg);height:190px;">
				<div class="fw-container centered-container tac">
					<div class="container tac">
						<h2 class="h1 big"><span class="blue-color">Bize</span><br>Merhaba Deyin</h2>
  					</div>
				</div>
			</section>
			<!-- END Full screen section -->
			<section class="fw-main-row pt40 pb30">
				<div class="fw-container">
					<h2 class="heading-decor">İletişim</h2>
					<div class="fw-row pt10">
						<div class="fw-col-xs-12 fw-col-sm-4 contact-col">
							<div class="icon icon-font icon-placeholder-1"></div>
							<p><?=$db->ayarlar("value" , "adres");?></p>
						</div>
						<div class="fw-col-xs-12 fw-col-sm-4 contact-col">
							<div class="icon icon-font icon-telephone-1"></div>
							<p><a href="tel:<?=$db->ayarlar("value" , "tel");?>"><?=$db->ayarlar("value" , "tel");?></a> <br> Fax: <?=$db->ayarlar("value" , "fax");?> </p>
						</div>
						<div class="fw-col-xs-12 fw-col-sm-4 contact-col">
							<div class="icon icon-font icon-envelope"></div>
							<p><a href="mailto:<?=$db->ayarlar("value" , "mail");?>"><?=$db->ayarlar("value" , "mail");?></a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- Working Hours -->
		 
			<!-- END Working Hours -->
			<!-- Feedback form -->
			<section class="fw-main-row pt30 pb45">
				<div class="fw-container">
					<h2 class="heading-decor pb20">İletişim Formu</h2>
					 
 		 
				
	<?php
		if ($_POST){  
			$isim = $_POST['name']; 
				if (isset($_POST['islem'])) { 
					if ($_POST['email']<>'' && $_POST['name']<>'' && $_POST['message']<>'') {  
						
						$mail = new PHPMailer();
						$mail->IsSMTP();
						$mail->SMTPDebug = false;
						$mail->SMTPAuth = true;
						$mail->SMTPSecure = 'ssl';
						$mail->Host = 'smtp.yandex.com';
						$mail->Port = 465;
						$mail->IsHTML(true);
						$mail->SetLanguage("tr", "phpmailer/language");
						$mail->CharSet ="utf-8";
					   
						$mail->Username = "info@baranmedikal.com.tr";  
						$mail->Password =  "becivnatdtmyzixb";          
						$mail->From = "info@baranmedikal.com.tr";   
 						$mail->Fromname = $isim;
						$mail->AddAddress($mail->Username, $isim);
						$mail->SetFrom($mail->Username, $isim); 
						$mail->Subject = "Yeni İletişim Formu";
						$content  ="
						Ad: ".$_POST['name']."<br /> 
						E-Posta Adresi: ".$_POST['email']."<br />
						Telefon Numarası: ".$_POST['phone']."<br />
 						Mesaj Konusu: ".$_POST['subject']."<br />
						Mesaj: ".$_POST['message']." 
						
						"; 
						$mail->MsgHTML($content);
							if(!$mail->Send()){
							   echo '<div class="alert alert-danger"><b>Gönderim Hatası:</b> ' . $mail->ErrorInfo . '</div>';
							   exit;
							}else{
								echo '<div class="alert alert-info"><b>Başarılı: </b> Mesajınız Gönderilmiştir. En kısa zamanda sizinle irtibata geçeceğiz.</div>';
							}
					} else {
						echo '<div class="alert alert alert-warning"><b>Uyarı:</b> Tüm alanların doğrulması zorunludur.</div>';
					}
				} 

		}  
	?>	
					
	
	
					<form  action="/iletisim" method="post" class="form fw-row">   
 						<div class="fw-col-sm-3 fw-col-md-3"><input name="name" id="name"  type="text" placeholder="Adınız - Soyadınız *" class="style1"></div>
						<div class="fw-col-sm-3 fw-col-md-3"><input name="subject" id="subject"  type="text" placeholder="Konu *" class="style1"></div>
						<div class="fw-col-sm-6 fw-col-md-3"><input name="phone" id="phone"  type="text" placeholder="Telefon *" class="style1"></div>
						<div class="fw-col-sm-6 fw-col-md-3"><input name="email" id="email"  type="text" placeholder="Eposta *" class="style1"></div>
 						<div class="fw-col-md-12" >   
							<textarea placeholder="Mesajınız*" name="message" id="message"  class="style1"></textarea>
							<div class="tac"><button  type="submit"  id="islem" class="button-style1" name="islem" value="Gönder" type="submit">Gönder</button></div>
						</div>
					</form>
					
					
				</div>
			</section>
			<!-- END Feedback form -->
			<!-- Map -->
			<div class="fw-main-row">
 			<!-- END Map -->
		 		 <?php include("alt.php")?>

		</div>
		<script type="text/javascript" src="js\jquery-2.1.3.min.js"></script>
		<!-- Map scripts -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyBqnMfRjGOw09DMXjrd5vbTgiRHRntQ7N0&amp;sensor=false"></script>
	 
	 
		<script src="js\owl.carousel\owl.carousel.min.js"></script>
		<script src="js\jquery.animateNumber.min.js"></script>
		<script type="text/javascript" src="js\script.js"></script>
	</body>
</html>