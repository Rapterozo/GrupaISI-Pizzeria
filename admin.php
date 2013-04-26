<?
include('header.php');
if(!$isLogged)
header("Location: /403.html");
if (isset($_POST['send'])) 
{
        $login = mysql_real_escape_string(strip_tags(trim($_POST["login"])));
        $haslo = $_POST["haslo"];

        $wynik = dbquery("SELECT password, salt, register, user_id FROM `users` WHERE username='$login'  AND user_groupid = 1;");
		$row = mysql_fetch_assoc($wynik);
		$salt = $row['salt'];
		$password = $row['password'];
		$register = $row['register'];

		
		$generowane_haslo = make_pass($haslo,$salt,$register); //generuje wynik "podwójnej soli"
		if ( $password == $generowane_haslo) {
			$_SESSION['admin'] = 1;
			header("Location: /admin/index");
		}else
		{
			$box = '<div class="loginmsg">Dane do logowania niepoprawne.</div>';
			$smarty->assign("box", $box);
		}
}
$smarty->assign("title", "Panel Administracyjny"); 
if($_SESSION['admin'] == 1)
{
	
	$smarty->display('header.tpl');
	if(isset($_GET["page"]) && file_exists("admin/".$_GET["page"].".php")) {
		include("admin/".$_GET["page"].".php");

		$smarty->display('admin/'.$_GET["page"].'.tpl');
		
	}else
		$smarty->display('admin/index.tpl');
	$smarty->display('footer.tpl');
	
}elseif($isLogged && $profile['user_groupid'] == 1)
{
	$smarty->display('header.tpl');
	$smarty->display('admin/login.tpl');
	$smarty->display('footer.tpl');
}
else
	header("Location: /403.html");



?>