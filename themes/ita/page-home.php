<?php /* Template Name: Home page */ ?>

<?php get_header(); ?>

	<div class="container slideshow_big">
		<div class="autoslide_true autoslidedelay__5 slideshow_aviacordion aviacordion slideshow_container">
			<span class="rounded_corner rctl"></span>
			<span class="rounded_corner rctr"></span>
			<span class="rounded_corner rcbl"></span>
			<span class="rounded_corner rcbr"></span>
			<span class="bottom_shadow"></span>
			<ul class="slideshow" style="height: 194px; width: 100%">
				<li class="featured featured_container1 imageslide" style="display: block; z-index: 1; left: 0px; width: 668px;">
					<img src="<?php bloginfo('template_url'); ?>/images/slider-11.jpg" title="skin-care" alt="" style="opacity: 1; visibility: visible; display: block;">
					<div class="slideshow_caption" style="display: block; opacity: 1; bottom: -340px;">
						<div class="inner_caption">
							<h1>Skin Care</h1>
							<div class="featured_caption">
								<a href="<?php bloginfo('url'); ?>/750-hour-esthetics-aesthetics-program">Esthetics (Aesthetics)</a><br>
								<a href="<?php bloginfo('url'); ?>/clinical-esthetics/">Clinical Esthetics</a><br>
								<a href="<?php bloginfo('url'); ?>">Hands on practices</a><br>
								<a href="<?php bloginfo('url'); ?>">Curriculum</a><br>
								<a href="<?php bloginfo('url'); ?>">Additional Certification</a><br>
								<a href="<?php bloginfo('url'); ?>">Career outlook</a><br>
								<a href="<?php bloginfo('url'); ?>/laser-presented-by-ammp/">Laser Certification (by AMMP)</a>
								<a href="<?php bloginfo('url'); ?>">Start Dates</a>
							</div>
						</div>
					</div>
				</li>
				<li class="featured featured_container2 imageslide" style="display: block; z-index: 2; left: 195px; width: 668px;">
					<img src="<?php bloginfo('template_url'); ?>/images/slider-12.jpg" title="adv-training" alt="" style="opacity: 1; visibility: visible; display: block;">
					<div class="slideshow_caption" style="display: block; opacity: 1; bottom: -340px;">
						<div class="inner_caption">
							<h1>Advanced Training/CE</h1>
							<div class="featured_caption">
								<a href="<?php bloginfo('url'); ?>/advanced-esthetics-training/">Postgraduate Clinical Esthetics</a><br>
								<a href="<?php bloginfo('url'); ?>/ce-continuing-education-classes/">Continuing Education</a><br>
								<a href="<?php bloginfo('url'); ?>">Certification</a><br>
								<a href="<?php bloginfo('url'); ?>/laser-presented-by-ammp/">Laser training by AMMP</a>
								<a href="<?php bloginfo('url'); ?>/licensing">Terms and Conditions</a><br>
								<a href="?<?php bloginfo('url'); ?>/calendar">Calendar</a>
							</div>
						</div>
					</div>
				</li>
				<li class="featured featured_container3 imageslide" style="display: block; z-index: 3; left: 390px; width: 668px;">
					<img src="<?php bloginfo('template_url'); ?>/images/slider-13.jpg" title="health-care" alt="" style="opacity: 1; visibility: visible; display: block;">
					<div class="slideshow_caption" style="display: block; opacity: 1; bottom: -340px;">
						<div class="inner_caption">
							<h1>Certified Medical Assistant Program</h1>
							<div class="featured_caption">
								<a href="<?php bloginfo('url'); ?>/ma-program-description/">Clinical MA</a><br>
								<a href="<?php bloginfo('url'); ?>/externship">Administrative MA</a><br>
								<a href="<?php bloginfo('url'); ?>/externship">EKG training</a><br>
								<a href="<?php bloginfo('url'); ?>/externship">Phlebotomy training</a><br>
								<a href="<?php bloginfo('url'); ?>/national-certification">National Certification</a><br>
								<a href="<?php bloginfo('url'); ?>/externship">Curriculum</a><br>
								<a href="<?php bloginfo('url'); ?>/cma-career-opportunities">Career outlook</a><br>
								<a href="<?php bloginfo('url'); ?>/externship">Start Dates</a><br>
							</div>
						</div>
					</div>
				</li>
				<li class="featured featured_container5 imageslide" style="display: block; z-index: 5; left: 780px; width: 668px;">
					<img src="<?php bloginfo('template_url'); ?>/images/slider-15.jpg" title="student-spa" alt="" style="opacity: 1; visibility: visible; display: block;">
					<div class="slideshow_caption" style="display: block; opacity: 1; bottom: -340px;">
						<div class="inner_caption">
							<h1>Student Spa</h1>
							<div class="featured_caption">
								<a href="<?php bloginfo('url'); ?>/student-spa/">About Spa</a><br>
								<a href="<?php bloginfo('url'); ?>/student-spa/">Available Treatments</a><br>
								<a href="<?php bloginfo('url'); ?>/student-spa/">Price List</a><br>
								<a href="<?php bloginfo('url'); ?>/student-spa/">Special Offers</a><br>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="container">
		<?php if(have_posts()): the_post(); ?>
		<div class="row">
			<div class="col-md-9">
				<article class="page">

					<?php //echo do_shortcode('[metaslider id=16]'); ?>

					<div class="text_center">
						<h2 class="entry_title">
							<span><?php the_title(); ?></span>
						</h2>
					</div>

					<div class="entry_content">
						<?php the_content(); ?>
					</div>
				</article>
				
				<div class="hr"></div>

				<div class="row new-row">
					<div class="col-md-4">
						<h2 class="content-title"><?php echo get_the_title(13); ?></h2>
						<div class="relative">
							<?php echo get_the_post_thumbnail(13); ?>
							<div class="white-mask"></div>
						</div>
						<div class="chapter"><?php echo get_the_excerpt(13); ?></div>
						<a href="<?php echo get_the_permalink(13); ?>" class="more">Read more</a>
					</div>
					<div class="col-md-4">
						<h2 class="content-title"><?php echo get_the_title(20); ?></h2>
						<div class="relative">
							<?php echo get_the_post_thumbnail(20); ?>
							<div class="white-mask"></div>
						</div>
						<div class="chapter"><?php echo get_the_excerpt(20); ?></div>
						<a href="<?php echo get_the_permalink(20); ?>" class="more">Read more</a>
					</div>
					<div class="col-md-4">
						<h2 class="content-title"><?php echo get_the_title(22); ?></h2>
						<div class="relative">
							<?php echo get_the_post_thumbnail(22); ?>
							<div class="white-mask"></div>
						</div>
						<div class="chapter"><?php echo get_the_excerpt(22); ?></div>
						<a href="<?php echo get_the_permalink(22); ?>" class="more">Read more</a>
					</div>
				</div>

			</div>
			<div class="col-md-3">
				<?php include (TEMPLATEPATH . '/sidebar-right.php'); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>