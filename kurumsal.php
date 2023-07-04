<?php include("admin/include/site_db.php");
$active="kurumsal";
 
 ?> <!doctype html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Baran Medikal l <?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?> </title>
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
		 
		 <!-- Full screen section -->
					 <section class="full-screen fw-main-row fixed-height" style="background-image: url(images/imgs/2.jpg);height:190px;">
				<div class="fw-container centered-container tac">
					<div class="container tac">
						<h2 class="h1 big"><span style="  text-shadow: 1px 1px 3px #3c332a;     color: #ffffff;" class="blue-color"><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></span> </h2>
  					</div>
				</div>
			</section>

			<!-- END Full screen section -->
			<section class="fw-main-row pt40 pb50">
				<div class="fw-container">
					<h2 class="heading-decor"><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></h2>
					<div class="fw-row">
						 
						<div class="fw-col-md-12 content">
							<div  ><?=$db->VeriOkuTek("kurumsal", "aciklama", "url", $_GET["url"]);?></div>
 						</div>
					</div>
				</div>
			</section>
		 	 
			<?php include("alt.php")?>
			
			</div>
		<script type="text/javascript" src="js\jquery-2.1.3.min.js"></script>
		<script src="js\owl.carousel\owl.carousel.min.js"></script>
		<script src="js\jquery.animateNumber.min.js"></script>
		<script type="text/javascript" src="js\script.js"></script>
	</body>
</html>