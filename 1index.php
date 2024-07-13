<?php include "includes/db.php";?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

    
<main id="blog">
	<!-- Home Banner -->
	<section class="page-title bg-gray-1 blog-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 white-color text-center">
					<h1>Blog</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Home Banner -->

	<!-- Blog List -->
	<section class="blog-listing">
		<div class="container">
			<div class="row align-items-start">
				<!-- Blog -->
				<div class="col-lg-8 my-3">
					<div class="row">

					<?php
						$query = "SELECT * FROM posts";
						$query_result = mysqli_query($connection, $query);
						if (!$query_result) {
							die("Query Failed " . mysqli_error($connection));
						}
						while ($row = mysqli_fetch_assoc($query_result)) {
							$post_id = $row['post_id'];
							$post_title = $row['post_title'];
							$post_author = $row['post_author'];
							$post_date = $row['post_date'];
							$post_image = $row['post_image'];
							$post_content = substr($row['post_content'], 0, 200);
							?>

					

							<!-- Post 1 -->
							<div class="col-sm-6">
								<div class="blog-post">
									<div class="blog-img">
										<a href="">
											<img src="images/<?php echo $post_image?>" title="" alt="">
										</a>
									</div>
									<div class="blog-info">
										<h6><a href=""><?php echo $post_title?></a></h6>
										<p><p> <?php echo $post_content?></p></p>
										<div class="btn-bar">
											<a href="" class="px-btn-arrow">
												<span>Read More</span>
												<i class="arrow"></i>
											</a>
										</div>
									</div>
								</div>
							</div>

							<?php
						}
					?>





					<!-- Post 2 -->
					<div class="col-sm-6">
						<div class="blog-post">
							<div class="blog-img">
								<a href="">
									<img src="assets/img/1.png" title="" alt="">
								</a>
							</div>
							<div class="blog-info">
								<h6><a href="">Best Practices for MySQL Database Optimization</a></h6>
								<p><p>Boost the performance of your MySQL database with these five (5) best practices for optimization. Learn about indexing, query optimization, server configuration, database design, and regular maintenance to improve your application's speed and reliability. Get expert tips and code examples to implement.</p></p>
								<div class="btn-bar">
									<a href="" class="px-btn-arrow">
										<span>Read More</span>
										<i class="arrow"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

						<div class="col-12 text-center">
							<div class="paginate d-inline-block">
							</div>
						</div>
					</div>
				</div>

<?php include "includes/author.php"?>
			</div>
		</div>
	</section>
	<!-- End Blog List -->
</main>


 <?php include "includes/footer.php" ?>