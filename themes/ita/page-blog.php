<?php /* Template Name: Home page */ ?>

<?php get_header(); ?>

	<div class="container">
		<?php if(have_posts()): the_post(); ?>
		<div class="row">
			<div class="col-md-9">

				<div class="text_center">
						<h2 class="entry_title cufon_headings">
							<span>Blog</span>
						</h2>
				</div>

				<div class="post-list">
					<?php
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$wp_query = new WP_Query( array('post_type' => 'post', 'paged' => $paged) );

						// The Loop
						if ( $wp_query->have_posts() ) {
							while ( $wp_query->have_posts() ) { $wp_query->the_post(); ?>

							<div class="post-item">
								<div class="post-image">
									<?php the_post_thumbnail('full'); ?>
								</div> 
								<?php the_category(); ?>
								<h2 class="post-title"><?php the_title(); ?></h2>
								<div class="date"><?php the_date(); ?></div>
								<?php the_content(); ?>
								<a href="<?php the_permalink(); ?>" class="more">Read more</a>

								<div class="row dotted">
									<div class="col-md-6 col-xs-6">
										<?php echo do_shortcode('[wp_social_sharing social_options="facebook,twitter,linkedin" icon_order="f,t,g,l,p,x"  show_icons="1"]'); ?>
									</div>
									<div class="col-md-6  col-xs-6 text-center author"> 
										By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
									</div>
								</div>

							</div>

							<?php }
						}
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

			</div>
			<div class="col-md-3">
				<?php include (TEMPLATEPATH . '/sidebar-right.php'); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>