<?php /* Template Name: Gallery */ ?>
<?php get_header(); ?>
	<ul class="second-menu" data-tabs="tabs">
		<li class="active"><a href="<?php bloginfo('url'); ?>/gallery" data-toggle="tab">Classes</a></li>
		<li><a href="<?php bloginfo('url'); ?>/fun-times-gallery" data-toggle="tab">Fun Times</a></li>
		<li><a href="<?php bloginfo('url'); ?>/students-gallery" data-toggle="tab">Students</a></li>
		<li><a href="<?php bloginfo('url'); ?>/community-outreach" data-toggle="tab">Community Outreach</a></li>
	</ul>
	<?php if(have_posts()): the_post(); ?>
		<div class="container big">
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