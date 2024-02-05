<?
require ('db.php');

	$ongoing = $pdo -> query("SELECT * FROM `create_post` WHERE `status` LIKE 'Ongoing' ")

?>


<link rel="stylesheet" href="ongoing-season-design.css">

<div class="display-ongoing-block">
	<div class="main-page-left">
		
			
			
			
			<div class="background-two">
				<p class="box-title">Spring 2019 Anime</p>
				<div class="ongoing-description">

					<p class="message">Sorted by:</p>
					<select name="" id="" class="select-ongoing">
						<option value="">Rating</option>
						<option value="">Views</option>
						<option value="">Activity in community</option>
					</select>
					<p class="total">+See all (28 titles)</p>
				</div>

				<?foreach ($ongoing as $key => $ongoings):?>
				
					<div class="anime-box">

						<span class="post-preview">
								<div class="preview-title">"<?=$ongoings['anime_title']?>"</div>
								<p class="plot-preview"><?=$ongoings['plot']?></p>
								<p class="tags-preview">TAGS: <?=$ongoings['genres']?></p>

								<div class="info-preview">
									<img src="../images/construction/episode.svg" alt="" class="preview-icon">
								<li class="preview-cell"><?=$ongoings['episodes'];?></li>
								<img src="../images/construction/calendar.svg" alt="" class="preview-icon">
								<li class="preview-cell"><?=$ongoings['airing'];?></li>
								<img src="../images/construction/studio.svg" alt="" class="preview-icon">
								<li class="preview-cell"><?=$ongoings['studio'];?></li>
								<img src="../images/construction/director.svg" alt="" class="preview-icon">
								<li class="preview-cell"><?=$ongoings['director'];?></li>
								</div>
						</span>
						
							
						<div class="zoom-in-anime">
							<img src=<?echo "../images/anime-covers/" . $ongoings['anime_cover']?> alt="" class="ongoing-anime-img"  >
						</div>
						<div class="overflow">
							<div class="pop-up">
							
							</div>
							<div class="content">
								
									<p class="like-character">Read a review</p>
									<p class="like-character">+Add to List</p>

							</div>
						</div>

						<a class="title-color" href="pages/pages.php?id=<?=$ongoings['post_id']?>">
						<p class="ongoing-anime-title"><?=$ongoings['anime_title']?></p>
						</a>
						<div class="anime-rating">
							<p class="anime-rank">Rank#21</p>
							<img src="../images/construction/position/arrow-up.svg" alt="" class="rating-controller">
							<p class="rating-number">341</p>
							<img src="../images/construction/position/arrow-down.svg" alt="" class="rating-controller">
						</div>
						<!--<div class="anime-info">
							
						</div>-->
						

					</div>

					
						
					
		
				<?endforeach?>
			
			</div>
	</div>

</div>