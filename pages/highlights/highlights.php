<?
	require('../db.php');
		$highlights = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id");highlights 
		//1) `plot` - название таблицы из БД
		//2) `post_id` - название столбца из таблицы plot
		//3) $post_id - переменная из page.php из глобального массива GET
?>
	

	<link rel="stylesheet" href="highlights-design.css">
	<?foreach ($highlights as $key => $post){
		echo $post["highlights"];
		
	}

	?>

