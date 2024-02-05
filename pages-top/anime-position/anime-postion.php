<?
	require('db.php');
		$post = $pdo -> prepare("SELECT * FROM `create_top` INNER JOIN `create_post` ON post_id = top_post_id WHERE post_id = ?");
		$post->execute([$post_id]);
		$post = $post -> fetchAll();
?>

<?foreach ($post as $key => $introduction):?>

<?=$introduction['anime_rank'];?>
<?=$introduction['anime_info'];?>
<?=$introduction['anime_text'];?>
<?endforeach?>