<?
	require "../connect.php";
	$id = $_SESSION['user_id'];//создали переменную и взяли id
	$getuser = $pdo -> prepare('SELECT * FROM `user` WHERE `id` = ?');
	$getuser -> execute([$id]);//вместо ? записать перменную id
	$data = $getuser -> fetch();//плучили всю строку(одного юзера)
	$username = $data['username'];
	$upload = file_get_contents('php://input');
	file_put_contents('../images/user-covers/' . $username . ".jpg",
	 $upload);
	$setcover = $pdo -> prepare('UPDATE `user` SET `user_cover`= ? WHERE id = ?');
	$setcover -> execute([$username . ".jpg", $id]);

	


	echo json_encode('success');
 ?>