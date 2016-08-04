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
				<li class="featured featured_container1 imageslide" style="display: block; z-index: 1; left: 0px; width: 610px;">
					<img src="<?php bloginfo('template_url'); ?>/images/crousel-1.png" title="skin-care" alt="" style="opacity: 1; visibility: visible; display: block;">
					<div class="slideshow_caption" style="display: block; opacity: 1; bottom: -340px;">
						<div class="inner_caption">
							<h1>Skin Care</h1>
							<div class="featured_caption">
								<a href="http://itaskinbeauty.com/esthetics-program/">Esthetics</a><br>
								<a href="?page_id=1024">Postgraduate Esthetics Training</a><br>
								<a href="?page_id=1041">Continuing Education Classes</a><br>
								<a href="?page_id=1177">Laser Certification (by AMMP)</a>
							</div>
						</div>
					</div>
				</li>
				<li class="featured featured_container2 imageslide" style="display: block; z-index: 2; left: 195px; width: 610px;">
					<img src="<?php bloginfo('template_url'); ?>/images/crousel-2.png" title="adv-training" alt="" style="opacity: 1; visibility: visible; display: block;">
					<div class="slideshow_caption" style="display: block; opacity: 1; bottom: -340px;">
						<div class="inner_caption">
							<h1>Advanced Training</h1>
							<div class="featured_caption">
								<a href="?page_id=1024">Postgraduate Esthetics Training</a><br>
								<a href="?page_id=1041">Continuing Education Classes</a><br>
								<a href="?page_id=1177">Laser Certification (by AMMP)</a><br>
								<a href="?page_id=1182">Licensing</a><br>
								<a href="?page_id=2">Calendar</a>
							</div>
						</div>
					</div>
				</li>
				<li class="featured featured_container3 imageslide" style="display: block; z-index: 3; left: 390px; width: 610px;">
					<img src="<?php bloginfo('template_url'); ?>/images/crousel-3.png" title="health-care" alt="" style="opacity: 1; visibility: visible; display: block;">
					<div class="slideshow_caption" style="display: block; opacity: 1; bottom: -340px;">
						<div class="inner_caption">
							<h1>Health Care</h1>
							<div class="featured_caption">
								<a href="?page_id=1054">Certified Medical Assistant Program</a><br>
								<a href="?page_id=1188">Externship</a><br>
								<a href="?page_id=1173">National Certification</a><br>
								<a href="?page_id=1060">Career Opportunities</a><br>
								<a href="?page_id=1067">Financial Assistance</a><br>
								<a href="?page_id=1177">Laser Certification (by AMMP)</a>
							</div>
						</div>
					</div>
				</li>
				<li class="featured featured_container4 imageslide" style="display: block; z-index: 4; left: 585px; width: 610px;">
					<img src="<?php bloginfo('template_url'); ?>/images/crousel-4.png" title="ce-classes" alt="" style="opacity: 1; visibility: visible; display: block;">
					<div class="slideshow_caption" style="display: block; opacity: 1; bottom: -340px;">
						<div class="inner_caption">
							<h1>CE Classes</h1>
							<div class="featured_caption">
								<a href="?page_id=1024">Postgraduate Esthetics Training</a><br>
								<a href="?page_id=1041">Continuing Education Classes</a><br>
								<a href="?page_id=1177">Laser Certification (by AMMP)</a><br>
								<a href="?page_id=1041">Terms and Conditions</a><br>
								<a href="?page_id=2">Calendar</a>
							</div>
						</div>
					</div>
				</li>
				<li class="featured featured_container5 imageslide" style="display: block; z-index: 5; left: 780px; width: 610px;">
					<img src="<?php bloginfo('template_url'); ?>/images/crousel-5.png" title="student-spa" alt="" style="opacity: 1; visibility: visible; display: block;">
					<div class="slideshow_caption" style="display: block; opacity: 1; bottom: -340px;">
						<div class="inner_caption">
							<h1>Student Spa</h1>
							<div class="featured_caption">
								<a href="?page_id=773">About Spa</a><br>
								<a href="?page_id=773">Available Treatments</a><br>
								<a href="?page_id=773">Price List</a><br>
								<a href="?page_id=773">Special Offers</a><br>
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

					<?php echo do_shortcode('[metaslider id=16]'); ?>

					<div class="text_center">
						<h2 class="entry_title">
							<span><?php the_title(); ?></span>
						</h2>
					</div>

					<div class="entry_content">
						<?php the_content(); ?>
					</div>
				</article>
			</div>
			<div class="col-md-3">
				<?php include (TEMPLATEPATH . '/sidebar-right.php'); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>