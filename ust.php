      <!-- Preloader -->
         <div id="page-preloader">
            <div class="spinner centered-container"></div>
         </div>
         <!-- END Preloader -->
         <!-- Header -->
         <header class="header clearfix">
            <!-- Top header -->
            <div class="fw-main-row top-header">
               <div class="fw-container">
                  <div class="fl">
                     <!-- Social link -->
                    <!-- <div class="social-link">
                        <a href="<	?=$db->ayarlar("value" , "facebook");?>"><i class="social-icons icon-facebook-logo"></i></a>
                        <a href="<	?=$db->ayarlar("value" , "twitter");?>"><i class="social-icons icon-twitter-social-logotype"></i></a>
                        <a href="<	?=$db->ayarlar("value" , "instagram");?>"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                     </div>
                     -->
                  </div>
                  <div class="fr">
                     <!-- Contact item -->
                     <span class="contact-item">
					 
					  <a style="    padding: 10px 14px !important;       margin: -10px 1px !important;					  background-color: #e98a12;
    color: #fff !important;    font-size: 11px !important;  " href="akademik-giris" class="button-style2"><span><i style="color:#fff;     font-size: 19px;" class="fas fa-graduation-cap"></i> AKADEMİK GİRİŞ</span></a>
					 
					 
					  <a style="    padding: 10px 14px !important;      margin: -10px 0 !important;       background-color: #2ba03a;
    color: #fff !important;
    font-size: 13px;
    border: 1px solid #2ba03a;" href="ekatalog/index.php" class="button-style2"><span><i style="color:#fff;    font-size: 19px;" class="fas fa-book-reader"></i> E-KATALOG</span></a>
					 

					 <a style="           padding: 11px 17px 10px 22px !important;    margin: -10px 0 !important;       background-color: #7b7b7b;
    color: #fff !important;
    font-size: 13px;
    border: 1px solid #7b7b7b;" href="javascript:void(0);" class="button-style2"><span>EN</span></a>
					 
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
                     <div class="fw-col-sm-3 fw-col-md-2 logo-area"><a href="index"><img src="images\imgs\logo.png" alt="Baran Medikal"></a></div>
                     <nav class="fw-col-sm-8 fw-col-md-8 navigation">
                        <ul>
                           <!-- Current menu item -->
                           <li <?php if($active=="index")echo'class="current-menu-item"';?>>
                              <a href="index">ANASAYFA</a> </li>
                           <!-- Current menu item -->
    <li class="menu-item-has-children">
                              <a href="#">KURUMSAL</a>
                              <div class="sub-nav">
                                 <ul class="sub-menu">
								 
								 <?php
        if($db->veriSaydir("kurumsal", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("kurumsal", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

								 <li><a href="kurumsal-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
<?php }} ?>

                                 </ul>
                              </div>
                           </li>
  <li class="menu-item-has-children"  >
                              <a href="hizmetlerimiz">HİZMETLERİMİZ</a>
                              <div class="sub-nav">
                                 <ul class="sub-menu">
								 
								 <?php
        if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

								 <li <?php if($active=="hizmet")echo'class="current-menu-item"';?> ><a href="hizmet-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
<?php }} ?>

                                 </ul>
                              </div>
                           </li>
						   <li <?php if($active=="urunler")echo'class="current-menu-item"';?> ><a href="urunler">Ürünler</a></li>
                        <li <?php if($active=="sss")echo'class="current-menu-item"';?> ><a href="sss">S.S.S</a></li>
                       
                       
                             <li <?php if($active=="iletisim")echo'class="current-menu-item"';?> ><a href="iletisim">İLETİŞİM</a></li>
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
						
                        <a href="<?=$db->ayarlar("value" , "facebook");?>"><i class="social-icons icon-facebook-logo"></i></a>
                        <a href="<?=$db->ayarlar("value" , "twitter");?>"><i class="social-icons icon-twitter-social-logotype"></i></a>
                        <a href="<?=$db->ayarlar("value" , "instagram");?>"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                       

				
					 

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
                              <a href="index">Anasayfa</a> </li>
                           <!-- Current menu item -->
    <li class="menu-item-has-children">
                              <a href="#">Kurumsal</a>
                              <div class="sub-nav">
                                 <ul class="sub-menu">
								 
								 <?php
        if($db->veriSaydir("kurumsal", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("kurumsal", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

								 <li><a href="kurumsal-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
<?php }} ?>

                                 </ul>
                              </div>
                           </li>
  <li class="menu-item-has-children">
                              <a href="hizmetlerimiz">Hizmetlerimiz</a>
                              <div class="sub-nav">
                                 <ul class="sub-menu">
								 
								 <?php
        if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

								 <li><a href="hizmet-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
<?php }} ?>

                                 </ul>
                              </div>
                           </li>
						   <li><a href="urunler">Ürünler</a></li>
                        <li><a href="sss">S.s.s</a></li>
                       
                       
                             <li><a href="iletisim">İletişim</a></li>
                        
							  <li> <a style="    					  background-color: #e98a12;
    color: #fff !important;    font-size: 11px !important;  " href="akademik-giris" class="button-style2"><span><i style="color:#fff;     font-size: 19px;" class="fas fa-graduation-cap"></i> AKADEMİK GİRİŞ</span></a></li>
					 
					 
					 <li>  <a style="      background-color: #2ba03a;
    color: #fff !important;
    font-size: 13px;
    border: 1px solid #2ba03a;" href="ekatalog/index.php" class="button-style2"><span><i style="color:#fff;    font-size: 19px;" class="fas fa-book-reader"></i> E-KATALOG</span></a></li>
					 

					<li>  <a style="                background-color: #7b7b7b;
    color: #fff !important;
    font-size: 13px;
    border: 1px solid #7b7b7b;" href="javascript:void(0);" class="button-style2"><span>EN</span></a> </li>
	
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
       