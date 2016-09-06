<?php get_header(); ?>
	<div class='container'>
<?php if ( have_posts() ) : ?>

<!-- Add the pagination functions here. -->

<!-- Start of the main loop. -->
<?php while ( have_posts() ) : the_post();  ?>


	<article class="post">
		<h2 class="entry_title">
			<span><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
		</h2>
		<div class="entry_image">
			<?php
				if ( has_post_thumbnail() )
				{
					the_post_thumbnail('full');
				}
			?>
		</div>
		<div class="entry_date">
			<?php echo get_the_date( 'F j, Y', $post->post_ID ); ?>
		</div>
		<p class="tags"><small><?php the_tags(); ?></small></p>
		<div class="entry_content">
			<?php the_excerpt(); ?>
		</div>
	</article>

<?php endwhile; ?>
<!-- End of the main loop -->

<!-- Add the pagination functions here. -->

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
	</div>
<?php get_footer(); ?>