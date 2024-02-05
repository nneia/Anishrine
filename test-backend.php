<?
	/*$upload = basename($_FILES['image']['name']);
	file_put_contents('images/users/upload.png', file_get_contents($upload));
	echo json_encode("image has been saved");*/

	/*$user = file_get_contents('images/users/neialancia.jpg');
	echo $user;*/
	//узнать типа данных var_dump
	//взять картинку
	//file_put_contents('user.jpg', $user); //сохранить новую картинку
	
	//$upload = $_FILES;
	echo json_encode(var_dump(file_get_contents('php://input'))) ;
	//echo var_dump($upload);