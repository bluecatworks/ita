<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="entry_image">
			<span class="to-blog"><a href="/blog" class="">&larr; Back to the BLog</a></span> 
			<span class="to-next"><?php previous_post_link('%link &rarr;'); ?></span> 
			<?php
			if ( has_post_thumbnail() )
			{
				the_post_thumbnail('full');
			}
			?>
			<div class="post-info">
				<span class="entry_date">
					<?php the_date(); ?>
				</span>
				<h2 class="new_entry_title">
					<?php the_title(); ?>
				</h2>
				<span class="author">By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span>
			</div>
		</div>

		<div class="container">
			<article class="post single">
				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
			<div class="bottom-a">
				<div class="row">
					<div class="col-md-4 mobile-display"><span>Share:</span> <?php echo do_shortcode('[wp_social_sharing social_options="facebook,twitter,linkedin" icon_order="f,t,g,l,p,x"  show_icons="1"]'); ?></div>
					<div class="col-md-4" style="padding-top: 13px"><a href="/blog" class="">&larr; Back to the BLog</a></div>
					<div class="col-md-4 mobile-hidden"><span>Share:</span> <?php echo do_shortcode('[wp_social_sharing social_options="facebook,twitter,linkedin" icon_order="f,t,g,l,p,x"  show_icons="1"]'); ?></div>
					<div class="col-md-4 text_right" style="padding-top: 13px"><?php previous_post_link('%link &rarr;'); ?></div>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>