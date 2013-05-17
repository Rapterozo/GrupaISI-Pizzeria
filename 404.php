<?php 
include('./header.php');

    $smarty->assign("title", "Brak strony: Pizzeria - LaCosta"); 
$smarty->display("header.tpl");
$smarty->display("404.tpl");



include('./footer.php');
?>