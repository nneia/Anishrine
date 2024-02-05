<?
require '../connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Playlist</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="open-playlist.css">
</head>
<body>
		
	<?
	require '../menu-new/menu-new.php';?>
	<div class="margin-area"></div>
	<div class="container-open-playlist">
		<div class="playlist-description">
			<div class="playlist-container">
				<img src="../../images/opening-covers/epic.jpg" alt="" class="playlist-cover">
				<div class="box-shadow"></div>
				<p class="play-btn">Play All</p>
			</div>
			<h1 class="playlist-title">Epic Playlist</h1>
			<button class="suffle-btn">Shuffle Play</button>
			<p class="open-playlist-description">Playlist featuring most epic & motivational anime soundtracks.</p>
			<div class="youtube-channel">
				<img src="../../images/users/user1.jpg" alt="" class="channel-cover">
				<p class="channel-title">Anilibrary</p>
				<button class="channel-btn">Follow</button>
			</div>
		</div>
		<div class="playlist-content">
			<div class="song-container">
				<h3 class="number">1</h3>
				<iframe width="135" height="75" src="https://www.youtube.com/embed/uzBwU3GGUBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="song-info">
					<p class="song-title">OnePunchMan - Genos Theme</p>
					<p class="channel-author">Anilibrary</p>
				</div>
				<button class="play-button">Play</button>
			</div>

			<div class="song-container">
				<h3 class="number">2</h3>
				<iframe width="135" height="75" src="https://www.youtube.com/embed/atxYe-nOa9w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="song-info">
					<p class="song-title">OnePunchMan - Genos Theme</p>
					<p class="channel-author">Anilibrary</p>
				</div>
				<button class="play-button">Play</button>
			</div>

			<div class="song-container">
				<h3 class="number">3</h3>
				<iframe width="135" height="75" src="https://www.youtube.com/embed/PnuOcR9VDcQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="song-info">
					<p class="song-title">OnePunchMan - Genos Theme</p>
					<p class="channel-author">Anilibrary</p>
				</div>
				<button class="play-button">Play</button>
			</div>

			<div class="song-container">
				<h3 class="number">4</h3>
				<iframe width="135" height="75" src="https://www.youtube.com/embed/uzBwU3GGUBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="song-info">
					<p class="song-title">OnePunchMan - Genos Theme</p>
					<p class="channel-author">Anilibrary</p>
				</div>
				<button class="play-button">Play</button>
			</div>

			<div class="song-container">
				<h3 class="number">5</h3>
				<iframe width="135" height="75" src="https://www.youtube.com/embed/uzBwU3GGUBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="song-info">
					<p class="song-title">OnePunchMan - Genos Theme</p>
					<p class="channel-author">Anilibrary</p>
				</div>
				<button class="play-button">Play</button>
			</div>

			<div class="song-container">
				<h3 class="number">6</h3>
				<iframe width="135" height="75" src="https://www.youtube.com/embed/uzBwU3GGUBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="song-info">
					<p class="song-title">OnePunchMan - Genos Theme</p>
					<p class="channel-author">Anilibrary</p>
				</div>
				<button class="play-button">Play</button>
			</div>
		</div>
	</div>

	<?require '../footer/footer.php';?>

</body>
</html>