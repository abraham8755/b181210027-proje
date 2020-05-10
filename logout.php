<?php
session_start(Location:admin.php);
ob_start();
session_destroy();
echo "Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>