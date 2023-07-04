<?php 




if(isset($_SESSION["hesapid"])){
	$hesap=$db->veriOku("uye_category","id",$_SESSION["hesapid"]);
}


?>