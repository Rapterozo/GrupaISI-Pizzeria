<?

include("./header.php");



if(!$_POST['action']){
	header ("Location: index.html"); 
}
else{

	switch($_POST['action']){
		case "update":
		
			if(count($_SESSION['koszyk']) != 0)
			{
				for($x = 0; $x < count($_SESSION['koszyk']);$x++)
					$result .= "<li>".$_SESSION['koszyk'][$x]['nazwa']." (".$_SESSION['koszyk'][$x]['rozmiar'].") ".$_SESSION['koszyk'][$x]['cena']." zl</li>";
				echo $result;
			}else
				echo '';
			
			
			break;
		case "insert":
			// id_nazwa_rozmiar_cena
			$dane = explode("_",$_POST['pizza']);
			$pizza_id = $dane[0];
			$nazwa = $dane[1];
			$rozmiar = $dane[2];
			$cena = $dane[3];
			$id = count($_SESSION['koszyk']);
			$_SESSION['koszyk'][$id]['nazwa'] = $nazwa;
			$_SESSION['koszyk'][$id]['rozmiar'] = $rozmiar;
			$_SESSION['koszyk'][$id]['cena'] = $cena;
			$_SESSION['koszyk_all'] += $cena;
			
			break;
		case "wyczysc":
			unset($_SESSION['koszyk']);
			unset($_SESSION['koszyk_all']);
			
			break;
		case "cena":
			echo $_SESSION['koszyk_all'];
			
			break;
	}
}

?>
