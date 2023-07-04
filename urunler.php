<?php include("admin/include/site_db.php"); 
$active="urunler";
$ct=$_GET["url"]?>  
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Baran Medikal l Ürünler </title>
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

		 <section class="full-screen fw-main-row fixed-height" style="    margin-top: -14px;background-image: url(images/imgs/urun.jpg);height:190px;">
				<div class="fw-container centered-container tac">
					<div class="container tac">
						<h2 class="h1 big"><span style="  text-shadow: 1px 1px 3px #3c332a;     color: #ffffff;" class="blue-color"><?php if($ct=="") echo"Ürünlerimiz";
							else {
								echo$db->VeriOkuTek("products_category", "isim", "url", $_GET["url"]);
							}?></span> </h2>
  					</div>
				</div>
			</section>
			<!-- END Full screen section -->
			<section class="fw-main-row pt40 pb30">
				<div class="fw-container">
 
 
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
		
         <div style="border-width: 1px;
    border-style: double;
    border-color: #e0e0e0;
    padding: 12px 15px 0px 24px;
    margin-bottom: 15px;" class="search-module">
                        <form   action="arama.php" role="arama">
                           <input  name="url" id="srch-term"  type="text" class="input"   placeholder="Arama">
                              <button  style="    padding: 5px 7px;" type="submit" class="submit"><i class="icon-font icon-search"></i></button>
                           </form>
                        </div>

            <div class="card bg-light mb-3">
                <div style="    background-color: #e98a12!important;" class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Kategoriler</div>
                <ul class="list-group category_block">
				
				
															<li class="list-group-item"><a href="urunler">Hepsi</a></li>

															
															
                   
	<?php
											if($db->veriSaydir("products_category", array(), array()) > 0) {
											$bilgi= $db->VeriOkuCoklu("products_category", array(), array(), "row", "ASC");
											$bilgial= $db->bilgial;
											foreach($bilgial as $rows){
											?>

											<li class="list-group-item"><a href="urunler-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
                
				
				 <?php }} ?>
				
				</ul>
            </div>
           
        </div>
        <div class="col">
            <div class="row">
               
					<?php //if($ct="") {Hepsini çek } else {$rows->cat_id!=veriokutek products_category id url $_getURL) continue;}?>

									<?php
								if($db->veriSaydir("products_items", array(), array()) > 0) {
								$bilgi= $db->VeriOkuCoklu("products_items", array(), array(), "row", "ASC");
								$bilgial= $db->bilgial;
								foreach($bilgial as $rows){
									if($ct!="") {
										if($rows->cat_id!=$db->VeriOkuTek("products_category", "id", "url", $_GET["url"])){

										 continue;
									 }
								 }
								?>


			   <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                     <a href="urundetay-<?=$rows->url;?>.html" title="Ürünü İncele">   <img class="card-img-top" src="upload/<?=$rows->resim;?>" alt="<?=$rows->urunbaslik;?>"> </a>
                        <div class="card-body">
                            <h4 style="text-align:center;" class="card-title"><a  href="urundetay-<?=$rows->url;?>.html" title="Ürünü İncele"><?=$rows->urunbaslik;?></a></h4>
                            <p class="card-text"> </p>
                            <div class="row">
                               
                              <!--  <div style="text-align:center;" class="col">
                                    <a style="    color: #fff !important;" href="urundetay-<?=$rows->url;?>.html" class="btn btn-success btn-block">İncele</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
               <?php }} ?>

			   
			   

	   </div>
        </div>

    </div>
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