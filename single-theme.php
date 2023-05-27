
<?php get_header(); ?>
<body id="news_210729_01" class="news second peace">
	<!-- header start -->
	<header>
		<?php include('include/header.php'); ?>
	</header>
	<!-- header end -->
	<!--container start -->
	<div id="container">


		<!-- main start -->
		<div id="main">
		<?php while (have_posts()) : the_post();
                            ?>

		
			<h3><?php the_title(); ?></h3>
			
			<div class="news__tabpanel__detailsblock">
                                   
								   <?php the_content(); ?>
							   </div>


		</div>
		<?php endwhile; ?>
		<!-- main end -->
		
		
		
		
		<!-- smenu start -->
		<div id="smenu">
			<?php include('include/smenu_news.php'); ?>
		</div>
		<!-- smenu end -->
		
	</div>
	<!--container end -->
	<!-- footer start -->
	<footer>
		<?php include('footer.php'); ?>
	</footer>
	<!-- footer end -->
</body>
</html>
