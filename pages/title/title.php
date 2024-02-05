<?
	require('../db.php');
		$post = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id");
?>
<?
	require('../db.php');
		$plot = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id"); 
		//1) `plot` - название таблицы из БД
		//2) `post_id` - название столбца из таблицы plot
		//3) $post_id - переменная из page.php из глобального массива GET
	require('../db.php');
		$data = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id");
		$illustration = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id");
	require ('db.php');

	$trendings = $pdo -> query('SELECT * FROM `create_post` WHERE `post_date` >= LAST_DAY(CURDATE()) + INTERVAL 1 DAY - INTERVAL 1 MONTH AND `post_date` <= DATE_ADD(LAST_DAY(CURDATE()), INTERVAL 1 DAY) ORDER BY `views` DESC LIMIT 5'); 
?>
<?
require('../db.php');
		$trailer = $pdo -> query("SELECT * FROM `create_post` WHERE `post_id` = $post_id"); 
?>
	<link rel="stylesheet" href="../trailer/trailer-design.css">
	<link rel="stylesheet" href="title-design.css">
	<link rel="stylesheet" type="text/css" href="../../images/construction/like-animation/sprite_60fps.css">
			
		<?foreach ($post as $key => $title):?>
				<div class="margins">
					<h1 class="post-title"><?=$title["post_title"];?></h1>
					<div class="details">
					<p class="author">By: <?=$title['author'];?></p>
		
					<p class="date"><?=$title['post_date'];?></p>

					<div class="shapeshifter  like-post" id="post_like"  style="background-image: url(../images/construction/like-animation/sprite_60fps.svg)">
					</div>
							<p class="like-post-text">Do you like this post? (521)</p>
							<script>
								
							document.getElementById('post_like').
							forEach( function(element, index) {
							element.addEventListener('click', function () {
							element.classList.toggle("play")
										});
									})
	
							</script>
					</div>
				</div>
		
				
					<div class="full-area">
						<div class="left-container">
							<div class="info-bar">
								<?foreach ($data as $key => $info):?>
								<img src="../../images/construction/episode.svg" alt="" class="studio-icon">
								<li class="info-cell"><?=$info['episodes'];?></li>
								<img src="../../images/construction/calendar.svg" alt="" class="studio-icon">
								<li class="info-cell"><?=$info['airing'];?></li>
								<img src="../../images/construction/studio.svg" alt="" class="studio-icon">
								<li class="info-cell"><?=$info['studio'];?></li>
								<img src="../../images/construction/director.svg" alt="" class="studio-icon">
								<li class="info-cell"><?=$info['director'];?></li>
								<div class="rank">
									<p class="rank-position"># 232</p>
								</div>
								<?endforeach?>
							</div>
							
							<div class="description-block">
									
									
								<div class="anime-block" >
									<img class="post-image" src=<?echo "../../images/anime-covers/" . $title['anime_cover'];?> alt="">
									<div class="like-anime" id="area">
										<div class="shapeshifter  like" id="like_anime"  style="background-image: url(../images/construction/like-animation/sprite_60fps.svg)">
										</div>
										<p class="like-text">Like This Anime?</p>
										<script>
											var area = document.getElementById("area");
							
										var animelike = document.getElementById('like_anime');
										area.addEventListener( 
										'click', function () {
										animelike.classList.toggle("play")
													});
											
								
										</script>
									</div>
									<div class="add-list-block">
										<img src="../../images/construction/add-icon.svg" alt="" class="add-icon">
										<div class="add-to-list">Add to List</div>
									</div>
								</div>
								<div class="summary-container">
									<?foreach ($data as $key => $title)?>
									<h2 class="anime-title">"<?=$title['anime_title'];?>"</h2>
									<p class="alternative-title">JPN: <?=$title['alternative_title'];?> </p>
									<?endforeach?>
									<div class="summary">
										<?foreach ($plot as $key => $post):?>
										<?echo $post["plot"];?>
										<?endforeach?>
									</div>
									<div class="tags">
										<p class="tags-title">TAGS: </p>
										<p class="tags-text"><?=$title['genres'];?></p>
									</div>
								</div>
									
							</div>
							<div class="navigation-menu">
								<p class="navigation-text">Navigation:</p>
								<div class="post-navigation">
									
									<li class="navigation-content">Summary</li>
									<li class="navigation-content">Review</li>
									<li class="navigation-content">Highlights</li>
									<li class="navigation-content">Conclusion</li>
								</div>
							</div>
	

							
							<div class="trailer-block">
								<?foreach ($trailer as $key => $video):
								
										echo $video["trailer"];
										?>
								<?endforeach?>
								
							</div>






						</div>





						<div class="side-container">
							<div class="side-ad"></div>
							<div class="discussion-on-anime">
								<div class="container-header">
									<h2 class="discussion-header">Community discussion</h2>
									<p class="view">+ view all</p>
								</div>
								<div class="discussion-comment">
									<div class="discussion-user-container">
										<img src="../../images/users/user7.jpg" alt="" class="discussion-user">
										<p class="discussion-user-nickname">Rukia</p>
									</div>
									<div class="discussion-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae excepturi vero illum mollitia pariatur accusamus </div>
									<div class="comment-info">
										<p class="comment-date">Apr 14, 3AM</p>
										<img src="../../images/construction/" alt="" class="comment-like">
									</div>
								</div>

								<div class="discussion-comment">
									<div class="discussion-user-container">
										<img src="../../images/users/user2.jpg" alt="" class="discussion-user">
										<p class="discussion-user-nickname">Rukia</p>
									</div>
									<div class="discussion-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae excepturi vero illum mollitia pariatur accusamus </div>
									<div class="comment-info">
										<p class="comment-date">Apr 14, 3AM</p>
										<img src="../../images/construction/" alt="" class="comment-like">
									</div>
								</div>

								<div class="discussion-comment">
									<div class="discussion-user-container">
										<img src="../../images/users/user5.jpg" alt="" class="discussion-user">
										<p class="discussion-user-nickname">Rukia</p>
									</div>
									<div class="discussion-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae excepturi vero illum mollitia pariatur accusamus </div>
									<div class="comment-info">
										<p class="comment-date">Apr 14, 3AM</p>
										<img src="../../images/construction/" alt="" class="comment-like">
									</div>
								</div>
							</div>
							
							<h2 class="trending-header">Popular posts</h2>
							<?foreach ($trendings as $key => $trending):?>
							<div class="side-trending-container-element">
								
								
									<a href="pages/pages.php?id=<?=$trending['post_id']?>">
									<img src=<?echo "../images/post-covers/" . $trending['post_cover']?> alt="" class="side-element-img">
									</a>
								
								<div class="post-area">
									<a href="pages.php?id=<?=$trending['post_id']?>" class="side-element-text"><?=$trending['post_title']?></a>
									<div class="interactions">
										<img src="../images/construction/time.svg" alt="" class="time-icon">
										<p class="post-time"><?=$post['post_date']?></p>
										<div class="shapeshifter  likes-icon"  style="background-image: url(../images/construction/like-animation/sprite_60fps.svg)"></div>
										<p class="likes-number">38</p>
										<img src="../images/construction/comment.svg" alt="" class="comments-icon">
										<p class="comments-number">12</p>
									</div>
									
								</div>
							
							</div>
							<?endforeach?>
							<script>
								document.querySelectorAll('.shapeshifter').
								forEach( function(element, index) {
								element.addEventListener('click', function () {
								element.classList.toggle("play")
											});
										})
	
							</script>
						</div>
						


					</div>
				
		
		

