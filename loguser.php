<?

session_start();

	$user_data = (array)json_decode(file_get_contents('php://input', TRUE));
	

	function getuser($username, $password){
		require 'db.php';
		$sql = $pdo -> prepare("SELECT * FROM `user` WHERE `username` = :username OR `email` = :email");
		$sql -> execute([':username' => $username, ':email' => $username ]);
		$user = $sql -> fetch();
		//$id = $user['id'];
		if (empty($user)) {
			return "User not found";
		} else{
			if (password_verify($password, $user['password'])) {
				$data = ["status" => 'success', "id" => $user['id']];
				$_SESSION['user_id'] = $user['id'];
				return json_encode($data);
			}else {

				return ;
			}
		}
	};


	echo getuser($user_data['user'], $user_data['password']);