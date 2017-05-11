<?php
   header("Content-type:image/jpeg");
   $img = imagecreate(70,30);
   imagecolorallocate($img,200,150,0);
   $w = imagecolorallocate($img,0,0,0);
   $code = rand(1000,9999);
   session_start();
   $_SESSION["code"] = $code;
   imagestring($img,10,17,8,$code,$w);
   imagejpeg($img);
   imagedestroy($img);
?>