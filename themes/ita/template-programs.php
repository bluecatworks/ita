<?php /* Template Name: Programs */ ?>
<?php get_header(); ?>
	<?php wp_nav_menu( array( 'menu' => 'programs', 'theme_location' => 'header-menu', 'menu_class' => 'second-menu', 'container_class' => '') ); ?>
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
			<div class="schedule-link text-center">
				<a href="<?php bloginfo('template_url'); ?>/schedule-tour">Schedule Tour</a>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>