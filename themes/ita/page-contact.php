<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="container">
			<div class="col-sm-9">
				<article class="page">
					<div class="text-center">
						<h2 class="entry_title">
							<span><?php the_title(); ?></span>
						</h2>
					</div>
					<div class="entry_content">
						<?php the_content(); ?>

						<h3>Location</h3>
						<div class="row info">
							<div class="col-sm-6">
								830 N. Meacham Road, Schaumburg,<br>
								IL 60173
							</div>
							<div class="col-sm-6">
								Tel: 847-995-1932<br>
								Fax: 847-995-1936
							</div>
						</div>

						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2962.923348975538!2d-88.04819608455365!3d42.04482397920938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880faf992d41c65b%3A0xab161a61694d94de!2s830+N+Meacham+Rd%2C+Schaumburg%2C+IL+60173!5e0!3m2!1sru!2s!4v1470643549152" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>

						<h3>Contact form</h3>

						<?php echo do_shortcode('[contact-form-7 id="41" title="Contact page form"]'); ?>
					</div>
				</article>
				<div class="schedule-link text-center">
					<a href="<?php bloginfo('template_url'); ?>/schedule-tour">Schedule Tour</a>
				</div>
			</div>

			<div class="col-sm-3">
				<?php include (TEMPLATEPATH . '/sidebar-right.php'); ?>
			</div>	
		</div>
	<?php endif; ?>

<?php get_footer(); ?>