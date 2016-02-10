<?php get_header(); ?>

<div class="mainindex">
		<div class="jumbotron" style="padding:10% 0%;">
			<div class="container">
                <div class="row">
                	<div class="text-center">
                    <div>
                        <h1>WELCOME TO FLUKKY.DEV</h1>
                        <p>Web Development Services and Give You Development Knowledge.</p>
                    </div>
                	</div>
            </div>
			</div>
		</div>
		<hr class="style17">
<section id="about" class="section--white" style="margin-top:30px;margin-bottom:30px;">

	<div class="tile-container">
		<div class="col-sm-1"></div>
		<div class="hvr-underline-from-center col-sm-2 tile" data-cta-target=".js-modal-1" data-disable-scroll=true><img data-cta-target=".js-modal-1" src="<?php echo get_template_directory_uri(); ?>/images/iconcta/about.png"></div>
		<div class="hvr-underline-from-center col-sm-2 tile" data-cta-target=".js-modal-2" data-disable-scroll=true><img data-cta-target=".js-modal-2" src="<?php echo get_template_directory_uri(); ?>/images/iconcta/works.png"></div>
		<div class="hvr-underline-from-center col-sm-2 tile" data-cta-target=".js-modal-3" data-disable-scroll=true><img data-cta-target=".js-modal-3" src="<?php echo get_template_directory_uri(); ?>/images/iconcta/service.png"></div>
		<div class="hvr-underline-from-center col-sm-2 tile" data-cta-target=".js-modal-4" data-disable-scroll=true><img data-cta-target=".js-modal-4" src="<?php echo get_template_directory_uri(); ?>/images/iconcta/profilet.png"></div>
		<div class="hvr-underline-from-center col-sm-2 tile" data-cta-target=".js-modal-5" data-disable-scroll=true><img data-cta-target=".js-modal-5" src="<?php echo get_template_directory_uri(); ?>/images/iconcta/resource.png"></div>
		<div class="col-sm-1"></div>
	</div>
</section>
<hr class="style17">

<div class="js-modal-1  modal  modal--1">
	<span class="modal-close-btn"></span>
	<h1 class="text-center">ABOUT ME</h1>

	<div class="quote-box">
		<div class="quote-box__bubble">สวัสดีผู้เยี่ยมชมและยินดีต้อนรับเข้าสู่เว็บไซต์ของผมครับ ผมมีชื่อเล่นว่าฟลุค ปัจจุบันทำงานประจำเป็นเว็บโปรแกรมเมอร์อยู่ที่บริษัทเอกชนแห่งหนึ่งครับ
ซึ่งจุดประสงค์ที่ผมทำเว็บไซต์นี้ขึ้นมาเพื่อแบ่งปันความรู้รวมถึงเทคโนโลยีต่างๆให้ทุกท่านได้ศึกษาและอ่านกันครับ โดยหลักๆ เนื้อหาในบล็อก จะประกอบไปด้วย การพัฒนาเว็บไซต์,ข่าวด้านเทคโนโลยี และสุดท้ายอาจจะรวมไปถึงประสบการณ์เล็กๆน้อยๆที่ผมได้พบเจอมา
จริงๆแล้วขอบเขตของบล็อก ผมก็ยังไม่ได้กำหนดตายตัวเท่าไหร่ เพราะอยากเขียนอะไรหลายๆอย่างเหมือนกันครับ แต่เนื่องจากยังเป็นมือใหม่ในการเขียนบทความอยู่เลยขอกำหนด scope แคบๆ ไว้เท่านี้ก่อนครับ ยังไงก็ฝากทุกๆท่านติดตามกันด้วยนะครับ หากท่านใดมีข้อสงสัยหรือข้อแนะนำอะไร ติดต่อผมได้ในส่วนของ Contact นะครับ ขอบคุณครับ
		</div>
	</div>
</div>
<div class="js-modal-2  modal  modal--2">
	<span class="modal-close-btn"></span>
	<h1 style="color: red;" class="text-center">WORKS WILL USABLE SOON</h1>
</div>
<div class="js-modal-3  modal  modal--3">
	<span class="modal-close-btn"></span>
	<h1 style="color: red;" class="text-center">SERVICES WILL USABLE SOON</h1>
</div>
<div class="js-modal-4  modal  modal--4">
	<span class="modal-close-btn"></span>
	<h1 class="text-center">PROFILE</h1>
	<div class="quote-box">
		<div class="quote-box__bubble"></div>
	</div>
</div>
<div class="js-modal-5  modal  modal--5">
	<span class="modal-close-btn"></span>
	<h1 style="color: red;" class="text-center">RESOURCE WILL USABLE SOON</h1>
</div>

	<div id="blog" class="container">
		<div class="col-sm-12">
			<div class="text-center">
				<h1>BLOG</h1>
			</div>

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

<script>
	var closeFn;
	function closeShowingModal() {
		var showingModal = document.querySelector('.modal.show');
		if (!showingModal) return;
		showingModal.classList.remove('show');
		document.body.classList.remove('disable-mouse');
		document.body.classList.remove('disable-scroll');
		if (closeFn) {
			closeFn();
			closeFn = null;
		}
	}
	document.addEventListener('click', function (e) {
		var target = e.target;
		if (target.dataset.ctaTarget) {
			closeFn = cta(target, document.querySelector(target.dataset.ctaTarget), { relativeToWindow: true }, function showModal(modal) {
				modal.classList.add('show');
				document.body.classList.add('disable-mouse');
				if(target.dataset.disableScroll){
					document.body.classList.add('disable-scroll');
				}
			});
		}
		else if (target.classList.contains('modal-close-btn')) {
			closeShowingModal();
		}
	});
	document.addEventListener('keyup', function (e) {
		if (e.which === 27) {
			closeShowingModal();
		}
	})

</script>