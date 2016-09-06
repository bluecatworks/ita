<?php get_header(); ?>
	<script>
		$(function() {
			$('.qa .item .q').on('click', function() {
				$(this).next().slideToggle();
			});
		});

		window.onhashchange = function() {
		$('.active').removeClass('active');
		var hash = window.location.hash;
		$( "a[href='"+hash+"']" ).addClass('active');
	}
	</script>
	<?php if(have_posts()): the_post(); ?>
			<div class="sidemenu">
				<ul>
					<li><a href="#qa" class="active">Q&A with Dr. Doran</a></li>
					<li><a href="#fa">Financial Assistance</a></li>
				</ul>
			</div>
		<div class="banner">
			<img src="<?php bloginfo('template_url'); ?>/images/faqbanner.png" />
			<h2 class="entry_title" id="qa">
				<span><?php the_title(); ?></span>
			</h2>
		</div>
		<div class="container small">
			<article class="page">
				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
		
			<div class="schedule-link text-center">
				<a href="<?php bloginfo('template_url'); ?>/schedule-tour">Schedule Tour</a>
			</div>
	<?php endif; ?>

<?php get_footer(); ?>