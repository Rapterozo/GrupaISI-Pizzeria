<?php
session_start(); // Na samej górze zadeklaruj sesję.
if($_SESSION['login'] == 1)
{ 
  header("location:index.html"); // Przekierowanie do index.php
}
elseif ($_SESSION['login'] == 0) { // dostep dla niezalogowanego uzytkownika
 	include ("./header.php");
    if (isset($_POST["wyslane"])) { // jezeli formularz zostal wyslany, to wykonuje sie ponizszy skrypt
 
        // filtrowanie tresci wprowadzonych przez uzytkownika
		$tabela = 'users';
        $login = mysql_real_escape_string(strip_tags(trim($_POST["login"])));
        $haslo = $_POST["haslo"];
        $haslo2 = $_POST["haslo2"];
        $email = mysql_real_escape_string(strip_tags(trim($_POST["email"])));
 
        // system sprawdza czy prawidlo zostaly wprowadzone dane
		if($login == '')
			$login_errorbox = box('Nie podałeś loginu.',info);
			
            $wynik = mysql_query("SELECT * FROM $tabela WHERE username='$login'");
            if (mysql_num_rows($wynik) <> 0) {
                $blad++;
                $login_errorbox = box('Podana nazwa uzytkownika zostala juz zajeta.',info);
            }

        if (strlen($haslo) <= 6 || strlen($haslo) > 30 ) {
            $blad++;
            $haslo_errorbox = box('Prosze poprawnie wpisac haslo (od 6 znaków do 30 znaków).',info);
        }
		
        if ((isset($haslo) && isset($haslo2)) && $haslo !== $haslo2) {
            $blad++;
            $haslo_errorbox .= box('Podane hasla nie sa ze soba zgodne.',info);
        }
		
        if (!eregi("^[0-9a-z_.-]+@([0-9a-z-]+\.)+[a-z]{2,4}$", $email)) {
            $blad++;
            $email_errorbox = box('Prosze wprowadzic poprawnie adres email.',info);
        } else {
            $wynik = mysql_query("SELECT * FROM $tabela WHERE email='$email'");
            if (mysql_num_rows($wynik) <> 0) {
                $blad++;
                $email_errorbox = box('Podany adres e-mail jest juz zajety.',info);
            }
        }

 
        // jezeli nie ma zadnego bledu, uzytkownik zostaje zarejestronwany i wyslany do niego e-mail z linkiem aktywacyjnym
        if ($blad == 0) {
			$blad = 0;
            $kod = uniqid(rand()); // tworzenie unikalnego kodu dla uzytkownika
			$hash = uniqid(rand()); // tworzenie hasha do przywracania hasła
			$today = time();//Pobiera aktualną datę i czas np. 01.02.03, 13:12:59	
			$trudne_haslo = make_pass($haslo,$kod,$today); //generuje wynik "podwójnej soli"
			
            $wynik = dbquery("INSERT INTO $tabela(`username`,`password`,`salt`,`hash`, `email`,`register`) VALUES('$login', '$trudne_haslo', '$kod', '$hash', '$email','".time()."')");
            if ($wynik) {
                $successbox = box('Dziekujemy za rejestracje!',sukces);
				echo '<meta http-equiv="refresh" content="1; url=login.html">';
            }
        }
	}
}
	$smarty->assign("title", "Rejestracja"); 

	$smarty->assign("login", $login);
	$smarty->assign("email", $email);
	$smarty->assign("blad", $blad);
	$smarty->assign("login_errorbox", $login_errorbox);
	$smarty->assign("haslo_errorbox", $haslo_errorbox);
	$smarty->assign("successbox", $successbox);

	$smarty->display("header.tpl");
	$smarty->display("rejestracja.tpl");
	include('./footer.php');
?>