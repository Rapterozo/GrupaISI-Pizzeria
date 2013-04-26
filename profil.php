<?php

include('./header.php');

$smarty->assign("title", "Profil"); 

if(isset($_POST['send']))
{
		
        $telefon = mysql_real_escape_string(strip_tags(trim($_POST["telefon"])));
		$dane = mysql_real_escape_string(strip_tags(trim($_POST["dane"])));

		if(strlen($telefon) == 9 && is_numeric($telefon))
			if(isset($dane))
			{

				$wynik = dbquery("UPDATE users SET telefon = '".$telefon."', dane = '".$dane."' WHERE user_id = '".$profile['user_id']."';");
				if ($wynik) {
					header("Location: /profil.html");
				}
			}
			else
				$box = 'Podaj swoje dane';
		else
			$box = 'Podaj poprawny numer telefonu!';
		

		

}	

$res = dbquery("SELECT count(id) AS ilosc FROM zamowienia WHERE status = 1 AND user_id = '".$profile['user_id']."';");
$row = mysql_fetch_array($res);
$zamowienia_count = $row['ilosc'];

$smarty->assign("zamowienia_count", $zamowienia_count);
$smarty->assign("box", $box);
$smarty->display("header.tpl");
$smarty->display("profil.tpl");



include('./footer.php');
?>