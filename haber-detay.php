<<?php include("admin/include/site_db.php"); ?> <!doctype html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Baran Medikal l <?=$db->VeriOkuTek("haberler", "isim", "url", $_GET["url"]);?> </title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		
		
		
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="css\medical-icons.css">
		<link rel="stylesheet" href="css\social-icons.css">
		<link rel="stylesheet" href="css\icon-font.css">
		<link rel="stylesheet" href="js\owl.carousel\owl.carousel.css">
		<link rel="stylesheet" href="css\frontend-grid.css">
		<link rel="stylesheet" href="css\style.css">
		
		
<style> 

 .anambabam{    font-family: 'Raleway', sans-serif;
position:relative;overflow:hidden;max-height:350px;display:flex;align-items:center;justify-content:center}
.text{
    /*-webkit-column-count: 2; 
    -moz-column-count: 2; 
    column-count: 2; */  
    margin-top:15px;        
}

.statistics > p{margin-bottom:2px;}
.statistics > p > span.label{background-color:white;color:gray;}
.side{background:#fafafa;padding-top:15px}
.side > img { margin-bottom:15px;}
.semi-title{    font-family: 'Raleway', sans-serif;
font-weight: bold;margin-top:30px;}
.title{    
    position: absolute;
    bottom: 45px;
    padding: 7px;
    right: 25px;
    padding-left: 25px;
	    font-family: 'Raleway', sans-serif;

    padding-right: 30px;
    color: white;
    background: rgba(0,0,0,0.5);
}
.sub-title{    
    position: absolute;
	    font-family: 'Raleway', sans-serif;

    bottom: 94px;
    padding: 7px;
    right: 25px;
    padding-left: 12px;
    padding-right: 12px;
    color: orange;
    background: rgba(0,0,0,0.7);
}        
.name-author{
    position: absolute;
    bottom: 35px;
    left: 100px;
	    font-family: 'Raleway', sans-serif;

    font-size: 11px;
    color: white;
    background: black;
    padding: 2px;
    padding-right: 10px;
    padding-left: 22px;
    margin-left: -21px;
    z-index: 1;
    font-weight: 500;            
}
.photo-author{
    max-height: 70px;
    padding: 2px;
    position: absolute;
    left: 25px;
	    font-family: 'Raleway', sans-serif;

    bottom: 25px;
    background: white;
    z-index: 3;            
}
.triangulo{
    position:absolute;
    bottom:0px;
    left:0px;
    width: 0;
	    font-family: 'Raleway', sans-serif;

    height: 0;
    border-style: solid;
    border-width: 60px 0 0 1200px;
    border-color: transparent transparent transparent #ffffff;
}
.row-eq-height {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
}   

@media (max-width: 426px) {
    .header{
            margin-left: -15px;
            margin-top: -15px;
            margin-right: -15px;
    }
    .title{
        font-size:15px;
        bottom:-12px;
		    font-family: 'Raleway', sans-serif;

        right:0px;
        padding-left:10px;
        padding-right:10px;
    }
    .photo-author{
        max-height:45px;
        left:5px;
		    font-family: 'Raleway', sans-serif;

        bottom:40px;
    }
    .name-author{ 
        font-size:9px;
		    font-family: 'Raleway', sans-serif;

        margin-left:-63px;
        bottom:44px;
    }
    .sub-title{
        right:0px;
		    font-family: 'Raleway', sans-serif;

        bottom:18px;
        padding:5px;
        font-size:10px;
    }
}

</style>

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


 	<section  style="    padding-top: 0px;" class="fw-main-row">
				<div class="fw-container"> 
				 
				 
				 
				 
				  
<div class="container">
	<div class="row"> 
		 <!-- HEADER -->
        <div class="anambabam">
            <img style="width:100%" src="upload/<?=$db->VeriOkuTek("haberler", "resim", "url", $_GET["url"]);?>" />
            <div class="triangulo"></div>
            <div class="profile"> 
                <img style="    box-shadow: 0px 1px 5px black;"  class="photo-author img-circle" src="images/imgs/user.jpg" />
                <span style="    font-family: 'Raleway', sans-serif;"  class="name-author">Baran Medikal</span>
            </div>
            <h5 style="    font-family: 'Raleway', sans-serif;"  class="sub-title">Haberler</h5>
            <h2 style="    font-family: 'Raleway', sans-serif;"  class="title"><?=$db->VeriOkuTek("haberler", "isim", "url", $_GET["url"]);?></h2>
        </div>

        <!-- INFO -->
     
        <div class="row row-eq-height" style="padding-right:15px">
            <div class="col-xs-9 text">
<?=$db->VeriOkuTek("haberler", "aciklama", "url", $_GET["url"]);?>            </div>
            <!-- Sidebar // advertising -->
            <div class="col-xs-3 side hidden-xs">
 
                <small> 
            
                <p style="     font-size: 16px;
font-family: 'Raleway', sans-serif;text-align:center; margin-bottom:0px;margin-top:25px;"><b>Diğer Haberlerimiz</b></p>
                <ul style="    margin-top: 15px;
" class="list-group">
				
				<?php
        if($db->veriSaydir("haberler", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("haberler", array(), array(), "row", "ASC",5);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?> 
                    <a href="haberler-<?=$rows->url;?>.html"> <li style="    font-family: 'Raleway', sans-serif;"  class="list-group-item"> <?=$rows->isim;?></li> </a>
  <?php }} ?>

					</ul>
                </small>
                
            </div>
        </div>
	</div>
</div>
				 
				</div>
			</section>
			<!-- END Blog items -->
			<!-- END Gallery items -->
		 		 <?php include("alt.php")?>

		</div>
		
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="js\jquery-2.1.3.min.js"></script>
		<script src="js\owl.carousel\owl.carousel.min.js"></script>
		<script src="js\jquery.animateNumber.min.js"></script>
		<script type="text/javascript" src="js\script.js"></script>
	</body>
</html>