<?
require '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="topic-design.css">
	<link rel="stylesheet" type="text/css" href="../images/construction/like-animation/sprite_60fps.css"/>
	<title>Document</title>
</head>
<body>
	
	<?
	require '../menu-new/menu-new.php';?>
	<div class="margin-area"></div>
	<div class="topic-box">
		<div class="topic-top">
			<h2 class="topic-title">Kazuma Desu</h2>
			<div class="interactions-box">
							<img src="../images/construction/report.svg" alt="" class="report-icon">
							<p class="report">Report</p>
						</div>
			<p class="rating">#849</p>
		</div>
		<div class="topic-content">
			<div class="cover-box">
				<img src="../images/discussion-cover/kazuma.png" alt="" class="topic-cover">
				<div class="interactions-container">
					<div class="like" id="area-like">
						<div class="shapeshifter  likes-icon" id="like-discussion"  style="background-image: url(../images/construction/like-animation/sprite_60fps.svg)"></div>
						<script>
							
							var area = document.getElementById("area-like");
								
							var disclike = document.getElementById('like-discussion');
								area.addEventListener( 
								'click', function () {
								disclike.classList.toggle("play")
														});
												
									
											
									</script>
						<p class="like-text">Like Discussion(1444)</p>
					</div>
					<p class="reply">Comment</p>
				</div>
			</div>
			<div class="comment-box">
				<div class="date-box">
					<div class="author-box">
						<p class="author">Started by:</p>  
						<img src="../images/users/user5.jpg" alt="" class="author-img">
						<div class="online-sign" data-title="online"></div>
						<a href="" class="author-link">Takumi</a>
					</div>
					
				</div>
				<div class="comment-container">
					<div class="comment-container-text">
						<p class="date">17.05.2019 | At 7:51 AM</p>
					
						<p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, nulla totam harum dolorum dignissimos ad unde sit delectus, quis ullam voluptatibus! Ipsum sunt est quis esse impedit, maiores perspiciatis recusandae.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, nulla totam harum dolorum dignissimos ad unde sit delectus, quis ullam voluptatibus! Ipsum sunt est quis esse impedit, maiores perspiciatis recusandae.
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, nulla totam harum dolorum dignissimos ad unde sit delectus, quis ullam voluptatibus! Ipsum sunt est quis esse impedit, maiores perspiciatis recusandae.</p>
						
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<h3 class="comments-header">(0) comments</h3>

	<div class="discussion-comment">

		

		<div class="posted-comment-container">
			<div class="posted-user">
				<img src="../images/users/user5.jpg" alt="" class="posted-comment-user-image">
				<div class="posted-comment-online"></div>
				<div class="posted-username-box">
				<p class="posted-username">Takumi</p>
				<p class="level">Rank: #21</p>
				<p class="level">Level: [Expert]</p>
				</div>
				
			</div>
		</div>
		<div class="posted-comment">
			<div class="comment-info">
				<p class="username-posted">Takumi, 18.05.2019 | At 6:04 PM</p>
				<div class="report-box">
							<img src="../images/construction/report.svg" alt="" class="report-icon">
							<p class="report">Report</p>
						</div>
			</div>
			<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni laborum velit officia totam nulla ipsa voluptatum porro, alias aspernatur modi perferendis obcaecati at repellat eius perspiciatis beatae, maxime, vero ipsum.</p>
			<div class="reply-comment-box">
				<img src="../images/construction/reply-icon.svg" alt="" class="reply-icon">
				<p class="reply-comment">Reply</p>
			</div>
		</div>
	</div>
	<div class="discussion-comment">

		

		<div class="posted-comment-container">
			<div class="posted-user">
				<img src="../images/users/user5.jpg" alt="" class="posted-comment-user-image">
				<div class="posted-comment-online"></div>
				<div class="posted-username-box">
				<p class="posted-username">Takumi</p>
				<p class="level">Rank: #21</p>
				<p class="level">Level: [Expert]</p>
				</div>
				
			</div>
		</div>
		<div class="posted-comment">
			<div class="comment-info">
				<p class="username-posted">Takumi replied, 18.05.2019 | At 6:04 PM</p>
				<div class="report-box">
							<img src="../images/construction/report.svg" alt="" class="report-icon">
							<p class="report">Report</p>
						</div>
			</div>
			
			<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni laborum velit officia totam nulla ipsa voluptatum porro, alias aspernatur modi perferendis obcaecati at repellat eius perspiciatis beatae, maxime, vero ipsum.</p>
			<div class="replied-to">Replied to:</div>
			<div class="reply-post-box">
				<div class="reply-post">
					<div class="reply-user-box">
						<img src="../images/users/NeiaLancia.jpg" alt="" class="reply-user-image">
						<div class="online-user-reply"></div>
						<div class="reply-user-nick">
							<p class="reply-username">Neia</p>
							<p class="level-reply">Rank: #21</p>
							<p class="level-reply">Level: [Expert]</p>
						</div>
					</div>
				</div>
				<div class="reply-text">
					<div class="reply-comment-info">
						<p class="username-reply">Takumi, 18.05.2019 | At 6:04 PM</p>

					</div>
					<p class="reply-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni laborum velit officia totam nulla ipsa voluptatum porro, alias aspernatur modi perferendis obcaecati at repellat eius perspiciatis beatae, maxime, vero ipsum.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="discussion-comment-create">

		

		<div class="post-comment-container">
			<div class="posted-user">
				<img src="../images/users/NeiaLancia.jpg" alt="" class="posted-comment-user-image">
				<div class="posted-comment-online"></div>
				<div class="posted-username-box">
					<p class="posted-username">Takumi</p>
					<p class="level">Rank: #21</p>
					<p class="level">Level: [Expert]</p>
				</div>
				
			</div>
		</div>
		<div class="my-text-area">
			<div class="edit-panel">
				<div class="bold-box">
					<img src="../images/construction/bold.svg" alt="" class="bold-icon">
			
				</div>
				<div class="bold-box">
					<img src="../images/construction/italic.svg" alt="" class="bold-icon">
			
				</div>
				<div class="bold-box">
					<img src="../images/construction/underline.svg" alt="" class="bold-icon">
				
				</div>
				<div class="bold-box">
					<img src="../images/construction/picture.svg" alt="" class="bold-icon">
			
				</div>
			</div>
			<input contenteditable="true" placeholder="Leave a comment..." type="text" class="post-comment">
		</div>
			
	</div>
	

	<?require '../footer/footer.php';?>
</body>
</html>

