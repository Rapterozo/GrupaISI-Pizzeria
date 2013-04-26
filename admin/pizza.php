<?
if(isset($_GET['id']))
{
	$id = intval($_GET['id']);
    $wynik = dbquery("DELETE FROM pizza WHERE id = '".$id."';");
    	if ($wynik) {
		$box = box('Pizza został skasowana!',info);
   		}
	$smarty->assign("box", $box);	
}
if(isset($_POST['send_pizza'])) 
{

	$nazwa = mysql_real_escape_string(strip_tags(trim($_POST["nazwa"])));
	$s = mysql_real_escape_string(strip_tags(trim($_POST["s"])));
	$m = mysql_real_escape_string(strip_tags(trim($_POST["m"])));
	$l = mysql_real_escape_string(strip_tags(trim($_POST["l"])));
	$skladniki2 = $_POST["skladniki"];

    for ($i=0; $i<count($skladniki2); $i++) {
        $zap_skladniki .= $skladniki2[$i].",";
    }
	$zap_skladniki = rtrim($zap_skladniki, ",");
	if( $nazwa != '')
	{
		if($s != '' && $m != '' && $l != '')
		{
			if(count($skladniki2) != 0)
			{
				$wynik = dbquery("INSERT INTO pizza VALUES ('','".$nazwa."','".$zap_skladniki."','".$s."','".$m."','".$l."')");
				if ($wynik) {
					$box = box('Pizza została dodana!',info);
				}
			}else
				$box = box('Podaj chociaż 1 skłądnik pizzy',info);
		}else
		$box = box('Podaj ceny pizzy',info);
	}
	else
		$box = box('Podaj nazwe pizzy',info);
	$smarty->assign("box", $box);
	
}
 
$res = dbquery("SELECT * FROM pizza;");
while($row = mysql_fetch_array($res))
	$pizza[] = $row;

$res = dbquery("SELECT * FROM skladniki;");
while($row = mysql_fetch_array($res))
	$skladniki[] = $row;


$smarty->assign("pizza", $pizza);	
$smarty->assign("skladniki", $skladniki);
?>