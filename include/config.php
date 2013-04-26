<?php 
@session_start();

require_once("./libs/Smarty.class.php");
$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 10;
######################
######################
## POLACZENIE MYSQL ##
######################
######################

$cfg['db']['host'] = 'localhost';
$cfg['db']['user'] = 'admin_forum';
$cfg['db']['pass'] = 'lT8KXYI1';
$cfg['db']['dbname'] = 'admin_lacosta';

$link = mysql_connect($cfg['db']['host'], $cfg['db']['user'], $cfg['db']['pass']);

if(!$link)
{
	echo('<p class="error_box">Wystapil blad!</p>');
	exit;
}

$db_selected = mysql_select_db($cfg['db']['dbname'], $link);
dbquery("SET NAMES UTF8");

if (!$db_selected) 
{
    die ('Nie mozna polaczyc sie z baza danych: ' . mysql_error());
}
######################
######################
##  FUNKCJA MYSQL   ##
######################
######################
$GLOBALS['zapytania'] = 0;
$GLOBALS['zapytanie'] = '';
function dbquery($query) {
	$GLOBALS['zapytania']++;
	$GLOBALS['zapytanie'] .= $query.'<br>';
	return mysql_query($query);	
}



$keywords = "keywords";
$description = "opis";

######################
######################
##   INCLUDE PLIKI  ##
######################

require_once("./include/functions.php");

?>