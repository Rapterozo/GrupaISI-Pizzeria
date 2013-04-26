<?php
ob_start(); //rozpoczecie buforowania 

include("./include/config.php");
require_once('./include/user.class.php');

//unset($_SESSION['koszyk']);
$profile = user::getUser ($_SESSION['username']);
$isLogged = user::isLogged ();

$smarty->assign("profile", $profile);
$smarty->assign("isLogged", $isLogged);

?>