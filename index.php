<?
include("header.php");

$res = dbquery("SELECT * FROM pizza;");
while($row = mysql_fetch_array($res))
	$pizza[] = $row;
	
$smarty->assign("title", "Pizzeria - LaCosta"); 
$smarty->assign("pizza", $pizza);	

$smarty->display('header.tpl');
$smarty->display('index.tpl');
include("footer.php");
?>    