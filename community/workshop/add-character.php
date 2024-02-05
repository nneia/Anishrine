<?
require ('db.php');

$db = $pdo -> query("SELECT * FROM `characters` LIMIT 12");
?>
<link rel="stylesheet" href="add-character-design.css">
<link rel="stylesheet" type="text/css" href="../../images/construction/like-animation/sprite_60fps.css"/>

<div class="workshop">	

		<div class="header-box">
			<h2 class="character-header"> Create Character page </h2>
			<img src="../../images/construction/info-icon.svg" alt="" class="info-icon">
			<p class="characters-counter">Characters counter: 871</p>
			<p class="characters-add">+ Create new</p>
		</div>

		<div class="characters-container">
		<?foreach ($db as $key => $character):?>	
			<div class="character-box">

				<script>
					var image_tracker = 'f';
					function change() {
						var fav = document.getElementById('favorites');
						if (image_tracker == 'f'){
					
							fav.src = '../../images/construction/fav-color.svg';
							image_tracker = 't';
						}else{
							fav.src = '../../images/construction/fav-grey.svg';
							image_tracker = 'f';
						}
					};
					
				</script>
				<img id="favorites" src="../../images/construction/fav-grey.svg" alt="" class="fav-icon" onclick="change();">
				<div class="i">add character to favorites</div>	
				
				<div class="zoom-in">
					<img src=<?echo "../../images/characters/" . $character['character_image']?> alt="" class="character-image">
				</div>
						<div class="overflow">
							<div class="pop-up">
							
							</div>
							<div class="content">
								<p class="character-rating"> Rating #21</p>
								<div class="like-container">
								
									<p class="like-character">Like character (81920)</p>
									
								</div>
							</div>
						</div>

				<div class="character-info">
					<p class="characters-name"><?=$character['character_name']?></p>
					<p class="character-origin">Anime: <u class="origin-title"><?=$character['character_origin']?></u></p>
					
					<div class="added">
					<p class="by">Added by:</p>
					<img src="../../images/users/user2.jpg" alt="" class="author-img">
					<p class="add-author">	Neia</p>
				</div>
				
				</div>

			</div>
			<?endforeach?>

			



			<hr class="line">
		</div>
</div>