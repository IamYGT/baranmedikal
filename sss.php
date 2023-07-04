<?php include("admin/include/site_db.php");
$active="sss";
 ?>  
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Baran Medikal l SSS </title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		
		 <style> 
 

.centerplease {
  margin: 0 auto;
  max-width: 270px;
  font-size: 40px;
}

.question {
  position: relative;
    background: #e98a12;
  margin: 0;
  padding: 10px 10px 10px 50px;
  display: block;
  width:100%;
  cursor: pointer;
}

.answers {
    background: #dbdbdb;
  padding: 0px 15px;
  margin: 5px 0;
  height: 0;
  overflow: hidden;
  z-index: -1;
  position: relative;
  opacity: 0;
  -webkit-transition: .7s ease;
  -moz-transition: .7s ease;
  -o-transition: .7s ease;
  transition: .7s ease;
}

.questions:checked ~ .answers{
  height: auto;
  opacity: 1;
  padding: 15px;
}

.plus {
  position: absolute;
  margin-left: 10px;
  z-index: 5;
  font-size: 2em;
  line-height: 100%;
  -webkit-user-select: none;    
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  -webkit-transition: .3s ease;
  -moz-transition: .3s ease;
  -o-transition: .3s ease;
  transition: .3s ease;
}

.questions:checked ~ .plus {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.questions {
  display: none;
}
</style>
		
		
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

		 <section  class="full-screen fw-main-row fixed-height" style="  background-image: url(images/imgs/sss.jpg);height:190px;">
				<div  class="fw-container centered-container tac">
					<div class="container tac">
						<h2 class="h1 big"><span style="text-shadow: 1px 1px 3px #3c332a;     color: #ffffff;" class="blue-color">Sıkça Sorulan Sorular</span> </h2>
  					</div>
				</div>
			</section>
			<!-- END Full screen section -->
			<section class="fw-main-row pt40 pb30">
				<div class="fw-container">
			 
 
<div class="content">



<?php
        if($db->veriSaydir("sss", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("sss", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
<div>
  <input type="checkbox" id="<?=$rows->url;?>" name="q"  class="questions">
  <div style="    color: #fff;" class="plus">+</div>
  <label style="    color: #fff;" for="<?=$rows->url;?>" class="question">
    <?=$rows->isim;?>
  </label>
  <div class="answers">
<?=$rows->aciklama;?>  </div>
   </div>

<?php }} ?>



</div>
				</div>
			</section>
			<!-- Working Hours -->
		

		<?php include("alt.php")?>

		</div>
		<script type="text/javascript" src="js\jquery-2.1.3.min.js"></script>
		<!-- Map scripts -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

		<script src="js\owl.carousel\owl.carousel.min.js"></script>
		<script src="js\jquery.animateNumber.min.js"></script>
		<script type="text/javascript" src="js\script.js"></script>
	
	
	</body>
</html>