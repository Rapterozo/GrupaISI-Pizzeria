<?
include("./header.php");
	$res = dbquery("SELECT count(id) AS ilosc FROM zamowienia WHERE status = 0;");
		$row = mysql_fetch_array($res);
		echo $row['ilosc'];
?>