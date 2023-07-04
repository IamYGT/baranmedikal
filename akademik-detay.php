<?php include("admin/include/site_db.php"); ?>  
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Baran Medikal l Test Detayı </title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
		
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

		 <section class="full-screen fw-main-row fixed-height" style="background-image: url(images/imgs/4.jpg);height:190px;    margin-top: -14px;">
				<div class="fw-container centered-container tac">
					<div class="container tac">
						<h2 class="h1 big"><span style="  text-shadow: 1px 1px 3px #3c332a;     color: #ffffff;" class="">Test Detayı</span> </h2>
  					</div>
				</div>
			</section>
			<!-- END Full screen section -->
			<section class="fw-main-row ">
				<div class="fw-container">
					   
					   
   
<!-- Main container -->
  <div style="    margin-top: 35px;" class="container">
 
  <div class="row">
      <div class="col-md-12">
          <div style="    border: 0;" class="card card-block">
            <h2 style="text-align:center;         font-size: 32px;
    font-weight: 300;
 padding-top: 19px;" class="card-title"   > Sayın <span style="font-weight:700"> <?=$hesap->isim." ".$hesap->soyisim?> </span><br> Test sonuçlarınız.</h2>
 			
			
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
	                   <th style="    width: 53%;">Açıklama</th>
                  <th>Dosya</th>
                  <th>Dosya 2</th>
                  <th>Dosya 3</th>

       </tr>
    </thead>
    <tfoot>
      <tr>
        <th  style="    color: #353535;" colspan='12'>
Her Hakkı Saklıdır © Baran Medikal 2020        </th>
      </tr>
    </tfoot>
    <tbody>
      <tr>
        <td data-title='Açıklama'>
          <?=$db->VeriOkuTek("uye_items", "tahlilaciklama", "id", $_GET["url"]);?>
        </td>
        <td data-title='Sonuçlar'>
          <a href="upload/<?=$db->VeriOkuTek("uye_items", "tahlildosya", "id", $_GET["url"]);?>" download> <?=$db->VeriOkuTek("uye_items", "dosyayazi", "id", $_GET["url"]);?> </a>
        </td>
          <td data-title='Sonuçlar'>
          <a href="upload/<?=$db->VeriOkuTek("uye_items", "tahlildosya2", "id", $_GET["url"]);?>" download> <?=$db->VeriOkuTek("uye_items", "dosyayazi2", "id", $_GET["url"]);?> </a>
        </td>
          <td data-title='Sonuçlar'>
          <a href="upload/<?=$db->VeriOkuTek("uye_items", "tahlildosya3", "id", $_GET["url"]);?>" download> <?=$db->VeriOkuTek("uye_items", "dosyayazi3", "id", $_GET["url"]);?> </a>
        </td>
        
      </tr>
  
   </tbody>
  </table>
  
  
  
            
           </div>
      </div>
  </div>
<!-- End:Awards -->
 
</div> <!--End of Container-->

</div> 
			</section>
			<!-- Working Hours -->
		 
		 <!-- END Feedback form -->
			<!-- Map -->
			<div class="fw-main-row">
 			<!-- END Map -->
		 		 <?php include("alt.php")?>

		</div>
		<script type="text/javascript" src="js\jquery-2.1.3.min.js"></script>
		<!-- Map scripts -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyBqnMfRjGOw09DMXjrd5vbTgiRHRntQ7N0&amp;sensor=false"></script>
	 
		<script src="js\owl.carousel\owl.carousel.min.js"></script>
		<script src="js\jquery.animateNumber.min.js"></script>
		<script type="text/javascript" src="js\script.js"></script>
	
	<style>
	 

table {
  display: block;
}

tr, td, tbody, tfoot {
  display: block;
}

thead {
  display: none;
}

tr {
  padding-bottom: 10px;
}

td {
  padding: 10px 10px 0;
  text-align: center;
}
td:before {
  content: attr(data-title);
    color: #e4790b;
  text-transform: uppercase;
  font-size: 1.4rem;
  padding-right: 10px;
  display: block;
}

table {
  width: 100%;
}

th {
  text-align: left;
  font-weight: 700;
}

thead th {
  background-color: #e98a12;
  color: #fff;
  border: 1px solid #202932;
}

tfoot th {
  display: block;
  padding: 10px;
  text-align: center;
  color: #b8c4d2;
}
 
@media (min-width: 460px) {
  td {
    text-align: left;
  }
  td:before {
    display: inline-block;
    text-align: right;
    width: 140px;
  }

  .select {
    padding-left: 160px;
  }
}
@media (min-width: 720px) {
  table {
    display: table;
  }

  tr {
    display: table-row;
  }

  td, th {
    display: table-cell;
  }

  tbody {
    display: table-row-group;
  }

  thead {
    display: table-header-group;
  }

  tfoot {
    display: table-footer-group;
  }

  td {
    border: 1px solid #28333f;
  }
  td:before {
    display: none;
  }

  td, th {
    padding: 10px;
  }

  tr:nth-child(2n+2) td {
    background-color: #efefef;
  }

  tfoot th {
    display: table-cell;
  }

  .select {
    padding: 10px;
  }
}
</style>

	</body>
</html>