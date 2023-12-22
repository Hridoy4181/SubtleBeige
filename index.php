<!-- to add the the header file -->
<?php get_header(); ?>

	<div id="pageContent">

<?php
while ( have_posts() ) :
	the_post();
	?>

			<div class="articleTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

	<?php the_post_thumbnail(); ?>

			<div class="articleContent"><?php the_content(); ?></div>

<?php endwhile; ?>

	</div>

<!-- to add the footer file -->
<?php get_footer(); ?>
