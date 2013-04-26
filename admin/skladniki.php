<?
if(isset($_GET['id']))
{
	$id = intval($_GET['id']);
    $wynik = dbquery("DELETE FROM skladniki WHERE id = '".$id."';");
    	if ($wynik) {
		$box = box('Składnik został skasowany!',info);
   		}
	$smarty->assign("box", $box);	
}
if(isset($_POST['send_skladnik'])) 
{

	$skladnik = mysql_real_escape_string(strip_tags(trim($_POST["skladnik"])));
	if( $skladnik != '')
	{
            $wynik = dbquery("INSERT INTO skladniki VALUES ('','".$skladnik."')");
            if ($wynik) {
                $box = box('Składnik został dodany!',info);
            }
	}
	else
		$box = box('Podaj nazwe składnika',info);
	$smarty->assign("box", $box);	
}

$res = dbquery("SELECT * FROM skladniki;");
while($row = mysql_fetch_array($res))
	$skladniki[] = $row;
	
$smarty->assign("skladniki", $skladniki);
?>