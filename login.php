<?php
include("ayar.php");
session_start();
ob_start();
if(($_POST["kadi"]==$kadi) and ($_POST["pass"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["kadi"] = $kadi;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
echo "Kullancı Adı veya Şifre Yanlış.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=index.php");
}
ob_end_flush();
?>