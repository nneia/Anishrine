<?

	require "../connect.php";

	$id = $_SESSION['user_id'];//создали переменную и взяли id

	

	$avatar = $_FILES['avatar'];
	$cover = $_FILES['cover'];
	$text = (array)json_decode($_POST['textData']);
	
	$switch = [];

	$zapatay = '';
	$count = 0;

	foreach ($text  as $value) {
		if ($value != "") {
			$count += 1;
		};		
	};
	$empty_count = $count;
$data_change = 'UPDATE user SET ';
function formation($value)
{
	global $count, $data_change, $switch, $text;
	if ($count-1 != 0) {
			$data_change .= $value .  '= ? , ';
		}else{
			$data_change .= $value .  '= ? ';
		};
		array_push($switch, $text[$value]);
	$count-=1;
};

	
	if ($text['username'] != '') {
		$username = $text['username'];
		formation('username');
		
	}else{
		$getusername = $pdo -> prepare('SELECT username FROM `user` WHERE id = ?');
		$getusername -> execute([$id]);
		$data = $getusername -> fetch();
		$username = $data['username'];
	}
	if ($text['birthdate'] != '') {
		formation('birthdate');
	};
	if ($text['gender'] != '') {
		formation('gender');
	};
	if ($text['location'] != '') {
		formation('location');
	};
	if ($text['bio'] != '') {
		formation('bio');
	};
	$data_change .= ' WHERE id = ? ';
	array_push($switch, $id);

	
	if ($avatar!= null) {
		file_put_contents('../images/users/'.$username.'.jpg', file_get_contents($avatar['tmp_name']));
		$setavatar = $pdo -> prepare('UPDATE `user` SET	`user_avatar` = ? WHERE id = ?');
		$setavatar -> execute([$username.'.jpg', $id]);
	}

	if ($cover!= null) {
		file_put_contents('../images/user-covers/'.$username.'.jpg', file_get_contents($cover['tmp_name']));
		$setavatar = $pdo -> prepare('UPDATE `user` SET	`user_cover` = ? WHERE id = ?');
		$setavatar -> execute([$username.'.jpg', $id]);
	}	

	//сохраняем в бд
	if ($empty_count != 0) {
		$settext = $pdo -> prepare($data_change);
		$settext -> execute($switch);
	}

	
 	


	echo 'profile-page.php?id=' . $id;
	//echo json_encode($username);
	///echo json_encode(var_dump(file_get_contents($avatar)));
