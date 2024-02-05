<?
$genres = json_decode($_POST['data']);
foreach ($genres as $key => $value) {
	$genres[$key] = '%' . $value . '%';
}
	$sql = 'SELECT * FROM `create_post` WHERE ';
	$amount = count($genres);
	require('../db.php');
	if($amount != 0){
	foreach ($genres as $key => $value) {
		if ($key+1 != $amount) {
			$sql .= ' `genres_text` LIKE ? AND ';
		}
		else {
			$sql .= ' `genres_text` LIKE ? ';
		}
	}

		
		$posts = $pdo -> query('SELECT * FROM `create_post`  WHERE `category` LIKE "Review" ORDER BY `post_time` DESC LIMIT 5');
	$requestGenre = $pdo -> prepare($sql);
	$requestGenre -> execute($genres);
	$recieveData = $requestGenre -> fetchAll();
	$posts = $recieveData;

	}
	else{
		$requestGenre = $pdo -> prepare('SELECT * FROM `create_post` LIMIT 5');
		$requestGenre -> execute();
		$recieveData = $requestGenre -> fetchAll();
		$posts = $recieveData;
	}


$html = "
	<p class='latest-reviews-header'>Latest Anime Reviews</p>
";	
	foreach ($posts as $key => $latestReviews){
		$html .="
				<div class='container-latest-reviews'>
					<a href='../../pages/pages.php?id=${latestReviews['post_id']}'>
						<img class='latest-reviews-img' src='../../images/anime-covers/${latestReviews['post_img']}' alt=''>
					</a>
					<div class='latest-reviews-text'>
						<a href='../../pages/pages.php?id=${latestReviews['post_id']}' > <p class='anime-latest-title'>${latestReviews['post_title']}</p>
						</a>
						<div class='text-space'>
							<p class='english'>English:</p>
							<a href='../../pages/pages.php?id=${latestReviews['post_id']}'
							class='english-text'> ${latestReviews['english_text']}</a>
						</div>
						<div class='text-space'>
							<p class='episodes'>Episodes:</p>
							<p class='episodes-text'> ${latestReviews['episodes_text']}</p>
						</div>
					</div>
				</div>
		";
	};

	


 echo json_encode($html); ?>