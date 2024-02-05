<?
		$page = intval($_GET['number']);
		$page_number = 8*(intval($_GET['number']) - 1);
		if ($page_number==-8) {
			$page_number=0;
		};
		require('db.php');
		$posts = $pdo -> query("SELECT * FROM `create_post` ORDER BY `post_date` DESC LIMIT $page_number, 9");
		/*$student = $pdo -> query("SELECT * FROM `students` `schoolars`");
		print_r($student);
		foreach ($student as $key => $value) {
			echo $value['name'];
		}*/
		
?>





	<link rel="stylesheet" type="text/css" href="../images/construction/like-animation/sprite_60fps.css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="latest-posts-design.css">
	<div class="block-a1">
		
		<div class="block-left">
			
		
		
			<h2 class="header-latest-posts"><a style="color: black" name="latest-post">Collections</a></h2>

			<div class="block-latest-posts">
				
				<div class="block-1-2">
					<?foreach ($posts as $key => $post):
					?>
				
					<div class="post-box-container">
						<a href="
							<?
								$top = $post['category'];
								if ($top == "Top") {
									echo"pages-top/top-page.php?id=".$post['post_id'];
								}else{
									echo"pages/pages.php?id=".$post['post_id'];
								}
							?>">
						<img alt='' class="post-image" src=<?echo "../images/post-covers/" . $post['post_cover']?> >
						</a>
						<div class="post-info">
							<a href="
							<?
								$top = $post['category'];
								if ($top == "Top") {
									echo"pages-top/top-page.php?id=".$post['post_id'];
								}else{
									echo"pages/pages.php?id=".$post['post_id'];
								}
							?>" class="post-title"><?=$post['post_title']?></a> 
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
				
					<div class="pages-selector">
					<a href="" class="page-number" style="color: black;">«</a>
						<?$page_number;
						$mass_np = [];
						
						for ($i=$page; $i < $page+5; $i++) { 
							array_push($mass_np, $i);
						}

						foreach ($mass_np as $key => $value):
						?>
						
					<a class="page-number" style="color: black;" href=<?echo "http://www.anishrine/index.php?number=${value}#latest-post"?> ><?=$value;?></a>

					<?endforeach?>
					<a href="" class="page-number" style="color: black;">»</a>
					<!--  <a href="http://www.anishrine/index.php?number=2#latest-post" class="page-number">2</a>
					<a href="http://www.anishrine/index.php?number=3#latest-post" class="page-number">3</a>
					<a href="http://www.anishrine/index.php?number=4#latest-post" class="page-number">4</a>
					<a href="http://www.anishrine/index.php?number=5#latest-post" class="page-number">5</a>
					-->
					</div>
				
				</div>

			</div>

		</div>

</div>
