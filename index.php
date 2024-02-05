<?
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Anilibrary</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<link rel="shortcut icon" href="../images/construction/logo/favicon.png" type="image/png">
</head>
<body>
	<?
require('db.php');

	$watch = $pdo -> query('SELECT * FROM `create_post` WHERE `watch_list` LIKE "add" ORDER BY `post_date` DESC ');
?>


	<?
	require 'menu-new/menu-new.php';
	?>
	<div class="margin-area"></div>
	
	
	<div class="body-one">
	<div class="container-left">
		<img src="../images/construction/next-arrow.svg" alt="" class="scroll-button">
		<div class="hottest-anime-container">
			<select class="popular-anime-selector" name="" id="">
				<option class="popular-anime-selector" value="">Monthly</option>
				<option class="popular-anime-selector" value="">All time</option>
				<option class="popular-anime-selector" value="">This year</option>
			</select>
			<p class="hottest-anime-header">Popular Anime</p>
			<p class="see-all-anime">+open more</p>
			<div class="hottest-anime-block">


				<div class="hotest-anime-box">
					<div class="zoom-in">
						
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

				<div class="hotest-anime-box">
					<div class="zoom-in">
						
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

				<div class="hotest-anime-box">
					<div class="zoom-in">
						
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

				<div class="hotest-anime-box">
					<div class="zoom-in">
						
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

				<div class="hotest-anime-box">
					<div class="zoom-in">
						
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
		</div>
		<p class="quick-container-header">Quick-Choice</p>
		<div class="quick-container">
			<img src="../images/construction/next-arrow.svg" alt="" class="scroll-button-choice">
			<div class="quick-list">
				<div class="chosen-box">
					<img src="../images/anime-covers/code-geass.jpg" alt="" class="anime-chosen-img">
					<img src="../images/anime-covers/cowboy-bebop.jpg" alt="" class="anime-chosen-img">
					<img src="../images/anime-covers/made-in-abyss.jpg" alt="" class="anime-chosen-img">
				</div>
				<p class="choice-header">Space Aventures</p>
				<p class="choice-subheader">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, vitae officiis, cumque repellat culpa laudantium inventore nihil earum quidem incidunt.</p>
			</div>
			

			<div class="quick-list">
				<div class="chosen-box">
					<img src="../images/anime-covers/code-geass.jpg" alt="" class="anime-chosen-img">
					<img src="../images/anime-covers/cowboy-bebop.jpg" alt="" class="anime-chosen-img">
					<img src="../images/anime-covers/made-in-abyss.jpg" alt="" class="anime-chosen-img">
				</div>
				<p class="choice-header">Space Aventures</p>
				<p class="choice-subheader">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, vitae officiis, cumque repellat culpa laudantium inventore nihil earum quidem incidunt.</p>
			</div>
		</div>

		<div class="recomendation-container-empty">
			<img src="../images/construction/empty-recomendations.svg" alt="" class="emty-image">
			<p class="empty-header">Recomendations for you</p>
			<p class="empty-text"><u class="login">Login</u> to generate personal recomendations</p>
		</div>
		<div class="recomendation-container">

			<p class="recomendation-header">Recomended for you:</p>
			<p class="recomendation-statement">Because you watched <u class="watched-anime">Vinland Saga</u></p>
			<a href="recomendations.php"><p class="open-button">Open</p></a>
			<div class="recomendation-box">
				
				
				
				<div class="recomendation-anime-box">
					<div class="zoom-in">
						
						<img src="../../images/anime-covers/code-geass.jpg" alt="" class="anime-cover">
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
				<div class="recomendation-anime-box">
					<div class="zoom-in">
						
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
				<div class="recomendation-anime-box">
					<div class="zoom-in">
						
						<img src="../../images/anime-covers/akamegakill-cover.jpg" alt="" class="anime-cover">
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
				<div class="recomendation-anime-box">
					<div class="zoom-in">
						
						<img src="../../images/anime-covers/made-in-abyss.jpg" alt="" class="anime-cover">
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
				<div class="recomendation-anime-box">
					<div class="zoom-in">
						
						<img src="../../images/anime-covers/psychopass.jpg" alt="" class="anime-cover">
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
		</div>



		<div class="latest-updates-container">
			<p class="latest-update-header">Latest Updates</p>
			<div class="anime-update-box">
				<div class="anime-update">
					<img src="images/anime-covers/isekai-quartet.jpg" alt="" class="anime-update-cover">
					<div class="rater-update">
							<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate-update">
							<p class="votes-number-update">323</p>
							<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate-update">
					</div>
				</div>
				<div class="anime-update-information">
					<p class="anime-update-title">Isekai Quartet</p>
					<p class="anime-author">Mad Snail</p>
					<p class="status">Ongoing, 36 Episodes</p>
					<ul class="summary">
						<li class="summary-fact">Lorem ipsum dolor sit amet,  odio sint! Quae aspernatur expedita </li>
						<li class="summary-fact">atque alias vitae. Soluta doloribus, quidem.</li>
						<li class="summary-fact">consectetursimos suscipit ut ad, dolorum animi, illum facere,</li>

					</ul>
					<div class="tags">
						<p class="tag">Action</p>
						<p class="tag">Isekai</p>
						<p class="tag">High School</p>
					</div>
					
					
				</div>
				<p class="release-time">yesterday 12:32 AM</p>
			</div>
			<div class="anime-update-box-e">
				<div class="anime-update">
					<img src="images/anime-covers/blends-cover.jpg" alt="" class="anime-update-cover">
					<div class="rater-update">
							<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate-update">
							<p class="votes-number-update">323</p>
							<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate-update">
					</div>
				</div>
				<div class="anime-update-information">
					<p class="anime-update-title">Blend S</p>
					<p class="anime-author">Mad Snail</p>
					<p class="status">Ongoing, 36 Episodes</p>
					<ul class="summary">
						<li class="summary-fact">Lorem ipsum dolor sit amet,  odio sint! Quae aspernatur expedita </li>
						<li class="summary-fact">atque alias vitae. Soluta doloribus, quidem.</li>
						<li class="summary-fact">consectetursimos suscipit ut ad, dolorum animi, illum facere,</li>

					</ul>
					<div class="tags">
						<p class="tag">Action</p>
						<p class="tag">Isekai</p>
						<p class="tag">High School</p>
					</div>
					
					
				</div>
				<p class="release-time">yesterday 12:32 AM</p>
			</div>
			<div class="anime-update-box">
				<div class="anime-update">
					<img src="images/anime-covers/cowboy-bebop.jpg" alt="" class="anime-update-cover">
					<div class="rater-update">
							<img src="../../images/construction/position/arrow-down.svg" alt="" class="rate-update">
							<p class="votes-number-update">323</p>
							<img src="../../images/construction/position/arrow-up.svg" alt="" class="rate-update">
					</div>
				</div>
				<div class="anime-update-information">
					<p class="anime-update-title">Cowboy Bepop</p>
					<p class="anime-author">Mad Snail</p>
					<p class="status">Ongoing, 36 Episodes</p>
					<ul class="summary">
						<li class="summary-fact">Lorem ipsum dolor sit amet,  odio sint! Quae aspernatur expedita </li>
						<li class="summary-fact">atque alias vitae. Soluta doloribus, quidem.</li>
						<li class="summary-fact">consectetursimos suscipit ut ad, dolorum animi, illum facere,</li>

					</ul>
					<div class="tags">
						<p class="tag">Action</p>
						<p class="tag">Isekai</p>
						<p class="tag">High School</p>
					</div>
					
					
				</div>
				<p class="release-time">yesterday 12:32 AM</p>
			</div>
		</div>
	</div>
	<div class="container-right">
		<div class="ads-container">
			<div class="ad"></div>
		</div>

		<div class="pool-definitive">
			<p class="community-pools-header">Popular Pools</p>
			<p class="what-is-pool">What is pool?</p>
		</div>
		
		<div class="anime-pool">
			<img src="../images/anime-covers/konosuba-cover.jpg" alt="" class="anime-pool-img">
			<div class="anime-pool-area">
				<p class="pool-title">/Star Martial god technique</p>
				<div class="pool-stat">
					<p class="user-count">1337 users</p>
					<p class="points-count">24645 points</p>
				</div>
				<p class="pool-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum nemo, voluptatem optio quibusdam, ad minus necessitatibus explicabo! </p>
			</div>
		</div>
		<div class="anime-pool">
			<img src="../images/anime-covers/konosuba-cover.jpg" alt="" class="anime-pool-img">
			<div class="anime-pool-area">
				<p class="pool-title">/Star Martial god technique</p>
				<div class="pool-stat">
					<p class="user-count">1337 users</p>
					<p class="points-count">24645 points</p>
				</div>
				<p class="pool-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum nemo, voluptatem optio quibusdam, ad minus necessitatibus explicabo! </p>
			</div>
		</div>
		<div class="anime-pool">
			<img src="../images/anime-covers/konosuba-cover.jpg" alt="" class="anime-pool-img">
			<div class="anime-pool-area">
				<p class="pool-title">/Star Martial god technique</p>
				<div class="pool-stat">
					<p class="user-count">1337 users</p>
					<p class="points-count">24645 points</p>
				</div>
				<p class="pool-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum nemo, voluptatem optio quibusdam, ad minus necessitatibus explicabo! </p>
			</div>
		</div>

		<div class="anime-pool">
			<img src="../images/anime-covers/konosuba-cover.jpg" alt="" class="anime-pool-img">
			<div class="anime-pool-area">
				<p class="pool-title">/Star Martial god technique</p>
				<div class="pool-stat">
					<p class="user-count">1337 users</p>
					<p class="points-count">24645 points</p>
				</div>
				<p class="pool-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum nemo, voluptatem optio quibusdam, ad minus necessitatibus explicabo! </p>
			</div>
		</div>



		<p class="discussions-header">Discussions </p>
		<p class="discussions-subheader">Trending topics</p>
		<div class="topics-container">
			<div class="topic-box">
							<div class="comment-content">
								<div class="topic-origin">
									<p class="origin">/overlord</p>
									<p class="comment-author">Condomer</p>
								</div>
								<p class="comment-posted">Lorem ipsum dolor sit ame Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolor omnis natus. Ea doloremque in eligendi, ducimus, explicabo voluptate.</p>
								
							</div>
							<div class="comment-rating">
								<img src="../../images/construction/position/arrow-up.svg" alt="" class="comment-rate-up">
								<p class="comment-rate-number">2.3k</p>
								
								<img src="../../images/construction/position/arrow-down.svg" alt="" class="comment-rate-down">
							</div>
			</div>

			<div class="topic-box">
							<div class="comment-content">
								<div class="topic-origin">
									<p class="origin">/overlord</p>
									<p class="comment-author">Condomer</p>
								</div>
								<p class="comment-posted">Lorem ipsum dolor sit ame Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolor omnis natus. </p>
								
							</div>
							<div class="comment-rating">
								<img src="../../images/construction/position/arrow-up.svg" alt="" class="comment-rate-up">
								<p class="comment-rate-number">1.2k</p>
								
								<img src="../../images/construction/position/arrow-down.svg" alt="" class="comment-rate-down">
							</div>
			</div>


			<div class="new-users">
				<p class="new-users-header">New users:</p>
				<div class="new-users-container">
					<div class="new-user">
						<img src="images/users/user5.jpg" alt="" class="new-user-image">
						<div class="user-right">
							<div class="user-info">
								<p class="nickname">Takumi</p>
								<p class="reg-time">12:10 AM</p>
							</div>
							<p class="user-points">154 points</p>
						</div>
					</div>
					<div class="new-user">
						<img src="images/users/user5.jpg" alt="" class="new-user-image">
						<div class="user-right">
							<div class="user-info">
								<p class="nickname">Takumi</p>
								<p class="reg-time">12:10 AM</p>
							</div>
							<p class="user-points">154 points</p>
						</div>
					</div>
					<div class="new-user">
						<img src="images/users/user5.jpg" alt="" class="new-user-image">
						<div class="user-right">
							<div class="user-info">
								<p class="nickname">Takumi</p>
								<p class="reg-time">12:10 AM</p>
							</div>
							<p class="user-points">154 points</p>
						</div>
					</div>

				</div>
			</div>

			<div class="ads-container">
			<div class="ad"></div>
			</div>



		</div>

	</div>
</div>




	<?
		require 'footer/footer.php';
		?>







		
</body>
<script src="main.js"></script>

</html>