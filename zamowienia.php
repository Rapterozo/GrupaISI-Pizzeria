<?php

include('./header.php');


$smarty->assign("title", "Zamówienia"); 
if(isset($_POST['zaplac']))
{


		$id = $_POST["id"];	
		
		$wynik = dbquery("UPDATE zamowienia SET platnosc = '1' WHERE id = '".$id."';");
		if ($wynik) {
			$box = box('Płatność została potwierdzona!',sukces);
		}


}
if(isset($_POST['send']))
{

        $telefon = mysql_real_escape_string(strip_tags(trim($_POST["telefon"])));	
		$dane = mysql_real_escape_string(strip_tags(trim($_POST["dane"])));	
		$kwota = $_POST['kwota'];
		if(count($_SESSION['koszyk']) != 0)
			if(isset($telefon) && is_numeric($telefon))
			{
				if(isset($dane))
				{
					for($x = 0; $x < count($_SESSION['koszyk']);$x++)
					{
						$pizza .= $_SESSION['koszyk'][$x]['nazwa'].",";
						$rozmiar .= $_SESSION['koszyk'][$x]['rozmiar'].",";
					}

						
					$wynik = dbquery("INSERT INTO zamowienia VALUES ('','".time()."','".$profile['user_id']."','".rtrim($pizza,',')."','".$kwota."','".rtrim($rozmiar,',')."','0','".$telefon."','".$dane."','".$_POST['platnosc']."')");
					if ($wynik) {
						$box = box('Zamówienie zostało dodane!',sukces);
						email("c.krasniewski@gmail.com","jakaś tam treść","Nowe zamówienie");
						unset($_SESSION['koszyk']);
						unset($_SESSION['koszyk_all']);
						$_SESSION['zamowienie'][] = md5(mysql_insert_id());
					}
				}else
					$box = box("Podaj dane adresowe",info);
			}
			else
				$box = box("Podaj poprawny numer telefonu",info);
		else
				$box = box("Koszyk jest pusty",info);

}

for($x = 0; $x < count($_SESSION['zamowienie']);$x++)	
{
	if($x == 0)
		$zap.= "( MD5(id) = '".$_SESSION['zamowienie'][$x]."'";
	else
		$zap .= "AND MD5(id) = '".$_SESSION['zamowienie'][$x]."'";
		
		
}
if(count($_SESSION['zamowienie']) >0)
$zap .= ") OR ";
$res = dbquery("SELECT * FROM zamowienia WHERE ".$zap." user_id = '".$profile['user_id']."' AND user_id <> 0 ORDER BY date DESC;");
while($row = mysql_fetch_array($res))
	$zamowienia[] = $row;


$smarty->assign("zamowienia", $zamowienia);
$smarty->assign("box", $box);
$smarty->display("header.tpl");
$smarty->display("zamowienia.tpl");


include('./footer.php');
?>