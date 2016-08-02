<?php get_header(); ?>
	
	<div>
		<?php
		if(have_posts())
			get_template_part('content', get_post_type());
		?>
		<div class="paginate">
			<?php
				$big = 999999999;

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );
			?>
		</div>
	</div>
	
<?php get_footer(); ?>