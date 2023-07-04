<?php include("admin/include/site_db.php"); ?> <!doctype html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Baran Medikal l  Haberler</title>
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
	
	<?php include("ust.php")?>
	
	<!-- Blog items -->
			<section class="fw-main-row pt40">
				<div class="fw-container">
					<h2 class="heading-decor pb20">Haberler</h2>
					<div class="fw-row">
						
						<?php
        if($db->veriSaydir("haberler", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("haberler", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
						<!-- Blog item -->
						<div class="blog-item in-row fw-col-xs-12">
							<div class="fw-row">
								<div class="image fw-col-sm-4"><a href="haberler-<?=$rows->url;?>.html"><img  src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"></a></div>
								<div class="fw-col-sm-8">
									<h4><a href="haberler-<?=$rows->url;?>.html"><?=$rows->isim;?></a></h4>
									<div class="post-date"><?=$rows->tarih;?></div>
									<p><?=strip_tags(substr($rows->aciklama,0,250));?></p>
									<a href="haberler-<?=$rows->url;?>.html" class="button-style2 gray min">Devamını Oku</a>
								</div>
							</div>
						</div>
						<!-- END Blog item -->
			   <?php }} ?>

			 </div>
					 
					<!-- END Pagination -->
				</div>
			</section>
			<!-- END Blog items -->
		
		<?php include("alt.php")?>
		
		</div>
		<script type="text/javascript" src="js\jquery-2.1.3.min.js"></script>
		<script src="js\owl.carousel\owl.carousel.min.js"></script>
		<script src="js\jquery.animateNumber.min.js"></script>
		<script type="text/javascript" src="js\script.js"></script>
	</body>
</html>