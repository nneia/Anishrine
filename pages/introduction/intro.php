<?
	require('../db.php');
		$post = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id");
?>
<?foreach ($post as $key => $title):?>
	<?echo $title['summary'];?>
	
<?endforeach?>