<?php

session_start(); // Na samej górze zadeklaruj sesję.

if ($_GET["logout"] == "yes") {

	include('./header.php');
    // niszczenie sesji użytkownika

    session_unset();
    session_destroy();


	header("location:index.html"); // Przekierowanie do index.html

}
elseif($_SESSION['login'] == 1)
{ 
  header("location:index.html"); // Przekierowanie do index.html
}elseif ($_SESSION['login'] != 1) { // dostęp dla niezalogowanego użytkownika
	include('./header.php');

    if (isset($_POST['send'])) 
	{

        $login = mysql_real_escape_string(strip_tags(trim($_POST["login"])));
        $haslo = $_POST["haslo"];

        $wynik = dbquery("SELECT password, salt, register, user_groupid,user_id FROM `users` WHERE username='$login';");
		$row = mysql_fetch_assoc($wynik);
		$salt = $row['salt'];
		$password = $row['password'];
		$register = $row['register'];

		$generowane_haslo = make_pass($haslo,$salt,$register); //generuje wynik "podwójnej soli"

        if ( $password == $generowane_haslo) {
            $_SESSION["username"] = $login;
			$_SESSION['login'] = 1;
			
		
			header("Location: index.html");
			
        }else {


            $errorboxbig = box('Podałeś nieprawidłową nazwę użytkownika lub hasło.',info);
			
        }
    }


	$smarty->assign("errorboxbig", $errorboxbig);

	$smarty->assign("title", "Logowanie"); 
	
	$smarty->display("header.tpl");
	$smarty->display("login.tpl");
}





include('./footer.php');
?>