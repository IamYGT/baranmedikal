 <footer class="footer fw-main-row">
            <div class="fw-container">
               <div class="fw-row">
                  <div class="fw-col-xs-12 fw-col-sm-5 fw-col-md-4">
                     <div class="footer-logo"><a href="index"><img src="images\imgs\logo.png" alt="Baran Medikal"></a></div>
                   <div  style="font-weight: 400;">  <p style="     font-weight: 400;   line-height: 20px;" class="footer-text taj"><?=substr($db->VeriOkuTek("kurumsal", "aciklama","url", "hakkimizda"),0,267);?></p> </div>
                     <div  style="    font-weight: 400;" class="footer-copy">Her Hakkı Saklıdır © Baran Medikal 2018</div>
                  </div>
                  <div class="fw-col-xs-12 fw-col-sm-4 fw-col-md-3">
                     <h6>İletişim:</h6>
                     <!-- Contact item -->
                     <span class="contact-item"><i class="icon-font icon-placeholder-1"></i> <span  style="font-weight: 400;" ><?=$db->ayarlar("value" , "adres");?></span></span>
                     <!-- END Contact item -->
                     <!-- Contact item -->
                     <span class="contact-item"><i class="icon-font icon-clock-2"></i> <span  style="font-weight: 400;" ><?=$db->ayarlar("value" , "mail");?></span></span>
                     <!-- END Contact item -->
                     <!-- Contact item -->
                     <span class="contact-item"><i class="icon-font icon-telephone-1"></i> <span  style="font-weight: 400;"><?=$db->ayarlar("value" , "tel");?></span></span>
                     <span class="contact-item"><i class="icon-font icon-printer"></i> <span  style="font-weight: 400;"><?=$db->ayarlar("value" , "fax");?></span></span>
                     <!-- END Contact item -->
                  </div>
                  <div class="fw-col-xs-12 fw-col-sm-3 fw-col-md-2">
                     <h6>Menü:</h6>
                     <ul style="font-weight: 400;" class="footer-menu">
                        <li><a href="index">Anasayfa</a></li>
                        <li><a href="our-team.html">Hakkımızda</a></li>
                        <li><a href="hizmetler">Hizmetlerimiz</a></li>
                        <li><a href="urunler">Ürünler</a></li>
                        <li><a href="sss">S.S.S</a></li>
                        <li><a href="iletisim">İletişim</a></li>
                     </ul>
                  </div>
                  <div class="fw-col-xs-12 fw-col-sm-9 fw-col-md-3"> 
                     <h6>Sosyal Medya:</h6>
                     <div class="social-link">
                        <a href="<?=$db->ayarlar("value" , "facebook");?>"><i class="social-icons icon-facebook-logo"></i></a>
                        <a href="<?=$db->ayarlar("value" , "twitter");?>"><i class="social-icons icon-twitter-social-logotype"></i></a>
                        <a href="<?=$db->ayarlar("value" , "instagram");?>"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                     </div>
                     <div  class="social-link">
    <a target="_blank" href="https://www.memsidea.com" rel="nofollow" > <img  style="margin-top:28%;" src="images/memsidea.png">  </a>                       </div>
                  </div>
               </div>
            </div>
         </footer>
		 
		 <!-- Yandex.Metrika counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(57179905, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57179905" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<noscript><div><img src="https://mc.yandex.ru/watch/57179905" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
     