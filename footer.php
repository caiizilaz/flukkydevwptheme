
<div class="col-sm-12 footersidebar">
	<div class="footer-left col-sm-4">

		<h3>Category</h3>
	<ul class="list-unstyled">
		<?php
		$args=array(
			'orderby'=>'name',
			'order'=>'ASC'
		);
		$categories=get_categories($args);
		foreach($categories as $category){
			echo '<li><i class="glyphicon glyphicon-hand-right"></i><a href="'.get_category_link($category->term_id).'"
			title="'.sprintf( __( "View all posts in %s"),$category->name).'"'.'>
			'.$category->name.'</a> ('.$category->count.')</li>';
		}
		?>
	</ul>
	</div>
	<div class="footer-center col-sm-4">

	   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets Center') ) : ?><?php endif; ?>

	</div>

	<div class="footer-right col-sm-4">

	   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets Right') ) : ?><?php endif; ?>

	</div>

</div>
		<div class="col-sm-12 copyright">
		<div class="col-sm-4">
			<a href="<?php echo home_url(); ?>" title="<?php bloginfo('description'); ?>">
				Copyright &copy; 2016 <?php bloginfo('title'); ?>
			</a>
		</div>
		<div class="col-sm-4" style="padding-bottom: 10px;">
			<ul class="list-unstyled ulrow">
			<li><a href="http://facebook.com/zengorius" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.png" class="social-image hvr-bounce-in" alt="Facebook"></a></li>
			<li><a href="https://github.com/caiizilaz" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/github.png" class="social-image hvr-bounce-in" alt="Github"></a></li>
			</ul>
		</div>
		<div class="col-sm-4">
			<div class="social-likes" data-url="http://flukkydev-portblog.rhcloud.com/" data-title="Flukky.Dev">
				<div class="facebook" title="Share link on Facebook">Facebook</div>
				<div class="twitter" data-via="caiizilaz" title="Share link on Twitter">Twitter</div>
				<div class="plusone" title="Share link on Google+">Google+</div>
			</div>
		</div>
		</div>

	<?php wp_footer(); ?>
</body>
</html>