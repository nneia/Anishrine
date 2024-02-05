<?require 'db.php'?>

<?
	$user=json_decode(file_get_contents('php://input'), TRUE);
	
	$db = $pdo -> prepare("SELECT * FROM user WHERE username = ?");
 	$db -> execute([$user["name"]]);
	$data = $db-> fetchAll();
	if (empty($data)) {
		echo "No user found";
	}else{
		echo "User exists";
	}


	?>


<?
	$email=json_decode(file_get_contents('php://input'), TRUE);

	$db = $pdo -> prepare("SELECT * FROM user WHERE email = ?");
	$db -> execute([$user["email"]]);
	$data = $db-> fetchAll();
	if (empty($data)) {
		echo "This email is free";
	}else{
		echo "This email is already registered";
	}
?>