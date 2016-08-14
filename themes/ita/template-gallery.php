<?php /* Template Name: Gallery */ ?>
<?php get_header(); ?>
	<?php wp_nav_menu( array( 'menu' => 'gallery', 'theme_location' => 'header-menu', 'menu_class' => 'second-menu', 'container_class' => '') ); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="container big gallery_page">
			<script>
				$(function() {
					$('.gallery-item a').magnificPopup({
						type: 'image',
						closeOnContentClick: true,
						mainClass: 'mfp-img-mobile',
						image: {
							verticalFit: true
						}
					});
				});
			</script>
			
			<article class="page">
				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>