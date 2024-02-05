<?session_start();
require 'db.php';

if (empty($_SESSION['user_id'])) {
	//echo "никто не зашел";
}else{
	//echo $_SESSION['user_id']; пользователь вошел

}


?>	