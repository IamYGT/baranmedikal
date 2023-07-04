<?php include("admin/include/site_db.php");
$active="index";

 ?> <!doctype html>
<html lang="tr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Baran Medikal l Anasayfa </title>
      <meta name="description" content="Baran Medikal San. ve Tic. Ltd.Şti. Türkiye distribütörlükleriyle, gelişmiş teknolojileriyle yapmış olduğu üretimleriyle hizmet vermektedir.">
      
      
      
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
       <?php include("ust.php")?>  <!-- END Header -->
         <!-- Full screen section -->

<!-- Swiper Silder
    ================================================== --> 
<!-- Slider main container -->
    <div style="    margin-top: -14px;" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            	<?php
										$i = 0;
										if($db->veriSaydir("slayt", array(), array()) > 0) {
										$bilgi= $db->VeriOkuCoklu("slayt", array(), array(), "row", "DESC");
										$bilgial= $db->bilgial;
										foreach($bilgial as $rows){
												$i++;
										if($i == 1) {
										 ?>

										 
										 
			<div class="carousel-item active"><img class="img-fluid w-100 d-block" src="upload/<?=$rows->resim;?>" alt="<?=$rows->baslik;?>">
                <div class="carousel-caption">
                    <h3 class="animated slideInDown"><?=$rows->baslik;?></h3>
                    <p class="animated slideInLeft"><?=$rows->baslik2;?></p><a style="     background-color: #00971c;
    border: 1px solid #00971c;
    margin-top: 55px;
    font-size: 15px;
    font-weight: 700; margin-top: 85px;
" href="<?=$rows->buton_adres;?>" class="button-style2"><span><?=$rows->buton_baslik;?></span></a> </div>
            </div>
        <?php } else { $i = 1; ?>


			<div class="carousel-item"><img class="img-fluid w-100 d-block" src="upload/<?=$rows->resim;?>" alt="<?=$rows->baslik;?>">
                <div class="carousel-caption">
                    <h3 class="animated slideInDown"><?=$rows->baslik;?></h3>
                    <p class="animated slideInLeft"><?=$rows->baslik2;?></p><a style="     background-color: #00971c;
    border: 1px solid #00971c;
    margin-top: 55px;
    font-size: 15px;
    font-weight: 700;    margin-top: 85px;
" href="<?=$rows->buton_adres;?>" class="button-style2"><span><?=$rows->buton_baslik;?></span></a> </div>
            </div>
        <?php }}} ?>

		</div>
        <div>
		
		<a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"><i class="la la-cutlery"></i></span><span class="sr-only">Geri</span></a>
		<a class="carousel-control-next" href="#carousel-1"
                role="button" data-slide="next">
				
				<span class="carousel-control-next-icon"><i class="la la-cutlery"></i></span><span class="sr-only">İleri</span></a></div>
        <ol class="carousel-indicators">
			<?php
										$i = 0;
										if($db->veriSaydir("slayt", array(), array()) > 0) {
										$bilgi= $db->VeriOkuCoklu("slayt", array(), array(), "row", "DESC");
										$bilgial= $db->bilgial;
										foreach($bilgial as $rows){
												$i++;
										if($i == 1) {
										 ?>

            <li data-target="#carousel-1" data-slide-to="<?=$rows->id;?>" class="active"></li>
			
			<?php } else { $i = 1; ?>

			
            <li data-target="#carousel-1" data-slide-to="<?=$rows->id;?>"></li>
			
			<?php }}} ?>
         
		 
		 </ol>
    </div>
 

 
  <section style="    padding-bottom: 0;" class="fw-main-row pt40 pb40">
            <div class="fw-container">
               <h2 class="heading-decor pb35">Hakkımızda</h2>
             
			 <div class="fw-row">
                  <!-- Icon box -->
                  
                  <!-- END Icon box -->
                  <!-- Icon box -->
                  
				  
				   <div style="    margin-left: -65px;     margin-bottom: -40px;
" class="fw-col-sm-12 icon-box-item">
                      <div style="    text-align: center;" class="text">
                         <p style="text-align:center;" ><?=substr($db->VeriOkuTek("kurumsal", "aciklama","url", "hakkimizda"),0,267);?></p>
                     </div>
                  </div>
				  
                  <!-- END Icon box -->
               </div>
            

			</div>
         
		 </section>
         
		
 
         <!-- END Category items --> 
         <section  style="       padding-top: 65px;     margin-bottom: -65px;

		  " class="fw-main-row dark-bg pt20" style="background-image: url(images/imgs/team-carousel.jpg)">
            <div class="fw-container">
               <h2 style="    color: #3c3d41;" class="heading-decor pb20">Ürünlerimiz</h2>
               <!-- Team carousel -->
               <section style="    padding-bottom: 12px;"  class="team-carousel">
                 
<?php
        if($db->veriSaydir("products_items", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("products_items", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>



				 <!-- Team item -->
                  <div class="team-item">
                     <div class="image"><a href="urundetay-<?=$rows->url;?>.html"><img   src="upload/<?=$rows->resim;?>" alt="<?=$rows->urunbaslik;?>"></a></div>
                     <div class="name">
                        <h4><?=$rows->urunbaslik;?></h4>
                        <span><?=$rows->baslik;?></span>
                     </div>
                     <div class="timetable">
                        <div class="item">
                           <div><?=strip_tags(substr($rows->urunaciklama,0,100));?></div>
                         </div>
                         
                     </div>
                     <a style="    background-color: #e98a12;" href="urundetay-<?=$rows->url;?>.html" class="button-style2"><span>İNCELE</span></a>
                  </div>
                  <!-- END Team item -->
          
		  
		  
  <?php }} ?>
  
  
		  </section>
               <!-- END Team carousel -->
            </div>
         </section>
        
		    <section style="    padding-top: 0px;
" class="fw-main-row pt40">
			   					<h2 style="    padding-bottom: 0;" class="heading-decor pb20">Hizmetlerimiz</h2>

            <div class="fw-container">
                <div class="fw-row">
                  
								 <?php
        if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC",3);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>


				 <div class="fw-col-sm-4">
                     <!-- Category item -->
                     <div class="category-item" style="background-image: url(upload/<?=$rows->resim;?>)">
                        <div class="centered-container">
                           <a style="    border: 1px solid #00911a;
    background-color: #00911a;
    color: #fff !important;" href="hizmet-<?=$rows->url;?>.html" class="button-style2 big"><span><?=$rows->isim;?></span></a>
                        </div>
                     </div>
                     <!-- END Category item -->
                  </div>
               
<?php }} ?>

			   </div>
            </div>
         </section>
		 
		 
		 
		 <section class="fw-main-row pt40">
            <div class="fw-container">
               <h2 class="heading-decor pb20">Bizden Haberler</h2>
               <div class="fw-row">
                 

<?php
        if($db->veriSaydir("haberler", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("haberler", array(), array(), "row", "ASC",3);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
				 <!-- Blog item -->
                  <div class="blog-item fw-col-md-4">
                     <div class="fw-row">
                        <div class="image fw-col-sm-5 fw-col-md-12"><a href="haberler-<?=$rows->url;?>.html"><img  src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"></a></div>
                        <div class="fw-col-sm-7 fw-col-md-12">
                           <h4><a href="haberler-<?=$rows->url;?>.html"><?=$rows->isim;?></a></h4>
                           <div class="post-date"><?=$rows->tarih;?></div>
                           <p><?=substr($rows->aciklama,0,177);?></p>
                           <a href="haberler-<?=$rows->url;?>.html" class="button-style2 gray min">Devamını Oku</a>
                        </div>
                     </div>
                  </div>
                  <!-- END Blog item -->
           
  <?php }} ?>

		   </div>
            </div>
         </section>
        
		<?php include("alt.php")?>
		
		</div>
      <script type="text/javascript" src="js\jquery-2.1.3.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="js\owl.carousel\owl.carousel.min.js"></script>
      <script src="js\jquery.animateNumber.min.js"></script>
      <script type="text/javascript" src="js\script.js"></script>
   </body>
</html>