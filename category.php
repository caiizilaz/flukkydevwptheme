<?php get_header(); ?>
<div class="mainindex" style="margin-top: 30px;">
	<div class="container">
		<div class="text-center">
			<h1><?php single_cat_title(); ?></h1>
		</div>
	</div>
	<div class="container">
		<div class="col-sm-12">

			<?php if (have_posts() ) : while (have_posts() ) : ?>
			<div class="hvr-glow animated flipInX col-sm-4" style="padding-bottom: 50px;"> <?php the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				<?php if (has_post_thumbnail()): ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('grid', array('alt' => get_the_title(), 'class' => 'img-responsive' )) ?></a>
				<?php else: ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/600x450.png" title="<?php echo get_the_title(); ?>" class="img-responsive"></a>
				<?php endif ?>
				</a>
				<h3><strong><a href="<?php the_permalink(); ?>" title="คลิ๊กเพื่ออ่านบทความ<?php the_title(); ?>">
					<?php the_title(); ?>
				</a></strong></h3>
				<div>
					<?php echo iconv_substr(get_the_excerpt(),0,50,"UTF-8").'<a href="the_permalink();">...</a>'; ?>
				</div>
			</div>
	<?php endwhile; ?>
	<div class="paginationme col-sm-12" style="padding-bottom: 50px; margin-top: 20px;">
	<div class="col-sm-6 nav-next">
	<?php previous_posts_link( '<button class="hvr-radial-in btn btn-lg btn-info"><i class="glyphicon glyphicon-arrow-left"></i> Newer posts</button>' ); ?></div>
	<div class="col-sm-6 nav-previous"><?php next_posts_link( '<button class="hvr-radial-in btn btn-lg btn-info">Older posts <i class="glyphicon glyphicon-arrow-right"></i></button>' ); ?></div>
	</div>
	</div>
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>