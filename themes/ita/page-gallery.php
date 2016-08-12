<?php get_header(); ?>
	<ul class="second-menu" data-tabs="tabs">
		<li class="active"><a href="" data-toggle="tab">Classes</a></li>
		<li><a href="" data-toggle="tab">Fun Times</a></li>
		<li><a href="" data-toggle="tab">Students</a></li>
		<li><a href="" data-toggle="tab">Community Outreach</a></li>
	</ul>
	<?php if(have_posts()): the_post(); ?>
		<div class="container big">
			<script>
				$(function() {
					$('.grid').masonry();
					$('.grid .item a').magnificPopup({
						type: 'image',
						closeOnContentClick: true,
						mainClass: 'mfp-img-mobile',
						image: {
							verticalFit: true
						}
					});
				});
			</script>
			<div class="grid">
				<div class="item">
					<a href="<?php bloginfo('template_url'); ?>/images/Facial-Procedures-25.jpg"><img src="<?php bloginfo('template_url'); ?>/images/g1.png"></a>
				</div>
				<div class="item item-height-2">
					<a href="<?php bloginfo('template_url'); ?>/images/High-frequency-1.jpg"><img src="<?php bloginfo('template_url'); ?>/images/g2.png"></a>
				</div>
				<div class="item">
					<a href="<?php bloginfo('template_url'); ?>/images/Airbrush-Makeup-3.jpg"><img src="<?php bloginfo('template_url'); ?>/images/g3.png"></a>
				</div>
				<div class="item">
					<a href="<?php bloginfo('template_url'); ?>/images/Facial-Procedures-21.jpg"><img src="<?php bloginfo('template_url'); ?>/images/g4.png"></a>
				</div>
				<div class="item">
					<a href="<?php bloginfo('template_url'); ?>/images/2010-Marklund-Gala-3.jpg"><img src="<?php bloginfo('template_url'); ?>/images/g5.png"></a>
				</div>
				<div class="item item-width-2 item-height-2">
					<a href="<?php bloginfo('template_url'); ?>/images/Dermaroller-Seminar-4.jpg"><img src="<?php bloginfo('template_url'); ?>/images/g6.png"></a>
				</div>
				<div class="item item-width-2">
					<a href="<?php bloginfo('template_url'); ?>/images/Birthday.jpg"><img src="<?php bloginfo('template_url'); ?>/images/g7.png"></a>
				</div>
			</div>

			<div class="text-center show-more">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/showmore.svg"></a>
			</div>	
		</div>
	<?php endif; ?>

<?php get_footer(); ?>