<?php
session_start();


if(isset($_COOKIE[session_name("id")])){

	setcookie(session_name("id"),'',time()-86400,'/');
}

session_destroy();
header('location:index.php');

?>