<?php include("../admin/include/site_db.php");
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
		
		
		<link href="../https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="../../css\medical-icons.css">
		<link rel="stylesheet" href="../../css\social-icons.css">
		<link rel="stylesheet" href="../../css\icon-font.css">
		<link rel="stylesheet" href="../../js\owl.carousel\owl.carousel.css">
		<link rel="stylesheet" href="../../css\frontend-grid.css">
		<link rel="stylesheet" href="../../css\style.css">
		<link rel="stylesheet" href="../../css\mobile.css"> <?php include("../favo.php")?>
 	</head>
	<body>
		<div id="page">
			<!-- Preloader -->
		 
      
         <!-- Header -->
         <header class="header clearfix">
            <!-- Top header -->
            <div class="fw-main-row top-header">
               <div class="fw-container">
                  <div class="fl">
                     <!-- Social link -->
                    <!-- <div class="social-link">
                        <a href="../<	?=$db->ayarlar("value" , "facebook");?>"><i class="social-icons icon-facebook-logo"></i></a>
                        <a href="../<	?=$db->ayarlar("value" , "twitter");?>"><i class="social-icons icon-twitter-social-logotype"></i></a>
                        <a href="../<	?=$db->ayarlar("value" , "instagram");?>"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                     </div>
                     -->
                  </div>
                  <div class="fr">
                     <!-- Contact item -->
                     <span class="contact-item">
					 
					  <a style="    padding: 10px 14px !important;       margin: -10px 1px !important;					  background-color: #e98a12;
    color: #fff !important;    font-size: 11px !important;  " href="../akademik-giris" class="button-style2"><span><i style="color:#fff;     font-size: 19px;" class="fas fa-graduation-cap"></i> AKADEMİK GİRİŞ</span></a>
					 
					 
					  <a style="    padding: 10px 14px !important;      margin: -10px 0 !important;       background-color: #2ba03a;
    color: #fff !important;
    font-size: 13px;
    border: 1px solid #2ba03a;" href="../ekatalog/index.php" class="button-style2"><span><i style="color:#fff;    font-size: 19px;" class="fas fa-book-reader"></i> E-KATALOG</span></a>
					 

					 <a style="           padding: 11px 17px 10px 22px !important;    margin: -10px 0 !important;       background-color: #7b7b7b;
    color: #fff !important;
    font-size: 13px;
    border: 1px solid #7b7b7b;" href="../javascript:void(0);" class="button-style2"><span>EN</span></a>
					 
					 </span>         <!-- Contact item -->
                    
                     <!-- END Contact item -->
                     <!-- Contact item -->
                     <!-- END Contact item -->
                  </div>
               </div>
            </div>
            <!-- END Top header -->
            <!-- Header-wrap -->
            <div class="fw-main-row header-wrap">
               <div class="fw-container">
                  <div class="fw-row">
                     <div class="fw-col-sm-3 fw-col-md-2 logo-area"><a href="../index"><img src="../images\imgs\logo.png" alt="Baran Medikal"></a></div>
                     <nav class="fw-col-sm-8 fw-col-md-8 navigation">
                        <ul>
                           <!-- Current menu item -->
                           <li <?php if($active=="index")echo'class="current-menu-item"';?>>
                              <a href="../index">ANASAYFA</a> </li>
                           <!-- Current menu item -->
    <li class="menu-item-has-children">
                              <a href="../#">KURUMSAL</a>
                              <div class="sub-nav">
                                 <ul class="sub-menu">
								 
								 <?php
        if($db->veriSaydir("kurumsal", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("kurumsal", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

								 <li><a href="../kurumsal-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
<?php }} ?>

                                 </ul>
                              </div>
                           </li>
  <li class="menu-item-has-children"  >
                              <a href="../hizmetlerimiz">HİZMETLERİMİZ</a>
                              <div class="sub-nav">
                                 <ul class="sub-menu">
								 
								 <?php
        if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

								 <li <?php if($active=="hizmet")echo'class="current-menu-item"';?> ><a href="../hizmet-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
<?php }} ?>

                                 </ul>
                              </div>
                           </li>
						   <li <?php if($active=="urunler")echo'class="current-menu-item"';?> ><a href="../urunler">Ürünler</a></li>
                        <li <?php if($active=="sss")echo'class="current-menu-item"';?> ><a href="../sss">S.S.S</a></li>
                       
                       
                             <li <?php if($active=="iletisim")echo'class="current-menu-item"';?> ><a href="../iletisim">İLETİŞİM</a></li>
                         </ul>
                     </nav>
                     <div class="fw-col-sm-2 search-module">
                        <form   action="arama.php" role="arama">
                           <input  name="url" id="srch-term"  type="text" class="input"   placeholder="Arama">
                           <button type="submit" class="submit"><i class="icon-font icon-search"></i></button>
                        </form>
                     </div>
                     <!-- Mobile side button -->
                     <div class="mobile-side-button"><i class="icon-font icon-menu"></i></div>
                     <!-- END Mobile side button -->
                     <!-- Mobiile side -->
                     <div class="mobile-side">
                        <!-- Social link -->
                        <div class="social-link">
						
                        <a href="../<?=$db->ayarlar("value" , "facebook");?>"><i class="social-icons icon-facebook-logo"></i></a>
                        <a href="../<?=$db->ayarlar("value" , "twitter");?>"><i class="social-icons icon-twitter-social-logotype"></i></a>
                        <a href="../<?=$db->ayarlar("value" , "instagram");?>"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                       

				
					 

					 </div>
                        <!-- END Social link -->
                        <div class="search-module">
                        <form   action="arama.php" role="arama">
                           <input  name="url" id="srch-term"  type="text" class="input"   placeholder="Arama">
                              <button type="submit" class="submit"><i class="icon-font icon-search"></i></button>
                           </form>
                        </div>
                        <!-- Mobile navigation -->
                        <nav class="mobile-navigation">
                           <ul>
						   

                            <!-- Current menu item -->
                           <li  >
                              <a href="../index">Anasayfa</a> </li>
                           <!-- Current menu item -->
    <li class="menu-item-has-children">
                              <a href="../#">Kurumsal</a>
                              <div class="sub-nav">
                                 <ul class="sub-menu">
								 
								 <?php
        if($db->veriSaydir("kurumsal", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("kurumsal", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

								 <li><a href="../kurumsal-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
<?php }} ?>

                                 </ul>
                              </div>
                           </li>
  <li class="menu-item-has-children">
                              <a href="../hizmetlerimiz">Hizmetlerimiz</a>
                              <div class="sub-nav">
                                 <ul class="sub-menu">
								 
								 <?php
        if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

								 <li><a href="../hizmet-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
<?php }} ?>

                                 </ul>
                              </div>
                           </li>
						   <li><a href="../urunler">Ürünler</a></li>
                        <li><a href="../sss">S.s.s</a></li>
                       
                       
                             <li><a href="../iletisim">İletişim</a></li>
                        
							  <li> <a style="    					  background-color: #e98a12;
    color: #fff !important;    font-size: 11px !important;  " href="../akademik-giris" class="button-style2"><span><i style="color:#fff;     font-size: 19px;" class="fas fa-graduation-cap"></i> AKADEMİK GİRİŞ</span></a></li>
					 
					 
					 <li>  <a style="      background-color: #2ba03a;
    color: #fff !important;
    font-size: 13px;
    border: 1px solid #2ba03a;" href="index.php" class="button-style2"><span><i style="color:#fff;    font-size: 19px;" class="fas fa-book-reader"></i> E-KATALOG</span></a></li>
					 

					<li>  <a style="                background-color: #7b7b7b;
    color: #fff !important;
    font-size: 13px;
    border: 1px solid #7b7b7b;" href="../javascript:void(0);" class="button-style2"><span>EN</span></a> </li>
	
                           </ul>
                        </nav>
                        <!-- END Mobile navigation -->
                     </div>
                     <!-- END Mobiile side -->
                  </div>
               </div>
            </div>
            <!-- END Header-wrap -->
         </header>
       
		 
			<!-- END Full screen section -->
			<section style="    padding: 0;" class="fw-main-row    ">
 			 
 
 
<iframe src="https://www.baranmedikal.com.tr/ekatalog/sayfa.php" style="border: 0; width: 100%; height: 100%">Your browser doesn't support iFrames.</iframe>

 

 			</section>
			<!-- Working Hours -->
		

 
		</div>
 		<!-- Map scripts --> 
 	
	
	</body>
</html>