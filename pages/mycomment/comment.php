<?
	require('../db.php');
		$comment = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id");

		//1) `plot` - название таблицы из БД
		//2) `post_id` - название столбца из таблицы plot
		//3) $post_id - переменная из page.php из глобального массива GET
?>
	

	<link rel="stylesheet" href="comment-design.css">
	<?foreach ($comment as $key => $post){
		echo $post['review'];
		
	};
	?>
	



	

