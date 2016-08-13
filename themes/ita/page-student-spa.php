<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="banner">
			<img src="<?php bloginfo('template_url'); ?>/images/in-icon-act.png" />
			<h2 class="entry_title">
				<span><?php the_title(); ?></span>
			</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<article class="page">
						<div class="entry_content">
							<?php the_content(); ?>
						</div>
					</article>
				</div>
				
				<div class="col-md-3">
					<?php include (TEMPLATEPATH . '/sidebar-right.php'); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>