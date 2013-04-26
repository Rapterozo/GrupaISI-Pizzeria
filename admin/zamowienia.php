<?php


if(isset($_POST['send']))
{

        $status = $_POST["status"];	
		$id = $_POST["id"];	
		$email = $_POST['email'];
		
		$wynik = dbquery("UPDATE zamowienia SET status = '".$status."' WHERE id = '".$id."';");
		if ($wynik) {
			$box = box('Zamówienie zostało zedytowane!',info);
		}
		if($status == 1)
			email($email,"tresc ","Zamówienie zaakceptowane");
		

}


$res = dbquery("SELECT z.*, u.email FROM zamowienia z, users u WHERE status = 0 AND platnosc = 1 AND z.user_id = u.user_id ORDER BY date DESC;");
while($row = mysql_fetch_array($res))
	$zamowienia[] = $row;


$smarty->assign("zamowienia", $zamowienia);
$smarty->assign("box", $box);

?>