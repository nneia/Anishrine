<?
$data = $_POST['nnn'];

require 'db.php';
/*$database = $pdo -> query("INSERT INTO `watch_list_recieve` VALUES ('', $data)");*/


$db = $pdo -> prepare("INSERT INTO `watch_list_recieve` (recieve_anime) VALUES (?)");
$db -> execute([$data]);
echo json_encode("ok");

?>



