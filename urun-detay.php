<?php include("admin/include/site_db.php");
$active="urunler";
 ?>  
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Baran Medikal l <?=$db->VeriOkuTek("products_items", "urunbaslik", "url", $_GET["url"]);?> </title>
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

		 <section  class="full-screen fw-main-row fixed-height hidden-xs" style="    background-image: url(images/imgs/2.jpg);    height: 190px;">
				<div  class="fw-container centered-container tac">
					<div class="container tac">
						<h2 class="h1 big"><span style="      text-shadow: 1px 1px 3px #3c332a;     color: #ffffff;" class="blue-color"><?=$db->VeriOkuTek("products_items", "urunbaslik", "url", $_GET["url"]);?></span> </h2>
  					</div>
				</div>
			</section>
			<!-- END Full screen section -->
			<section class="fw-main-row pt40 pb40">
            <div class="fw-container">
                
               <div class="fw-row">
                  <!-- Icon box -->
                  <div class="fw-col-sm-6">
                      <img src="upload/<?=$db->VeriOkuTek("products_items", "resim", "url", $_GET["url"]);?>">  
                  </div>  
				  
				  <div class="fw-col-sm-6 ">
                      <div class="text">
                        <div style="    font-size: 33px;" class="h4"><?=$db->VeriOkuTek("products_items", "urunbaslik", "url", $_GET["url"]);?></div>
 
                        <div style="    margin-top: -19px;font-size:13px;"><?=$db->VeriOkuTek("products_items", "urunaciklama", "url", $_GET["url"]);?></div>
                     </div>
                  </div>
                  <!-- END Icon box -->
                  <!-- Icon box -->
                  
                  <!-- END Icon box -->
               </div>
			   
			   
			        <div class="fw-row">
                  <!-- Icon box -->
                   
				  <div class="fw-col-sm-12">
	
		 <!-- Tabs -->
<section id="tabs">
	<div class="container">
 		<div class="row">
			<div class="col-xs-12 col-md-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
												 
								 

						<a class="nav-item nav-link active" <?php if($db->VeriOkuTek("products_items", "descc", "url", $_GET["url"])=="") echo'style="display:none;"'; ?> id="tab-descc" data-toggle="tab" href="#descc" role="tab" aria-controls="descc" aria-selected="true">Açıklama</a>
						<a class="nav-item nav-link" <?php if($db->VeriOkuTek("products_items", "kit", "url", $_GET["url"])=="") echo'style="display:none;"'; ?> id="nav-kit" data-toggle="tab" href="#kit" role="tab" aria-controls="kit" aria-selected="false">Kit İçeriği</a>
						<a class="nav-item nav-link" <?php if($db->VeriOkuTek("products_items", "guide", "url", $_GET["url"])=="") echo'style="display:none;"'; ?> id="nav-guide" data-toggle="tab" href="#guide" role="tab" aria-controls="guide" aria-selected="false">Kılavuz</a>
						<a class="nav-item nav-link" <?php if($db->VeriOkuTek("products_items", "material", "url", $_GET["url"])=="") echo'style="display:none;"'; ?> id="nav-material" data-toggle="tab" href="#material" role="tab" aria-controls="material" aria-selected="false">Materials & Methods</a>
						<a class="nav-item nav-link" <?php if($db->VeriOkuTek("products_items", "scien", "url", $_GET["url"])=="") echo'style="display:none;"'; ?> id="nav-scien" data-toggle="tab" href="#scien" role="tab" aria-controls="scien" aria-selected="false">Bilimsel Yayınlar</a>
						<a class="nav-item nav-link" <?php if($db->VeriOkuTek("products_items", "sds", "url", $_GET["url"])=="") echo'style="display:none;"'; ?> id="nav-sds" data-toggle="tab" href="#sds" role="tab" aria-controls="sds" aria-selected="false">SDS</a>
						<a class="nav-item nav-link" <?php if($db->VeriOkuTek("products_items", "content", "url", $_GET["url"])=="") echo'style="display:none;"'; ?> id="nav-content" data-toggle="tab" href="#content" role="tab" aria-controls="content" aria-selected="false">İçerik</a>
						<a class="nav-item nav-link" <?php if($db->VeriOkuTek("products_items", "refr", "url", $_GET["url"])=="") echo'style="display:none;"'; ?> id="nav-refr" data-toggle="tab" href="#refr" role="tab" aria-controls="refr" aria-selected="false">Referanslar</a>
					</div>
				</nav>
				<div style="border-color: #e5e5e5;
    border-width: 1px;
    border-style: solid;" class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					 
					
					
					<div  style="color:#000; padding-left: 25px;" class="tab-pane fade show active" <?php if($db->VeriOkuTek("products_items", "descc", "url", $_GET["url"])=="") echo'style="display:none;"' ?> id="descc" role="tabpanel" aria-labelledby="descc">
 <?=$db->VeriOkuTek("products_items", "descc", "url", $_GET["url"]);?>
 </div>
			

					<div  style="color:#000; padding-left: 25px; text-align:center;" class="tab-pane fade" <?php if($db->VeriOkuTek("products_items", "kit", "url", $_GET["url"])=="") echo'style="display:none;"' ?> id="kit" role="tabpanel" aria-labelledby="kit">
<a style="       background-color: #01911b;
    border: 1px solid #01911b;
    color: #fff !important;" href="<?=$db->VeriOkuTek("products_items", "kit", "url", $_GET["url"]);?>" class="button-style2"><span>PDF İNDİRMEK İÇİN TIKLAYIN.</span></a>
 </div>
			

					<div  style="color:#000; padding-left: 25px;  text-align:center;" class="tab-pane fade" <?php if($db->VeriOkuTek("products_items", "guide", "url", $_GET["url"])=="") echo'style="display:none;"' ?> id="guide" role="tabpanel" aria-labelledby="guide">
<a style="      background-color: #01911b;
    border: 1px solid #01911b;
    color: #fff !important;" href="<?=$db->VeriOkuTek("products_items", "guide", "url", $_GET["url"]);?>" class="button-style2"><span>PDF İNDİRMEK İÇİN TIKLAYIN.</span></a>
 </div>
			

					<div  style="color:#000; padding-left: 25px;" class="tab-pane fade" <?php if($db->VeriOkuTek("products_items", "material", "url", $_GET["url"])=="") echo'style="display:none;"' ?> id="material" role="tabpanel" aria-labelledby="material">
 <?=$db->VeriOkuTek("products_items", "material", "url", $_GET["url"]);?>
 </div>
			

					<div  style="color:#000; padding-left: 25px;" class="tab-pane fade" <?php if($db->VeriOkuTek("products_items", "scien", "url", $_GET["url"])=="") echo'style="display:none;"' ?> id="scien" role="tabpanel" aria-labelledby="scien">
 <?=$db->VeriOkuTek("products_items", "scien", "url", $_GET["url"]);?>
 </div>
			

					<div  style="color:#000; padding-left: 25px;" class="tab-pane fade" <?php if($db->VeriOkuTek("products_items", "sds", "url", $_GET["url"])=="") echo'style="display:none;"' ?> id="sds" role="tabpanel" aria-labelledby="sds">
 <?=$db->VeriOkuTek("products_items", "sds", "url", $_GET["url"]);?>
 </div>
			

					<div  style="color:#000; padding-left: 25px;" class="tab-pane fade" <?php if($db->VeriOkuTek("products_items", "content", "url", $_GET["url"])=="") echo'style="display:none;"' ?> id="content" role="tabpanel" aria-labelledby="content">
 <?=$db->VeriOkuTek("products_items", "content", "url", $_GET["url"]);?>
 </div>
			

					<div  style="color:#000; padding-left: 25px;" class="tab-pane fade" <?php if($db->VeriOkuTek("products_items", "refr", "url", $_GET["url"])=="") echo'style="display:none;"' ?> id="refr" role="tabpanel" aria-labelledby="refr">
 <?=$db->VeriOkuTek("products_items", "refr", "url", $_GET["url"]);?>
 </div>
			

					 
			


			</div>
			
			</div>
		</div>
	</div>
</section>
<!-- ./Tabs -->
  </div>
			   
			   
			     
               
			   
			   
            </div>
         </section>
			<!-- Working Hours -->
		

		<?php include("alt.php")?>

		</div>

		<!-- Map scripts -->
 
 		<script type="text/javascript" src="js\jquery-2.1.3.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

		<script src="js\owl.carousel\owl.carousel.min.js"></script>
		<script src="js\jquery.animateNumber.min.js"></script>
		<script type="text/javascript" src="js\script.js"></script>
	
	
	</body>
</html>