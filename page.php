<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="container">
		<?php the_content(); ?>
		<hr>
<?php endwhile; ?>
<?php endif; ?>
	</div>

<?php get_footer(); ?>