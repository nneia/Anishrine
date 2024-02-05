<?
	$user_data = (array)json_decode(file_get_contents('php://input', TRUE));
	require 'db.php';

		$user_data["password"] = password_hash($user_data["password"], PASSWORD_DEFAULT);
		$user_data['user_avatar'] = $user_data['username'].'.jpg';
		file_put_contents('images/users/'. $user_data['username'].'.jpg',
		file_get_contents('images/users/anonymous-user.png'));
		$sql = $pdo -> prepare("INSERT INTO user (username, email, password, user_avatar) VALUES (:username, :email, :password, :user_avatar)");
		$sql -> execute($user_data);

		

	echo "success";
