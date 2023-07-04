<?php include("admin/include/site_db.php"); 
$active="hizmetlerimiz";
?> <!doctype html>
<html lang="tr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Baran Medikal l Hizmetlerimiz</title>
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
     

<?php include("ust.php")?>	 <!-- Full screen section -->
         <section class="full-screen fw-main-row fixed-height" style="background-image: url(images/imgs/5.jpg);     height: 190px; ">
            <div class="fw-container centered-container tac">
               <div class="container tac fw-col-md-5">
                  <h2 class="h1"><span style="  text-shadow: 1px 1px 3px #3c332a;     color: #ffffff;" class="blue-color">Hizmetlerimiz</span> </h2>
                 </div>
            </div>
         </section>
         <!-- END Full screen section -->
         <!-- Services ccategory items -->
         <section class="fw-main-row pt40">
            <div class="fw-container">
                <div class="fw-row">
                  
								 <?php
        if($db->veriSaydir("hizmetlerimiz", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("hizmetlerimiz", array(), array(), "row", "ASC");
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
         <!-- END Services ccategory items -->
         
		 <?php include("alt.php")?>
		 
		 </div>
      <script type="text/javascript" src="js\jquery-2.1.3.min.js"></script>
      <script src="js\owl.carousel\owl.carousel.min.js"></script>
      <script src="js\jquery.animateNumber.min.js"></script>
      <script type="text/javascript" src="js\script.js"></script>
	  
   </body>
</html>