<?

	$input_data = file_get_contents('php://input');



	function Verify($field, $value){
		require 'db.php';
		$sql = $pdo -> prepare("SELECT * FROM user WHERE $field =?");
		$sql -> execute([$value]);
		$data = $sql -> fetchAll();
		if(!empty($data)){
			return True;
		}
		return False;
	}


	if(Verify('username', $input_data)){
		echo "exists";
	} else {
		echo "free";
	}


?>