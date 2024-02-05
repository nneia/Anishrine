	
<?
	require('db.php');
		$post = $pdo -> prepare("SELECT * FROM `create_top` INNER JOIN `create_post` ON post_id = top_post_id LIMIT 1 ");
		$post->execute();
		$post = $post -> fetchAll();
		print_r($post['author_img'])
?>

<link rel="stylesheet" href="introduction-design.css">

<?foreach ($post as $key => $introduction):?>
<div class="post-title">
	<p class="post-title-text"><?=$introduction["post_title"];?></p>
</div>
<div class="author">
	<div class="image-size">
		<img src=<?echo "../../images/anime-covers/" . $introduction['author_img'];?> alt=""  class="author-image">
	</div>
	<p class="author-nickname"><?=$introduction["author"];?></p>
</div>
<p class="introduction"><?=$introduction["author_comment"];?></p>
<?endforeach?>