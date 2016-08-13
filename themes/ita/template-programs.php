<?php /* Template Name: Programs */ ?>
<?php get_header(); ?>
	<ul class="second-menu" data-tabs="tabs">
		<li class="active"><a href="<?php bloginfo('url'); ?>/clinical-esthetics/" data-toggle="tab">Clinical Esthetics</a></li>
		<li><a href="<?php bloginfo('url'); ?>/750-hour-esthetics-aesthetics-program" data-toggle="tab">750-Hour Esthetics</a></li>
		<li><a href="<?php bloginfo('url'); ?>/ce-continuing-education-classes" data-toggle="tab">Continuing Education</a></li>
		<li><a href="<?php bloginfo('url'); ?>/ma-program-description" data-toggle="tab">Medical assisting</a></li>
		<li><a href="<?php bloginfo('url'); ?>/laser-presented-by-ammp" data-toggle="tab">Laser (by AMMP)</a></li>
		<li><a href="<?php bloginfo('url'); ?>/international-students" data-toggle="tab">International Students</a></li>
	</ul>
	<?php if(have_posts()): the_post(); ?>
		<div class="banner">
			<img src="<?php bloginfo('template_url'); ?>/images/programs-banner.png" />
			<h2 class="entry_title">
				<span><?php the_title(); ?></span>
			</h2>
		</div>
		<div class="container">
			<article class="page">

				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>