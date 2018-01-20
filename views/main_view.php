<?php if (isset($posts)) {
	while($row = $posts->fetch_assoc()) { ?>

	<div class="col-md-12 blog-post">
		<div class="post-title">
			<a href="topic/view/<?php echo $row["id"] ?>"><h1><?php echo $row["title"] ?></h1></a>
		</div>  
		<div class="post-info">
			<span>November 23, 2016 / by <a href="#" target="_blank"><?php echo $row["autor"] ?></a></span>
		</div>  
		<p><?php echo string_limiter($row["content"]) ?></p>
		<a href="single.html" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
	</div>
<?php } 
} ?>