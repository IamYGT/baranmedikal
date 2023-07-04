<?php
include("admin/include/site_db.php");
if($hesap->id!="") echo"<script>window.location.assign('akademik-index')</script>";
//echo '<script>alert("Giriş başarı ile yapıldı!");</script>';


if(isset($_POST["kullaniciadi"])){
	$query = $db->baglan->prepare("SELECT * FROM uye_category WHERE (kullaniciadi=:kullaniciadi AND sifre=:sifre)"); // OR (mail=:kullaniciadi AND sifre=:sifre)
					$query->execute([
							':kullaniciadi' =>  $_POST["kullaniciadi"],
							':sifre' =>  $_POST["sifre"]
					]);
					if($query->rowCount() > 0){//dogru
						//sonuç dönüyorsa
						$obje=$query->fetch(PDO::FETCH_OBJ);
						//if($obje->aktif==0){
						//	 echo"2";
						//}
						//else{
							$kullaniciadi=$_POST["kullaniciadi"];
							$_SESSION["hesapid"]=$obje->id;
							$hesap=$obje;
							 
					//header('Location: akademik-index.php');
						//}
 						echo "<script>window.location.assign('akademik-index')</script>";
}
else { //yanlis
	 $girisyanlis=true;
	 echo '<script>alert("Kullanıcı adı veya şifre hatalı!");</script>';
	 //header('Location: akademik-giris.php');
}
}


 ?>  
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Baran Medikal l Akademik Giriş </title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


		
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
 
		 
		 
		 
 <section style="    height: 100%;" class="fw-main-row pt40 pb50">
				<div class="fw-container">
					<h2  style="margin-bottom: 22px;
    margin-top: 22px;
    color: #fff;" class="heading-decor">Akademik Giriş</h2>
					<div class="fw-row">
						 
						<div class="fw-col-md-12 content"> 
<!-- partial:index.partial.html -->
<div class="materialContainer">


   <div class="box">
<form class="form-signin" action="" method="POST">
      <div class="title">GİRİŞ</div>

      <div class="input">
                 <input type="text" id="inputEmail" name="kullaniciadi" class="form-control" placeholder="Kullanıcı Adı" required autofocus>
         <span class="spin"></span>
      </div>

      <div class="input">
                <input type="password" id="inputPassword" name="sifre" class="form-control" placeholder="Şifre" required>
         <span class="spin"></span>
      </div>

      <div class="button login">
         <button><span>GİRİŞ YAP</span> <i class="fa fa-check"></i></button>
      </div>

      <a href="tel:+90 312 232 66 16" class="pass-forgot">Şifrenizi mi unuttunuz?</a>
</form>
   </div>

    

</div>
<!-- partial -->
 	</div>
					</div>
				</div>
		 			 
 			</section>		

			<!-- Working Hours -->
		 
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
		
		
<style>

 
 .box {
   position: relative;
    top: 280px;
   opacity: 1;
   float: left;
   padding: 60px 50px 40px 50px;
   width: 100%;
   background: #fff;
   border-radius: 10px;
   transform: scale(1);
   -webkit-transform: scale(1);
   -ms-transform: scale(1);
   z-index: 5;
}

.box.back {
   transform: scale(.95);
   -webkit-transform: scale(.95);
   -ms-transform: scale(.95);
   top: -20px;
   opacity: .8;
   z-index: -1;
}

.box:before {
   content: "";
   width: 100%;
   height: 30px;
   border-radius: 10px;
   position: absolute;
   top: -10px;
   background: rgba(255, 255, 255, .6);
   left: 0;
   transform: scale(.95);
   -webkit-transform: scale(.95);
   -ms-transform: scale(.95);
   z-index: -1;
}

.overbox .title {
   color: #fff;
}

.overbox .title:before {
   background: #fff;
}

.title {
   width: 100%;
   float: left;
   line-height: 46px;
   font-size: 34px;
   font-weight: 700;
   letter-spacing: 2px;
   color: #00911a;
   position: relative;
}

.title:before {
   content: "";
   width: 5px;
   height: 100%;
   position: absolute;
   top: 0;
   left: -50px;
   background: #00911a;
}

.input,
.input label,
.input input,
.input .spin,
.button,
.button button .button.login button i.fa,
.material-button .shape:before,
.material-button .shape:after,
.button.login button {
   transition: 300ms cubic-bezier(.4, 0, .2, 1);
   -webkit-transition: 300ms cubic-bezier(.4, 0, .2, 1);
   -ms-transition: 300ms cubic-bezier(.4, 0, .2, 1);
}

.material-button,
.alt-2,
.material-button .shape,
.alt-2 .shape,
.box {
   transition: 400ms cubic-bezier(.4, 0, .2, 1);
   -webkit-transition: 400ms cubic-bezier(.4, 0, .2, 1);
   -ms-transition: 400ms cubic-bezier(.4, 0, .2, 1);
}

.input,
.input label,
.input input,
.input .spin,
.button,
.button button {
   width: 100%;
   float: left;
}

.input,
.button {
   margin-top: 30px;
   height: 70px;
}

.input,
.input input,
.button,
.button button {
   position: relative;
}

.input input {
   height: 60px;
   top: 10px;
   border: none;
   background: transparent;
}

.input input,
.input label,
.button button {
   font-family: 'Roboto', sans-serif;
   font-size: 24px;
   color: rgba(0, 0, 0, 0.8);
   font-weight: 300;
       border: #00911a 1px solid;

}

.input:before,
.input .spin {
   width: 100%;
   height: 1px;
   position: absolute;
   bottom: 0;
   left: 0;
}

.input:before {
   content: "";
   background: rgba(0, 0, 0, 0.1);
   z-index: 3;
}

.input .spin {
   background: #00911a;
   z-index: 4;
   width: 0;
}

.overbox .input .spin {
   background: rgba(255, 255, 255, 1);
}

.overbox .input:before {
   background: rgba(255, 255, 255, 0.5);
}

.input label {
   position: absolute;
   top: 10px;
   left: 0;
   z-index: 2;
   cursor: pointer;
   line-height: 60px;
}

.button.login {
   width: 60%;
   left: 20%;
}

.button.login button,
.button button {
   width: 100%;
   line-height: 64px;
   left: 0%;
   background-color: transparent;
   border: 3px solid rgba(0, 0, 0, 0.1);
   font-weight: 900;
   font-size: 18px;
   color: rgba(0, 0, 0, 0.2);
}

.button.login {
   margin-top: 30px;
}

.button {
   margin-top: 20px;
}

.button button {
   background-color: #fff;
   color: #00911a;
   border: none;
}

.button.login button.active {
   border: 3px solid transparent;
   color: #fff !important;
}

.button.login button.active span {
   opacity: 0;
   transform: scale(0);
   -webkit-transform: scale(0);
   -ms-transform: scale(0);
}

.button.login button.active i.fa {
   opacity: 1;
   transform: scale(1) rotate(-0deg);
   -webkit-transform: scale(1) rotate(-0deg);
   -ms-transform: scale(1) rotate(-0deg);
}

.button.login button i.fa {
   width: 100%;
   height: 100%;
   position: absolute;
   top: 0;
   left: 0;
   line-height: 60px;
   transform: scale(0) rotate(-45deg);
   -webkit-transform: scale(0) rotate(-45deg);
   -ms-transform: scale(0) rotate(-45deg);
}

.button.login button:hover {
   color: #00911a;
   border-color: #00911a;
}

.button {
   margin: 40px 0;
   overflow: hidden;
   z-index: 2;
}

.button button {
   cursor: pointer;
   position: relative;
   z-index: 2;
}

.pass-forgot {
   width: 100%;
   float: left;
   text-align: center;
   color: rgba(0, 0, 0, 0.4);
   font-size: 18px;
}

.click-efect {
   position: absolute;
   top: 0;
   left: 0;
   background: #00911a;
   border-radius: 50%;
}

.overbox {
   width: 100%;
   height: 100%;
   position: absolute;
   top: 0;
   left: 0;
   overflow: inherit;
   border-radius: 10px;
   padding: 60px 50px 40px 50px;
}

.overbox .title,
.overbox .button,
.overbox .input {
   z-index: 111;
   position: relative;
   color: #fff !important;
   display: none;
}

.overbox .title {
   width: 80%;
}

.overbox .input {
   margin-top: 20px;
}

.overbox .input input,
.overbox .input label {
   color: #fff;
}

.overbox .material-button,
.overbox .material-button .shape,
.overbox .alt-2,
.overbox .alt-2 .shape {
   display: block;
}

.material-button,
.alt-2 {
   width: 140px;
   height: 140px;
   border-radius: 50%;
   background: #00911a;
   position: absolute;
   top: 40px;
   right: -70px;
   cursor: pointer;
   z-index: 100;
   transform: translate(0%, 0%);
   -webkit-transform: translate(0%, 0%);
   -ms-transform: translate(0%, 0%);
}

.material-button .shape,
.alt-2 .shape {
   position: absolute;
   top: 0;
   right: 0;
   width: 100%;
   height: 100%;
}

.material-button .shape:before,
.alt-2 .shape:before,
.material-button .shape:after,
.alt-2 .shape:after {
   content: "";
   background: #fff;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%) rotate(360deg);
   -webkit-transform: translate(-50%, -50%) rotate(360deg);
   -ms-transform: translate(-50%, -50%) rotate(360deg);
}

.material-button .shape:before,
.alt-2 .shape:before {
   width: 25px;
   height: 4px;
}

.material-button .shape:after,
.alt-2 .shape:after {
   height: 25px;
   width: 4px;
}

.material-button.active,
.alt-2.active {
   top: 50%;
   right: 50%;
   transform: translate(50%, -50%) rotate(0deg);
   -webkit-transform: translate(50%, -50%) rotate(0deg);
   -ms-transform: translate(50%, -50%) rotate(0deg);
}

body {
   background-image: url(arka.jpg);
   background-position: center;
   background-size: cover;
   background-repeat: no-repeat;
   min-height: 100vh;
   font-family: 'Roboto', sans-serif;
}
 
.materialContainer {
   width: 100%;
   max-width: 460px;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   -webkit-transform: translate(-50%, -50%);
   -ms-transform: translate(-50%, -50%);
}

*,
*:after,
*::before {
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
   margin: 0;
   padding: 0;
   text-decoration: none;
   list-style-type: none;
   outline: none;
}

</style>

	</body>
</html>