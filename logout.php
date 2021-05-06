<?php
//mulai session
session_start();

//hapus session sekarang
session_destroy();

//set cookie nama
setcookie("nama", "", time()+3*30*24*3600,"/");
setcookie("email", "", time()+3*30*24*3600,"/");

//redirect ke halaman login
header("Location: index.php");

?>