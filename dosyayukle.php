<?php 
include "admin/include/class.upload.php";
if($_POST){
$foo = new Upload($_FILES["yuklencekdosya"], 'tr_TR'); 
if ($foo->uploaded) {
   $foo->Process($_SERVER['DOCUMENT_ROOT']."/upload/");
   if ($foo->processed) {
	   
	     
   $foo->file_new_name_body = 'foo';
   $foo->Process($_SERVER['DOCUMENT_ROOT']."/upload/");
   if ($foo->processed) {
     echo 'image renamed '.$foo->file_dst_name_body.' copied';
   } else {
     echo 'error : ' . $foo->error;
   }   
     
	
   } else {
	   echo $foo->error;
   }
}

}
?>

 <form style="    margin-left: 33%;" action="<?php print $PHP_SELF?>" enctype="multipart/form-data" method="post">
Dosya İsmi:<br /> <input type="text" name="name" value="" /><br />
Dosya Yükle:<br /> <input type="file" name="yuklencekdosya" value="" /><br />
	<input type="submit" name="submit" value="Gönder" />
</form>
