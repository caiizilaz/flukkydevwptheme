<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

	<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large', array('class'=>'full-width')); ?>

	<?php endif; ?>

	<div class="container" style="margin-top: 20px;">
		<div class="page-header">
			<h1 id="<?php the_ID(); ?>"><?php the_title(); ?>
				<?php
				$categories = get_the_category();
				foreach($categories as $category){
					echo '<a href="'.get_category_link($category->term_id).'" class="btn btn-default">
					'.$category->cat_name.'</a>';
				}
				?>
				<?php
				$tags = get_the_tags();
				if($tags){
				foreach($tags as $tag){
					echo '<a href="'.get_tag_link($tag->term_id).'" class="btn btn-info">
					'.$tag->name.'</a>';
				}
				}
				?>
			</h1>
		</div>

		<?php the_content(); ?>
		<hr>
		<?php comments_template(); ?>

<?php endwhile; ?>
<?php endif; ?>
	<ul class="pager">
		<li class="next"><?php next_post_link('%link'); ?></li>
		<li class="previous"><?php previous_post_link('%link'); ?></li>
	</ul>
	</div>
<?php get_footer(); ?>