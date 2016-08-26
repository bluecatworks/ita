
<div class="sidebar-right">
	<?php if(is_page('blog')) { ?>
		<h3>Categories</h3>
		<div class="cats">
		<?php $args = array(
			'exclude'  =>  array('6', '7', '5'),
			'title_li'            => __( '' ),
			); ?>
		<?php echo wp_list_categories($args); ?>
		</div>
		<?php } ?>
	<div class="block info">
		830 N. Meacham Road,<br>
		Schaumburg, IL 60173<br>
		Tel: 847-995-1932 
	</div>

	<div class="block contact">
		<h2 class="block-title">Contact Us</h2>
		<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
	</div>

	<div class="block-image">
		<img src="<?php bloginfo('template_url'); ?>/images/our_blogs.png" alt="">
		<a href="<?php echo get_site_url();  ?>/blog" class="position-center">ITA BLOG</a>
		<div class="white-mask"></div>
	</div>

	<a class="block-link" href="<?php echo get_site_url();  ?>/calendar-2">Calendar</a>
</div>