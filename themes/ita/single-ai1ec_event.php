<?php get_header(); ?>

	<?php if(have_posts()): the_post(); ?>
		<div class="container">
			<article class="post single">
				<h2 class="new_entry_title">
					<?php the_title(); ?>
				</h2>
				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
			<div class="bottom-a">
				<div class="row">
					<div class="col-md-4 mobile-display"><span>Share:</span> <?php echo do_shortcode('[wp_social_sharing social_options="facebook,twitter,linkedin" icon_order="f,t,g,l,p,x"  show_icons="1"]'); ?></div>
					<div class="col-md-4" style="padding-top: 13px"></div>
					<div class="col-md-4 mobile-hidden"><span>Share:</span> <?php echo do_shortcode('[wp_social_sharing social_options="facebook,twitter,linkedin" icon_order="f,t,g,l,p,x"  show_icons="1"]'); ?></div>
					<div class="col-md-4 text_right" style="padding-top: 13px"></div>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>