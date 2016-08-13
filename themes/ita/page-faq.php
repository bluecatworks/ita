<?php get_header(); ?>
	<ul class="second-menu" data-tabs="tabs">
		<li class="active"><a href="#qa" data-toggle="tab">Q&A with Dr. Doran</a></li>
		<li><a href="#fa" data-toggle="tab">Financial assistance</a></li>
		<li><a href="#is" data-toggle="tab">International Students</a></li>
	</ul>
	<script>
		$(function() {
			$('.qa .item .q').on('click', function() {
				$(this).next().slideToggle();
			});
		});
	</script>
	<?php if(have_posts()): the_post(); ?>
		<div class="banner">
			<img src="<?php bloginfo('template_url'); ?>/images/faqbanner.png" />
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