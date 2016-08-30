<?php /* Template Name: Programs */ ?>
<?php get_header(); ?>
	
	<script type="text/javascript">
		$(function() {
			$('.item .q').on('click', function() {
				$(this).next().slideToggle();
			});
		});
	</script>
	<?php if(have_posts()): the_post(); ?>
		<div class="banner">
			<img src="<?php bloginfo('template_url'); ?>/images/programs-banner.png" />
			<h2 class="entry_title">
				<span><?php the_title(); ?></span>
			</h2>
		</div>

			<?php wp_nav_menu( array( 'menu' => 'programs', 'theme_location' => 'header-menu', 'menu_class' => '', 'container_class' => 'sidemenu') ); ?>
		<div class="container small">
			<article class="page">

				<div class="entry_content qa">
					<?php the_content(); ?>
				</div>
			</article>
			<div class="schedule-link text-center">
				<a href="<?php bloginfo('template_url'); ?>/schedule-tour">Schedule Tour</a>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>