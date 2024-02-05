<?
	require('../db.php');
		$plot = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id"); 
		//1) `plot` - название таблицы из БД
		//2) `post_id` - название столбца из таблицы plot
		//3) $post_id - переменная из page.php из глобального массива GET
	require('../db.php');
		$illustration = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id"); 
?>

	

	<link rel="stylesheet" href="plot-design.css">
	
	<div class="plot">
	<h1 class="header-plot">“Bleach” Plot:</h1>
	<hr class="plot-line">
	<div class="halfandhalf">
		<?foreach ($plot as $key => $post):?>
		<p class="plot-text">
			
				<?echo $post["plot1"];
			?>	
			<?
			echo $post["illustration_md"];
			?>
		</p>
		
			
			<?endforeach?>
		
	</div>
	<div class="halfandhalf">
		<p class="plot-text">
			<?echo $post["plot2"];?>
		</p>
		
	</div>
	<div class="halfandhalf">
		<p class="plot-text">
			<?echo $post["plot3"];?>
		</p>
		
	</div>
	<div class="halfandhalf">
		<p class="plot-text">
			<?echo $post["plot4"];?>
		</p>
		
	</div>
</div>