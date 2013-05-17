<?
if(isset($_POST['send_pizza'])) 
{

	$id = intval($_POST['id']);
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
				
				$wynik = dbquery("UPDATE `pizza` SET `nazwa`='".$nazwa."',`skladniki`='".$zap_skladniki."',`s`='".$s."',`m`='".$m."',`l`='".$l."' WHERE id = '".$id."'");
				if ($wynik) {
					header('location: ../pizza');	
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

	$id = intval($_GET['id']);
	$res = dbquery("SELECT * FROM pizza WHERE id = '".$id ."';");
	$row = mysql_fetch_array($res);
	$pizza[] = $row;
	
	$smarty->assign("pizza", $pizza[0]);	
	
	
	
	$res = dbquery("SELECT * FROM skladniki;");
	while($row = mysql_fetch_array($res))
		$skladniki[] = $row;
	
		
	$smarty->assign("skladniki", $skladniki);
?>