<?php
setcookie ("titoloStile",$_GET["stile"],time()+2592000,"/");
Header("Location: ".$_SERVER['HTTP_REFERER']);
?>