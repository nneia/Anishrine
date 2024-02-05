<?
require '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="discussions-design.css">
	<link rel="stylesheet" type="text/css" href="../images/construction/like-animation/sprite_60fps.css"/>
	<title>discussions</title>
</head>
<body>
	<?
	require '../menu-new/menu-new.php';?>
	<div class="margin-area"></div>
	<div class="page-box">

		<h2 class="discussion-header">Disscussions</h2>
		
		<div class="selector">
			<p class="sort-by">Sort by: </p>
			<select class="sort-list">
				<option>Newest</option>
				<option>Most Viewed</option>
				<option>Most Popular</option>
			</select>
			<button class="create">+ Create a discussion</button>

		</div>
		
		<div class="topic-container">
			
			<div class="topic">
				<div class="size-adjust">
					<img src="../images/discussion-cover/kazuma.png" alt="" class="topic-cover">
				</div>
				<div class="topic-info">
					<div class="like">
						<div class="shapeshifter  likes-icon"  style="background-image: url(../images/construction/like-animation/sprite_60fps.svg)"></div>
						<script>
							document.querySelectorAll('.shapeshifter').
								forEach( function(element, index) {
								element.addEventListener('click', function () {
								element.classList.toggle("play")
											});
										})
							
									</script>
						<p class="likes-number">121</p>
					</div>
					<a class="join-link" href="topic.php"><p class="join">+Join the discussion</p></a>
					
				</div>
			</div>

			<div class="topic-content">
				<div class="top">
					<h3 class="topic-title"><a style="color: #1C3380;" href="topic.php">Kazuma desu</a></h3>
					<p class="topic-number">#849</p>
				</div>
				<p class="started-by">Started by: <a  class="author">Takumi</a></p>

				<div class="topic-info">
					<p class="messages-number">(8431 messages)</p>
					<p class="time">16.05.2019</p>
				</div>
				<p class="topic-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, debitis voluptas autem dolore ipsam odit iusto voluptate ducimus, quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, debitis voluptas autem dolore ipsam odit iusto voluptate ducimus, quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?</p>
			</div>

		</div>

		



	</div>




	<?require '../footer/footer.php';?>
</body>
</html>