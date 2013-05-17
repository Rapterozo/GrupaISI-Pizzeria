<?
include("header.php");
$nazwa = $_GET['page'];

$res = dbquery("SELECT * FROM strony WHERE nazwa = '".$nazwa ."';");
while($row = mysql_fetch_array($res))
	$strony[] = $row;

if(empty($strony))
	header("Location: /404.html");
	
$smarty->assign("title", ucfirst($nazwa) . " - LaCosta"); 
$smarty->assign("strony", $strony[0]);	

$smarty->display('header.tpl');
$smarty->display('page.tpl');
include("footer.php");
?>    