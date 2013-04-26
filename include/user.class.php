<?php
class user {

    public static $user = array();
    
    /**
     * Zwraca tablicę ze wszystkimi danymi o użytkowniku.
     * Indeksy tablicy odpowiadają nazwom pól w bazie danych (login, pass etc...)
     * @param string $login
     * @param string $pass
     * @return array
     */
    public function getUser ($login) {
			if ($login == '') return false;
			else
			{
				self::$user = mysql_fetch_array(dbquery("SELECT * FROM users WHERE username='$login' LIMIT 1;"));
				return self::$user;
			}
		
    }
    
    /**
     * Zwraca tablicę ze wszystkimi danymi o użytkowniku, tak jak powyższa metoda klasy,
     * ale rozpoznaje użytkownika nie po podaniu loginu i hasła tylko po podaniu ID.
     * Używana np. do wyświetlania strony profilu.
     * @param int $id
     * @return array 
     */
    public function getuserByID ($id) {
    /**
     * Sprawdź czy użytkownik o podanym ID istnieje
     */
    $userExist = mysql_fetch_array(dbquery("SELECT *, COUNT(user_id) AS ilosc FROM users WHERE user_id = '$id'"));

    // Użytkownik nie istnieje
    if ($userExist['ilosc'] == 0) {
        $user = false;
    }else
        //$user = mysql_fetch_array(dbquery("SELECT * FROM users WHERE user_id = '$id';"));
       
	    return $userExist;
    }

    /**
     * Jeśli użytkownik jest zalogowany - zwraca true, w przeciwnym wypadku - false
     * @return bool
     */
    public function isLogged () {
     if (empty($_SESSION['username']) && $_SESSION['username'] == 0 && $_SESSION['login'] != 1) {
      return false;
     }

     else {
      return true;
     }
    }


}
?>