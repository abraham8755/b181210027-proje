<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
	
echo "Admin sayfasina hosgeldiniz..<br>";
header("Location:anasayfa.html");
echo "<a href=logout.php>Çıkış Yap</a>";
}
?>