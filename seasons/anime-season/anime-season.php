
<?
$year = $_GET['year'];
$page_number = 5*(intval($_GET['number']) - 1);
require('../db.php');
		$plot = $pdo -> query("SELECT * FROM `create_post` WHERE `category` LIKE 'Review' AND `year` LIKE '$year' AND `airing_season` LIKE 'Winter' LIMIT $page_number, 5");
		

 ?>
 <?
require ('../db.php');

	$ongoing = $pdo -> query("SELECT * FROM `create_post` WHERE `status` LIKE 'Ongoing'")

?>



<link rel="stylesheet" href="<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="anime-season-design.css">
<link href="https://fonts.googleapis.com/css?family=Hind+Madurai+light:400,500&display=swap" rel="stylesheet">
<div class="season-container">

	<div class="sort-container">
		<p class="sort-header">Sort By</p>
		<select class="sort-select" name="sort" id="">
			<option value="">Rank</option>
			<option value="">Views</option>
			<option value="">Activity In Community</option>
		</select>
		<p class="anime-count">224 Anime</p>
	</div>

	<div class="anime-container">

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>


		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>

		<div class="anime-box">
			<div class="zoom-in">
				<p class="rating-number">#211</p>
				<img src="../../images/anime-covers/size.jpg" alt="" class="anime-cover">
			</div>
			<p class="anime-title">Star martial God Technique</p>
			<div class="rating">
				
				<div class="rater">
					<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate">
					<p class="votes-number">323</p>
					<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate">
				</div>
			</div>
		</div>
																						
	</div>
	
	
	<div class="pages-selector">
			<a href="" class="page-number" style="color: #1C3380;">«</a>
			<a href="http://www.anishrine/seasons/season.php?year=2019&number=1" class="page-number selector">1</a>
			<a href="http://www.anishrine/seasons/season.php?year=2019&number=2" class="page-number">2</a>
			<a href="http://www.anishrine/seasons/season.php?year=2019&number=3" class="page-number">3</a>
			<a href="http://www.anishrine/seasons/season.php?year=2019&number=4" class="page-number">4</a>
			<a href="http://www.anishrine/seasons/season.php?year=2019&number=5" class="page-number">5</a>
			<a href="" class="page-number" style="color: #1C3380;">»</a>
	</div>
</div>
