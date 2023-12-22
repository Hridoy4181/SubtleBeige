<!-- page.php works when you go to a page -->

<?php get_header(); ?>

	<div id="pageContent">

<?php
while ( have_posts() ) :
	the_post();
	?>

			<div class="articleTitle"><?php the_title(); ?></div>

	<?php the_post_thumbnail(); ?>


			<div class="articleContent"><?php the_content(); ?></div>

<?php endwhile; ?>

	</div>

<!-- to remove footer from page.php -->
<!-- <?php get_footer(); ?> -->
